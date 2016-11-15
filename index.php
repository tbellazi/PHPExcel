<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Break Interview</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</head>
<body style="background-color: #d8d8d8; height: 100%;">

    <!-- the default navbar used on website -->
    <nav class="navbar navbar-inverse" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Break Interview</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="height: 87%; position: fixed; width: 100%;">
    	<div clas="row" style="height: 100%;">
	    	<div class="col-xs-6" style="border-right: 4px solid grey; height: 100%">
	    		<center><button type="button" class="btn btn-lg btn-primary" id="export">Export DB to Excel</button></center>
                <span id="export_result"></span>
	    	</div>
	    	<div class="col-xs-6" style="height: 100%;">
	    		<center><button type="button" class="btn btn-lg btn-primary" id="import">Import Excel to DB</button></center>
                <span id="import_result"></span>
	    	</div>    	
    	</div>
    </div>

</body>
</html>