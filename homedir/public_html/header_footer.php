<?php


function htmlheader($color = NULL){

if (isset($_SESSION['UserType'])){

    if ($_SESSION['UserType'] == 'Admin') {
        $home = "AdminHomePage.php";
    }
    else if ($_SESSION['UserType'] == 'Student') {
        $home = "StudentHome.php";
    }
    else if ($_SESSION['UserType'] == 'Faculty') {
        $home = "FacultyHome.php";
    }
    else if ($_SESSION['UserType'] == 'Research Staff') {
        $home = "researchhome.php";
    }
}
else {
    $home = "index.html";
}

if ($color == NULL) {
    $body_color = 'w3-bar-block';
}
else {
    $body_color = $color;
}


  

}


function htmlheader_root($color = NULL){
        if ($_SESSION['UserType'] == 'Admin') {
  $home = "AdminHomePage.php";
}
else if ($_SESSION['UserType'] == 'Student') {
  $home = "StudentHome.php";
}
else if ($_SESSION['UserType'] == 'Faculty') {
  $home = "FacultyHome.php";
}
else if ($_SESSION['UserType'] == 'Research staff') {
  $home = "researchhome.php";
}
else
{
    $home='index.html';
}




function htmlfooter(){
Echo "<script>
function w3_open() {
  document.getElementById('main').style.marginLeft = '18%';
  document.getElementById('mySidebar').style.width = '18%';
  document.getElementById('mySidebar').style.display = 'block';
}
function w3_close() {
  document.getElementById('main').style.marginLeft = '0%';
  document.getElementById('mySidebar').style.display = 'none';
}


/***Function to open/close mobile sidebar ***/
function toggleSideBarMobile() {
	myMenu.classList.add('menu--animatable');	
	if(!myMenu.classList.contains('menu--visible')) {		
		myMenu.classList.add('menu--visible');
	} else {
		myMenu.classList.remove('menu--visible');		
	}	
}

function OnTransitionEnd() {
	myMenu.classList.remove('menu--animatable');
}

var myMenu = document.querySelector('.menu');
var closeButton = document.getElementById('close-button');
myMenu.addEventListener('transitionend', OnTransitionEnd, false);
//closeButton.addEventListener('click', toggleClassMenu, false);
/***Function to open/close mobile sidebar ***/

function open_dropdown() {
    var x = document.getElementById('dropdown');
    if (x.className.indexOf('w3-show') == -1) {
        x.className += ' w3-show';
    } else { 
        x.className = x.className.replace(' w3-show', '');
    }
}
</script>
</body>
</html>";
}

}
?>
