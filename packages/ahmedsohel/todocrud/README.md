## Laravel todo crud

## Install
    composer require ahmedsohel/laravel-todocrud


## Add Provider (Optional)

Add the provider in boostrap/provider.php into your project

    Ahmed\Todocrud\TodoPackageServiceProvider::class

## Publish views to modify (Optional)
    after publishing views your can modify from ```resource/views/todocrud folder of your project```

## Publish the config (Optional)
    php artisan vendor:publish --tag=config


## Publish the views (Optional)
    php artisan vendor:publish --tag=views


How to Use
===============

Run migration command to migrate todos table


## Command to run
   php artisan serve

## Route to get todos list
   http://127.0.0.1:8000/todo-list


