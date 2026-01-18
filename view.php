<?php
$conn = mysqli_connect("localhost","root","","manyusitech_contacts");
$result = mysqli_query($conn,"SELECT * FROM whatsapp_contacts");
echo "<h2>Contacts List</h2>";
<link rel="stylesheet" href="css/style.css">
echo "<table border='1'><tr><th>Name</th><th>Phone</th><th>Group</th><th>WhatsApp Link</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['group_name']}</td>
        <td><a href='https://wa.me/{$row['phone']}' target='_blank'>Chat</a></td>
    </tr>";
}
echo "</table>";
?>