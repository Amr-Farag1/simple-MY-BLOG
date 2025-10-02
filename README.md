 HEAD
# Simple My Blog (Laravel Project)

## 📌 Project Description
This is a simple blog project built with Laravel framework.  
It allows users to:
- Create new posts
- View all posts
- Edit existing posts
- Delete posts

---

## ⚙️ Steps to Run the Project
1. Clone the repository:
   ```bash
   git clone https://github.com/Amr-Farag1/simple-MY-BLOG.git
Navigate to the project folder:

bash
Copy code
cd simple-MY-BLOG
Install dependencies:

bash
Copy code
composer install
Create .env file (copy from .env.example) and configure your database:

env
Copy code
DB_DATABASE=myblog
DB_USERNAME=root
DB_PASSWORD=
Import the SQL file (myblog.sql) into your database.

Run migrations and seed data if needed:

bash
Copy code
php artisan migrate
Start the local development server:

bash
Copy code
php artisan serve
Open the project in browser:

arduino
Copy code
http://127.0.0.1:8000
