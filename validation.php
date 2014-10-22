<?php
	//Kontrolliba kas lehele satuti get päringuga või postituse tagajärjel
	
	$isSubmitted = isset($_POST["submit"]);
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		(int)$age = $_POST["age"];
		$name = $_POST["names"];
		$email = $_POST["email"];
	}
	$min=2;
	$max=20;
	// Kasutajanime olemasolu, miinimumi ja maksimumi kontroll
	if (!isset($username) || $username == "") {
		$usernameMessage= '<div class= "form_message form_error">Kasutajanime väli ei tohi olla tühi</div>';	
	} 
	elseif(strlen($username)<$min){
		$usernameMessage= '<div class= "form_message form_error">Kasutajanimi peab olema vähemalt' . " $min " . 'tähemärki pikk</div>';
	}
	elseif(strlen($username)>$max){
		$usernameMessage= '<div class= "form_message form_error">Kasutajanimi ei tohi olla pikem kui' . " $max " . 'tähemärki</div>';
	}
	else {
		$usernameMessage='<div class= "form_message form_notice"> Kasutajanimi sobib </div>';
	}
	//Vanuse andmetüübi kontroll
	if (isset($age) and !is_numeric($age)) {
		$ageMessage= '<div class= "form_message form_error">Vanus peab olema numbriline väärtus</div>';
	} 
	else{
		$ageMessage= '<div class= "form_message form_notice">Vanus sobis</div>';
	}
	// Rühma kuuluvuse kontroll
	$names = array("kaspar", "fränk", "maile", "margit", "syret");	
	if (isset($name) and in_array(strtolower($name), $names)) {
		$namesMessage= '<div class= "form_message form_notice">Kuulub rühma</div>';
	} 
	else{
		$namesMessage= '<div class= "form_message form_error">Ei kuulu rühma</div>';
	}
	//Formaadi valideerimine
	if (isset($email) and preg_match("/@/", $email)) {
		$emailMessage= '<div class= "form_message form_notice">Sobib</div>';
	} 
	else{
		$emailMessage= '<div class= "form_message form_error">Ei sobi</div>';
	}
?>