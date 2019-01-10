<html>
   <head>
   <meta http-equiv='Content-Type' content='text/html'; charset='UTF-8' >
   <title>9 lab</title>
   
   <script type="text/javascript" src="jquery.js"></script>   

   
   <style type="text/css">
   TABLE {
    width: 50%; /* Ширина таблицы */
    height: 50%; /* Высота таблицы */   
   } 
  </style>
  
  <script type="text/javascript">
function show_list()
{
	$.each($("tr:last>td:first>ul>li"), function(){alert($(this).text());})

}
</script>
 
   
</head>
<body>

<?php

$rows = nl2br($_POST['num_tbl4']); ;
$cols = nl2br($_POST['num_tbl4']); ;

	
echo '<table border="1" width="300">';

    for ($i=1;$i<=$rows;$i++) 
	{ 


        echo '<tr>';
		
		switch ($i%3)
		{
			case 1:  $num++; echo '<td colspan="3" width="43%">'; if($num%4==0) echo 4;  $num++; echo '</td>		<td  colspan="3" width="43%">';  if($num%4==0) echo 4; $num++; echo '</td>		<td>'; if($num%4==0) echo 4;  echo '</td>'; break;
			case 2:  $num++; echo '<td width="14%">'; if($num%4==0) echo 4;  $num++; echo '	</td>		<td  colspan="3" width="43%">';  if($num%4==0) echo 4; $num++; echo '</td>		<td  colspan="3">';   if($num%4==0) echo 4;  echo '</td>'; break;
			case 0:  $num++; echo '<td colspan="2" width="28%">'; if($num%4==0) echo 4;  $num++; echo '   </td>		<td  colspan="3" width="43%">';  if($num%4==0) echo 4; $num++; echo '</td>		<td  colspan="2">';  if($num%4==0) echo 4;  echo '</td>'; break;
		}
		
		echo '</tr>';
    }
	
echo '</table>';

?>


<script type="text/javascript">
$(document).ready(function(){

$('tr:first>td').append("<p>Text</p>");

$("tr:first>td:odd").css('color', 'green');

$("tr:first>td:last").append("<hr>");

$("tr:last>td:first").append("<ul> <li>1 рядок</li> <li>2 рядок</li> <li>3 рядок</li> <li>4 рядок</li></ul>");
});
</script>

<input type="button" value="Вывести список" onClick="show_list()">

</body>
</html>