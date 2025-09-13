# APRS Callsign Laravel CRUD

A Laravel application for managing APRS callsigns with user tracking.

## Features

- User authentication (tracks which user creates each callsign)
- CRUD operations for callsigns
- Laravel 10+ compatible

## Requirements

- PHP 8.1 or newer
- Composer
- MySQL or compatible database

## Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/KunalGautam/aprs-crud-laravel.git
   cd aprs-crud-laravel
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Copy the environment file and set your credentials:**
   ```bash
   cp .env.example .env
   ```
   Edit `.env` and set your database credentials.

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations:**
   ```bash
   php artisan migrate
   ```

6. **Run the development server:**
   ```bash
   php artisan serve
   ```

7. **Access the app:**
   Open [http://localhost:8000](http://localhost:8000) in your browser.

## Testing

To run the test suite:

```bash
php artisan test
```

## License

MIT
