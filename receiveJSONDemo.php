		
		
	<?php
	error_reporting(E_ALL);

	$jsonData = json_decode(file_get_contents("php://input"), true);
	$jsonencoder = json_encode($jsonData);
	//if you wish to extract UUID or other parameter from JSON data
	$count_json = count($jsonData);
	for ($i = 0; $i < $count_json; $i++)
	{
		$uuid = json_encode($jsonData[$i]['__UUID']);
	}
	$s_uuid=str_replace('"','', $uuid);
	mkdir($s_uuid, 0777);
	chmod($s_uuid, 0777);

	$date = date("Y.m.d.H.i.s");
	$file = $s_uuid.'/'.$date.'.json';
	if(!is_file($file)){
		file_put_contents($file, $jsonencoder); 
	}
	?>
	
	

