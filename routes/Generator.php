<?php 

use App\Models\Consultant;

//require_once('Consultant.php'); // fara laravel

date_default_timezone_set("UTC"); 

// $date1 sunt date valabile, $date2 sunt date programate 
$date1 = array(); $date2 = array();

function generez_date() {
	
	for($i = 0; $i < 15; $i++) {
	 $zi = date("d.m.Y", mktime(0,0,0,date("m"),date("j") + $i,date("Y")));

	 $data = DateTime::createFromFormat("j.m.Y", $zi);
	 $v_data = $data -> format("D");

	 if( !(($v_data == "Sat") || ($v_data == "Sun")) ) { 
		 // echo '<div>' . 'Zi de lucru : ' . $v_data . '</div>'; // test
		 for($j = 9; $j < 22; $j++) {
		
			if($j != 14) { 
				if($j == 15) {
					
					$date1[$zi][$j-8] = date("G:i:s", mktime($j,30,0,0,0,0));
					
				}
				else {
					$date1[$zi][$j-8] = date("G:i:s", mktime($j,0,0,0,0,0));
				}
				
			}
			
			
				
		 }
	 }
	 
	 
	 
	}
	
	
	if($date1 != null) {
		
		echo 'Orele de programare ' . "<br> \n";
		echo '<table border = 1>';
		echo '<thead desc = "Consultant - lorem ipsum">';
		foreach($date1 as $zi => $ore) {
			echo '<tr>';
			$datetime = DateTime::createFromFormat('j.m.Y', $zi);
			
			switch($datetime -> format("D")) {
				case "Mon" : echo "<th>" . "Luni "     . $zi . "</th>"; break;
				case "Tue" : echo "<th>" . "Marti "    . $zi . "</th>"; break;
				case "Wed" : echo "<th>" . "Miercuri " . $zi . "</th>"; break;
				case "Thu" : echo "<th>" . "Joi "      . $zi . "</th>"; break;
				case "Fri" : echo "<th>" . "Vineri "   . $zi . "</th>"; break;
				default : break;
			}
			foreach($ore as $ora) {
				$oraformat = DateTime::createFromFormat('G:i:s', $ora);
				if(($oraformat -> format("i")) == 30) {
					echo "<td>" . $ora . " - " . date("G:i:s", mktime(intval($ora)+1,30,0,0,0,0)) . "</td>";
				}
				else {
					echo "<td>" . $ora . " - " . date("G:i:s", mktime(intval($ora)+1,0,0,0,0,0)) . "</td>";
				}

			}
			
			echo '</tr>';
		}
		echo '</thead>';
		echo '</table>';
	}
	
	//echo print_r($date1); // afisare de test
}

//generez_date(); - test pe fisier

?>