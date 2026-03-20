# Laravel CRM

A full-stack CRM built with Laravel 11 featuring client management
and automated birthday email notifications.

## Features
- User authentication (Laravel Breeze)
- Client CRUD (Create, Read, Update, Delete)
- Automated birthday email system
- Laravel Scheduler (runs daily at 9 AM)
- Email testing with Mailtrap

## Tech Stack
Laravel 11 · PHP 8.2 · MySQL · Blade · Tailwind CSS

## Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Birthday Email Command
```bash
php artisan crm:send-birthday-emails
```

## Screenshot
![CRM Clients Page](screenshot.png)
