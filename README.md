<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## About 
- [Laravel 11 project](https://laravel.com/docs/routing).
- To do package [migrations](https://laravel.com/docs/migrations).


### Packages List

- **[Laravel Todo Package](https://vehikl.com/)**
- *[Tighten Co.](https://tighten.co)*

## About Package

This package is developed based on laravel 11 and php 8.2.The package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Entry Point

```Our pacage's entry point is src/providers/TodoPackageServiceProvider```


## How to Use
================
1. ```Register TodoPackageServiceProvider in the bootstrap/providers.php of the main project```

2. Run ```php artisan migrate``` to migrate todos table


<!--  -->
### Load view
<!-- load route from main package -->
```$this->loadViewsFrom(__DIR__.'/../Resources/views', 'todopackage');```

Here we have loaded all views as ```todopackage```. so think we have a file 
into our package in Resources/views/todos/index.blade.php. we can access this file from our main project using

    ``` return view('todopackage::todos.index'); ```.

 ```
    Resources/views/todos/test/index.blade.php by 
    return view('todopackage::todos.test.index');
   ```


<!-- Rout to Test -->
``` http://127.0.0.1:8000/todos
```


### Readme md syntax

