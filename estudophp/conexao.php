<?php


try{
	$conn = new \PDO("mysql:host=localhost;dbname=teste","root","root");
	
	
} catch(\PDOException $e) {
	echo "Error! Message:".$e -> getMessage(). "code:". $e->getCode();
	
}








?>