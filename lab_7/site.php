<?php session_start();?>

<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="defaultstyle.css" type="text/css" />
<title>Lab 7</title>
<style> @import	url(defaultstyle.css) </style>
</head>


<body>

<div id="content">

<h1>
<?
if(isset($_REQUEST['zagolovok']))
{
    $zagolovok = $_REQUEST['zagolovok'];
    echo $zagolovok;
}
?>
</h1>

<ul id="menu">
<?
if(isset($_REQUEST['menu_list']))
{
    $menu_point = $_REQUEST['menu_list'];
    foreach($menu_point as $item) echo "<li><a href=\"#\">$item</a></li>";
}
?>
</ul>

<div class="post">

<div class="details">
<h2><a href="#"><?
if(isset($_REQUEST['zagolovok']))
{
    $zagolovok = $_REQUEST['zagolovok'];
    echo $zagolovok;
}
?></a></h2>
<p class="info">опубліковано 5хв. тому у секції <a href="#" class="point_line">загальне</a></p>
</div>

<div class="body">
<p><?php echo $_REQUEST['txtarea'];?></p>
</div>

<div class="x"></div>
</div>





<?
$conn = mysql_connect("localhost","root","")
	or die("Неможливо встановити з'єднання: ".
	mysql_error());

$database = "site_data";

$table = "statti_additional";

$link = mysqli_connect("localhost","root","", "site_data");

$statti = $_POST['statti'];
foreach($statti as $item) 
{
$sql = mysqli_query($link, 'SELECT `id`, `Topic`, `Annotation`, `Date_time`, `Link` FROM `statti_additional`');
while ($result = mysqli_fetch_array($sql)) {
if($result['id']==$item)
{	
echo "

<div class=\"col\">
<h3><a href=\"".$result['Link']."\">".$result['Topic']."</a></h3>
<p>".$result['Annotation']."</p>
<p class=\"det\"> <a href=\"".$result['Link']."\">".$_REQUEST['link_text']."</a></p>
</div>";
}
}	
}
?>

<div id="footer">
<?php echo $_SESSION['Copyright']; ?>
</div>



</div>

</body>
</html>