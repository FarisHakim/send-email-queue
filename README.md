## Sending Email Using Queue

This system using laravel for sending email with queue and get api from https://nationalize.io/ and https://agify.io/ then insert into postgree database, this is file and account mailtrap for run this application:

-   Account mailtrap :
    email : farizflaz@gmail.com
    password : tes1234567890
-   Using .env.example for all configuration(only modify your db connection) and change it into .env

### Installation

1. Clone the repo
    ```sh
    git clone https://github.com/FarisHakim/send-email-queue.git
    ```
2. Buka folder repo
    ```sh
    cd send-email-queue/
    ```
3. Install Composer
    ```sh
    composer install
    ```
4. Change `.env.example` to `.env` for using configuration and modify your db connection
5. Generate key

```sh
php artisan key:generate
```

6. Change `.env.example` to `.env`
7. Create database name `sendemail`
8. Create table in postgree db using migrate and create dummy data using seed
    ```sh
    php artisan migrate --seed
    ```
9. Running queue `php artisan queue:work`
10. Open 'http://127.168.1.1/send-email-queue/public/sendemail'
11. Login into `https://mailtrap.io/` using account mailtrap that i mentioned before
12. Open myinbox and sending message will appear
