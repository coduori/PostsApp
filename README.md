<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation Instructions.
 
This project was created using the following versions of Composer and Laravel:
Composer: 2.1.6
Laravel: 8.61.0

clone the application from github:
### Step 1:
Ensure you have installed the latest version of composer, laravel and MySQL database. If you dont know how to this a clear documentation can be found at their respective websites.
### Step 2:
clone the application from github
### Step 3:
from the terminal locate the project directory and run "composer install"
### Step 4:
Copy .env.example file to .env on the root folder.
### Step 5:
Open your .env file and change the following database credentials to match your configurations:
#### DB_HOST
#### DB_PORT
if hosted locally, the HOST and PORT can remain as they are
#### DB_DATABASE
This is the database name where the data of the system will be hosted
#### DB_USERNAME
This is the username used to gain access to the database created for this system
#### DB_PASSWORD
This is the password used to gain access to the database created for this system

### Step 5:
Run php artisan key:generate
### Step 6:
Run php artisan migrate
### Step 7:
Run php artisan serve
### Step 8:
Go to localhost:8000

