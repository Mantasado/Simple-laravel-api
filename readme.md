# Simple API application

Simple API application to store user information.

## Installation

Clone repository.

Run composer and artisan to start a local server

```bash
composer install

php artisan serve
```

## Usage

1. To make a POST request with token. Recommended to use [Postman](https://www.postman.com/)
2. If using postman add "Accept:application/json" to Headers.
3. Select POST method and insert http://127.0.0.1:8000/api/users url.
4. Add param keys. "token", "first_name" and "last_name" (Token can be found in app/Http/Middleware/ApiAuthorization.php)
5. Make a request
