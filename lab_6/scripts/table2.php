<html>
   <head>
   <meta http-equiv='Content-Type' content='text/html'; charset='UTF-8' >
   <title>6 lab</title>
   
   <style type="text/css">
   TABLE {
    width: 50%; /* Ширина таблицы */
    height: 50%; /* Высота таблицы */   
   } 
  </style>
 
   
</head>
<body>

<?php

$rows = nl2br($_POST['num_tbl2']); ;
$cols = nl2br($_POST['num_tbl2']); ;


echo '<table border="1" width="300">';
    for ($i=$rows;$i>0;$i--) 
	{ 
        echo '<tr>';
		
		if($i==1) {$num++; echo '<td>';  if($num%4==0) echo 4; echo '</td>';}
		else 
		{	
			$num++;
			echo '<td colspan="', $i-1 ,'">';   
			if($num%4==0) echo 4;
			
			$num++;
			echo '</td><td rowspan="', $i ,'">';
			if($num%4==0) echo 4;
			echo '</td>';
		}
			
		echo '</tr>';
    }
	
echo '</table>';

?>

</body>
</html>