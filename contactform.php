<?php
$conn = mysqli_connect("localhost", "root", "", "echo") or die(mysqli_error());
if((isset($_POST['submit']))) {
    $Name = $conn->real_escape_string($_POST['name']);
    $Email = $conn->real_escape_string($_POST['email']);
    $Phone = $conn->real_escape_string($_POST['contact']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $comments = $conn->real_escape_string($_POST['text']);
    $sql = "INSERT INTO contactus (name, email, phone, subject, text) VALUES ('" . $Name . "','" . $Email . "', '" . $Phone . "', '" . $subject . "', '" . $comments . "')";
    if(!$result = $conn->query($sql)) {
        die('Error occurred [' . $conn->error . ']');
    }
    header("Location:contact.php?status=ok");
}