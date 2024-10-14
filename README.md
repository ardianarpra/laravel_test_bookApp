Versi laravel 9.x.x

Cara menjalankan laravel :
- laravel dijalankan pada xampp

- membuat database book_app

- pada terminal run command "php artisan migrate" => untuk membuat table book

- pada terminal run command "php artisan db:seed --class=BookSeeder" => untuk memberi table book secara default

- run command "composer dump-autoload" karena ada penambahan file di composer.json

Endpoint berjalan pada : http://localhost:8000/api/book 