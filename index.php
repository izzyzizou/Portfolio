<!doctype html>
<html>
<head>
	<title>Izzat</title>
<!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="shortcut icon" type="image/png" href="blue-home-icon.png"/>
<!--<script href="/dist/js/bootstrap.min.js"></script>-->
<!--<link rel="stylesheet" href="/dist/css/bootstrap.min.css"/>-->
<link rel="stylesheet" type="text/css" href="main.css"/>
<style>
</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
<div class="container">
	<a href="#" class="navbar-brand">Izzat</a>
	<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	<div class = "collapse navbar-collapse navHeaderCollapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Skills</a></li>
			<li><a href="#">Experience</a></li>
			<li><a href="#">Nationality</a></li>
		</ul>
	</div>
</div>
</div>

<div id="container">
	<div id="header">
		<h1>Web.io</h1>
	</div>
	<div id="content">
		<div id="main">
		<h1>Portfolio</h1>
			<p>Testing the website through the apache server which is using the <b>UBUNTU</b> server.</p>
		<table class="table table-hover">
			<thead>
				<tr>
				<th>#</th>
				<th>FirstName</th>
				</tr>

			</thead>
			<tbody>
				<tr>
				<td>1</td>
				<td>Izzat</td>
			</tbody>
		</table>
		<form id="contact" action="process.php" method="post">
			<h2>Contact</h2>
			<label for="name">Name</label>
			<input name="name" id="name"/>

			<label for="email">Email</label>
			<input name="email" type="email" id="email"/>
			
			<input type="submit"/>
		</form>
		

		</div>
		<div id="nav">
			<ul>	
				<li id="selected"><a href="index.html">Home</a></li>
				<li><a href="info.html">More Information</a></li>
			</ul>
			<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropdown<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#">HTML</a></li></ul></div>
		<?php for($i=1;$i<=5;$i++){echo "Test: " . $i;}?>
		</div>
	</div>
	<div id="footer">
		<p>Copyright &copy; 2015</p>
	</div>

</div>



</body>
</html>
