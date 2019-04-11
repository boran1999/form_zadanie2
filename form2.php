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
				echo"<h3>Данные файлы успешно удалены:</h3>";
				$af=$_POST['f'];
				$n=count($af);
				for($i=0;$i<$n;$i++){
					if(!empty($af[$i])){
						echo ($af[$i]."<br>");
						unlink($af[$i]);	
					}
				}
			}
		?>
	</div>
 </body>
</html>
