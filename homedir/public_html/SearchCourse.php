<html>
    <head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0">
        <title>Quantify University</title>
        <link rel="stylesheet" href="style3.css">
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
            <a href="index.html"><img src="images/StudLog.png"></a>
            <a href="AdminHomePage.php">Admin</a> 
            <a href="MasterSchdeule.php">Master Schdeule</a> 
            <a href="Advisors.php">Advisors</a>   
            <a href="CourseCatalog.php">Course Catalog</a> 
            <a href="AdminMajors.php">Majors</a> 
            <a href="AdminMinor.php">Minors</a> 
            <a href="AdminViewDepartments.php">Deparments</a> 
            <a href="Adminviewbuildings.php">Buildings</a> 
        </div>
        
        <div class = "container text-center">
            <h2>Search Users</h2>
        </div>
        
        <div class='content'>
        
            <p><a href="Academics.php" ><img src="images/BackToUsers.png" style="width:200px;height:200px;"></a></p>
	        
    		<form action="Admincoursefound.php" method="post">
                <p><label for='searchtype'>Search by: </label>
                <select id='searchtype' name='searchtype'>
                    <option value='CourseID'>CourseID</option>
                    <option value='CourseName'>Course Name</option>
                    <option value='DeptID'>Department</option>
                </select> 
    			<p>Search: <input type="text" name="search">
    			<p><input type="submit">
			</form>
        
    	</div>
	</body>
</html>