<?PHP
  include 'conn.php';
  session_start();
  if(!isset($_SESSION['userid']))
  {header('location:index.php');}
  elseif ($_SESSION['userid']!="admin")
  {
    header('location:index.php');
  }else
  {
    $d=$_SESSION['userid'];
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>ORDER ENTRIES</title>
<link rel="icon" type="image/png" href="images/aitam.ico"/>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="style/style1.css">
<script src="bootstrap/boot.js"></script>
<script src="bootstrap/boot0.js"></script>
<link rel="stylesheet" href="bootstrap/boot2.css">
<script src="bootstrap/boot3.js"></script>
<script src="bootstrap/boot4.js"></script>
</head>
<style type="text/css">
@media screen and (min-width: 1080px) {
    html {
        overflow-x: hidden;
    }
}
  body{

  }
.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}


#sidebar-container {
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
    width: 230px;
}
.sidebar-collapsed {
    width: 60px;
}

/* Menu item*/
#sidebar-container .list-group a {
    height: 50px;
    color: white;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
}
.sidebar-submenu {
    font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
    background-color: #333;
    height: 35px;
}
.sidebar-separator {
    background-color: #333;
    height: 25px;
}
.logo-separator {
    background-color: #333;    
    height: 60px;
}

/* Closed submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
  /*----------------------------------------------------------------*/
  /* 
Generic Styling, for Desktops/Laptops 
*/
table { 
  width: 114%; 
  border-collapse: collapse;
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}



/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

  .responsive-table-input-matrix {
    display: block;
    position: relative;
    width: 100%;

    &:after {
      clear: both;
      content: '';
      display: block;
      font-size: 0;
      height: 0;
      visibility: hidden;
    }

    tbody {
      display: block;
      overflow-x: auto;
      position: relative;
      white-space: nowrap;
      width: auto;


      tr {
        display: inline-block;
        vertical-align: top;

        td {
          display: block;
          text-align: center;

          &:first-child {
            text-align: left;
          }
        }
      }
    }

    thead {
      display: block;
      float: left;
      margin-right: 10px;

      &:after {
        clear: both;
        content: "";
        display: block;
        font-size: 0;
        height: 0;
        visibility: hidden;
      }

      th:first-of-type {
        height: 1.4em;
      }

      th {
        display: block;
        text-align: right;

        &:first-child {
          text-align: right;
        }
      }
    }
  }
}


/* Transparent
/* 
/*.navbar-default {
  background: none;
  border: none;
}*/

@media (min-width: 768px) {
  .navbar-nav {
    width: 100%;
    text-align: center;
  }
  .navbar-nav > li {
    float: none;
    display: inline-block;
  }
  .navbar-nav > li.navbar-right {
    float: right !important;
  }
}

@media (min-width: 768px) {
  .navbar-nav1 {
    width: 100%;
    text-align: center;
  }
  .navbar-nav1 > li {
    float: right;
    display: inline-block;
    color: silver !important;
  }
}
  .button{
    display: block;
    color: #333;
    font-weight: bold;
    cursor: pointer;
    outline: none;
  }
  .button:hover 
  {
    background-color: grey;
    color:white;
    font-weight: bold;
    font-size: 18px;
  }



  input[type=text], select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 input[type=date]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit]{
  width: 99%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}


</style>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button id="toggle2" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="menu2">

    <h5><ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="request.php">Order</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="accept.php">Accept</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="reject.php">Reject</a>
      </li><li class="nav-item">
       <a class="nav-link " href="registration.php">Registration</a>
      </li>
    </ul></h5>
    <div class="navbar-nav">
    <ul class="navbar-nav1">
    
      <li class="nav-item">
         <?PHP echo"<h2 style='color:#f5f6f5;'><i class='fa fa-user'>&nbsp".$d."</h2></i><a class='nav-link' href='logout.php'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogout</a>";?>
      </li>
    </ul>
</div>
  </div>

</nav>
<br>
</header>
<body>

<div class="row">

    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">

        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            </li>
           <a href="#" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                  <span id="collapse-text" class="menu-collapsed"><i class="fa fa-fort-awesome" aria-hidden="true">&nbsp&nbsp&nbsp<b>A I T A M</b></i></span>
                </div>
            </a>
            <a id = "toggle" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content"style="cursor: pointer !important;">
                    <span class="fa fa-dashboard fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Dashboards</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id="menu" class="collapse sidebar-submenu">
                <a href="inandout.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">INWARD</span>
                </a>
                <a href="outandin.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">OUTWARD</span>
                </a>
            </div>
            <a id = "toggle1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content" style="cursor: pointer !important;">
                    <span class="fa fa-university fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Departments</span>
                    <span class="submenu-icon ml-auto" ></span>
                </div>
            </a>
     <div id="menu1" class="collapse sidebar-submenu">
                <a href="ecedepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">ECE</span>
                </a>
                <a href="itdepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">IT</span>
                </a>
                <a href="eeedepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">EEE</span>
                </a>
                <a href="csedepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">CSE</span>
                </a>
                <a href="mechdepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">MECHANICAL</span>
                </a>
                <a href="civildepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">CIVIL</span>
                </a>
                <a href="diplomadepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">DIPLOMA</span>
                </a>
                <a href="mbadepartment.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">MBA</span>
                </a>
            </div>
              
        </ul>
    </div>
  <!------------------------------------------------------------------------>
  <!------------------------------------------------------------------------>
  <div class="col">
     <div><hr>
      <h1 class="bg-dark" style="color:#f5f6f5;
  display: inline-block; margin: 0;
  padding: 0.5em 1em;
  width:25%; margin-left: 34%;
  font-size: 1.25em;
  text-align: center;">ORDER ENTRIES</h1><hr><br>
<form action="order.php" method="post">
<table class="responsive-table-input-matrix" style="width: 100% !important;">
    <thead>
    <tr>
      <th>DATE</th>
      <th>FACULTY ID</th>
      <th>ITEM</th>
      <th>QUANTITY</th>
      <th>EXPECTED PRICE</th>
      <th>PRIORITY</th>
      
    </tr>
    </thead>
    <tbody>

    <tr>        
      <td><input type="date" name="date"></td>
      <td><input type="text" name="facid"></td>
      <td><input type="text" name="item"></td>
      <td><input type="text" name="qty"></td>
      <td><input type="text" name="expp"></td>
      <td><select name="priority">
        <option value="PRIMARY">
          PRIMARY
        </option>
        <option value="SECONADARY">SECONADARY</option>
      </select></td>
    </tr>
  
    </tbody>
  </table>

  <br>
  <center><input class="button" type="submit"></center>
  </div>
</div></form>

</div>

<script type="text/javascript">
  $(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
      });
});
</script>
<!-------------------------------------------------------------->
<script type="text/javascript">
$(document).ready(function(){
// Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
$("#toggle").click(function() {
  $(this).toggleClass("on");
  $("#menu").slideToggle();
});
$("#toggle1").click(function() {
  $(this).toggleClass("on");
  $("#menu1").slideToggle();
});
$("#toggle2").click(function() {
  $(this).toggleClass("on");
  $("#menu2").slideToggle();
});

});
</script>

</body>
<br>
<footer class="bg-dark" style="width:100% !important; color: white;">  <center><br><p><img src="images/aitamlogo.png" width="5%"/>&nbsp&nbsp&nbsp&nbspDesigned and Developed by Developers Club, <a href="http://www.aitamsac.in">AITAM SAC</a></p><br></center></footer>
</html>