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
 
   
</head>
<body>

<?php

$rows = nl2br($_POST['num_tbl3']); ;
$cols = nl2br($_POST['num_tbl3']); ;

echo '<table border="1" width="300">';


    for ($i=0;$i<$rows;$i++) 
	{ 
        echo '<tr>';
		
		if($i==0)								//first row
		for ($j=0;$j<$cols;$j++)
		{
			$num++;
			
			echo '<td ';
			
			if($j%2==1) echo 'rowspan="2"';
						
			echo '>';
			if($num%4==0) echo 4;
			echo '</td>';
		}		
		elseif($i<$rows-1)						//					\/check if this table odd or even
		for ($j=0;$j<round($rows/2, 0, PHP_ROUND_HALF_DOWN)+($i%2)*($rows%2);$j++)	//other rows 
		{
			$num++;
			
			echo '<td rowspan="2">';
			if($num%4==0) echo 4;
			echo '</td>';
		}
		else							 	//last row		
		{
			$k=round($rows/2, 0, PHP_ROUND_HALF_DOWN);
			
			for ($j=0;$j<$k;$j++)
			{$num++; echo '<td>'; if($num%4==0) echo 4; echo '</td>';}
		}
			
		echo '</tr>';
    }
	
echo '</table>';

?>


<script type="text/javascript">
$(document).ready(function(){

$('table').attr('bgcolor','blue');

$('td').append("<div>Text</div>");

var n=0;
var array = $("tr").filter(function(){n++; return (n%3==0)} );
array.css('font-style', 'italic');

n=0;
array = $("tr").filter(function(){n++; return (n>=4)} );
array.css('text-transform', 'uppercase');

});
</script>

</body>
</html>