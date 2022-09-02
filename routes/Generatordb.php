<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

require_once('Generator.php');

date_default_timezone_set("UTC"); 

function mkdbt() {
	// functia creaza baza de date si tabelul
	DB::table('consultanti')->select(DB::raw("nume"))->get();
}

function in_val(array $date1) {
	// insereaza datele in tabele
	$rezultatsir = array();
 	foreach ($date1 as $zi => $ora) {
    	$listadate = "('$zi','" . implode($ora, "','") . "')";
    	$rezultatsir[] = $listadate;
 	}

 	$result = implode($rezultatsir, ",");
	$ins_date = "INSERT INTO programari VALUES (0,0," . $result .")";
	if ($conn->query($ins_date) === TRUE) {
		echo "Tabelul programari creat cu succes. \n";
	} else {
		echo "Eroare: " . $conn->error;
	}
}

?>