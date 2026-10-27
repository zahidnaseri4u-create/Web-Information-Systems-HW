
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reading List</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                My Reading List
            </a>

            <div class="d-flex align-items-center gap-3">
                <span class="text-white">
                    {{ auth()->user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-light btn-sm">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container py-5">

        <h1 class="h3 mb-4">Book Registration and Viewing</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Please correct the following errors:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm mb-5">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">Register a New Book</h2>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('books.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            maxlength="150"
                            value="{{ old('title') }}"
                            class="form-control @error('title') is-invalid @enderror"
                            required
                        >

                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input
                            type="text"
                            id="author"
                            name="author"
                            maxlength="100"
                            value="{{ old('author') }}"
                            class="form-control @error('author') is-invalid @enderror"
                            required
                        >

                        @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pages" class="form-label">Pages</label>
                        <input
                            type="number"
                            id="pages"
                            name="pages"
                            min="1"
                            max="10000"
                            step="1"
                            value="{{ old('pages') }}"
                            class="form-control @error('pages') is-invalid @enderror"
                            required
                        >

                        @error('pages')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Register Book
                    </button>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">My Books</h2>
            </div>

            <div class="card-body">
                @if ($books->isEmpty())
                    <p class="text-muted mb-0">
                        You haven't registered any books yet.
                    </p>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Pages</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->pages }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

    </main>

</body>
</html>
