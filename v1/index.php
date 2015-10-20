<?php	
	//require 'vendor/slim/slim/Slim/Slim.php';	
	require ("../vendor/autoload.php");
	require ("../app/models/Book.php");		
	require ("../app/include/DbConnectSlim.php");
	
	\Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim();
	$app->get('/hello/:name', function ($name) {
		echo "Hello, " . $name;
	});
	
	$app->get('/books', function () {
		// Fetch all books
		$books = Book::all();
		echo $books->toJson();

		/// Or create a new book
		$book = new \Book(array(
			'title' => 'C#',
			'author' => 'Microsoft'
		));
		$book->save();
		echo $book->toJson();
		
	});
	$app->run();
?>