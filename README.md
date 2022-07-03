# REST API application - RENT A CAR

REST API application for managing and reserving cars from a fictive rent a
car company.

## Technologies
- Programing language: PHP
- Framework: Laravel 7.29

## Server Requirements

```
● PHP >= PHP >= 7.2.5
● MYSQL
● PDO PHP Extension
● JSON PHP Extension
● Fileinfo PHP Extension

```


## Installation

 Install Composer Dependencies

```bash
composer install
```


Create a copy of your .env file

```bash
cp .env.example .env

*insert your database information (DB_PORT; DB_DATABASE; DB_USERNAME;DB_PASSWORD)
```
*insert your database information (DB_PORT; DB_DATABASE; DB_USERNAME;DB_PASSWORD)



Generate an app encryption key

```bash
php artisan key:generate
```
Run database migrations

```bash
php artisan migrate
```

Managing and reserving cars from a fictive rent a
car company

Endpoints for creating, listing, updating, and deleting cars
API ENDPOINTS:
```
● CARS creating  //  APP_URL/api/car/store
● CARS listing  //  APP_URL/api/car/show
● CARS updating  //  APP_URL/api/car/update
● CARS deleting  //  APP_URL/api/car/delete
● CATEGORY creating //  APP_URL/api/category/store
● CATEGORY listing  //  APP_URL/api/category/show
● CATEGORY updating  //  APP_URL/api/category/update
● CATEGORY deleting  // APP_URL/api/category/delete



```
