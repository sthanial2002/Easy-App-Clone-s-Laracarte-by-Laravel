<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
class FirebaseController extends Controller
{
	public function index(){
		$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/projets-laravel-firebase-adminsdk-3ef6o-f0e0985a3f.json');
		$firebase 		  = (new Factory)
                        ->withServiceAccount($serviceAccount)
                        ->withDatabaseUri('https://projets-laravel.firebaseio.com')
                        ->create();
		$database 		= $firebase->getDatabase();
		$newPost 		  = $database
		                    ->getReference('blog/posts')
		                    ->push(['title' => 'Post title','body' => 'This should probably be longer.']);
		echo"<pre>";
		print_r($newPost->getvalue());
	}
}
?>
