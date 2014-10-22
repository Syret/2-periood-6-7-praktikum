
 <?php require("validation.php"); ?>
<!DOCTYPE HTML>
<html>
   <head>
		<title>2-periood-6-7praktikum</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
		.form_message{
			font-weight: bold;
		}
      .form_error {
         color: red;
      }
      .form_notice{
         color: green;
      }

		</style>
   </head>
   <body>
   	<pre>
   		<?php print_r($_POST); ?>
   	</pre>	
   	<form action="index.php" method="post">
   		<div>
   			<div class= "form_message">
   			<?php if ($isSubmitted) {echo $usernameMessage;}?>
   		<label for="username">Kasutajanimi:</label>
   		<input id="username" type="text" name="username">
   		</div>

         <div>
            <div class= "form_message">
            <?php if ($isSubmitted) {echo $ageMessage;}?>
         <label for="age">Vanus:</label>
         <input id="age" type="number" name="age" min="18" max="25">
         </div>
         <div class= "form_message">
            <?php if ($isSubmitted) {echo $namesMessage;}?>
         <label for="names">Rühm:</label>
         <input id="names" type="text" name="names">
         </div>
         <div class= "form_message">
            <?php if ($isSubmitted) {echo $emailMessage;}?>
         <label for="email">E-mail:</label>
         <input id="email" type="text" name="email">
         </div>
         <div>
         <input type="submit" value="Saada" name="submit">
         </div>
      </form>

</body>

</html>
