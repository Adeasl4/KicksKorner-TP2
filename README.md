Link Original TP1 Repository: https://github.com/CoderMustafa1/kickskorner/tree/main

## How to run and use our code:

1. Clone the repo

```
git clone --branch master https://github.com/Adeasl4/KicksKorner-TP2.git
```

2. Install Composer packages and enable the required extensions within the php folder (You might have PHP from Xampp or just PHP) and in there find the php.ini/php file, edit as notepad and enable sqlite extension by removing the ";" from extension=pdo_sqlite & extension=sqlite3 :

```
composer install
```

3. Copy the env file and edit it appropriately

```
cp .env.example .env
```

4. Ensure that the DB_CONNECTION in your .env file is set to sqlite.

   Create an empty database file, do this manually or you can run (below command is for windows OS)

```
type nul > \database\database.sqlite
```

 Before you run ```composer install``` in your IDE terminal make sure you run the above command or you will into an error, if done correctly it will create a database.sqlite file in the database folder and then you can ```composer install```

5. Run

   ```
   php artisan migrate
   ```
6.Then run
  ```
  php artisan db:seed
  ```

7.  Serve the website (For the registration/dashboard page you will have to ```npm run dev``` in the terminal, you might also have to run ```npm run update``` before running ```npm run dev``` make sure you are in the right directory when doing this)
    ```
    php artisan serve
    ```
