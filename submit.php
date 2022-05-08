        <html>
<head></head>
<body bgcolor="aqua"><center></b><br><br>

<?php
$Email_Id = filter_input(INPUT_POST, 'Email_Id');
$Password = filter_input(INPUT_POST, 'Password');
$First_Name = filter_input(INPUT_POST, 'First_Name');
$Last_Name = filter_input(INPUT_POST, 'Last_Name');
$EmailId = filter_input(INPUT_POST, 'EmailId');
$Enter_Password = filter_input(INPUT_POST, 'Enter_Password');
$Confirm_Password = filter_input(INPUT_POST, 'Confirm_Password');

if (!empty($First_Name)){
    if (!empty($Last_Name)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "hospital";
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO login_registration (Email_Id, Password, First_Name, Last_Name, EmailId, Enter_Password, Confirm_Password)values ('$Email_Id','$Password', '$First_Name', '$Last_Name', '$EmailId', '$Enter_Password', '$Confirm_Password')";
            if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
            }else{
                echo "Error: ". $sql ."". $conn->error;
            }
            $conn->close();
        }
    }else{echo 'Last Name Empty';}
}else{echo 'First Name Empty';}
// }
// else{
// echo "Email Id should not be empty";
// die();
// }
// }
// else{
// echo "First Name should not be empty";
// die();
// }
?>

</center>
</body>
</html>