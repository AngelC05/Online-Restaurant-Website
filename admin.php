<?php
require 'db.php';

$result = $conn->query("SELECT * FROM orders");

echo "<h1>Orders Received</h1>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Phone</th><th>Dish</th><th>Quantity</th></tr>";

while($row = $result->fetch_assoc()) {
  echo "<tr>
          
          <td>{$row['name']}</td>
          <td>{$row['phone']}</td>
          <td>{$row['dish']}</td>
          <td>{$row['quantity']}</td>
        </tr>";
}

echo "</table>";
$conn->close();
?>
