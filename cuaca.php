<?php

error_reporting(E_ALL);
ini_set('display_error',1);

$url = "http://data.bmkg.go.id/cuaca_indo_1.xml";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($client, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6,1; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.224 Safari/534.10');
$response = curl_exec($client);
curl_close($client);

$datacuacaxml = simplexml_load_string($response);

include 'connect.php'; 
mysqli_query($conn, "TRUNCATE weather");

foreach ($datacuacaxml->Isi->Row as $content) {
	$kota = $content->Kota;
	$cuaca = $content->Cuaca;
	$suhu_min = $content->SuhuMin;
	$suhu_max = $content->SuhuMax;
	$kelembapan_min = $content->KelembapanMin;
	$kelembapan_max = $content->KelembapanMax;
	mysqli_query($conn,
					"INSERT INTO 
						weather
					VALUES
						(
							'',
							'$kota',
							'$cuaca',
							'$suhu_min',
							'$suhu_max',
							'$kelembapan_min',
							'$kelembapan_max'
						)
					") 
	or die(mysql_error());
}
?>