<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## About Laravel
- [Simple, fast routing engine](https://laravel.com/docs/routing).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- *[Tighten Co.](https://tighten.co)*

## Contributing
Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




01. Our pacage's entry point is src/providers/TodoPackageServiceProvider


How to Use
================
1. ```add / register TodoPackageServiceProvider in the bootstrap/providers.php of the main project```

2. run migration command to migrate todos table



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


<!-- Rout to Test -->
```http://127.0.0.1:8000/todos```
