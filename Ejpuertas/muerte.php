<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST" id="form5">
	<?php
     echo '<img onclick="go()" src="puerta.jpg">';
      ?>

      	</form>
      	<script type="text/javascript">
      		function go()
      		{
      			document.getElementById("form5").action="Ejpuertas1.php";
      			document.getElementById("form5").submit();
      		}
      	</script>

</body>
</html>