<?php 

$data = array(
    array("Pepsodent", 30, 10000),
    array("Sunlight", 15, 11000),
    array("Baygon", 10, 16000),
    array("Dove", 20, 22000),
    array("Rinso", 20, 20000),
    array("Downy", 15, 12000),
    array("Le Mineral", 25, 5000),
);

echo "<table border = '1' cellpadding='8'cellspacing='0'>";
echo "<tr>";
echo "<th>Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "</tr>";

$totalJumlah = 0; 

foreach($data as $row) {
    echo "<tr>"; 
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

 ?>