## Getting Started
1. Get composer: [Link](https://getcomposer.org/download/)
1. Run the following command from the repo root to install deps: `composer i`
1. Update the apiKey and projectId. That is currently being passed in through this file: `bootstrap/app.php`
1. Start the server by running: `php artisan serve`
1. Navigate to `/login`

## Misc stuff
if you’re interested to see what i had to do to get a route in and the sdk in action, you can check out: `routes/web.php`

composer.json is currently configured to grab the sdk from git and is also looking specifically at a branch. when grabbing it, it'll get the head of that branch. to ensure you have the latest, you can update your deps by running `composer u`# laravel-sso-example
