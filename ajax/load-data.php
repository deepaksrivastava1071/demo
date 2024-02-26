<style>
    .dlt-btn {
    background: red;
    color: #fff;
    padding: 4px 10px;
    border-radius: 3px;
    cursor: pointer;
}
</style>
<?php

$conn = mysqli_connect("localhost","root","","test") or die("connection failed");

$sql = "SELECT * FROM student";

$result = mysqli_query($conn,$sql) or die("SQL Queary failed");
$output = "";
if(mysqli_num_rows($result) > 0){
$output = '<table border = "1" width = "100%" cellspacing = "0" cellpadding = "10px">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
            </tr>';

    while($rows = mysqli_fetch_assoc($result)){

        $output .= "<tr><td>{$rows['id']}</td><td>{$rows['firstname']} {$rows['lastname']}</td><td><button class = 'dlt-btn' data-id = '{$rows['id']}'>Delete</button></td></tr>";
    }

    $output .= "</table>";

    echo $output;

}

?>
