<?php

namespace test\message\Http;

use App\Http\Controllers\Controller;
/**
 * 
 */
 class MessageController extends Controller{ 

 	function getUserTodoList(){
 		return "This is my Message List From the Vendor folder";
 	}
} 