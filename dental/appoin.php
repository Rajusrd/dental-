<?php
    $conn = mysqli_connect('localhost','root','','contact_db');

    if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['mobile'];
    $date = $_POST['dates'];

    $INSERT = mysqli_query($conn,"INSERT INTO contact_form(username,email,mobile,dates) VALUES ('$name','$email','$number','$date')") or die('query failed');
    echo '<script "text/javascript">';
    echo 'alert("Appointment made Successfully")';
    echo '</script>';
    echo'<script>location.replace("index.php")</script>';
    }else{
        echo '<script "text/javascript">';
        echo 'alert("All fields required")';
        echo '</script>';
        echo'<script>location.replace("appoin.php")</script>';
        die();
    }
?>