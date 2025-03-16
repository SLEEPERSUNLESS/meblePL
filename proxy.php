<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost", "root", "", "furniture_database");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM furniture WHERE Id LIKE '%$search%' OR cena LIKE '%$search%' OR kolor LIKE '%$search%' OR rodzaj LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $furniture = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $furniture[] = $row;
        }
    }
    echo json_encode($furniture);
}
mysqli_close($conn);
?>
