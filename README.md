# Car Rental Portal Using PHP and MySQL

A PHP and MySQL based car rental portal with user booking flow and admin management panel.

## Features

- User registration and login
- Car listing and vehicle details pages
- Car booking flow
- Booking history and invoice view
- Return request option for users
- Return approval option for admin
- Admin vehicle, brand, booking, testimonial, and page management

## Tech Stack

- PHP
- MySQL
- Bootstrap
- jQuery

## Project Structure

- `carrental/` - main application
- `carrental/admin/` - admin panel
- `SQL File/carrental.sql` - database import file
- `run-local.ps1` - quick local startup script
- `RUNNING.md` - local setup notes

## Local Setup

1. Create a MySQL database named `carrental`.
2. Import `SQL File/carrental.sql`.
3. Set your database environment variables if needed:

```powershell
$env:DB_HOST="localhost"
$env:DB_PORT="3306"
$env:DB_NAME="carrental"
$env:DB_USER="root"
$env:DB_PASS="your_mysql_password"
```

4. Start the project:

```powershell
php -S 127.0.0.1:8080 -t .\carrental
```

5. Open:

- `http://127.0.0.1:8080/`
- `http://127.0.0.1:8080/admin/`

## Default Login

### User

- Email: `test@gmail.com`
- Password: `Test@123`

### Admin

- Username: `admin`
- Password: `Test@12345`

## Return Flow

- A logged-in user can request a vehicle return from `My Booking`
- Admin can accept the return request from the booking management section

## Notes

- This project was updated to support configurable database credentials through environment variables.
- A redirect `index.php` was added at the project root for easier local access when serving the outer folder.
- Screenshots can be added later to this README.
