<?php
include 'connect.php';
session_start();
$q = intval($_GET['q']);

$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,$dbname);
$sql="SELECT * FROM user WHERE user_id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table class=\"table\">
<tr>
<th>User Id</th>
<th>Name</th>
<th>Email</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['user_id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>