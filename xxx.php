<?php
    include("db.php"); //import mysql connection

?>
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

`
 <table class="table">
    <thead>
        <th>Task_id</th>
        <th>start at</th>
        <th>stop at</th>
        <th>location</th>
    </thead>
    <tbody> 
            
  
<?php

//$arr=ARRAY("abc","def","ghi");
//$arr=ARRAY("name"=>"Aman","Location"=>"Allahabad","Type"=>"Student","Age"=>20);
//print_r($arr);

//foreach($arr as $key=>$value){
//echo"$key:$value";
//echo"<br>";}

//print_r($conn);

$sql="SELECT * FROM tasks";
$query=mysqli_query($conn, $sql);

//print_r($query);

if(mysqli_num_rows($query)==0){                                          //]to show no. of rowsin the table
echo"no result found";
}                         
else{
while($row=mysqli_fetch_assoc($query)){
echo "<tr>";
  
           echo"<td>".$row["name"]."</td>";
           echo"<td>".$row["starttime"]."</td>";
           echo"<td>".$row["stoptime"]."</td>";
           echo"<td>".$row["location"]."</td>";
  echo"</tr>";
     }
  }

?>

 </tbody>
  </table>

	
</div>                                                                                                             
</body>

</html>
