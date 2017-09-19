<?php

namespace test\message;

use Illuminate\Support\ServiceProvider;
/**
* 
*/
class MessageServiceProvider extends ServiceProvider
{
	
	public function register(){
		$this->app->bind('todo', function($app){
			return new Todo;
		}); 

	}
	public function boot(){
		//Loading the routes file

		require __DIR__.'/Http/routes.php';
	}
}