<?php session_start();?>

<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="defaultstyle.css" type="text/css" />
<title>Lab 7</title>


<style type="text/css">
table {
    width: 200%; /* Ширина таблицы */
    height: 200%; /* Высота таблицы */   
   } 
</style>




</head>


<body>

<form action="site.php" method="POST">
<h3>Панель управления заголовком</h3>
 
<?
$conn = mysql_connect("localhost","root","")
	or die("Неможливо встановити з'єднання: ".
	mysql_error());

$database = "site_data";
$table = "statti_additional";
$mysql = mysql_connect("localhost","root","") or die("Error to connect to MySQL");
mysql_select_db($database) or die ("Error to connect to database");

$link = mysqli_connect("localhost","root","", "site_data");


$sql = mysqli_query($link, 'SELECT `name` FROM `zagolovok`');
while ($result = mysqli_fetch_array($sql)) {
  echo "<input type=\"radio\" name=\"zagolovok\" value=\"".$result['name']."\">".$result['name']."<br>";
}
?>



<br><h3>Панель управления пунктами меню</h3>  
 

<?$table = "menu_points";
$mysql = mysql_connect("localhost","root","") or die("Error to connect to MySQL");
mysql_select_db($database) or die ("Error to connect to database");

$link = mysqli_connect("localhost","root","", "site_data");

echo "<select name=\"menu_list[]\" size=\"4\" multiple=\"multiple\">";
$sql = mysqli_query($link, 'SELECT `menu_point` FROM `menu_points`');
while ($result = mysqli_fetch_array($sql)) {
  echo "<option value=\"".$result['menu_point']."\">".$result['menu_point']."</option>";
}
echo "</select>"; 
?> 



<br><h3>Панель управления статьей вверху</h3>
 


<?$table = "stattya";
$mysql = mysql_connect("localhost","root","") or die("Error to connect to MySQL");
mysql_select_db($database) or die ("Error to connect to database");

$link = mysqli_connect("localhost","root","", "site_data");

$sql = mysqli_query($link, 'SELECT `Stattya` FROM `stattya`');
while ($result = mysqli_fetch_array($sql)) {
  echo "<textarea id=\"txtarea\" name=\"txtarea\" cols=\"50\"rows=\"10\">".$result['Stattya']."</textarea></br>";
  
  $_SESSION['Stattya']=$result['Stattya'];
}
?>



<form name="f4"  method="post">
<br><h3>Панель управления статьями</h3>
 

<?$table = "statti_additional";

echo "<table>";
$sql = mysqli_query($link, 'SELECT `id`, `Topic`, `Annotation`, `Date_time`, `Link` FROM `statti_additional`');
while ($result = mysqli_fetch_array($sql)) {
  echo "<tr><td><input type=\"checkbox\" name=\"statti[]\"  value=\"".$result['id']."\">".$result['id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$result['Topic']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$result['Annotation']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$result['Date_time']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$result['Link']."</td></tr>";
}
echo "</table>"; 
?>
 

<br><h3>Панель управления подписью линка</h3>
 

<?$table = "link_text";
$mysql = mysql_connect("localhost","root","") or die("Error to connect to MySQL");
mysql_select_db($database) or die ("Error to connect to database");

$link = mysqli_connect("localhost","root","", "site_data");

$sql = mysqli_query($link, 'SELECT `link_text` FROM `link_text`');
while ($result = mysqli_fetch_array($sql)) {
  echo "<input type=\'text\' name=\"link_text\" value=\"".$result['link_text']."\"></br>";
}
?>

<br><h3>Панель управления рядком копирайта</h3> 
 

<?$table = "copyright";
$mysql = mysql_connect("localhost","root","") or die("Error to connect to MySQL");
mysql_select_db($database) or die ("Error to connect to database");

$link = mysqli_connect("localhost","root","", "site_data");

$sql = mysqli_query($link, 'SELECT `Copyright` FROM `copyright`');
while ($result = mysqli_fetch_array($sql)) {
  echo "<textarea id=\"txtarea\" cols=\"50\"rows=\"5\">".$result['Copyright']."</textarea></br>";
  $_SESSION['Copyright']=$result['Copyright'];
}
?>


<p><input type="submit" /></p>
</form>






 
</body>
</html>