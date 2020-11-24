# FruitsCrudBackend

This is an API REST of fruits with Laravel and Laravel Passport to request Tokens on API calls. Frontend of the API is on carloso2103/Fruits_Crud_Frontend.

# Steps

1. composer install
2. Duplicate .env.example on .env and changge your data (db, URL of front (CORS), etc) .
3. php artisan key:generate
4. php artisan migrate --seed
5. php artisan passport:install and save ids and secrets on.
6. Create a user on your db.
7. On your server /oauth/autorize with this form data : client_id, redirect_uri, response_type:'code' and scope.
8. Create a passport client with: php artisan passport:client (Asign to the id of user created).
9. php artisan tinker
10. $user = App\User::find(1); $token = $user->createToken('Token Name')->accessToken; Copy the token.
11. On vendor/fruitcake/laravel-cors/config/cors add to paths and allowed_origins environment variables(URL and SECURE_URL).
12. On environment.ts of frontend after production:false, add API_URL:"your url" and token:"your token".
