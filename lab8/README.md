# Laravel 12 IT Student Portal (Auth + Books + Courses)

These files are an OVERLAY for a fresh Laravel 12 project (no vendor/node_modules included).

## Setup
1. composer create-project laravel/laravel it-portal "^12.0"
2. Copy everything from this zip into the project folder (accept overwrite of routes/web.php).
3. Start XAMPP MySQL, create an empty database `it_portal` in phpMyAdmin.
4. Edit .env:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=it_portal
   DB_USERNAME=root
   DB_PASSWORD=
   SESSION_DRIVER=file
5. php artisan config:clear
   php artisan migrate
   php artisan serve
6. Open http://127.0.0.1:8000  (register, then log in)

No npm build is needed: Bootstrap loads from a CDN and the course page uses public/css/dashboard.css.

## Pages
- /register, /login, POST /logout         (auth lab)
- /dashboard  -> BookController::index    (books lab, Bootstrap; route names dashboard, books.store)
- /courses    -> CourseController         (course lab: register / view / edit / delete)
