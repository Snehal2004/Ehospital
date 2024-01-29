
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$time = $_POST['time'];
$doctor = $_POST['doctor'];
$purpose = $_POST['purpose'];

//database connection
$conn=new mysqli('localhost','root','1234','ehospital');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into appointment(name,email,mobile,date,time,doctor,purpose)
    values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $name, $email, $mobile, $date, $time, $doctor, $purpose);
        if ($stmt->execute()) {
            echo '<script>alert("Data inserted successfully")</script>';
            header("Location: patientdashboard.php");
        } else {
            echo 'Error: ' . $stmt->error;
        }
        
        // Close the statement and connection
        $stmt->close();
        $conn->close();
        exit();
    }
?>


 