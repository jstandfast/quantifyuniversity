<html>
<head>
  <meta name="viewport" content="with=device-width,initial-scale=1.0">
  <title>Univversity Registrion Site</title>
</head>
<style>
.navbar {
  overflow: hidden;
  background-color: #000000;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: left;
  padding: 10px 30px;
  text-decoration: none;
}
</style>


<body>
  <section class="header">  
    <div class="navbar"> 
  <a href="StudentHome.php"><img src="images/StudLog.png"></a>
    <a href="MasterSchdeule.php">Master Schdeule</a> 
    <a href="Advisors.php">Advisors</a>   
    <a href="CourseCatalog.php">Course Catalog</a> 
    <a href="Majors.php">Majors</a> 
    <a href="Deparment.php">Deparments</a> 
    <a href="Building.php">Buildings</a> 
    </div>
  </div>
</div>
<form>
      <input type="text" name="valuetosearch" placeholder="Value"><br><br>
      <input type="text" name="search" value="Filter"><br><br>
<table>
        <tr>  
          <th>MinorID</th>
          <th>DeptID</th>
          <th>Minor Name</th>
          <th>Minor Req</th>
        </tr>
 </table> 
</form>
<div class="container">

<?php
if(isset($_POST['variable']))
{


}
else{


}
fuction filterTable($query)
{
  
}

?>

   