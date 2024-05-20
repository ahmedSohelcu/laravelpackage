01. Our pacage's entry point is src/providers/TodoPackageServiceProvider


How to Use
================
1. ```add / register TodoPackageServiceProvider in the bootstrap/providers.php of the main project```

2. run migration command to migrate todos table

### Publish views to modify
    after publishing views your can modify content from ```resource/views/todocrud folder of your project```

3. ## Publish the config
    php artisan vendor:publish --tag=config


4. ## Publish the views
    php artisan vendor:publish --tag=views

<!--  -->
``Load view``
<!-- load route from main package -->
```$this->loadViewsFrom(__DIR__.'/../Resources/views', 'todopackage');```

Here we have loaded all views as todopackage. so think we have a file 
into our package in Resources/views/todos/index.blade.php. we can access this file from our main project using
    ```return view('todopackage::todos.index');```

    ```
    Resources/views/todos/test/index.blade.php by 
    return view('todopackage::todos.test.index');
     ``

## Rout to Test 
```http://127.0.0.1:8000/todo-list```
- [Laravel 11 project](https://laravel.com/docs/routing).
- To do package [migrations](https://laravel.com/docs/migrations).



### To install
```composer require ahmed/todocrud```


