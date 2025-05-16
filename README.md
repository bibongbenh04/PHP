

## Setup

Để bắt đầu với hệ thống Quản lý Bệnh viện, thực hiện các bước sau:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/bibongbenh04/PHP.git
    cd PHP
    ```

2. **Install PHP dependencies:**
    ```bash
    composer install
    ```

3. **Install Node.js dependencies:**
    ```bash
    npm install
    ```

4. **Compile assets:**
    ```bash
    npm run dev
    ```

5. **Copy the `.env.example` file to `.env` and configure the environment variables:**
    ```bash
    cp .env.example .env
    ```

6. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

7. **Set up the database:**
    - Create a database in your MySQL server.
    - Update the `.env` file with your database credentials.

8. **Run migrations and seed the database:**
    ```bash
    php artisan migrate --seed
    ```

9. **Serve the application:**
    ```bash
    php artisan serve
    ```

10. **Access the application:**
    Open your browser and go to `http://localhost:8000`.

## Usage

### Admin Dashboard

- **Login as Admin:** Use the default admin credentials provided in the database seeder or create a new admin user.
- **Manage Users:** Create and manage users with different roles (Doctor, Nurse, Receptionist).
- **View Reports:** Access detailed reports on patient admissions, doctor performance, inventory usage, etc.

### Doctor and Nurse Dashboard

- **View Schedule:** Check daily, weekly, or monthly schedules.
- **Manage Appointments:** View and manage patient appointments.
- **Patient Records:** Access patient medical history and treatment plans.

### Receptionist Dashboard

- **Schedule Appointments:** Book and manage patient appointments.
- **Patient Registration:** Register new patients and update existing patient information.
