<?php
include 'db.php';

$r = $conn->query("SELECT * FROM antrian ORDER BY created_at DESC")->fetch_assoc();
$kode = $r['kode'];

if($kode == '11') { 
	echo "
		<span class=\"warning\">1</span>
		<audio autoplay id=myAudio>
			<source src='assets/alarm/Loud_Alarm_Clock_Buzzer.mp3' type='audio/mp3' />
		</audio>
		"; 
}
elseif($kode == 10) { 
	echo "
		<span class=\"blink\">0</span>
		<audio autoplay id=myAudio>
			<source src='assets/alarm/Loud_Alarm_Clock_Buzzer.mp3' type='audio/mp3' />
		</audio>	
		"; 
}
elseif($kode == 20) { 
	echo "
		<span class=\"blink\">0</span>
		<audio autoplay id=myAudio>
			<source src='assets/alarm/Loud_Alarm_Clock_Buzzer.mp3' type='audio/mp3' />
		</audio>
		"; 
}
elseif($kode == 21) { 
	echo "2"; 
}
else { 
	echo "
		<span class=\"blink\">X</span>
		<audio autoplay id=myAudio>
			<source src='assets/alarm/Loud_Alarm_Clock_Buzzer.mp3' type='audio/mp3' />
		</audio>	
	"; 
}
?>
<script>
var x = document.getElementById("myAudio"); 
    function pauseAudio() { 
    x.pause(); 
}
</script>