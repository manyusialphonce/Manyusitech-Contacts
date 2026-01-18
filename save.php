<?php
$conn = mysqli_connect("localhost","root","","manyusitech_contacts");
$name = $_POST['name'];
$phone = $_POST['phone'];
$group = $_POST['group'];

mysqli_query($conn,"INSERT INTO whatsapp_contacts(name,phone,group_name) 
VALUES('$name','$phone','$group')");

echo "Contact saved! <a href='index.html'>Go Back</a>";
?>