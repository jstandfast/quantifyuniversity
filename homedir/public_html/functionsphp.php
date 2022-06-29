<?php

function mysqlConnect()
{
 $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
    $port=3306;
    $socket="";
    $user="admin";
    $password="gupta2022";
    $dbname="quantify";

    $con = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $con;
}

function validateLogin($Email, $password)
{
    if ($Email == "") {
        $errorUsername = "Please enter your email";
        $error_username_css = "border:2px groove #CD2627";
    }
    else {
        $errorUsername = "";
        $error_username_css = "";
    }

    if ($password == "") {
        $errorPassword = "Please enter your password";
        $error_password_css = "border:2px groove #CD2627";
    }
    else {
        $errorPassword = "";
        $error_password_css = "";
    }

    return array(
        $errorUsername,
        $errorPassword,
        $error_username_css,
        $error_password_css
    );
}

function connectToHost(){
 $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
    $port=3306;
    $socket="";
    $user="admin";
    $password="gupta2022";
    $dbname="quantify";

    // Create connection
    $conn = new mysqli($host, $user, $password, $dbname, $port, $socket);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function runSQL($conn, $sql){
    $result = $conn->query($sql);
    return $result;
}

function getAllDepartments(){
    $conn = connectToHost();
    $sql = "SELECT DeptID, DeptName from department";
    $result = runSQL($conn,$sql);


    if(mysqli_num_rows($result) > 0){
        echo "<option disabled selected value> -- Select A Department -- </option>";
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row["DeptID"]."'>".$row["DeptName"]."</option>";
        }
    }else{
        echo "Failed:". mysqli_error($conn);
    }

    $conn->close();
}

function    makeSection(){
    echo "<div class='w3-panel'>";
    echo "<form class='w3-container' action = 'confirm_section.php' method = 'post'>
            <label class='w3-label w3-text-black w3-text-center'>Room</label>
            <select class='w3-select w3-border w3-center' name='room' required>";
            getAllRooms();
    echo  " </select>
            <label class='w3-label w3-text-black w3-text-center'>Semester:</label>
            <select class='w3-select w3-border w3-center' name='semester' required>";
            getAllSemesters();
    echo  " </select>
            <label class='w3-label w3-text-black w3-text-center'>Time Slot:</label>
            <select class='w3-select w3-border w3-center' name='timeslot' required>";
            getAllTimeslots();
    echo  " </select>
            <input value='".$_GET['id']."' name='course' type='hidden'>
            <div>
                <button class='w3-btn w3-brown w3-center' onclick ='return confirmAcion();'>Create</button>
                <a class='w3-btn w3-brown w3-center' href='admin_home.php'>cancel</a>
            </div>
          </form>";
    echo "</div>";
}

function getAllRooms($id = null){
    $conn = mysqlConnect();
    $sql = "SELECT room.RoomID, room.RoomUse, building.BuildingName from room inner join building on room.BuildingID = building.BuildingID";
    $result = runSQL($conn,$sql);


    if(mysqli_num_rows($result) > 0){
        echo "<option disabled selected value>  select an option  </option>";
        while($row = $result->fetch_assoc()) {
            if($id != null && $id = $row["RoomID"]){
                echo "<option value='".$row["RoomID"]."' selected>".$row["BuildingName"]." ".$row["RoomID"]."</option>";
            }else{
                echo "<option value='".$row["RoomID"]."'>".$row["BuildingName"]." ".$row["RoomID"]."</option>";
            }
        }
    }else{
        echo "Failed:". mysqli_error($conn);
    }

    $conn->close();
}

function getAllBuildings($id = null){
    $conn = connectToHost();
    $sql = "SELECT * FROM building";
    $result = runSQL($conn,$sql);


    if(mysqli_num_rows($result) > 0){
        echo "<option disabled selected value> -- select an option -- </option>";
        while($row = $result->fetch_assoc()) {
            if($id != null && $id == $row["BuildingID"] ){
                echo "<option value='".$row["BuildingID"]."' selected>".$row["BuildingName"]."</option>";
            }else{
                echo "<option value='".$row["BuildingID"]."'>".$row["BuildingName"]."</option>";
            }
        }
    }else{
        echo "Failed:". mysqli_error($conn);
    }

    $conn->close();
    }

function getAllSemesters($crsid = null){
    $conn = connectToHost();
    $sql = "SELECT SemesterID, SemesterName, SemesterYear from semester";
    $result = runSQL($conn,$sql);


    if(mysqli_num_rows($result) > 0){
        echo "<option disabled selected value> -- select an option -- </option>";
        while($row = $result->fetch_assoc()) {
            if($id == $row["SemesterID"] && $id != null){
                echo "<option value='".$row["SemesterID"]."' selected>".$row["SemesterID"].$row["SemesterName"]." </option>";
            }else{
                echo "<option value='".$row["SemesterID"]."'>".$row["SemesterID"]. $row["SemesterName"]."</option>";
            }
        }
    }else{
        echo "Failed:". mysqli_error($conn);
    }

    $conn->close();
}

function getAllFacultyNotMemb(){
    $conn = connectToHost();

    $sql  = "SELECT FirstName, LastName FROM user WHERE UserType = 'Faculty';";

    $result = runSQL($conn,$sql);

   if(mysqli_num_rows($result) > 0){
        echo "<option disabled selected value>  select an option  </option>";
        while($row = $result->fetch_assoc()) {
            if($id != null && $id = $row["LastName"]){
                echo "<option value='".$row["LastName"]."' selected>".$row["FirstName"]." ".$row["LastName"]."</option>";
            }else{
                echo "<option value='".$row["LastName"]."'>".$row["FirstName"]." ".$row["LastName"]."</option>";
            }
        }
    }else{
        echo "Failed:". mysqli_error($conn);
    }

    $conn->close();
}

function getsqlarray($con,$query) {
    
    $result = mysqli_query($con,$query) or die();
   
    $row=mysqli_fetch_row($result);
    
    return $row;
}

function generateCRN ($courseid,$section,$semesterid) {
    
    $courseidarray=str_split($courseid,2);
    
    $coursenum=$courseidarray[1] . $courseidarray[2];
    
    $courselettersconverted = convertLettersToNum($courseidarray[0]);
    
    $semesteridarray=str_split($semesterid,3);
    
    $semesternum=$semesteridarray[1];
    
    return $courselettersconverted . $coursenum . $section . $semesternum;
}
        
function convertLettersToNum ($letters) {
    
    $letterarray=str_split($letters,1);
    $convertedletter = "";
    
    for($i=0;$i<count($letterarray);$i++) {
        switch (strtoupper($letterarray[$i])) {
            case "A":
                $convertedletter .= "11";
                break;
            case "B":
                $convertedletter .= "12";
                break;
            case "C":
                $convertedletter .= "13";
                break;
            case "D":
                $convertedletter .= "14";
                break;
            case "E":
                $convertedletter .= "15";
                break;
            case "F":
                $convertedletter .= "16";
                break;
            case "G":
                $convertedletter .= "17";
                break;
            case "H":
                $convertedletter .= "18";
                break;
            case "I":
                $convertedletter .= "19";
                break;
            case "J":
                $convertedletter .= "20";
                break;
            case "K":
                $convertedletter .= "21";
                break;
            case "L":
                $convertedletter .= "22";
                break;
            case "M":
                $convertedletter .= "23";
                break;
            case "N":
                $convertedletter .= "24";
                break;
            case "O":
                $convertedletter .= "25";
                break;
            case "P":
                $convertedletter .= "26";
                break;
            case "Q":
                $convertedletter .= "27";
                break;
            case "R":
                $convertedletter .= "28";
                break;
            case "S":
                $convertedletter .= "29";
                break;
            case "T":
                $convertedletter .= "30";
                break;
            case "U":
                $convertedletter .= "31";
                break;
            case "V":
                $convertedletter .= "32";
                break;
            case "W":
                $convertedletter .= "33";
                break;
            case "X":
                $convertedletter .= "34";
                break;
            case "Y":
                $convertedletter .= "35";
                break;
            case "Z":
                $convertedletter .= "36";
                break;
                
        }
    }
    
    return $convertedletter;
    
}

function roomAvailable($con,$timeslotid,$roomid,$semesterid) {
    
    $query="SELECT TimeSlotID FROM course_section WHERE RoomID='$roomid' AND SemesterID='$semesterid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
    {
        
        if(timeslotOverlap($con,$timeslotid,$row[0])) {
            return false;
        }

    }
    
    return true;
}

function facultyAvailable($con,$timeslotid,$facultyid,$semesterid) {
    
    $query="SELECT TimeSlotID FROM course_section WHERE FacultyID='$facultyid' AND SemesterID='$semesterid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
    {
        
        if(timeslotOverlap($con,$timeslotid,$row[0])) {
            return false;
        }

    }
    
    return true;
    
}

function facultyMaxed ($con,$facultyid,$semesterid) {
    
    $facultydata = getFacultyData($con, $facultyid);
    
    $facultytype = $facultydata['FacultyType'];
    
    $query="SELECT * FROM course_section WHERE FacultyID='$facultyid' AND SemesterID='$semesterid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if(!strcmp($facultytype,"PT")) {
        
        if($count>=2) {
            return true;
        }
        
    } else {
        
        if($count>=4) {
            return true;
        }
    }
    
    return false;
}

function timeslotOverlap($con,$timeslotid1,$timeslotid2) {
    
    //check days first:
    $dayquery1="SELECT DayID FROM timeslot_day WHERE TimeSlotID='$timeslotid1'";
    $dayquery2="SELECT DayID FROM timeslot_day WHERE TimeSlotID='$timeslotid2'";
    $dayresult1=mysqli_query($con,$dayquery1) or die(mysql_error());
    $dayresult2=mysqli_query($con,$dayquery2) or die(mysql_error());
    
    for ($counter1=0;$row1=mysqli_fetch_row($dayresult1);++$counter1)
    {
        for ($counter2=0;$row2=mysqli_fetch_row($dayresult2);++$counter2)
        {
            if(!strcmp($row1[0],$row2[0])) {
                
                //check period next:
                $periodquery1="SELECT PeriodID FROM timeslot_period WHERE TimeSlotID='$timeslotid1'";
                $periodquery2="SELECT PeriodID FROM timeslot_period WHERE TimeSlotID='$timeslotid2'";
                $periodresult1=mysqli_query($con,$periodquery1) or die(mysql_error());
                $periodresult2=mysqli_query($con,$periodquery2) or die(mysql_error());
                
                
                for($counter3=0;$row3=mysqli_fetch_row($periodresult1);++$counter3) 
                {
                    for($counter4=0;$row4=mysqli_fetch_row($periodresult2);++$counter4) 
                    {
                    
                        if(!strcmp($row3[0],$row4[0])) {
                            return true;
                        }
                    
                    }
                    
                }
                
            }
            
    
        }
        

    }
    
    return false;
    
}

function getCourseSectionData ($con,$crn) {
    $query="SELECT * FROM course_section NATURAL JOIN course WHERE CRN='$crn';";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row;
}

function getCourseData ($con,$courseid) {
    
    $query="SELECT * FROM course NATURAL JOIN department WHERE CourseID='$courseid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row;
    
}

function getFacultyData ($con,$facultyid) {
    
    $query="SELECT * FROM faculty NATURAL JOIN user NATURAL JOIN faculty_dept NATURAL JOIN department WHERE UserID='$facultyid' AND FacultyID='$facultyid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    $row=mysqli_fetch_assoc($result);
    
    if($count>1) {
        for($i=0;$row2=mysqli_fetch_assoc($result);$i++) {
            
            $arbitrarynum=$i+1;
            
            $associativestr="AdditionalDept" . strval($arbitrarynum);
            
            $row[$associativestr] = $row2['DeptName'];
        }
    }
    
    return $row;
    
}

function getTimeSlotData ($con,$timeslotid) {
    
    $day = ""; //Array that will contain all days of the course section
            		        
    $retrievedays = "SELECT DayName FROM timeslot_day NATURAL JOIN day WHERE TimeSlotID='$timeslotid'";
    
    if ($dayinfo=mysqli_query($con,$retrievedays)) {
        for($counter=0;$dayrow=mysqli_fetch_row($dayinfo);$counter++) {
            if(!strcmp($dayrow[0],"Thursday")) {
                $day .= "R";
            } else {
                $day .= substr($dayrow[0],0,1);
            }
        }
       
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $starttime; //Start time of the course section - filled below
    $endtime; //End time of the course section - filled below
    
    $retrievetimes = "SELECT StartTime,EndTime FROM timeslot_period NATURAL JOIN period WHERE TimeSlotID='$timeslotid'";
    
    if ($timeinfo=mysqli_query($con,$retrievetimes)) {
        for($counterc=0;$timerow=mysqli_fetch_row($timeinfo);$counterc++) {
            
            $currentperiodstart = $timerow[0];
            
            if($counterc==0) {
                $starttime=$currentperiodstart;
            }
            
            if($starttime<=$currentperiodstart) {
                $endtime = $timerow[1];
            }
        }
       
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    return $day . " " . $starttime . " to " . $endtime;
}

function getRoomData ($con,$roomid) {
    
    $query="SELECT * FROM room NATURAL JOIN building WHERE RoomID='$roomid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    if(!strcmp($row['RoomUse'],LECTURE)) {
        
        $query = "SELECT * FROM room NATURAL JOIN lecture NATURAL JOIN building WHERE RoomID='$roomid'";
        
    } else if(!strcmp($row['RoomUse'],LAB)) {
        
        $query = "SELECT * FROM room NATURAL JOIN lab NATURAL JOIN building WHERE RoomID='$roomid'";
        
    } else if(!strcmp($row['RoomUse'],OFFICE)) {
        
        $query = "SELECT * FROM room NATURAL JOIN office NATURAL JOIN building WHERE RoomID='$roomid'";
        
    }
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row;
}

function getDepartmentData ($con,$deptid) {
    
    $query="SELECT * FROM department WHERE DeptID='$deptid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row;
}

function getSectionStudents ($con,$crn) {
    
    $studentarray;
    
    $query="SELECT StudentID FROM enrollment WHERE CRN='$crn'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
            $studentarray[$counter] = $row[0];
            
        }
        
        return $studentarray;
    } 
    
    $query="SELECT StudentID FROM student_history WHERE CRN='$crn'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
            $studentarray[$counter] = $row[0];
            
        }
        
        return $studentarray;
    }
    
    return NULL;
    
    
}

function getStudentData ($con,$studentid) {
    
    $query="SELECT * FROM ft_undergrad NATURAL JOIN user NATURAL JOIN student NATURAL JOIN undergrad_student NATURAL JOIN login WHERE StudentID='$studentid' AND UserID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count1 = mysqli_num_rows($result);
    
    $row;
    
    if($count1>0) {
        
        $row=mysqli_fetch_assoc($result);
        $row['DegreeType'] = "Undergraduate";
        
    }
    
    $query="SELECT * FROM pt_undergrad NATURAL JOIN user NATURAL JOIN student NATURAL JOIN undergrad_student NATURAL JOIN login WHERE StudentID='$studentid' AND UserID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count2 = mysqli_num_rows($result);
    
    if($count2>0) {
        
        $row=mysqli_fetch_assoc($result);
        $row['DegreeType'] = "Undergraduate";
        
    }
    
    $query="SELECT * FROM ft_grad NATURAL JOIN user NATURAL JOIN student NATURAL JOIN grad_student NATURAL JOIN login WHERE StudentID='$studentid' AND UserID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count3 = mysqli_num_rows($result);
    
    if($count3>0) {
        
        $row=mysqli_fetch_assoc($result);
        $row['DegreeType'] = "Graduate";
        
    }
    
    $query="SELECT * FROM pt_grad NATURAL JOIN user NATURAL JOIN student NATURAL JOIN grad_student NATURAL JOIN login WHERE StudentID='$studentid' AND UserID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count4 = mysqli_num_rows($result);
    
    if($count4>0) {
        
        $row=mysqli_fetch_assoc($result);
        $row['DegreeType'] = "Graduate";
        
    }
    
    return $row;
    
}

function getStudentGrade ($con,$studentid,$crn) {

    $query="SELECT Grade FROM student_history WHERE CRN='$crn' AND StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        $row=mysqli_fetch_row($result);
        
        return $row[0];
    } else
        return NULL;
    
}

function updateStudentGrade ($con,$studentid,$crn,$newgrade) {
    
    $query = "UPDATE student_history SET Grade='$newgrade' WHERE StudentID='$studentid' AND CRN='$crn'";
    
    if ($result=mysqli_query($con,$query)) {
        
        return true;
       
    } else {
        return false;
    }
    
}

function getSemesterData ($con,$semesterid) {
    
    $query="SELECT * FROM semester WHERE SemesterID='$semesterid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row;
    
}

function addStudentToSection ($con,$studenttoadd,$crn) {
    
    $crndata=getCourseSectionData($con,$crn);
    
    $semesterid=$crndata['SemesterID'];
    
    $semesterdata=getSemesterData($con,$semesterid);
    
    $registrationdate=$semesterdata['RegistrationDate'];
    
    $seatsavail=$crndata['Seats'];
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    if($todaysdate<$registrationdate) {
        
        $query="SELECT * FROM student WHERE StudentID='$studenttoadd'";
        
        $result=mysqli_query($con,$query) or die(mysql_error());
    
        $count = mysqli_num_rows($result);
        
        if($count>0) {
            
            $courseid=$crndata['CourseID'];
            
            $coursedata=getCourseData($con,$courseid);

            $courselevel=$coursedata['Level'];
            
            $studentdata=getStudentData($con,$studenttoadd);
            
            $studentlevel=$studentdata['DegreeType'];
            
            if(!strcmp($studentlevel,"Undergraduate")) {
                $studentlevel="UG";
            } else if(!strcmp($studentlevel,"Graduate")) {
                $studentlevel="G";
            }
            
            if(!strcmp($studentlevel,$courselevel)) {
                
                $timeslotid=$crndata['TimeSlot'];
                
                if(studentAvailable($con,$timeslotid,$studenttoadd,$semesterid)) {
                    
                    if(!studentMaxed($con,$studenttoadd,$semesterid)) {
                        
                        if(checkStudentPrereqs($con,$studenttoadd,$crn)) {
                            
                            if(!checkStudentHolds($con,$studenttoadd)) {
                                
                                if($seatsavail>0) {
                                    $query="INSERT INTO enrollment (StudentID,CRN,CourseID,SemesterID) VALUES ('$studenttoadd','$crn','$courseid','$semesterid')";
            
                                    $result=mysqli_query($con,$query) or die(mysql_error());
                            
                                    echo "<p>Student $studenttoadd added to course section!</p>";
                                } else {
                                    echo "<p>No more seats available.</p>";
                                }
                                
                            } else {
                                echo "<p>Student $studenttoadd has a hold that will prevent registration to the course section.</p>";
                            }
                            
                        } else {
                            echo "<p>Student $studenttoadd does not have the necessary prerequisites to add to the course section.</p>";
                        }
                        
                    } else {
                        echo "<p>Student $studenttoadd is taking too many classes to add to the course section.</p>";
                    }
                    
                } else {
                    
                    echo "<p>Student $studenttoadd is not available for this course section.</p>";
                }
                
                
                
            } else {
                echo "<p>Student $studenttoadd cannot be registered to a course in different degree type.</p>";
            }
            
        } else {
            echo "<p>Student $studenttoadd not found.</p>";
        }
        
        
    } else {
        
        echo "<p>Registration date has passed. Cannot add $studenttoadd to course section.</p>";
    }
    
}

function addStudentToSectionAsAdmin ($con,$studenttoadd,$crn) {
    
    $crndata=getCourseSectionData($con,$crn);
    
    $semesterid=$crndata['SemesterID'];
    
    $seatsavail=$crndata['Seats'];
    
    $semesterdata=getSemesterData($con,$semesterid);
    
    $query="SELECT * FROM student WHERE StudentID='$studenttoadd'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());

    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        $courseid=$crndata['CourseID'];
        
        $coursedata=getCourseData($con,$courseid);

        $courselevel=$coursedata['Level'];
        
        $studentdata=getStudentData($con,$studenttoadd);
        
        $studentlevel=$studentdata['DegreeType'];
        
        if(!strcmp($studentlevel,"Undergraduate")) {
            $studentlevel="UG";
        } else if(!strcmp($studentlevel,"Graduate")) {
            $studentlevel="G";
        }
        
        if(!strcmp($studentlevel,$courselevel)) {
            
            $timeslotid=$crndata['TimeSlotID'];
            
            if(studentAvailable($con,$timeslotid,$studenttoadd,$semesterid)) {
                
                if(!studentMaxed($con,$studenttoadd,$semesterid)) {
                    
                    if(checkStudentPrereqs($con,$studenttoadd,$crn)) {
                        
                        if(!studentRegisteredToCourseAlready($con,$studenttoadd,$crn)) {
                            
                            if($seatsavail>0) {
                            
                                $query="INSERT INTO enrollment (StudentID,CRN,CourseID,SemesterID) VALUES ('$studenttoadd','$crn','$courseid','$semesterid')";
        
                                $result=mysqli_query($con,$query) or die(mysql_error());
                        
                                echo "<p>Student $studenttoadd added to course section!</p>";
                                
                            } else {
                                echo "<p>No more seats available.</p>";
                            }
                            
                        } else {
                            echo "<p>Student $studenttoadd is already registered to that course.</p>";
                        }
                        
                    } else {
                        echo "<p>Student $studenttoadd does not have the necessary prerequisites to add to the course section.</p>";
                    }
                    
                } else {
                    echo "<p>Student $studenttoadd is taking too many classes to add to the course section.</p>";
                }
                
            } else {
                
                echo "<p>Student $studenttoadd is not available for this course section.</p>";
            }
            
        } else {
            echo "<p>Student $studenttoadd cannot be registered to a course in different degree type.</p>";
        }
        
    } else {
        echo "<p>Student $studenttoadd not found.</p>";
    }
        
    
}

function addStudentToSectionHistoryAsAdmin ($con,$studenttoadd,$crn,$grade) {
    
    $crndata=getCourseSectionData($con,$crn);
    
    $semesterid=$crndata['SemesterID'];
    
    $semesterdata=getSemesterData($con,$semesterid);
    
    $query="SELECT * FROM student WHERE StudentID='$studenttoadd'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());

    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        $courseid=$crndata['CourseID'];
        
        $coursedata=getCourseData($con,$courseid);

        $courselevel=$coursedata['Level'];
        
        $studentdata=getStudentData($con,$studenttoadd);
        
        $studentlevel=$studentdata['DegreeType'];
        
        if(!strcmp($studentlevel,"Undergraduate")) {
            $studentlevel="UG";
        } else if(!strcmp($studentlevel,"Graduate")) {
            $studentlevel="G";
        }
        
        if(!strcmp($studentlevel,$courselevel)) {
            
            $timeslotid=$crndata['TimeSlotID'];
            
            if(studentAvailable($con,$timeslotid,$studenttoadd,$semesterid)) {
                
                if(!studentMaxed($con,$studenttoadd,$semesterid)) {
                    
                    if(checkStudentPrereqs($con,$studenttoadd,$crn)) {
                        
                        if(!studentRegisteredToCourseAlready($con,$studenttoadd,$crn)) {
                            
                            $query="INSERT INTO student_history (StudentID,CRN,CourseID,Grade,SemesterID) VALUES ('$studenttoadd','$crn','$courseid','$grade','$semesterid')";
    
                            $result=mysqli_query($con,$query) or die(mysql_error());
                    
                            echo "<p>Student $studenttoadd added to course section!</p>";
                            
                        } else {
                            echo "<p>Student $studenttoadd is already registered to that course.</p>";
                        }
                        
                    } else {
                        echo "<p>Student $studenttoadd does not have the necessary prerequisites to add to the course section.</p>";
                    }
                    
                } else {
                    echo "<p>Student $studenttoadd is taking too many classes to add to the course section.</p>";
                }
                
            } else {
                
                echo "<p>Student $studenttoadd is not available for this course section.</p>";
            }
            
        } else {
            echo "<p>Student $studenttoadd cannot be registered to a course in different degree type.</p>";
        }
        
    } else {
        echo "<p>Student $studenttoadd not found.</p>";
    }
        
    
}

function studentAvailable($con,$timeslotid,$studentid,$semesterid) {
    
    $query="SELECT TimeSlotID FROM course_section NATURAL JOIN enrollment WHERE StudentID='$studentid' AND SemesterID='$semesterid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
    {
        
        $testtimeslotid=$row[0];
        
        if(timeslotOverlap($con,$timeslotid,$testtimeslotid)) {
            return false;
        }

    }
    
    return true;
    
}

function studentMaxed ($con,$studentid,$semesterid) {
    
    $studentdata = getStudentData($con, $studentid);
    
    $studenttype = $studentdata['StudentType'];
    
    $query="SELECT * FROM course_section NATURAL JOIN enrollment WHERE StudentID='$studentid' AND SemesterID='$semesterid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if(!strcmp($studenttype,"PT")) {
        
        if($count>=3) {
            return true;
        }
        
    } else {
        
        if($count>=5) {
            return true;
        }
    }
    
    return false;
}

function checkStudentPrereqs ($con,$studentid,$crn) {
    
    $tracker = 0;
    
    $studentdata = getStudentData($con,$studentid);
    $crndata = getCourseSectionData($con,$crn);
    
    $courseid=$crndata['CourseID'];
    
    $prereqs=getPrereqs($con,$courseid);
    
    for($i=0;$i<count($prereqs);$i++) {
        
        $prereqid=$prereqs[$i];
        
        $query="SELECT * FROM enrollment NATURAL JOIN course_section WHERE StudentID = '$studentid' AND CourseID='$prereqid'";
    
        $result=mysqli_query($con,$query) or die(mysql_error());
        
        $count = mysqli_num_rows($result);
        
        if($count>0) {
            $tracker++;
        } 
        
        $query="SELECT StudentID FROM student_history WHERE StudentID = '$studentid' AND CourseID='$prereqid'";
        
        $result=mysqli_query($con,$query) or die(mysql_error());
        
        $count = mysqli_num_rows($result);
        
        if($count>0) {
            $tracker++;
        }
        
        
    }
    
    if(count($prereqs)==$tracker) {
        return true;
    } else {
        return false;
    }
    
    
}

function getPrereqs ($con,$courseid) {
    
    $query="SELECT PrereqID FROM prerequisite WHERE CourseID='$courseid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    $prereqarray;
    
    if($count>0) {
        for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
            $prereqarray[$counter] = $row[0];
            
        }
        
        return $prereqarray;
    }
    
    return NULL;
    
}

function checkStudentHolds($con,$studentid) {
    
    $query="SELECT * FROM student_hold WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        return true;
    } else {
        return false;
    }
    
}

function correctSeatsAvail($con,$crn) {
            
    $crndata=getCourseSectionData($con,$crn);
    
    $roomid=$crndata['RoomID'];
    
    $roomdata = getRoomData($con,$roomid);
    
    if(!strcmp($roomdata['RoomUse'],"LECTURE"))
        $seats = $roomdata['Seats'];
    else
        $seats = $roomdata['Computers'];
    
    $numstudents = count(getSectionStudents($con,$crn));
    
    $seats = $seats - $numstudents;
    
    $update = "UPDATE course_section SET Seats = '$seats' WHERE CRN='$crn'";
    
    $updateseats=mysqli_query($con,$update);

}

function calculateGPA($con,$studentid) {
    
    $query = "SELECT Grade FROM student_history WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    $totalgrades;
    $gpa;
    
    if($count>0) {
        for($counter=0;$row=mysqli_fetch_row($result);++$counter) {
            
            $lettergrade = $row[0];
            
            if(!strcmp($lettergrade,"IC") || !strcmp($lettergrade,"W")) {
                $count--;
            } else {
                $totalgrades += getNumberGrade($lettergrade);
            }
        
        }
        
        $gpa = $totalgrades/$count;
        
    }
    
    return number_format($gpa, 3, ".", ",");
}

function getNumberGrade ($lettergrade) {
    
    $numbergrade;
    
    switch ($lettergrade) {
        case "A+":
            $numbergrade=4.000;
            break;
        case "A":
            $numbergrade=3.750;
            break;
        case "A-":
            $numbergrade=3.500;
            break;
        case "B+":
            $numbergrade=3.250;
            break;
        case "B":
            $numbergrade=3.000;
            break;
        case "B-":
            $numbergrade=2.750;
            break;
        case "C+":
            $numbergrade=2.500;
            break;
        case "C":
            $numbergrade=2.250;
            break;    
        case "C-":
            $numbergrade=2.000;
            break;
        case "D+":
            $numbergrade=1.625;
            break;
        case "D":
            $numbergrade=1.250;
            break;
        case "D-":
            $numbergrade=1.000;
            break;
        case "F":
            $numbergrade=0.000;
            break;
    }
    
    return number_format($numbergrade, 3, ".", ",");
    
}

function getStudentEnrollment($con,$studentid) {
    
    $semesterid=getCurrentSemester($con);
    
    $query = "SELECT * FROM enrollment WHERE StudentID='$studentid' AND SemesterID='$semesterid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);$counter++) {
            
            $crn = $row['CRN'];
            $crndata=getCourseSectionData($con,$crn);
            $courseid=$row['CourseID'];
            $coursename = $crndata['CourseName'];
            $facultyid = $crndata['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $timeslotid = $row['TimeSlotID'];
            $timeslot = getTimeSlotData($con,$timeslotid);
            $roomid = $row['RoomID'];
            $roomdata = getRoomData($con,$roomid);
            $roomname = $roomdata['BuildingName'] . " " . $roomdata['RoomNum'];
            
            echo "<tr>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$timeslot</td>
                    <td>$roomname</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
    
}

function getStudentNextSemesterEnrollment($con,$studentid) {
    
    $semesterid=getNextSemester($con);
    
    $query = "SELECT * FROM enrollment NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid' AND SemesterID='$semesterid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $timeslotid = $row['TimeSlotID'];
            $timeslot = getTimeSlotData($con,$timeslotid);
            $roomid = $row['RoomID'];
            $roomdata = getRoomData($con,$roomid);
            $roomname = $roomdata['BuildingName'] . " " . $roomdata['RoomNum'];
            
            echo "<tr>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$timeslot</td>
                    <td>$roomname</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
    
}

function getStudentEnrollmentForm1($con,$studentid) {
    
    $query = "SELECT * FROM enrollment NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    echo "<form action='' method='post'>
            <p><label for='register'>Add a course (by CRN):</label>
            <input type='text' name='register'></p>";
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $crn = $row['CRN'];
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $timeslotid = $row['TimeSlotID'];
            $timeslot = getTimeSlotData($con,$timeslotid);
            $roomid = $row['RoomID'];
            $roomdata = getRoomData($con,$roomid);
            $roomname = $roomdata['BuildingName'] . " " . $roomdata['RoomNum'];
            
            echo "<tr>
                    <td><input type='checkbox' name='crn[]' value='$crn'><label for='crn[]'> Drop Course</label></td>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$timeslot</td>
                    <td>$roomname</td>
                </tr>";
        
        }
        
    }
    
    echo "</table><p><input type='submit' name='submit' value='Submit'>
                        </form>";
    
}

function getStudentEnrollmentForm5($con,$studentid) {
    
    $semester=getNextSemester($con);
    
    $query = "SELECT * FROM enrollment NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid' AND SemesterID='$semester'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    echo "<form action='' method='post'>
            <p><label for='register'>Add a course (by CRN):</label>
            <input type='text' name='register'></p>";
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $crn = $row['CRN'];
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $timeslotid = $row['TimeSlotID'];
            $timeslot = getTimeSlotData($con,$timeslotid);
            $roomid = $row['RoomID'];
            $roomdata = getRoomData($con,$roomid);
            $roomname = $roomdata['BuildingName'] . " " . $roomdata['RoomNum'];
            
            echo "<tr>
                    <td><input type='checkbox' name='crn[]' value='$crn'><label for='crn[]'> Drop Course</label></td>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$timeslot</td>
                    <td>$roomname</td>
                </tr>";
        
        }
        
    }
    
    echo "</table><p><input type='submit' name='submit' value='Submit'>
                        </form>";
    
}

function getStudentEnrollmentForm3($con,$studentid) {
    
    $query = "SELECT * FROM enrollment NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    echo "<form action='' method='post'>";
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $crn = $row['CRN'];
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $timeslotid = $row['TimeSlotID'];
            $timeslot = getTimeSlotData($con,$timeslotid);
            $roomid = $row['RoomID'];
            $roomdata = getRoomData($con,$roomid);
            $roomname = $roomdata['BuildingName'] . " " . $roomdata['RoomNum'];
            
            echo "<tr>
                    <td><input type='checkbox' name='crn[]' value='$crn'><label for='crn[]'> Drop Course</label></td>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$timeslot</td>
                    <td>$roomname</td>
                </tr>";
        
        }
        
    }
    
    echo "</table><p><input type='submit' name='submit' value='Submit'>
                        </form>";
    
}

function getStudentEnrollmentForm2($con,$studentid) {
    
    $query = "SELECT * FROM enrollment NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $crn = $row['CRN'];
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $timeslotid = $row['TimeSlotID'];
            $timeslot = getTimeSlotData($con,$timeslotid);
            $roomid = $row['RoomID'];
            $roomdata = getRoomData($con,$roomid);
            $roomname = $roomdata['BuildingName'] . " " . $roomdata['RoomNum'];
            
            echo "<tr>
                    <td><input type='checkbox' name='crn[]' value='$crn'><label for='crn[]'> Drop Course</label></td>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$timeslot</td>
                    <td>$roomname</td>
                </tr>";
        
        }
        
    }
    
    echo "</table><p><input type='submit' name='submit' value='Submit'>
                        </form>";
    
}

function getStudentHistory($con,$studentid) {
    
    $query = "SELECT * FROM student_history NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid' ORDER BY SemesterID DESC";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $semesterid = $row['SemesterID'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            $grade = $row['Grade'];
            
            echo "<tr>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$semestername</td>
                    <td>$grade</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}

function getStudentHistoryForm1($con,$studentid) {
    
    $query = "SELECT * FROM student_history NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid' ORDER BY SemesterID DESC";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    echo "<form action='' method='post'>
        <p><label for='register'>Add a course (by CRN):</label>
        <input type='text' name='register'></p><p><label for='grade'>Grade:</label>
            <select id='grade' name='grade'>
                <option value='A+'>A+</option>
                <option value='A'>A</option>
                <option value='A-'>A-</option>
                <option value='B+'>B+</option>
                <option value='B'>B</option>
                <option value='B-'>B-</option>
                <option value='C+'>C+</option>
                <option value='C'>C</option>
                <option value='C-'>C-</option>
                <option value='D+'>D+</option>
                <option value='D'>D</option>
                <option value='D-'>D-</option>
                <option value='F'>F</option>
                <option value='W'>W</option>
                <option value='IC'>IC</option>
            </select><br>";
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $crn=$row['CRN'];
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $semesterid = $row['SemesterID'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            $grade = $row['Grade'];
            
            echo "<tr>
                    <td><input type='checkbox' name='crn[]' value='$crn'><label for='crn[]'> Drop Course</label></td>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$semestername</td>
                    <td>$grade</td>
                </tr>";
        
        }
        
    }
    
    echo "</table><p><input type='submit' name='submit' value='Submit'>
            </form>";
}

function getStudentAdvisor($con,$studentid) {
    
    $query = "SELECT FacultyID FROM advisor WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
    
        $row=mysqli_fetch_assoc($result);
        
        $facultyid = $row['FacultyID'];
        
        $facultydata = getFacultyData($con,$facultyid);
        
        return $facultydata['FirstName'] . " " . $facultydata['LastName'];
    
    }
}

function changeStudentAdvisor($con,$studentid,$facultyid) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $deleteadvisor="DELETE FROM advisor WHERE StudentID = '$studentid'";
    
    $deleteresult=mysqli_query($con,$deleteadvisor) or die(mysql_error());

    $addadvisor="INSERT advisor (FacultyID,StudentID,DateAssigned) VALUES ('$facultyid','$studentid','$todaysdate')";
    
    $addresult=mysqli_query($con,$addadvisor) or die(mysql_error());  
    
}

function updateFTorPT ($con,$userid) {
    
    $query = "SELECT * FROM user WHERE UserID='$userid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    $usertype=$row['UserType'];
    
    if(!strcmp($usertype,"Student")) {
        
        $studentdata=getStudentData($con,$userid);
        
        $ftorpt=$studentdata['StudentType'];
        
        $degreetype=$studentdata['DegreeType'];
        
        $activecredits=$studentdata['CreditsTaken'];
        
        if(!strcmp($ftorpt,"FT")) {
            
            if(!strcmp($degreetype,"Undergraduate") && $activecredits<12) {
                
                $updatestudenttype="UPDATE student SET StudentType = 'PT' WHERE StudentID='$userid'";
                
                $updateresult=mysqli_query($con,$updatestudenttype) or die(mysql_error());
                
                $deletefromft="DELETE FROM ft_undergrad WHERE StudentID = '$userid'";
                
                $deleteresult=mysqli_query($con,$deletefromft) or die(mysql_error());
                
                $addtopt="INSERT pt_undergrad (`StudentID`, `MinCredits`, `MaxCredits`, `CreditsTaken`) VALUES ('$userid', '1', '11', '$activecredits')";
                
                $addresult=mysqli_query($con,$addtopt) or die(mysql_error());
                
                echo "<p>Student changed to part-time.</p>";
                
            }
            
            if(!strcmp($degreetype,"Graduate") && $activecredits<7) {
                
                $updatestudenttype="UPDATE student SET StudentType = 'PT' WHERE StudentID='$userid'";
                
                $updateresult=mysqli_query($con,$updatestudenttype) or die(mysql_error());
                
                $deletefromft="DELETE FROM ft_grad WHERE StudentID = '$userid'";
                
                $deleteresult=mysqli_query($con,$deletefromft) or die(mysql_error());
                
                $addtopt="INSERT pt_grad (`StudentID`, `MinCredits`, `MaxCredits`, `CreditsTaken`) VALUES ('$userid', '1', '6', '$activecredits')";
                
                $addresult=mysqli_query($con,$addtopt) or die(mysql_error());
                
                echo "<p>Student changed to part-time.</p>";
                
            } 
            
        }
        
        if(!strcmp($ftorpt,"PT")) {
            
            if(!strcmp($degreetype,"Undergraduate") && $activecredits>11) {
                
                $updatestudenttype="UPDATE student SET StudentType = 'FT' WHERE StudentID='$userid'";
                
                $updateresult=mysqli_query($con,$updatestudenttype) or die(mysql_error());
                
                $deletefromft="DELETE FROM pt_undergrad WHERE StudentID = '$userid'";
                
                $deleteresult=mysqli_query($con,$deletefromft) or die(mysql_error());
                
                $addtopt="INSERT ft_undergrad (`StudentID`, `MinCredits`, `MaxCredits`, `CreditsTaken`) VALUES ('$userid', '12', '18', '$activecredits')";
                
                $addresult=mysqli_query($con,$addtopt) or die(mysql_error());
                
                echo "<p>Student changed to full-time.</p>";
                
            }
            
            if(!strcmp($degreetype,"Graduate")  && $activecredits>6) {
                
                $updatestudenttype="UPDATE student SET StudentType = 'FT' WHERE StudentID='$userid'";
                
                $updateresult=mysqli_query($con,$updatestudenttype) or die(mysql_error());
                
                $deletefromft="DELETE FROM pt_grad WHERE StudentID = '$userid'";
                
                $deleteresult=mysqli_query($con,$deletefromft) or die(mysql_error());
                
                $addtopt="INSERT ft_grad (`StudentID`, `MinCredits`, `MaxCredits`, `CreditsTaken`) VALUES ('$userid', '7', '12', '$activecredits')";
                
                $addresult=mysqli_query($con,$addtopt) or die(mysql_error());
                
                echo "<p>Student changed to full-time.</p>";
            }
        } 
    }
}

function addHoldtoStudent($con,$studentid,$holdid) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $query="INSERT INTO student_hold (StudentID,HoldID,HoldDate) VALUES ('$studentid','$holdid','$todaysdate')";
    
    if ($result=mysqli_query($con,$query)) {
        
        $holdname=getHoldName($con,$holdid);
        
        $studentdata=getStudentData($con,$studentid);
        
        $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
        
        echo "<p>Hold ($holdname) added to student ($studentname).</p>";
       
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
}

function getHoldName($con,$holdid) {
    
    $query = "SELECT HoldType FROM hold WHERE HoldID='$holdid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    $holdname=$row['HoldType'];
    
    return $holdname;
    
}

function getHolds($con) {
    
    $query = "SELECT HoldID FROM hold";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $holdarray;
    
    for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
        
        $holdid=$row[0];
        
        $holdarray[$counter]=$holdid;
        
    }
    
    return $holdarray;

}

function deleteStudentHold($con,$studentid,$holdid) {
    
    $deletemajor="DELETE FROM student_hold WHERE StudentID = '$studentid' AND HoldID='$holdid'";
    
    $deleteresult=mysqli_query($con,$deletemajor) or die(mysql_error());
}

function getMajors($con) {
    
    $query = "SELECT MajorID FROM major";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $majorarray;
    
    for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
        
        $majorid=$row[0];
        
        $majorarray[$counter]=$majorid;
        
    }
    
    return $majorarray;
}

function getMajorName($con,$majorid) {
    
    $query = "SELECT MajorName FROM major WHERE MajorID='$majorid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    $majorname=$row['MajorName'];
    
    return $majorname;
    
}

function addStudentMajor($con,$studentid,$majorid) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $majorarray=getStudentMajors($con,$studentid);
    
    $studentdata=getStudentData($con,$studentid);
    
    $allowedmajors;
    
    $studentdegreetype=$studentdata['DegreeType'];
    
    $studentminor=$studentdata['MinorID'];
    
    if(!strcmp($studentdegreetype,"Undergraduate")) {
        
        if(!empty($studentminor)) {
            $allowedmajors=2;
        } else {
            $allowedmajors=1;
        }
        
    }
    
    if(!strcmp($studentdegreetype,"Graduate")) {
        $allowedmajors=1;
    }
    
    $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
    
    if((count($majorarray))<$allowedmajors) {
        
        $query="INSERT INTO student_major (StudentID,MajorID,DateOfApp) VALUES ('$studentid','$majorid','$todaysdate')";

        if ($result=mysqli_query($con,$query)) {
            
            $majorname=getMajorName($con,$majorid);
            
            echo "<p>Major ($majorname) added to student ($studentname).</p>";
           
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "<p>$studentname already has $allowedmajors majors.</p>";
    }
    

    
}

function updateStudentMinor($con,$studentid,$minorid) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $majorarray=getStudentMajors($con,$studentid);
    
    $studentdata=getStudentData($con,$studentid);
    
    $allowedminor;
    
    $studentminor=$studentdata['MinorID'];
    
    if((count($majorarray))==1) {
        $allowedminor=1;
    } else {
        $allowedminor=0;
    }
    
    $studentminor=$studentdata['MinorID'];
    
    $oldminorname=getMinorName($con,$studentminor);
    
    $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
    
    $studentdegreetype=$studentdata['DegreeType'];
    
    if(strcmp($studentdegreetype,"Graduate")) {
    
        if($allowedminor) {
            
            if(!empty($studentminor)) {
                $query="DELETE FROM student_minor WHERE StudentID='$studentid' AND MinorID='$studentminor'";
                
                $oldminorname=getMinorName($con,$studentminor);
                
                if ($result=mysqli_query($con,$query)) {
                    
                    echo "<p>Minor ($oldminorname) removed from student ($studentname).</p>";
                   
                } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }
            }
            
            $query="INSERT INTO student_minor (StudentID,MinorID,DateOfApp) VALUES ('$studentid','$minorid','$todaysdate')";
    
            if ($result=mysqli_query($con,$query)) {
                
                $newminorname=getMinorName($con,$minorid);
                
                echo "<p>Minor ($newminorname) added to student ($studentname).</p>";
               
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        } else {
            echo "<p>$studentname has either 0 or 2 majors and cannot add a minor.</p>";
        }
    } else {
        echo "<p>$studentname is a graduate student and cannot add a minor.</p>";
    }
    
}

function deleteStudentMajor($con,$studentid) {
    
    $deletemajor="DELETE FROM student_major WHERE StudentID = '$studentid'";
    
    $deleteresult=mysqli_query($con,$deletemajor) or die(mysql_error());
}

function getMinors($con) {
    
    $query = "SELECT MinorID FROM minor";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $minorarray;
    
    for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
        
        $minorid=$row[0];
        
        $minorarray[$counter]=$minorid;
        
    }
    
    return $minorarray;
}

function getMinorName($con,$minorid) {
    
    $query = "SELECT MinorName FROM minor WHERE MinorID='$minorid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    $minorname=$row['MinorName'];
    
    return $minorname;
    
}

function changeStudentMinor($con,$studentid,$minorid) {
    
    deleteStudentMinor($con,$studentid);
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $query="INSERT INTO student_minor (StudentID,MinorID,DateOfApp) VALUES ('$studentid','$minorid','$todaysdate')";
    
    if ($result=mysqli_query($con,$query)) {
        
        $minorname=getMinorName($con,$minorid);
        
        $studentdata=getStudentData($con,$studentid);
        
        $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
        
        echo "<p>Minor ($minorname) added to student ($studentname).</p>";
       
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
}

function deleteStudentMinor($con,$studentid) {
    
    $getminor="SELECT MinorID FROM student_minor WHERE StudentID='$studentid'";
    
    $getresult=mysqli_query($con,$getminor) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($getresult);
    
    $minorid=$row['MinorID'];
    
    $deleteminor="DELETE FROM student_minor WHERE StudentID = '$studentid' AND MinorID='$minorid'";
    
    $deleteresult=mysqli_query($con,$deleteminor) or die(mysql_error());
    
    echo "<p>Minor removed from $studentid</p>";
}

function getMajorData($con,$majorid) {
    
    $query="SELECT * FROM major WHERE MajorID='$majorid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row;
    
}

function removeStudentFromSection($con,$studentid,$crn) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $crndata=getCourseSectionData($con,$crn);
    
    $semesterid=$crndata['SemesterID'];
    
    $semesterdata=getSemesterData($con,$semesterid);
    
    $dropcoursedate=$semesterdata['DropCourseDate'];
    
    if($todaysdate<$dropcoursedate) {
        
        $removestudent="DELETE FROM enrollment WHERE StudentID = '$studentid' AND CRN='$crn'";
    
        $removeresult=mysqli_query($con,$removestudent) or die(mysql_error());
        
        echo "<p>Student $studentid removed from course section.</p>";
        
    } else {
        
        echo "<p>It is too late to drop the course section. Please contact an administrator.</p>";
    }
    
}

function removeStudentFromSectionAsAdmin($con,$studentid,$crn) {
    
    $removestudent="DELETE FROM enrollment WHERE StudentID='$studentid' AND CRN='$crn'";

    $removeresult=mysqli_query($con,$removestudent) or die(mysql_error());
    
    echo "<p>Student $studentid removed from course section $crn.</p>";
    
}

function getFacultyHistory1($con,$FacultyID) {
    
    $query = "SELECT * FROM faculty_history NATURAL JOIN course_section NATURAL JOIN course NATURAL JOIN timeslot WHERE FacultyID='$FacultyID'AND 
    SemesterID IN ('SEM001', 'SEM002', 'SEM003','SEM004', 'SEM005', 'SEM006','SEM007', 'SEM008', 'SEM009','SEM010')  ORDER BY SemesterID DESC ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
       for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $CRN = $row['CRN'];
            $coursename = $row['CourseName'];
            $semesterid = $row['SemesterID'];
            $timeslot = $row['TimeSlotName'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            
            echo "<tr>
                    <td><a href='FacultyCourse.php?CRN=$CRN' class='clean'>$CRN</td>
                    <td>$courseid</td>
                     <td>$coursename</td>
                    <td>$semestername</td>
                    <td>$timeslot</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}
function getFacultyHistory11($con,$FacultyID) {
    
    $query = "SELECT * FROM faculty_history NATURAL JOIN course_section NATURAL JOIN course NATURAL JOIN timeslot WHERE FacultyID='$FacultyID'AND 
    SemesterID IN ('SEM001', 'SEM002', 'SEM003','SEM004', 'SEM005', 'SEM006','SEM007', 'SEM008', 'SEM009','SEM010')  ORDER BY SemesterID DESC ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
       for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $CRN = $row['CRN'];
            $coursename = $row['CourseName'];
            $semesterid = $row['SemesterID'];
            $timeslot = $row['TimeSlotName'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            
            echo "<tr>
                    <td><a href='PastFacultyCourse.php?CRN=$CRN' class='clean'>$CRN</td>
                    <td>$courseid</td>
                     <td>$coursename</td>
                    <td>$semestername</td>
                    <td>$timeslot</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}
function getFacultyHistory12($con,$FacultyID) {
    
     $query = "SELECT * FROM faculty_history NATURAL JOIN course_section NATURAL JOIN course NATURAL JOIN timeslot WHERE FacultyID='$FacultyID'AND 
    SemesterID IN ('SEM012')  ORDER BY SemesterID DESC ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
       for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $CRN = $row['CRN'];
            $coursename = $row['CourseName'];
            $semesterid = $row['SemesterID'];
            $timeslot = $row['TimeSlotName'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            
            echo "<tr>
                    <td><a href='PastFacultyCourse.php?CRN=$CRN' class='clean'>$CRN</td>
                    <td>$courseid</td>
                     <td>$coursename</td>
                    <td>$semestername</td>
                    <td>$timeslot</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}
function getFacultyHistory8($con,$FacultyID) {
    
    $query = "SELECT * FROM faculty_history NATURAL JOIN course_section NATURAL JOIN course NATURAL JOIN timeslot WHERE FacultyID='$FacultyID'AND 
    SemesterID IN ('SEM012')  ORDER BY SemesterID DESC ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
       for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $CRN = $row['CRN'];
            $coursename = $row['CourseName'];
            $semesterid = $row['SemesterID'];
            $timeslot = $row['TimeSlotName'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            
            echo "<tr>
                    <td><a href='FacultyCourse.php?CRN=$CRN' class='clean'>$CRN</td>
                    <td>$courseid</td>
                     <td>$coursename</td>
                    <td>$semestername</td>
                    <td>$timeslot</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}
function getFacultyHistory5($con,$FacultyID) {
    
    $query = "SELECT * FROM faculty_history NATURAL JOIN course_section NATURAL JOIN course NATURAL JOIN timeslot WHERE FacultyID='$FacultyID'AND 
    SemesterID IN ('SEM012')  ORDER BY SemesterID DESC ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
       for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $CRN = $row['CRN'];
            $coursename = $row['CourseName'];
            $semesterid = $row['SemesterID'];
            $timeslot = $row['TimeSlotName'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            
            echo "<tr>
                    <td><a href='FacultyCourse.php?CRN=$CRN' class='clean'>$CRN</td>
                    <td>$courseid</td>
                     <td>$coursename</td>
                    <td>$semestername</td>
                    <td>$timeslot</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}
function getFacultyHistory3($con,$FacultyID) {
    
    $query = "SELECT * FROM faculty_history NATURAL JOIN course_section NATURAL JOIN course NATURAL JOIN timeslot WHERE FacultyID='$FacultyID'AND 
    SemesterID IN ('SEM012')  ORDER BY SemesterID DESC ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $CRN = $row['CRN'];
            $coursename = $row['CourseName'];
            $semesterid = $row['SemesterID'];
            $timeslot = $row['TimeSlotName'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            
            echo "<tr>
                    <td><a href='FacultyCourse.php?CRN=$CRN' class='clean'>$CRN</td>
                    <td>$courseid</td>
                     <td>$coursename</td>
                    <td>$semestername</td>
                    <td>$timeslot</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}

function getFacultyHistory10($con,$FacultyID) {
    
    $query = "SELECT * FROM faculty_history NATURAL JOIN course_section NATURAL JOIN course NATURAL JOIN timeslot WHERE FacultyID='$FacultyID'AND 
    SemesterID IN ('SEM011')  ORDER BY SemesterID DESC ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $CRN = $row['CRN'];
            $coursename = $row['CourseName'];
            $semesterid = $row['SemesterID'];
            $timeslot = $row['TimeSlotName'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            
            echo "<tr>
                    <td><a href='FacultyCourse.php?CRN=$CRN' class='clean'>$CRN</td>
                    <td>$courseid</td>
                     <td>$coursename</td>
                    <td>$semestername</td>
                    <td>$timeslot</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}


function getStudentEnrollment1($con,$studentid) {
    
    $query = "SELECT * FROM enrollment NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid' AND SemesterID IN ('SEM011') ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $timeslotid = $row['TimeSlotID'];
            $timeslot = getTimeSlotData($con,$timeslotid);
            $roomid = $row['RoomID'];
            $roomdata = getRoomData($con,$roomid);
            $roomname = $roomdata['BuildingName'] . " " . $roomdata['RoomNum'];
            
            echo "<tr>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$timeslot</td>
                    <td>$roomname</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
    
}
function getStudentEnrollment2($con,$studentid) {
    
    $query = "SELECT * FROM enrollment NATURAL JOIN course_section NATURAL JOIN course WHERE StudentID='$studentid' AND SemesterID IN ('SEM012') ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
        for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $coursename = $row['CourseName'];
            $facultyid = $row['FacultyID'];
            $facultydata = getFacultyData($con,$facultyid);
            $facultyname = $facultydata['LastName'] . ", " . $facultydata['FirstName'];
            $timeslotid = $row['TimeSlotID'];
            $timeslot = getTimeSlotData($con,$timeslotid);
            $roomid = $row['RoomID'];
            $roomdata = getRoomData($con,$roomid);
            $roomname = $roomdata['BuildingName'] . " " . $roomdata['RoomNum'];
            
            echo "<tr>
                    <td>$courseid</td>
                    <td>$coursename</td>
                    <td>$facultyname</td>
                    <td>$timeslot</td>
                    <td>$roomname</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
    
}

function getActiveCredits($con,$studentid) {
    
    $semester=getCurrentSemester($con);
    
    $query="SELECT Credits FROM enrollment NATURAL JOIN course WHERE StudentID='$studentid' AND SemesterID='$semester'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $activecredits=0;
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $activecredits += $row['Credits'];
    }
    
    return $activecredits;
}

function correctActiveCredits($con,$studentid,$studenttablename) {
    
    $studentdata=getStudentData($con,$studentid);
    
    $activecredits=$studentdata['CreditsTaken'];
    
    $actualactivecredits=getActiveCredits($con,$studentid);
    
    if($activecredits != $actualactivecredits) {
        
        $query="UPDATE $studenttablename SET CreditsTaken='$actualactivecredits' WHERE StudentID='$studentid'";
        
        $result=mysqli_query($con,$query) or die(mysql_error());
        
    }
}

function getUndergradYear($con,$studentid) {
    
    $query="SELECT Year FROM undergrad_student WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row['Year'];
    
}

function correctUndergradYear($con,$studentid) {
    
    $query="SELECT * FROM student_history NATURAL JOIN course WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $totalcredits;
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $totalcredits += $row['Credits'];
    }
    
    $currentyear=getUndergradYear($con,$studentid);
    
    $actualyear;
    
    if($totalcredits<=30) {
        $actualyear="Freshman";
    } else if($totalcredits>30 && $totalcredits<=60) {
        $actualyear="Sophmore";
    } else if($totalcredits>60 && $totalcredits<=90) {
        $actualyear="Junior";
    } else if($totalcredits>90) {
        $actualyear="Senior";
    }
    
    if(!strcmp($currentyear,$actualyear)) {
        
        return;
        
    } else {
        $query2="UPDATE undergrad_student SET Year='$actualyear' WHERE StudentID='$studentid'";
        
        $result2=mysqli_query($con,$query2) or die(mysql_error());
    }
    
}

function studentRegisteredToCourseAlready($con,$studentid,$crn) {
    
    $crndata=getCourseSectionData($con,$crn);
    
    $courseid=$crndata['CourseID'];
    
    $query="SELECT * FROM enrollment WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $testcourseid=$row['CourseID'];
        
        if(!strcmp($testcourseid,$courseid)) {
            return true;
        }
    }
    
    return false;
    
}

function getFacultySchedule($con,$facultyid) {
    
    $currentsemester=getCurrentSemester($con);
    
    if(!empty($currentsemester)) {
        
        $query="SELECT * FROM course_section WHERE FacultyID='$facultyid' AND SemesterID='$currentsemester'";
    
        $result=mysqli_query($con,$query) or die(mysql_error());
        
        $count = mysqli_num_rows($result);
        
        if($count>0) {
            
            echo "<table class='table table-striped table-dark'>";
        
            for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
                
                $crn=$row['CRN'];
                $courseid=$row['CourseID'];
                $coursedata=getCourseData($con,$courseid);
                $coursename=$coursedata['CourseName'];
                $section=$row['Section'];
                $roomid=$row['RoomID'];
                $roomdata=getRoomData($con,$roomid);
                $roomname=$roomdata['BuildingName'] . " Room " . $roomdata['RoomNum'];
                $timeslotid=$row['TimeSlotID'];
                $timeslot=getTimeSlotData($con,$timeslotid);
                $semesterdata=getSemesterData($con,$currentsemester);
                $semesterstart=$semesterdata['SemStartDate'];
                $semesterend=$semesterdata['SemEndDate'];
                        
                echo "<tr>
                        <td>$courseid</td>
                        <td>$coursename</td>
                        <td>Section $section</td>
                        <td>$roomname</td>
                        <td>$timeslot</td>
                        <td>Start Date: $semesterstart</td>
                        <td>End Date: $semesterend</td>
                    </tr>";
        
            }
            
            echo "</table>";
        
        }
    } else {
        echo "<p>No current semester.</p>";
    }
    
}

function getCurrentSemester($con) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $query="SELECT * FROM semester";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $semesterid=$row['SemesterID'];    
        $semesterstart=$row['SemStartDate'];
        $semesterend=$row['SemEndDate'];
        
        if($todaysdate>$semesterstart && $todaysdate<$semesterend) {
            return $semesterid;
        } 
    
    }
}

function getFacultyHistory4($con,$FacultyID) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $query = "SELECT * FROM faculty_history NATURAL JOIN course_section NATURAL JOIN course NATURAL JOIN timeslot WHERE FacultyID='$FacultyID' AND 
    SemesterID IN ('SEM001', 'SEM002', 'SEM003','SEM004', 'SEM005', 'SEM006','SEM007', 'SEM008', 'SEM009','SEM010')  ORDER BY SemesterID DESC ";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        
        echo "<table class='table table-striped table-dark'>";
        
       for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
            
            $courseid = $row['CourseID'];
            $CRN = $row['CRN'];
            $coursename = $row['CourseName'];
            $semesterid = $row['SemesterID'];
            $timeslot = $row['TimeSlotName'];
            $semesterdata = getSemesterData($con,$semesterid);
            $semestername = $semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
            
            echo "<tr>
                    <td>$CRN</td>
                    <td>$courseid</td>
                     <td>$coursename</td>
                    <td>$semestername</td>
                    <td>$timeslot</td>
                </tr>";
        
        }
        
        echo "</table>";
    }
}

function getListOfFacultyRanks($con) {
    
    $query="SELECT DISTINCT FacultyRank FROM faculty";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $listofranks;
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $listofranks[$counter]=$row['FacultyRank'];
           
    }
    
    return $listofranks;
}

function updateRank($con,$facultyid,$newrank) {
    
    $query="UPDATE faculty SET FacultyRank='$newrank' WHERE FacultyID='$facultyid'";
    
    if($result=mysqli_query($con,$query)) {
        return true;
    } else {
        die(mysql_error());
        return false;
    }

}

function getListOfCourseTypes($con) {
    
    $query="SELECT DISTINCT CourseType FROM course";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $listofcoursetypes;
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $listofcoursetypes[$counter]=$row['CourseType'];
           
    }
    
    return $listofcoursetypes;
    
}


function addPrereq($con,$courseid,$prereqid,$grade) {
    
}

function getRequiredPrereqGrade($con,$prereqid,$courseid) {
    
    $query="SELECT MinGrade FROM prerequisite WHERE PrereqID='$prereqid' AND CourseID='$courseid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row['Grade'];
    
}

function getAdvisees($con,$facultyid) {
    
    $query="SELECT StudentID FROM advisor WHERE FacultyID='$facultyid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $listofadvisees;
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        if(!empty($row['StudentID']))
            $listofadvisees[$counter]=$row['StudentID'];
           
    }
    
    return $listofadvisees;
    
}

function listAdvisees($con,$facultyid) {
    
    $listofadvisees=getAdvisees($con,$facultyid);
    
    $amount=count($listofadvisees);
    
    $facultydata=getFacultyData($con,$facultyid);
    
    $facultyname=$facultydata['FirstName'] . " " . $facultydata['LastName'];
    $facultydept=$facultydata['DeptName'];
    
    echo "<h4>List of all advisees for $facultyid $facultyname from the $facultydept department:</h4>";
    
    if($amount>0) {
        echo "<p>";
    
    
        for($i=0;$i<$amount;$i++) {
            
            $adviseedata=getStudentData($con,$listofadvisees[$i]);
            
            $id=$adviseedata['StudentID'];
            $fname=$adviseedata['FirstName'];
            $lname=$adviseedata['LastName'];
            
            if(!empty($id)) {
                echo "$fname $lname ($id)";
            
                if($i<($amount-1)) {
                    echo ", ";
                }
            }
            
        }
    

        echo "</p>";
    } else echo "<p>No advisees found.</p>";
    
}

function getNextFacultySchedule($con,$facultyid) {
    
    $nextsemester=getNextSemester($con);
    
    if(!empty($nextsemester)) {
        
        $query="SELECT * FROM course_section WHERE FacultyID='$facultyid' AND SemesterID='$nextsemester'";
    
        $result=mysqli_query($con,$query) or die(mysql_error());
        
        $count = mysqli_num_rows($result);
        
        if($count>0) {
            
            echo "<table class='table table-striped table-dark'>";
        
            for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
                
                $crn=$row['CRN'];
                $courseid=$row['CourseID'];
                $coursedata=getCourseData($con,$courseid);
                $coursename=$coursedata['CourseName'];
                $section=$row['Section'];
                $roomid=$row['RoomID'];
                $roomdata=getRoomData($con,$roomid);
                $roomname=$roomdata['BuildingName'] . " Room " . $roomdata['RoomNum'];
                $timeslotid=$row['TimeSlotID'];
                $timeslot=getTimeSlotData($con,$timeslotid);
                $semesterdata=getSemesterData($con,$nextsemester);
                $semesterstart=$semesterdata['SemStartDate'];
                $semesterend=$semesterdata['SemEndDate'];
                
                echo "<tr>
                        <td>$courseid</td>
                        <td>$coursename</td>
                        <td>Section $section</td>
                        <td>$roomname</td>
                        <td>$timeslot</td>
                        <td>Start Date: $semesterstart</td>
                        <td>End Date: $semesterend</td>
                    </tr>";
        
            }
            
            echo "</table>";
        
        }
    } else {
        echo "<p>Next semester not available.</p>";
    }
    
}

function getNextSemester($con) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $currentsemester=getCurrentSemester($con);
    
    $currentsemestersplit=str_split($currentsemester,3);
    
    $currentsemesternum=intval($currentsemestersplit[1]);
    
    $query="SELECT * FROM semester";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $nextsemesterid=$row['SemesterID'];
        
        $nextsemestersplit=str_split($nextsemesterid,3);
        
        $nextsemesternum=intval($nextsemestersplit[1]);
        
        if($nextsemesternum==($currentsemesternum+1)) {
            return $nextsemesterid;
        } 
    
    }
    
    return NULL;
    
}

function getDeptIDByName($con,$deptname) {
    
    $query="SELECT DeptID FROM department WHERE DeptName='$deptname'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row['DeptID'];
}

function getAllDeptartmentIDs($con) {
    
    $query="SELECT DeptID FROM department";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $deptarray;
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $deptarray[$counter]=$row['DeptID'];
        
    }
    
    return $deptarray;
}

function getDeptNameByID($con,$deptid) {
    
    $query="SELECT DeptName FROM department WHERE DeptID='$deptid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row['DeptName'];
}

function removeDeptFromFaculty($con,$facultyid,$deptid) {
    
    $query="DELETE FROM faculty_dept WHERE FacultyID='$facultyid' and DeptID='$deptid'";
    
    if($result=mysqli_query($con,$query)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        return false;
    }
}

function addDeptToFaculty($con,$facultyid,$deptid) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $query="INSERT INTO faculty_dept (FacultyID,DeptID,YearsService,AppointDate) VALUES ('$facultyid','$deptid','0','$todaysdate')";
    
    if($result=mysqli_query($con,$query)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        return false;
    }
    
}

function listAdviseesForm1($con,$facultyid) {
    
    $listofadvisees=getAdvisees($con,$facultyid);
    
    $amount=count($listofadvisees);
    
    echo "<h4>List of all advisees for $facultyid</h4>";
    
    if($amount>0) {
    
        for($i=0;$i<$amount;$i++) {
            
            $adviseedata=getStudentData($con,$listofadvisees[$i]);
            
            $id=$adviseedata['StudentID'];
            $fname=$adviseedata['FirstName'];
            $lname=$adviseedata['LastName'];
            
            if(!empty($id)) {
                echo "<p><input type='checkbox' name='deleteadvisee[]' value='$id'> - $fname $lname</p>";
            
            }
            
        }
    
    }
    
}

function removeAdvisee($con,$facultyid,$studentid) {
    
    $query="DELETE FROM advisor WHERE FacultyID='$facultyid' AND StudentID='$studentid'";
    
    if($result=mysqli_query($con,$query)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        return false;
    }
}

function addAdvisee($con,$facultyid,$studentid) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $query="INSERT INTO advisor (FacultyID,StudentID,DateAssigned) VALUES ('$facultyid','$studentid','$todaysdate')";
    
    if((getAdvistors($con,$studentid))>1) {
        "<p>Student $studentid has the maximum amount of advisors.</p>";
        return false;
    } 
    
    if($result=mysqli_query($con,$query)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        return false;
    }
    
}

function getAdvisors($con,$studentid) {
    
    $query="SELECT FacultyID FROM advisor WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $listofadvisors;
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        if(!empty($row['FacultyID']))
            $listofadvisors[$counter]=$row['FacultyID'];
           
    }
    
    return $listofadvisors;
    
}

function getNextFacultyScheduleForm1($con,$facultyid) {
    
    $nextsemester=getNextSemester($con);
    
    if(!empty($nextsemester)) {
        
        $query="SELECT * FROM course_section NATURAL JOIN course WHERE FacultyID='$facultyid' AND SemesterID='$nextsemester'";
    
        $result=mysqli_query($con,$query) or die(mysql_error());
        
        $count = mysqli_num_rows($result);
        
        if($count>0) {
            
            echo "<form action='' method='post'><table>";
        
            for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
                
                $crn=$row['CRN'];
                $courseid=$row['CourseID'];
                $coursedata=getCourseData($con,$courseid);
                $coursename=$coursedata['CourseName'];
                $section=$row['Section'];
                $roomid=$row['RoomID'];
                $roomdata=getRoomData($con,$roomid);
                $roomname=$roomdata['BuildingName'] . " Room " . $roomdata['RoomNum'];
                $timeslotid=$row['TimeSlotID'];
                $timeslot=getTimeSlotData($con,$timeslotid);
                $semesterdata=getSemesterData($con,$nextsemester);
                $semesterstart=$semesterdata['SemStartDate'];
                $semesterend=$semesterdata['SemEndDate'];
                $deptid=$row['DeptID'];
                
                echo "<tr>
                        <td style='padding:10px'><input type='hidden' id='crn[]' name='crn[]' value='$crn'><select id='reassignsection[]' name='reassignsection[]'>
                        <option value='' selected disabled hidden>Reassign</option>";
                
                $query2="SELECT FacultyID FROM faculty_dept WHERE DeptID='$deptid'";
                                
                if ($result2=mysqli_query($con,$query2)) {
                    for ($counter=0;$row2=mysqli_fetch_row($result2);++$counter)
        		    {
        		        
        		        $reassignfacultyid=$row2[0];
        		        
        		        if(strcmp($reassignfacultyid,$facultyid)) {
        		            $facultydata2=getFacultyData($con,$reassignfacultyid);
        		        
            		        $facultyfname=$facultydata2['FirstName'];
            		        $facultylname=$facultydata2['LastName'];
            		        
            		        echo "<option value='$reassignfacultyid'>$facultyfname $facultylname</option>";
        		        }
        		        
        		    }
                } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }
                        
                        
                        
                        
                echo    "</td>
                        <td style='padding:10px'>$courseid</td>
                        <td style='padding:10px'>$coursename</td>
                        <td style='padding:10px'>Section $section</td>
                        <td style='padding:10px'>$roomname</td>
                        <td style='padding:10px'>$timeslot</td>
                        <td style='padding:10px'>Start Date: $semesterstart</td>
                        <td style='padding:10px'>End Date: $semesterend</td>
                    </tr>";
        
            }
            
            echo "</table><p><label for='assignsection'>Assign Section (input CRN): &nbsp;</label><input type='text' id='assignsection' name='assignsection'></p>
            
                <p><input type='submit' name='submit' value='Submit'><input type='reset' name='reset' value='Reset'></p>
                        </form> ";
        
        }
    } else {
        echo "<p>Next semester not available.</p>";
    }
    
}

function assignFacultyToSectionAsAdmin($con,$facultyid,$crn) {
    
    $crndata=getCourseSectionData($con,$crn);
    
    $semesterid=$crndata['SemesterID'];
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $semesterdata=getSemesterData($con,$semesterid);
    
    $semesterstart=$semesterdata['SemStartDate'];
    
    $timeslotid=$crndata['TimeSlotID'];
    
    if($todaysdate<$semesterstart) {
        
        if(facultyavailable($con,$timeslotid,$facultyid,$semesterid)) {
           
            if(!facultyMaxed($con,$facultyid,$semesterid)) {
               
                $query="UPDATE course_section SET FacultyID='$facultyid' WHERE CRN='$crn'";
               
                if ($result=mysqli_query($con,$query)) {
                   
                   return true;
                    
                } else {
                    
                    echo "Error: " . $sql . "<br>" . $con->error;
                    return false;
                    
                }
            } else {
               
               echo "<p>$newfacultyname could not be added to the course section. They are involved in too many course sections this semester.</p>";
               
            }
           
        } else {
           
            echo "<p>$newfacultyname could not be added to the course section. They are not available for this time slot.</p>";
           
        }
    
    } else {
        
        echo "<p>It is too late to assign a faculty member to courses in the selected semester.</p>";
        
    }
    
    
}

function correctMajorRequirements($con,$majorid) {
    
    $courseidarray=array("AC3700","AS2112","AS2602","BU2430","EL1001","EL1201","EL3600","HI1001","HI1202","HS1470","MA1001","MA1450","MA2001","ML1100","SY1500","VA2410");
    
    $query="SELECT DeptID FROM major WHERE MajorID='$majorid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    $deptid=$row['DeptID'];
    
    echo "<p>$deptid</p>";
    
    $query2="SELECT CourseID FROM course WHERE DeptID='$deptid' AND Level='UG'";
    
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    
    for($counter=0;$row=mysqli_fetch_assoc($result2);++$counter) {
        
        $courseid=$courseidarray[$counter];
        
        echo "<p>$courseid</p>";
        
        $arraypos=$counter+16;
        
        $courseidarray[$arraypos]=$row['CourseID'];
        
    }
    
    for($i=0;$i<count($courseidarray);$i++) {
        
        $courseid=$courseidarray[$i];
        
        echo "<p>$courseid</p>";
    
        addCourseToMajorRequirement($con,$majorid,$courseid);
        
        
    }
    
    
}

function addCourseToMajorRequirement($con,$majorid,$courseid) {
    
    $query="INSERT INTO major_req (MajorID,CourseID,MinGrade) VALUES ('$majorid','$courseid','C')";
    
    if($result=mysqli_query($con,$query)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        return false;
    }
}

function studentDegreeAudit($con,$studentid) {
    
    $studentdata=getStudentData($con,$studentid);
    
    $majors=getStudentMajors($con,$studentid);
    
    $majorrequirements1=getMajorRequirements($con,$majors[0]);
    
    $requirementarray;
    
    $globalcreditsearned = 0;
    $totalclassestaken = 0;
    $totalclassesneeded = 0;
    
    if((count($majors))>1) {
        $majorrequirements2=getMajorRequirements($con,$majors[1]);
    
        $requirementarray = array_unique(array_merge($majorrequirements1, $majorrequirements2));
    } else {
        $requirementarray=$majorrequirements1;
    }
    
    $studenttranscript=getStudentHistoryAndEnrollment($con,$studentid);
    
    echo "<table class='table table-striped table-dark'>
            <tr>
                <th>Required Course ID</th>
                <th>Required Course Name</th>
                <th>Student Requirement Met</th>
                <th>Semester Requirement Met</th>
                <th>Grade/In Progress</th>
                <th>Credits Earned</th>
            </tr>
                ";
    
    for($i=0;$i<count($requirementarray);$i++) {
        
        $courseid=$requirementarray[$i];
        
        $coursedata=getCourseData($con,$courseid);
        
        $coursename=$coursedata['CourseName'];
        
        $coursetaken = NULL;
        $semestername = NULL;
        $grade = NULL;
        $credits = NULL;
        
        if(!strcmp($courseid,$studenttranscript[$courseid])) {
            $coursetaken="Yes";
            $studenttranscriptinfo=getStudentHistoryInfo($con,$studentid,$courseid);
            $semestername=$studenttranscriptinfo['SemesterName'] . " " . $studenttranscriptinfo['SemesterYear'];
            $grade=$studenttranscriptinfo['Grade'];
            $credits=$studenttranscriptinfo['Credits'];
            $globalcreditsearned += $credits;
            $totalclassestaken++;
            
            if(empty($grade)) {
                $semestername="CURRENT";
                $grade="IN PROGRESS";
            }
            
        } else {
            $coursetaken="No";
        }
        
        
        
        echo "<tr>
                <td>$courseid</td>
                <td>$coursename</td>
                <td>$coursetaken</td>
                <td>$semestername</td>
                <td>$grade</td>
                <td>$credits</td>
            </tr>";
            
        $totalclassesneeded++;
            
    }
    
    echo "<table>";
    
    $percentageclassescomplete=($totalclassestaken/$totalclassesneeded)*100;
    
    $percentagecreditscomplete=($globalcreditsearned/120)*100;
    
    echo "<h4>Percentage of Classes Complete: $percentageclassescomplete %</h4>
        <h4>Percentage of Credits Complete: $percentagecreditscomplete %</h4>";
    
}

function getStudentMajors($con,$studentid) {
    
    $query = "SELECT MajorID FROM student_major WHERE StudentID='$studentid'";
         
    $result = mysqli_query($con,$query) or die(mysql_error());
    
    $majorarray;

    for($counter=0;$row=mysqli_fetch_assoc($result);$counter++) {
        $majorarray[$counter]=$row['MajorID'];
    }
    
    return $majorarray;

}

function getStudentHistoryInfo($con,$studentid,$courseid) {
    
    $query="SELECT * FROM student_history NATURAL JOIN course_section NATURAL JOIN semester NATURAL JOIN course WHERE CourseID='$courseid' AND StudentID='$studentid'";
    
    $result = mysqli_query($con,$query) or die(mysql_error());
    
    $row=mysqli_fetch_assoc($result);
    
    return $row;
    
}

function getMajorRequirements($con,$majorid) {
    
    $requirementsarray;
    
    $query="SELECT CourseID FROM major_req WHERE MajorID='$majorid'";
    
    $result = mysqli_query($con,$query) or die(mysql_error());
    
    for($counter=0;$row=mysqli_fetch_assoc($result);$counter++) {
        $requirementsarray[$counter]=$row['CourseID'];
    }
    
    return $requirementsarray;
}

function getStudentHistoryAndEnrollment($con,$studentid) {
    
    $studenttranscriptarray;
    
    $query="SELECT CourseID FROM enrollment WHERE StudentID='$studentid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $courseid=$row['CourseID'];
        
        $studenttranscriptarray[$courseid] = $courseid;
        
    }
    
    $query2="SELECT CourseID FROM student_history WHERE StudentID='$studentid'";
    
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    
    for($counter2=0;$row2=mysqli_fetch_assoc($result2);++$counter2) {
        
        $courseid=$row2['CourseID'];
        
        $studenttranscriptarray[$courseid] = $courseid;
        
    }
    
    return $studenttranscriptarray;
    
}

function updateGradDepartment($con,$studentid) {
    
    $majorarray=getStudentMajors($con,$studentid);
    
    
    
    
}

function facultyAttendence($con,$facultyid) {
    
    $currentsemester=getCurrentSemester($con);
    
    if(!empty($currentsemester)) {
        
        $query="SELECT * FROM course_section WHERE FacultyID='$facultyid' AND SemesterID='$currentsemester'";
    
        $result=mysqli_query($con,$query) or die(mysql_error());
        
        $count = mysqli_num_rows($result);
        
        if($count>0) {
            
            for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
                
                echo "<form action='' method='post'><table class='table table-striped table-dark'>";
                
                $crn=$row['CRN'];
                $courseid=$row['CourseID'];
                $coursedata=getCourseData($con,$courseid);
                $coursename=$coursedata['CourseName'];
                $section=$row['Section'];
                $roomid=$row['RoomID'];
                $roomdata=getRoomData($con,$roomid);
                $roomname=$roomdata['BuildingName'] . " Room " . $roomdata['RoomNum'];
                $timeslotid=$row['TimeSlotID'];
                $timeslot=getTimeSlotData($con,$timeslotid);
                $semesterdata=getSemesterData($con,$currentsemester);
                $semesterstart=$semesterdata['SemStartDate'];
                $semesterend=$semesterdata['SemEndDate'];
                        
                echo "<tr>
                        <td>$courseid</td>
                        <td>$coursename</td>
                        <td>Section $section</td>
                        <td>$roomname</td>
                        <td>$timeslot</td>
                        <td>Start Date: $semesterstart</td>
                        <td>End Date: $semesterend</td>
                    </tr>";
                
                if(classToday($con,$crn)) {
                    
                    if(!attendenceSubmitted($con,$crn)) {
                        
                        date_default_timezone_set('America/New_York');
                        
                        $todaysdate=date("Y-m-d");
    	
    	                $todaysday = date('l', strtotime($todaysdate));
                        
                        echo "<tr><td></td><td>Attendence for<br>$todaysday, $todaysdate</td><td></td><td>
                            </td><td></td><td></td><td></td></tr>";
                        
                        $listofstudents=getSectionStudents($con,$crn);
                        
                        if((count($listofstudents))>0) {
                            
                            for($counter2=0;$counter2<count($listofstudents);$counter2++) {
                                
                                $studentid=$listofstudents[$counter2];
                                
                                $studentdata=getStudentData($con,$studentid);
                                
                                $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
                                
                                echo "<tr><td></td><td>Present: <input type='checkbox' name='studentarray[]' value='$studentid'>
                                    </td><td>$studentid</td><td>$studentname</td><td></td><td></td><td></td></tr>";
                                
                            }
                            
                            echo "<tr><td></td><td><input type='submit' name='submit' value='Submit'><input type='reset' name='reset' value='Reset'></form></td><td></td><td>
                            </td><td></td><td></td><td></td></tr>";
                            
                            $submitted=$_POST['submit'];

                            if($submitted) {
                                
                                $studentarray=$_POST['studentarray'];
                                
                                if(submitAttendence($con,$crn,$listofstudents,$studentarray,$todaysdate)) {
                                    echo "<tr><td></td><td></td><td></td><td>Attendence submitted!<br>(Please Refresh Page)</td><td></td><td></td><td></td></tr>";
                                }
                                
                            }
                            
                        }
                    
                    }
                } else {
                     echo "<tr><td></td><td>No Class Today</td><td></td><td></td><td></td><td></td><td></td></tr>";
                }
                
                echo "<tr><td></td><td><a href='FacultyAttendenceHistory.php?CRN=$crn'>
                    View History</td><td></td><td></td><td></td><td></td><td></td></tr></table>";
                    
            }
            
        }
    } else {
        echo "<p>No current semester.</p>";
    }
    
    
}

function getTimeSlotDays($con,$timeslotid) {
    
    $dayarray;
    
    $query="SELECT DayName FROM timeslot NATURAL JOIN timeslot_day NATURAL JOIN day WHERE TimeSlotID='$timeslotid'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    for($counter=0;$row=mysqli_fetch_assoc($result);++$counter) {
        
        $dayarray[$counter]=$row['DayName'];
    
    }
    
    return $dayarray;
}

function classToday($con,$crn) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
	
	$todaysday = date('l', strtotime($todaysdate));
	
	$crndata=getCourseSectionData($con,$crn);
	
	$semesterid=$crndata['SemesterID'];
	
	$semesterdata=getSemesterData($con,$semesterid);
	
	$semesterstart=$semesterdata['SemStartDate'];
	
	$semesterend=$semesterdata['SemEndDate'];
	
	if($semesterstart<=$todaysdate && $semesterend>=$todaysdate) {
	    
	    $timeslotid=$crndata['TimeSlotID'];
	    
	    $dayarray=getTimeSlotDays($con,$timeslotid);
	    
	    for($i=0;$i<count($dayarray);$i++) {
	        
	        if(!strcmp($todaysday,$dayarray[$i])) {
	            return true;
	        }
	        
	    }
	    
	}
	
	return false;
    
}

function attendenceSubmitted($con,$crn) {
    
    date_default_timezone_set('America/New_York');
    
    $todaysdate=date("Y-m-d");
    
    $query="SELECT * FROM attendence_history WHERE CRN='$crn' AND DateOfAttendence='$todaysdate'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $count = mysqli_num_rows($result);
    
    if($count>0) {
        return true;
    }
    
    return false;
    
}

function submitAttendence($con,$crn,$allstudents,$presentarray,$classdate) {
    
    $present;
    
    for($i=0;$i<count($allstudents);$i++) {
        
        $studentid=$allstudents[$i];
        
        for($j=0;$j<count($presentarray);$j++) {
            
            $presentid=$presentarray[$j];
            
            if(!strcmp($studentid,$presentid)) {
                $present=1;
                $j=count($presentarray);
            } else {
                $present=0;
            }
            
        }
        
        $query="INSERT INTO attendence_history (StudentID,CRN,DateOfAttendence,Attendence) VALUES ('$studentid','$crn','$classdate','$present')";
        
        $result=mysqli_query($con,$query) or die(mysql_error());
        
    }
    
    return true;
    
}

function getAttendenceHistory($con,$crn) {
    
    $query="SELECT * FROM attendence_history WHERE CRN='$crn'";
    
    $result=mysqli_query($con,$query) or die(mysql_error());
    
    $crndata=getCourseSectionData($con,$crn);
    
    $courseid=$crndata['CourseID'];
    $coursename=$crndata['CourseName'];
    $section=$crndata['Section'];
    $semesterid=$crndata['SemesterID'];
    $semesterdata=getSemesterData($con,$semesterid);
    $semestername=$semesterdata['SemesterName'] . " " . $semesterdata['SemesterYear'];
    
    echo "<p>Showing attendence history for $courseid $coursename Section $section $semestername:</p>";
    
    echo "<table class='table table-striped table-dark'>
        <tr>
            <th>Date of Attendence</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Attendence Record</th>
        </tr>";
    
    for ($counter=0;$row=mysqli_fetch_assoc($result);++$counter)
    {
        $studentid=$row['StudentID'];
        $date=$row['DateOfAttendence'];
        $present=$row['Attendence'];
        
        $studentdata=getStudentData($con,$studentid);
        $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
        
        if($present==1) {
            $present="Present";
        } else {
            $present="Absent";
        }
        
        echo "<tr><td>$date</td><td>$studentid</td><td>$studentname</td><td>$present</td></tr>";
        
    }
    
    echo "<table>";
    
}

function facultyViewStudentsInClass($con,$facultyid,$crn) {
    
    date_default_timezone_set('America/New_York');
    $todaysdate=date("Y-m-d");
    $crndata=getCourseSectionData($con,$crn);
    $courseid=$crndata['CourseID'];
    $coursedata=getCourseData($con,$courseid);
    $coursename=$coursedata['CourseName'];
    $section=$crndata['Section'];
    $roomid=$crndata['RoomID'];
    $roomdata=getRoomData($con,$roomid);
    $roomname=$roomdata['BuildingName'] . " Room " . $roomdata['RoomNum'];
    $timeslotid=$crndata['TimeSlotID'];
    $timeslot=getTimeSlotData($con,$timeslotid);
    $semesterid=$crndata['SemesterID'];
    $semesterdata=getSemesterData($con,$semesterid);
    $semesterstart=$semesterdata['SemStartDate'];
    $semesterend=$semesterdata['SemEndDate'];
    $gradeduedate=$semesterdata['GradeDueDate'];
    
    echo "<h4>Viewing $crn $courseid $coursename</h7>
        <form action='' method='post'><table class='table table-striped table-dark'>";
    
    echo "<tr>
            <td>$courseid</td>
            <td>$coursename</td>
            <td>Section $section</td>
            <td>$roomname</td>
            <td>$timeslot</td>
            <td>Start Date: $semesterstart</td>
            <td>End Date: $semesterend</td>
        </tr>";
    
    $listofstudents=getSectionStudents($con,$crn);
    
    if((count($listofstudents))>0) {
        
        echo "<tr><td></td><td>
                </td><td></td><td></td><td></td><td></td><td></td></tr>";
        
        echo "<tr><td></td><td>Students:
                </td><td>Grade:</td><td>(Grade Due Date: $gradeduedate)</td><td></td><td></td><td></td></tr>";
        
        for($counter2=0;$counter2<count($listofstudents);$counter2++) {
            
            $studentid=$listofstudents[$counter2];
            
            $studentdata=getStudentData($con,$studentid);
            
            $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
            
            echo "<tr><td></td><td>$studentid $studentname
                </td><td>";
                
            echo "<select id='$studentid' name='$studentid'>";
            
            if($todaysdate>$semesterend && $todaysdate<=$gradeduedate) {
                
                echo"<option value='' selected disabled hidden>Select a Grade</option>
                    <option value='A+'>A+</option>
                    <option value='A'>A</option>
                    <option value='A-'>A-</option>
                    <option value='B+'>B+</option>
                    <option value='B'>B</option>
                    <option value='B-'>B-</option>
                    <option value='C+'>C+</option>
                    <option value='C'>C</option>
                    <option value='C-'>C-</option>
                    <option value='D+'>D+</option>
                    <option value='D'>D</option>
                    <option value='D-'>D-</option>
                    <option value='F'>F</option>
                    <option value='W'>W</option>
                    <option value='IC'>IC</option>
                </select><br>";
            
            } else {
                echo "<option value='' selected disabled hidden>Semester in progress</option>";
            }   
                
            echo "</td><td></td><td></td><td></td><td></td></tr>";
            
        }
        
    }
        
    echo "</table>";
    
    if($todaysdate>$semesterend && $todaysdate<=$gradeduedate) {
        echo "<p><input type='submit' name='submit' value='Submit Grades'><input type='reset' name='reset' value='Reset Grades'></p>";
        
    }
    
    echo "</form>";
    
    if($todaysdate>$semesterend && $todaysdate<=$gradeduedate) {
        
        $submitted=$_POST['submit'];

        if($submitted) {
            
            for($i=0;$i<count($listofstudents);$i++) {
                
                $studentidforgrade=$listofstudents[$i];
                
                $grade=$_POST[$studentidforgrade];
            
                if(submitGrade($con,$crn,$studentidforgrade,$grade)) {
                    
                    echo "<p>Grade submitted successfully for $studentid</p>";
                    
                }
            }
        }
        
    }

}

function facultyViewStudentsInClassWithGradesDue($con,$facultyid,$crn) {
    
    date_default_timezone_set('America/New_York');
    $todaysdate=date("Y-m-d");
    $crndata=getCourseSectionData($con,$crn);
    $courseid=$crndata['CourseID'];
    $coursedata=getCourseData($con,$courseid);
    $coursename=$coursedata['CourseName'];
    $section=$crndata['Section'];
    $roomid=$crndata['RoomID'];
    $roomdata=getRoomData($con,$roomid);
    $roomname=$roomdata['BuildingName'] . " Room " . $roomdata['RoomNum'];
    $timeslotid=$crndata['TimeSlotID'];
    $timeslot=getTimeSlotData($con,$timeslotid);
    $semesterid=$crndata['SemesterID'];
    $semesterdata=getSemesterData($con,$semesterid);
    $semesterstart=$semesterdata['SemStartDate'];
    $semesterend=$semesterdata['SemEndDate'];
    $gradeduedate=$semesterdata['GradeDueDate'];
    
    echo "<h4>Viewing $crn $courseid $coursename</h7>
        <form action='' method='post'><table class='table table-striped table-dark'>";
    
    echo "<tr>
            <td>$courseid</td>
            <td>$coursename</td>
            <td>Section $section</td>
            <td>$roomname</td>
            <td>$timeslot</td>
            <td>Start Date: $semesterstart</td>
            <td>End Date: $semesterend</td>
        </tr>";
    
    $listofstudents=getSectionStudents($con,$crn);
    
    if((count($listofstudents))>0) {
        
        echo "<tr><td></td><td>
                </td><td></td><td></td><td></td><td></td><td></td></tr>";
        
        echo "<tr><td></td><td>Students:
                </td><td>Grade:</td><td>(Grade Due Date: $todaysdate)</td><td></td><td></td><td></td></tr>";
        
        for($counter2=0;$counter2<count($listofstudents);$counter2++) {
            
            $studentid=$listofstudents[$counter2];
            
            $studentdata=getStudentData($con,$studentid);
            
            $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
            
            echo "<tr><td></td><td>$studentid $studentname
                </td><td>";
                
            echo "<select id='$studentid' name='$studentid'>";
            
            if($todaysdate==$todaysdate) {
                
                echo"<option value='' selected disabled hidden>Select a Grade</option>
                    <option value='A+'>A+</option>
                    <option value='A'>A</option>
                    <option value='A-'>A-</option>
                    <option value='B+'>B+</option>
                    <option value='B'>B</option>
                    <option value='B-'>B-</option>
                    <option value='C+'>C+</option>
                    <option value='C'>C</option>
                    <option value='C-'>C-</option>
                    <option value='D+'>D+</option>
                    <option value='D'>D</option>
                    <option value='D-'>D-</option>
                    <option value='F'>F</option>
                    <option value='W'>W</option>
                    <option value='IC'>IC</option>
                </select><br>";
            
            } else {
                echo "<option value='' selected disabled hidden>Semester in progress</option>";
            }   
                
            echo "</td><td></td><td></td><td></td><td></td></tr>";
            
        }
        
    }
        
    echo "</table>";
    
    if($todaysdate==$todaysdate) {
        echo "<p><input type='submit' name='submit' value='Submit Grades'><input type='reset' name='reset' value='Reset Grades'></p>";
        
    }
    
    echo "</form>";
    
    if($todaysdate==$todaysdate) {
        
        $submitted=$_POST['submit'];

        if($submitted) {
            
            for($i=0;$i<count($listofstudents);$i++) {
                
                $studentidforgrade=$listofstudents[$i];
                
                $grade=$_POST[$studentidforgrade];
            
                if(submitGrade($con,$crn,$studentidforgrade,$grade)) {
                    
                    echo "<p>Grade submitted successfully for $studentid</p>";
                    
                }
            }
        }
        
    }
    
}

function submitGrade($con,$crn,$studentidforgrade,$grade) {
    
    $crndata=getCourseSectionData($con,$crn);
    $courseid=$crndata['CourseID'];
    $semesterid=$crndata['SemesterID'];
    
    $query = "INSERT INTO `quantify`.`student_history` (`StudentID`, `CRN`, `CourseID`, `Grade`, `SemesterID`) VALUES ('$studentidforgrade', '$crn', '$courseid', '$grade', '$semesterid');";
    
    if($result=mysqli_query($con,$query)) {
        return true;
    } else {
        die(mysql_error());
        return false;
    }

}

function viewAllAdvisors($con) {
    
    $query="SELECT DISTINCT FacultyID FROM advisor";
    
    $result=mysqli_query($con,$query);
    
    echo "<h4>List of All Advisors</h4>
        <table class='table table-striped table-dark'>
        <tr>
            <th>Faculty ID</th>
            <th>Name</th>
            <th>Department</th>
        </tr>";
    
    for($i=0;$row=mysqli_fetch_assoc($result);$i++) {
        
        $facultyid=$row['FacultyID'];
        $facultydata=getFacultyData($con,$facultyid);
        $facultyname=$facultydata['FirstName'] . " " . $facultydata['LastName'];
        $facultydept=$facultydata['DeptName'];
        
        echo "<tr>
                <td><a href='FacultyListOfAdvisees.php?FacultyID=$facultyid'>$facultyid</a></td>
                <td>$facultyname</td>
                <td>$facultydept</td>
            </tr>";
        
    }
    
    
}

function viewAllAdvisorsAsAdmin($con) {
    
    $query="SELECT DISTINCT FacultyID FROM advisor";
    
    $result=mysqli_query($con,$query);
    
    echo "<h4>List of All Advisors</h4>
        <table class='table table-striped table-dark'>
        <tr>
            <th>Faculty ID</th>
            <th>Name</th>
            <th>Department</th>
        </tr>";
    
    for($i=0;$row=mysqli_fetch_assoc($result);$i++) {
        
        $facultyid=$row['FacultyID'];
        $facultydata=getFacultyData($con,$facultyid);
        $facultyname=$facultydata['FirstName'] . " " . $facultydata['LastName'];
        $facultydept=$facultydata['DeptName'];
        
        echo "<tr>
                <td><a href='AdvisorListOfAdvisees.php?FacultyID=$facultyid'>$facultyid</a></td>
                <td>$facultyname</td>
                <td>$facultydept</td>
            </tr>";
        
    }
    
    
}

?>
