# MYSQLI CLASS FOR PHP SMART SQL
This is mysqli class for php language. You can make everything with this mysqli class. This is easiest and safest class in the world. I wrote it with pure logic. It is free. Created by Gokhan Cava

Connection inside code.

$connection = new smartSql('root', 'pass', 'database_username');


Examples

 
 EXAMPLES

 SELECT WITHOUT MYSQLI PING
 
 $connection->ss("SELECT * FROM myTable WHERE name = ? AND age = ?", "si", array($name,$age));
 
 SELECT WITH MYSQLI PING
 
 $connection->ss("SELECT * FROM myTable WHERE name = ? AND age = ?", "si", array($name,$age), 1);




 INSERT WITHOUT MYSQLI PING
 
 $connection->ss("INSERT INTO myTable (name, age) VALUES (?, ?)", "si", array($name,$age));
 
 INSERT WITH MYSQLI PING
 
 $connection->ss("INSERT INTO myTable (name, age) VALUES (?, ?)", "si", array($name,$age), 1);




 UPDATE WITHOUT MYSQLI PING
 
 $connection->ss("UPDATE myTable SET name = ? WHERE id = ?", "si", array($name,$age));
 
 UPDATE WITH MYSQLI PING
 
 $connection->ss("UPDATE myTable SET name = ? WHERE id = ?", "si", array($name,$age), 1);




 DELETE WITHOUT MYSQLI PING
 
 $connection->ss("DELETE FROM myTable WHERE id = ?", "si", array($name,$age));
 
 DELETE WITH MYSQLI PING
 
 $connection->ss("DELETE FROM myTable WHERE id = ?", "si", array($name,$age), 1);

 
 
 
 without parameter select
 
 $query = $connection->connect(0)->query("SELECT * From denemetry order by id desc");

 
 while($data=$query->fetch_array()) {
 echo $data[0];
 }

