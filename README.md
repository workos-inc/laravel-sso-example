# php-sso-example
An example Laravel app demonstrating SSO with the [WorkOS Laravel SDK](https://github.com/workos-inc/workos-php-laravel).

## Dependencies
Composer - [Link](https://getcomposer.org/)

## Setup
1. Clone the repo and install the dependencies by running the following commands from the repo root:
    ```bash
    git clone git@github.com:workos-inc/laravel-sso-example
    composer i
    ```

1. Copy the contents of `.env.example` into `.env` and run `php artisan key:generate` so that the base configuration for Laravel is present.

1. The example app looks for the following environment variables, which you can update in `bootstrap/config/workos.php` or the `.env` file. :
    - WORKOS_API_KEY - The WorkOS Secret API key can be found [here](https://dashboard.workos.com/api-keys).
    - WORKOS_PROJECT_ID - The WorkOS Project ID is specific to SSO and can be found [here](https://dashboard.workos.com/sso/configuration).

    
1. Start the server by running: `php artisan serve`
1. After the server is running, navigate to the Laravel development server & add `/login`


## Misc 
If you’re interested to see how a route is built & the WorkOS Laravel SDK in action, you can check out: `app/routes/web.php`

