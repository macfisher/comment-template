<!-- app/views/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel and Angular Commnet System</title>
	
	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	
	<style>
		body { padding-top: 30px; }
		form { padding-bottom: 20px; }
		.comment { padding-bottom: 20px; }
	</style>
	
	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
	
	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
	<script src="js/controllers/mainCtrl.js"></script>
	<script src="js/services/commentService.js"></script>
	<script src="js/app.js"></script>
</head>

<!-- declare angular app and controller -->
<body class="container" ng-app="commentApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">
	
	<!-- PAGE TITLE -->
	<div class="page-header">
		<h2>Laravel and Angular Single Page Application</h2>
		<h4>Commenting System</h4>
	</div>
	
	<!-- NEW COMMENT FORM -->
	
</div>
</body>

</html>
