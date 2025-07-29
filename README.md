# Inventaris Lab Elektronik

## Description

A **web-based system** for managing the electronic inventory of a laboratory. This project allows users to **add, view, edit, and delete** electronic items, with features such as **search, pagination, and validation**. It uses **Laravel 12** and **FluxUI** for the frontend.

---

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Features](#features)
- [Technologies](#technologies)
- [Contributing](#contributing)
- [License](#license)

---

## Installation

Follow these steps to set up the project on your local machine.

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/inventaris_lab_elektronik.git
cd inventaris_lab_elektronik
```

### 2. Install Dependencies

Make sure you have **PHP** and **Composer** installed. Run:

```bash
composer install
```

### 3. Set up the Environment

Copy the `.env.example` file to `.env` and configure your environment settings (e.g., database credentials):

```bash
cp .env.example .env
```

### 4. Generate the Application Key

```bash
php artisan key:generate
```

### 5. Migrate the Database

Run the migration to create the necessary tables:

```bash
php artisan migrate
```

### 6. Start the Development Server

```bash
php artisan serve
```

The application will be available at [http://localhost:8000](http://localhost:8000).

---

## Configuration

### Database Configuration

Open the `.env` file and configure your database settings:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

---

## Usage

After setting up the environment and migrating the database, you can access the application at [http://localhost:8000](http://localhost:8000).

The system allows users to:

- **Add** new electronic items.
- **Edit** existing items.
- **View** a list of items with pagination.
- **Search** for items by name or code.
- **Delete** items after confirmation.

---

## Features

- **CRUD Operations:** Add, view, edit, and delete electronic items.
- **Search:** Filter items by name or code.
- **Pagination:** Automatically paginate data when it exceeds 10 records.
- **Responsive Design:** Fully responsive UI built using FluxUI.

---

## Technologies

- **Laravel 12:** PHP framework for the backend.
- **FluxUI:** Frontend framework for a responsive and modern user interface.
- **MySQL:** Database to store the inventory data.

---
