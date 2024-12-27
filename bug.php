This code uses the `mysql_*` functions which are deprecated and have been removed from PHP 7.0 onwards.  Attempting to use them will result in a fatal error.

```php
<?php
$conn = mysql_connect("localhost", "user", "password");
if (!$conn) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db("database", $conn);

$sql = "SELECT * FROM table";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {
  echo $row['column'] . "<br>";
}
mysql_close($conn);
?>
```