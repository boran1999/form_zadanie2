<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <h2 align ="left"><font color="blue">Форма регистрации</font></h2>
  <title>Test_Form</title>
 </head>
 <body bgcolor="lightblue">
	<?php
		$filelist = glob("logs/*");
		$i=0;
	?>
	<form action="form2.php" method="POST">
		<?php
			foreach ($filelist as $filename){
				$i++;
				$filename=substr($filename,5);
				echo "<input type='checkbox' name='f[]' value=".$filename."><font color='blue'>".$filename."</font><br>";
			}
		?>
	<p><input type="submit" value="Удалить"></p>
	</form>
 </body>
</html>
