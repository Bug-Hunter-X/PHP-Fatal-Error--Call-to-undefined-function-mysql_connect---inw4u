The solution involves replacing the deprecated `mysql_*` functions with the MySQLi extension or PDO.  Here's an example using MySQLi:

```php
<?php
$conn = new mysqli("localhost", "user", "password", "database");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM table";
$result = $conn->query($sql);

if ($result) {
  while ($row = $result->fetch_assoc()) {
    echo $row['column'] . "<br>";
  }
  $result->free_result();
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>
```

Remember to adjust the database credentials ("localhost", "user", "password", "database") to match your setup.