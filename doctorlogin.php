<?php 

	session_start();
	
	if(isset($_SESSION['doctorlogin'])){
		header("Location: index.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Doctor Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{

  
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0px 78px;
    background-image: url(images/dt.jpg);
    background-color:skyblue;
}

.logo{
 width:150px;
 cursor:pointer;
 margin-left:5px;
 height:150px;
}
.container{
  width:100%;
  height:100vh;}
.navbar{
  height:18%;
  display:flex;
}
.navbar ul{
  list-style:none;
  padding:0;
  margin-top:1px;
  text-align:right;
}
nav{
  flex:1;
}

.navbar li{
  display:inline-block;
}
.navbar a{
  text-decoration:none;
  color:black;
  width:125px;
  display:block;
  padding:27px 9px;
  font-weight:bold;
  font-family:arial;
}
.navbar a:hover{
  background:white ;

}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: white;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 55%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;}

form *{
    font-family: 'Poppins',sans-serif;
    
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    color:blue;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
    color:#2832c2;
}
input[type=text], input[type=password]{
    display: block;
    height: 50px;
    width: 100%;
    background-color: white;
    border: 3px solid #ccc;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;}

    
::placeholder{
    color: black;
    
}
button{
    margin-top: 50px;
    width: 100%;
    background-color:#35d7ff;
    color: #080710;
    padding: 15px 0;
    font-size: 20px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
  </style>
</head>
<body>

  

<div class="container">
<div class="navbar">
<img src="images/logo.png" class="logo">
<nav>
  <ul>
        <li style="text-align: center;"><a href="http://localhost/ehospital/home.html">Home</a></li>
        <li style="text-align: center;"><a href="http://localhost/ehospital/stafflogin/stafflogin.php">Staff login</a></li>
        <li style="text-align: center;"><a href="http://localhost/ehospital/patientlogin/patientlogin.php">Patient login</a></li>
        <li style="text-align: center;"><a href="http://localhost/ehospital/doctorlogin/doctorlogin.php">Doctor login</a></li>
        
        
  </ul>
  </nav>

  </div>
  </div>

  
 <form>

<h3>Doctor-Login </h3>
      <hr class="mb-3">
					<label for="username"><b>Doctor Name</b></label>
					<input class="form" id="username" type="text" name="username" required>

          <label for="password1"><b>Password</b></label>
					<input class="form" id="password1"  type="password" name="password1" required>
					<hr class="mb-3">
					<button  class="btn btn-primary" id="Signup" name="Signup" type="submit">Signup</button>

					<a href="http://localhost/ehospital/doctorsignup/doctorsignup.php">Create an account</a>
       
        
    </form>
    

    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
            crossorigin="anonymous">
    </script>

    <script >
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>

    <script>
        $(function(){
		$('#Signup').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password1 = $('#password1').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password1: password1},
				success: function(data){
					alert(data);
					if($.trim(data) === "1"){
						setTimeout(' window.location.href ="index.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
      


      </script>

</body>
</html>









