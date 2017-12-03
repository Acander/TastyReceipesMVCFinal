<?php 
	require 'resources/fragments/init.php';
	
	use Functionality\Controller\Controller;
	
	use Functionality\Util\InputFiltering;
	
		if(!isset($_POST['submit'])){
			return;
		}
		
		if(InputFiltering::commentInputFiltering($_POST["uid"])){
			header("Location: ../TastyRecepies/index.php");
			exit();
		}
		else if(InputFiltering::commentInputFiltering($_POST["date"])){
			header("Location: ../TastyRecepies/index.php");
			exit();
		}
		else if(InputFiltering::commentInputFiltering($_POST["message"])){
			header("Location: ../TastyRecepies/index.php");
			exit();
		}
		else if(InputFiltering::commentInputFiltering($_POST["food"])){
			header("Location: ../TastyRecepies/index.php");
			exit();
		}
			
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		$food = $_POST['food'];
		
		$contr = Controller::getController();
		$contr->addANewComment($uid, $message, $date, $food);
		
		header("Location: ../TastyRecepies/resources/views/$food.php");
		exit();
		
		

	
?>