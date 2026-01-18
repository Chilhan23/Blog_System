# Blog System

A modern, lightweight blog management system built with Laravel 12 and Tailwind CSS.

## Features

- **Laravel 12**: Utilizing the latest PHP framework features for robust backend logic.
- **Tailwind CSS 4**: Styled with the latest utility-first CSS framework for a clean and responsive UI.
- **Flowbite Integration**: Enhanced with interactive UI components for better user experience.
- **Vite**: Fast asset bundling and Hot Module Replacement (HMR).
- **Development Ready**: Pre-configured scripts for easy setup and local development.

## Tech Stack

- **Framework**: Laravel 12.x
- **Language**: PHP 8.2+
- **Frontend**: Tailwind CSS 4, Flowbite, Vite
- **Database**: SQLite (default)

## Installation Guide

Follow these steps to set up the project locally:

### 1. Prerequisites
Ensure you have the following installed:
- PHP >= 8.2
- Composer
- Node.js & NPM

### 2. Clone the Repository
```bash
git clone [https://github.com/your-username/blog_system.git](https://github.com/your-username/blog_system.git)
cd blog_system

3. Install Dependencies
composer install
Install frontend dependencies:
npm install

4. Environment Configuration
Copy the example environment file:
cp .env.example .env

5. Application Setup
Run the automated setup script to generate keys, migrate the database, and build assets:
composer run setup

6. Local Development
Start the development server (runs Artisan and Vite concurrently):
composer run dev

The application will be accessible at http://localhost:8000.

7.Testing
Run the test suite using the following command:
composer run test
