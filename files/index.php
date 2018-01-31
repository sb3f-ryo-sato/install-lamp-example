<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>PHP Example</title>
  </head>
  <body>
    <h1>PHP Example</h1>
    <table>
      <tr>
        <th>Host</th>
        <th>User</th>
      </tr>
      <?php
	 $con = mysql_connect('localhost', 'root', '') or die('error(connect)');

	 mysql_select_db('mysql', $con) or die('error(select_db)');

	 $sql = 'SELECT host,user FROM user';
	 $result = mysql_query($sql, $con);

	 while ($row = mysql_fetch_array($result)) {
	 echo '<tr><td>' . $row['host'] . '</td><td>' . $row['user'] . '</td></tr>';
	 }

	 mysql_close($con);
	 ?>
    </table>
  </body>
</html>
