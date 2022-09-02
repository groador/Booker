<?php

class Consultant {
	public $nume = "";
	public $prenume = "";
	public $date = array();
	
	function __construct($_nume, $_prenume, $_date) {
		try {
			$nume = $_nume;
			$prenume = $_prenume;
			$date = $_date;
		}
		catch(Exception $e) { echo "<p> Eroare la constructor : " . $e . " </p>" ; }
		
	}

	
}
?>