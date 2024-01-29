<?php 

session_start();

	if(!isset($_SESSION['patientlogin'])){
		header("Location: patientlogin.php");
	}
    if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: patientlogin.php");
	}
?>


<title>make appointment</title>
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
 <style>
       body {
            font-family: Arial, sans-serif;
            background-color: skyblue;
            padding: 20px;
            border-radius: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .class1{
            max-width: 590px;
            padding: 05px;
            margin-top: 10px;
        }
        .class2{
            max-width: 600px;
            padding: 05px;
        }

        h2 {
            text-align: left;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            color:blue;
        }
        button[type="submit"] {
            background-color: pink;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width:40%;
            font-weight: bold;
        }
        button[type="submit"]:hover {
            background-color: skyblue;
            color:black;
            width:40%;
        }
       
    </style>
   
</head>
<body>
    <div class="container">
        <h2>Appointment Form</h2>
        
        <form action="connect.php" method="post" id="appointmentform">
            <div class="class1">
            <label for="name">Name :</label>
            <input type="text" id="name" name="name" required>
        </div>
            <div class="class1">

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>

            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required placeholder="Enter 10 Digit Number">
            <div class="class1">
                <label for="date">Date :</label>
            <input type="date" id="date" name="date" required>
            </div>

            <div class="class1">
                <label for="time">Time :</label>
            <input type="time" id="time" name="time" required>

            </div>
            <div class="class1">
                <label for="doctor">Select Doctor :</label>
                <select id="doctor" name="doctor" required onchange="updateLabel()">
                    <option value="satish">Dr.Satish Salunkhe (Child Specialist)</option>
                    <option value="suraj">Dr.Suraj Shirsath(Ayruveda)</option>
                    <option value="nilesh">Dr.Nilesh mhaskar(pulmonologist)</option>
                    <option value="surendra">Dr.surendra patil(pulmonologist)</option>
                    <option value="satish">Dr.chudaman Patil(pulmonologist)</option>
                    <option value="suresh">Dr.Suresh Joshi (Neaurologist)</option>
                    <option value="subhash">Dr. Subhash Bhamre(Cancer Specialist)</option>
                    <option value="devidas">Dr.Devidas Bhadane(Dermatology)</option>
                    <option value="sagar">Dr.Sagar Aher(Radiology)</option>
                </select> 
                
            </div>
            <div class="class2">


            <label for="purpose">Purpose of Appointment:</label>
            
            <textarea id="purpose" name="purpose" rows="2"></textarea><br><br>
            <h4> Note -: Appointment time will change according to patients. <br>
            <br>
                        Also Make Sure that if No Any Doctor is present then you can Go with our Virtual Assistent.
            </h4>
        </div>

            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
