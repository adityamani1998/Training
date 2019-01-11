<!DOCTYPE html>

<html lang="en">

<head>

  <title>Dashboard</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>


<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">

      <a class="navbar-brand" href="./">ToDo</a>

    </div>
    <ul class="nav navbar-nav">

      <li class="active"><a href="./">Home</a></li>

      <li><a href="add.php">Add</a></li>

    </ul>

  </div>

</nav>

  
<div class="container">


<form action="/add.do.php" method="post">

  <div class="form-group">

    <label for="name">Task Name</label>

    <input type="text" class="form-control" id="name">

  </div>

  <div class="form-group">

    <label for="description">Description</label>

    <input type="text" class="form-control" id="description">

  </div>


  <div class="form-group">

    <label for="starttime">Start At</label>

    <input type="date" class="form-control" id="starttime">

  </div>

  <div class="form-group">

    <label for="stoptime">Stop At</label>

    <input type="date" class="form-control" id="stoptime">

  </div>


  

  <div class="form-group">

    <label for="location">Location</label>

    <input type="text" class="form-control" id="location">

  </div>

  
  <button type="submit" class="btn btn-default">Submit</button>

</form>

<?php
 //$sql = "INSERT INTO `tasks` (`task_id`, `name`, `description`, `starttime`, `stoptime`, `location`, `status`) VALUES (\'5\n". "\', \'untitled task\', \'abc\', \'2019-01-03\', \'2019-01-17\', \'home\', \'0\')";
`
?>
	
</div>                                                                                                             
</body>

</html>
