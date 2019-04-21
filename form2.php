<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Test_Form</title>
 </head>
 <body bgcolor="lightblue">
 	<div>
 		<?php
			if(empty($_POST['f'])){ 
				echo ("вы ничего не выбрали"); 
			} 
			else{
				$af=$_POST['f'];
				$n=count($af);
				for($i=0;$i<$n;$i++){
					if(!empty($af[$i]) && substr($af[$i], -3)=="txt"){
						unlink("logs/$af[$i]");	
					}
				}
				for($i=0;$i<$n;$i++){
					if(!file_exists("logs/$af[$i]")){
						echo "<p><b>".$af[$i]."</b>  файл успешно удален</p>";
					}
					else{
						echo "<p><b>".$af[$i]."</b>  файл не удалось удалить по какой-то причине</p>";
					}
				}
			}
		?>
	</div>
 </body>
</html>
