# Running the Car Rental Portal

## Option 1: XAMPP / Apache

1. Copy the `carrental` folder into `C:\xampp\htdocs\`.
2. Start Apache and MySQL from XAMPP.
3. Create a database named `carrental`.
4. Import `SQL File/carrental.sql` into that database.
5. Open `http://localhost/carrental/`
6. Admin panel: `http://localhost/carrental/admin/`

If you copied the full extracted folder into `htdocs`, you can also open that folder directly and it will redirect into `/carrental/`.

Default credentials from the SQL dump:

- User login: `test@gmail.com` / `Test@123`
- Admin login: `admin` / `Test@12345`

## Option 2: Without XAMPP

This project can also run with PHP's built-in server.

1. Make sure MySQL is running.
2. Create a database named `carrental`.
3. Import `SQL File/carrental.sql`.
4. Set your database credentials in PowerShell if they are not the default:

```powershell
$env:DB_HOST="localhost"
$env:DB_PORT="3306"
$env:DB_NAME="carrental"
$env:DB_USER="root"
$env:DB_PASS="your_mysql_password"
```

5. Start the app:

```powershell
.\run-local.ps1
```

6. Open `http://127.0.0.1:8080/`

If the page shows a database connection error, update the environment variables to match your MySQL setup and run the script again.
