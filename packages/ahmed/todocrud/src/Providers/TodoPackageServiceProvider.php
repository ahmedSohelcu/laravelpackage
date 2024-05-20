<?php

namespace Ahmed\Todocrud\Providers;

use Illuminate\Support\ServiceProvider;

class TodoPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    // public function register(): void
    // {
    //     //
    // }

	public function register()
    {
        // Merge package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/todocrud.php', 'todopackage');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    { 
	 	// Load routes, views, etc. for web requests
		// $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'todolist');
		//register routes
		$this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
		//register routes
		$this->loadRoutesFrom(__DIR__.'/../Routes/api.php');
		
		//load views
		$this->loadViewsFrom(__DIR__.'/../Resources/views', 'todopackage');
			
		//load migration
		$this->loadMigrationsFrom(__DIR__.'/../database/migrations');


        
		// Register console commands only when running in console
		if ($this->app->runningInConsole()) {		

			// Publish configuration file
            $this->publishes([
                __DIR__.'/../config/todopackage.php' => config_path('todopackage.php'),
            ], 'config');

			// Publishing the views.		
			$this->publishes([
                __DIR__.'/../Resources/views' => resource_path('views/vendor/todopackage'),
            ], 'views');

			//or
			// $this->publishes([
			// 	__DIR__.'/../views' => base_path('resources/views/prakash/todolist'),
			// ], 'views');

			// Publishing assets.
			/*$this->publishes([
				__DIR__.'/../resources/assets' => public_path('vendor/todolist'),
			], 'assets');*/

			// Publishing the translation files.
			/*$this->publishes([
				__DIR__.'/../resources/lang' => resource_path('lang/vendor/todolist'),
			], 'lang');*/


			// Publish configuration, migrations, etc.
			// $this->publishes([
			// 	__DIR__.'/config/todopackage.php' => config_path('todopackage.php'),
			// ], 'config');

			// $this->publishes([
			// 	__DIR__.'/database/migrations/' => database_path('migrations'),
			// ], 'migrations');

			// Registering package commands.
			// $this->commands([]);
		}
	}
}










// <?php
// 	namespace Prakash\Todolist\Providers;

// 	use Illuminate\Support\ServiceProvider;
// 	use Prakash\Todolist\Models\Task;
// 	class TodolistServiceProvider extends ServiceProvider
// 	{
		/**
		* Bootstrap the application services.
		*
		// * @return void
		*/
		// public function boot()
		// {

		// 	/*
		// 	* Optional methods to load your package assets
		// 	*/
		// 	// $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'todolist');
		// 	$this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
		// 	$this->loadMigrationsFrom(__DIR__.'/../migrations');
		// 	$this->loadViewsFrom(__DIR__.'/../views', 'todolist');

		// 	if ($this->app->runningInConsole()) {
		// 		$this->publishes([
		// 			__DIR__.'/../views' => base_path('resources/views/prakash/todolist'),
		// 		], 'views');
		// 		$this->publishes([
		// 			__DIR__.'/../../config/config.php' => config_path('task.php'),
		// 		], 'config');

				// Publishing the views.
				/*$this->publishes([
					__DIR__.'/../resources/views' => resource_path('views/vendor/todolist'),
				], 'views');*/

				// Publishing assets.
				/*$this->publishes([
					__DIR__.'/../resources/assets' => public_path('vendor/todolist'),
				], 'assets');*/

				// Publishing the translation files.
				/*$this->publishes([
					__DIR__.'/../resources/lang' => resource_path('lang/vendor/todolist'),
				], 'lang');*/

				// Registering package commands.
				// $this->commands([]);
		// 	}
		// }

		/**
		* Register the application services.
		*
		// * @return void
		*/
	// 	public function register()
	// 	{
	// 		$this->app->make('Prakash\Todolist\Controllers\TodolistController');
	// 		// Automatically apply the package configuration
	// 		$this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'todolist');

	// 		// Register the main class to use with the facade
	// 		$this->app->singleton('task', function () {
	// 			return new Task;
	// 		});
	// 		// $this->app->bind('task', function () {
	// 		//     return new Task();
	// 		// });
	// 	}
	// } 