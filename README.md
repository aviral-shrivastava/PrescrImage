# PrescrImage

**PrescrImage** is a web application designed to store and manage prescriptions for users. It provides a secure login system for users to upload, view, and manage their medical prescriptions.
The application is built using PHP, HTML, CSS, and JavaScript, and it utilizes phpMyAdmin for database management.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Database Setup](#database-setup)

## Features

- User authentication (login and registration)
- Secure prescription upload and storage
- User-friendly interface for managing prescriptions
- Responsive design for accessibility on various devices

## Technologies Used

- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL (managed via phpMyAdmin)
- **Other**: Bootstrap (for responsive design)


### Prerequisites

- Web server (e.g., Apache)
- PHP installed on your server
- MySQL server and phpMyAdmin
- Git (optional, for cloning the repository)

### Steps

1. Clone the repository (or download the ZIP file):
    ```bash
    git clone https://github.com/aviral-shrivastava/PrescrImage
    ```
2. Navigate to the project directory:
    ```bash
    cd PrescrImage
    ```
3. Move the project files to your web server's root directory (e.g., `htdocs` for XAMPP, `www` for WAMP).
4. Create a database named `PrescrImage` using phpMyAdmin.
5. Import the `database.sql` file into the `prescrimage` database (this file should be in the project directory).
6. Update the database configuration in `config.php` file:
    ```php
    <?php
    $servername = "localhost";
    $username = "your-database-username";
    $password = "your-database-password";
    $dbname = "prescrimage";
    ?>
    ```
7. Start your web server and navigate to `http://localhost/PrescrImage` to view the application.

## Database Setup

1. Open phpMyAdmin and create a new database named `PrescrImage`.
2. Import the `database.sql` file into this database. This will create the necessary tables and fields for the application.


For any questions or suggestions, please contact [your-email@example.com](mailto:your-email@example.com).

---

**PrescrImage** is developed and maintained by [Your Name](https://github.com/your-username). Feel free to reach out for any further assistance.
