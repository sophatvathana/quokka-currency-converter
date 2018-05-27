# quokka-currency-converter

My software engineer test

**Table of Contents** 

- [Screenshots](#screenshots)
- [Demo](#demo)
- [Features](#features)   
- [Deploying](#deploying)

# Screenshots

# Demo

See it in action at http://warm-ocean-21172.herokuapp.com/?amount=4000&from=KHR&to=USD

# Features 

* [x] Extensible
* [x] Auto add settings Admin
* [ ] Auto load
* [ ] Cache

# Deploying

## Deploy to Heroku

Click the button below to deploy a new instance of Startup Engine to Heroku instantly.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/sophatvathana/quokka-currency-converter.git)

Please reference Heroku's [official guide](https://devcenter.heroku.com/articles/getting-started-with-laravel) for getting started with Laravel apps on Heroku.

Once you've installed the [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli), run the following commands on your instance:

First, generate an `APP_KEY` by running: 

`php artisan key:generate`. 

Then copy the newly generated key and run:
 
`heroku config:set APP_KEY=YOURKEYGOESHERE` 

`heroku run php artisan migrate:refresh --seed --force`

You may log in by going to https://www.herokuapp.com/YOURAPPNAME/login

Admin: {URL}/admin
For user please create here {URL}/login

## Install Locally

See Laravel's [official installation guide](https://laravel.com/docs/5.6/installation) to get started with running Laravel apps locally.
 
Once you're familiar with Laravel, run

`composer install`

`npm install`

`php artisan key:generate`. 

Then copy the newly generated key and edit the value into your `.env` file. If you don't have an .env file, see `.env.example` for the required fields. 

Be sure you're running a [PostgreSQL](https://www.postgresql.org/) database, then run

`php artisan migrate:refresh --seed --force`

And finally, to view your installation in a browser, run

`php artisan serve`

Your app will be viewable at http://127.0.0.1:8000

You may log in by going to http://127.0.0.1:8000/login
