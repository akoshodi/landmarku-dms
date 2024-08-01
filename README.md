
# Laravel Starterkit (CUIL)

## Introduction

This project is a starter kit based on Laravel and CoreUI, featuring LDAP-based authentication. It combines a set of robust features designed to kickstart any web application, whether it is intended for the Internet or an intranet. This starter kit provides a solid foundation with a modern user interface, advanced authentication mechanisms, and a modular architecture, making it an ideal choice for developers looking to build secure and scalable applications quickly and efficiently.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Running the Application](#running-the-application)
- [Running Tests](#running-tests)
- [Deployment](#deployment)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

Make sure you have the following installed:

- PHP >= 8.0
- php-ldap extension
- Composer
- Node.js & npm (for frontend assets)
- Laravel Installer (optional but recommended)
- MySQL or any other supported database

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/akoshodi/cuil-starterkit.git
    cd cuil-starterkit
    ```

2. **Install PHP dependencies:**
    ```bash
    composer install
    ```

3. **Install JavaScript dependencies:**
    ```bash
    npm install
    ```

## Configuration

1. **Copy the `.env.example` file to `.env`:**
    ```bash
    cp .env.example .env
    ```

2. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

3. **Set up environment variables:**

   Open the `.env` file and update the necessary settings, particularly the database configuration:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
   
    LDAP_CACHE=false
    LDAP_LOGGING=true
    LDAP_CONNECTION=default
    LDAP_HOST=your_ldap_host
    LDAP_USERNAME=your_ldap_username
    LDAP_PASSWORD=your_ldap_password
    LDAP_PORT=389
    LDAP_BASE_DN=your_ldap_basedn
    LDAP_TIMEOUT=5
    LDAP_SSL=false
    LDAP_TLS=false
    LDAP_SASL=false
    LDAP_PASSWORD_SYNC=true
    LDAP_LOGIN_FALLBACK=false
    ```

## Database Setup

1. **Run the database migrations:**
    ```bash
    php artisan migrate
    ```

2. **(Optional) Seed the database with sample data:**
    ```bash
    php artisan db:seed
    ```

## Running the Application

1. **Compile the frontend assets:**
    ```bash
    npm run dev
    ```

2. **Start the local development server:**
    ```bash
    php artisan serve
    ```

   Your application should now be running at `http://localhost:8000`.

## Running Tests

To run the test suite, use the following command:
    ```bash
    php artisan test
    ```

## Contributing

1. Fork the repository.
2. Create a new branch (git checkout -b feature/your-feature-name).
3. Commit your changes (git commit -m 'Add some feature').
4. Push to the branch (git push origin feature/your-feature-name).
5. Open a pull request.

## Security Vulnerabilities

If you discover a security vulnerability, please send an e-mail to Taylor Otwell via [oshodi.akinwale@lmu.edu.ng](oshodi.akinwale@lmu.edu.ng). All security vulnerabilities will be promptly addressed.

## License

This project is licensed under the MIT License. See the LICENSE file for more information.
