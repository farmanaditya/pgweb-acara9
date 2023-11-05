<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "pgweb-acara8";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tabel1";
$result = $conn->query($sql); 


$sql = "SELECT * FROM tabel1 LIMIT 2"; // Add LIMIT 2 to get only 2 rows
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    echo "<table border='1px'><tr>
            <th>Kecamatan</th>
            <th>Luas</th>
            <th>Jumlah Penduduk</th>
            <th>longitude</th>
            <th>latitude</th>";

    // Output data of each row 
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["kecamatan"] . "</td><td>" .
            $row["luas"] . "</td><td align='right'>" .
            $row["jumlah_penduduk"] . "</td><td>" .
            $row["longitude"] . "</td><td>" .
            $row["latitude"] . "</td></tr>";
    }


    
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close(); 
?>