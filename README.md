## The Laravel Admin 

This project is a fresh Installation that comes with Laravel user authentication and admin authentication, the admin authentication was made using a custom guard.

### Features
- User login, register, password reset and password.
- Admin login, register, dashboard.


### Installation Guide
To get the project up and running on your local machine, do the following. I assume you already know how to go about laravel, bower composer and npm, so i'll be brief.

- Clone Repository.
- Run composer install, to install dependencies.
- Edit the created .env file at the root of your project, to add database credentials, etc.

**Generate app key**
```
php artisan key:generate
```
- create your DB and run the migrations, and database seeders found in the migrations folder, using the commands below

**Run all migrations**
```
php artisan migrate 
```

**Launch project**
```
php artisan serve
```
- visit the site at localhost:8000




### Got issues?
Please note this project was written in 2018 and it's currently not being maintained , if you are currently facing any issue you can contact me via hello@biduwe.com for help.

**Cheer** 🎉
