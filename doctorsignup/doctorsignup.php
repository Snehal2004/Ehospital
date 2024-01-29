<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>doctor Signup </title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
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
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
form{
    height: 600px;
    width: 450px;
    background-color: white;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 54%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
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
    height: 40px;
    width: 100%;
    border: 3px solid #ccc;
   
    padding: 0 10px;
    margin-top: 2px;
    font-size: 14px;
    font-weight: 300;}

    
::placeholder{
    color: black;
}
button{
    margin-top: 14px;
    width: 100%;
    background-color:#35d7ff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
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
.logo{
  width:150px;
  cursor:pointer;
 margin-left:5px;
 height:150px;
}
.container{
  width:100%;
  height:100vh;
  
}
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
  color:darkgreen;
  width:125px;
  display:block;
  padding:27px 9px;
  margin bottom :5px;
  font-weight:bold;
  font-family:arial;
}
.navbar a:hover{
  background:white;

}
@media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
@media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
  }
.topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }


    

</style>
</head>
<body>

<div>
	<?php


	
	?>	
</div>
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

<div>
	<form action="doctorsignup.php" method="post" >
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h3>Register Here</h3>
					
					<hr class="mb-3">
					<label for="username"><b>Doctor Name</b></label>
					<input class="form-control" id="username" type="text" name="username" required>

					

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

          <label for="email"><b>Email</b></label>
					<input class="form-control" id="email"  type="text" name="email" required>

					<label for="password1"><b>Password</b></label>
					<input class="form-control" id="password1"  type="password" name="password1" required>



					<hr class="mb-3">
					<button  class="btn btn-primary" id="Signup" name="Signup" type="submit">Signup</button>
				</div>
        <a href= "http://localhost/ehospital/doctorlogin/doctorlogin.php">I have already account</a>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script type="text/javascript">
	$(function()
    {
		    $('#Signup').click(function(e){

			    var valid = this.form.checkValidity();

	    if(valid){

        var username 	= $('#username').val();
			  var phonenumber = $('#phonenumber').val();
        var email=$('#email').val();
			  var password1	= $('#password1').val();

        e.preventDefault();	

        $.ajax
        ({
					type: 'POST',
					url: 'process.php',
					data: {username: username,phonenumber: phonenumber,email:email,password1: password1},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text':data,
								'type': 'success'
					})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
              
								})
              }
});


        
        
      }else{
        
      }
        
			
    });
				});
        
</script>





  


</body>
</html>