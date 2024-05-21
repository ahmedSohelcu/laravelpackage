## Laravel todo crud

## Install
    composer require ahmedsohel/laravel-todocrud


## Add Provider

Add the provider in boostrap/provider.php into your project

    Ahmed\Todocrud\Providers\TodoPackageServiceProvider::class

## Publish views to modify
    after publishing views your can modify from ```resource/views/todocrud folder of your project```

## Publish the config
    php artisan vendor:publish --tag=config


## Publish the views
    php artisan vendor:publish --tag=views


How to Use
===============

Run migration command to migrate todos table



## Command to run
   php artisan serve

## Route to get todos list
   http://127.0.0.1:8000/todo-list


