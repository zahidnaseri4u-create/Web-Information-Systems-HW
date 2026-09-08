
<?php

$message = "";
$messageType = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = trim($_POST["full_name"]);
    $email = trim($_POST["email"]);
    $department = trim($_POST["department"]);
  
    $conn = new mysqli("localhost", "root", "", "wis_lab");

    if ($conn->connect_error) {

        $message = "Connection failed: " . $conn->connect_error;
        $messageType = "danger";

    } 
    else {

        if ($fullName == "" || $email == "" || $department == "") {

            $message = "All fields are required.";
            $messageType = "danger";

        }

        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $message = "Please enter a valid email address.";
            $messageType = "danger";

        } 
        else {

            $sql = "INSERT INTO students
                    (full_name, email, department)
                    VALUES (?, ?, ?)";

            $stmt = $conn->prepare($sql);

            $stmt->bind_param(
                "sss",
                $fullName,
                $email,
                $department
            );

            if ($stmt->execute()) {

                $message = "Student added successfully.";
                $messageType = "success";

            } 
            else {

                $message = "Error adding student: " . $stmt->error;
                $messageType = "danger";
            }

            $stmt->close();
        }

        $conn->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Add Student - WIS Lab</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">
                        Add Student
                    </h3>

                </div>

                <div class="card-body">

                    <?php if ($message != ""): ?>

                        <div class="alert alert-<?php echo $messageType; ?>">

                            <?php echo $message; ?>

                        </div>

                    <?php endif; ?>


                    <form method="POST">

                        <div class="mb-3">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input
                                type="text"
                                name="full_name"
                                class="form-control"
                                placeholder="Enter full name"
                                required>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Enter email"
                                required>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Department
                            </label>

                            <input
                                type="text"
                                name="department"
                                class="form-control"
                                placeholder="Enter department"
                                required>

                        </div>


                        <button
                            type="submit"
                            class="btn btn-primary">

                            Save Student

                        </button>


                        <button
                            type="reset"
                            class="btn btn-secondary">

                            Clear

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>
