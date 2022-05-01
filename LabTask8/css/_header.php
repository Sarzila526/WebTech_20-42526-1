<!DOCTYPE html>
<html>
<head>
  <style>
    .nav {
	list-style-type: none;
	margin: 0;
	top:0;
	padding: 0;
	position: fixed;
	background-color: #F2FFF2;
	width: 100%;
    }
	h2 {
	font-family: "Lucida Handwriting", "Courier New", monospace;
	color: #008000;
	padding: 4px;
	letter-spacing: 1px;
	}
	li {
	float: left;
	}
	.nav a , button {
	display: block;
	color: #808080;
	text-align: center;
	padding: 14px 24px;
	font-size: 17px;
	text-decoration: none;
	overflow: hidden;
	}
	.nav a:hover, button:hover {
	background: #A1F1A1;
    color: #008000;
	border-bottom: 2.5px solid #008000;
    }
	.dropdown-content a:hover{
	background: #A1F1A1;
    color: #008000;
    }
	button {
	background-color: #F2FFF2;
	margin: 0;
	border: 0;
	padding-top: 0;
	}
	.dropdown {
	padding: 14px 24px;
	background-color: #F2FFF2;
	text-decoration: none;
	overflow: hidden;
    }
	.dropdown-content { 
	display: none;
	position: absolute;
	width: 120px;
	background-color: #F2FFF2;
	}
	.dropdown-content a {
	float: none;
	padding: 14px 20px;
	text-decoration: none;
	display: block;
	}
	.dropdown:hover .dropdown-content {
	display: block;
	}
  </style>
</head>

<body>
<header>
<div class="nav">
    <li> <img src="logo.jpg" height="88px" width="100px"> </li>
	<li> <h2> MeditateLife </h2> <li>
	<li style="float:right"> &nbsp &nbsp &nbsp </li>
	<li style="float:right"><a href="#"> Contact </a></li>
	<li style="float:right"><a href="#"> Register </a></li>
	<li style="float:right"><a href="login.php"> Login </a></li>
	<li style="float:right">
	<div class="dropdown"> <button> Services </button>
	<div class="dropdown-content" name="Services ">
	  <br>
      <a href="schedule.php">Weekly Meditation Course</a>
	  <a href="schedule.php">Free Counseling</a>
	  <a href="schedule.php">Personal Consultation</a>
    </div> </div> </li>	
	<li style="float:right">
	<div class="dropdown"> <button> About Us </button>
	<div class="dropdown-content" name="About US">
	  <br>
      <a href="#">Board of Directors</a>
	  <a href="#">Meditation Instructor</a>
	  <a href="#">Mission</a>
	  <a href="#">Vission</a>
    </div> </div> </li> 
	<li style="float:right"><a href="#"> Home </a></li>
</div>
</header>
</body>
</html>
