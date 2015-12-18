<?php require_once 'client.php';
 	  include 'cuaca.php';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prakiraan Cuaca Indonesia</title>
	
	<!-- Load the Stylesheet/CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	
</head>
<body>
	<div class="cover-atas">
		<div class="wrapper-cover center pd-bt-15">
			<p class="white t-center">
				<nav class="nav t-center white">
					<ul>
						<li class="pd-lr-15"><a href="index.php">BERANDA</a></li>
					</ul>
				</nav>
			</p>
			<br>
			<br>
			<p class="white t-center cover"><b>Prakiraan Cuaca di Kota Besar<br><span>INDONESIA</span><b></p>
			<br>
			<p class="white t-center"><b><?php $url = "http://data.bmkg.go.id/cuaca_indo_1.xml";$sUrl = file_get_contents($url, False);$xml = simplexml_load_string($sUrl);echo "Per Tanggal : ".$xml->Tanggal->Mulai."";?><b></p>
			<br>
			
              <?php if($id=='') { ?>   
                <?php foreach ($data as $key => $value) { ?>
                <div class="double_column">
                  <ul>
                    <li><a href="?id=<?= $value->kota ?>"><?php echo $value->kota;?></a></li>
                  </ul>
                  </div>
                  <?php } ?>

                <?php }else{ ?>
                  <?php foreach ($data as $key => $value) { ?>
                  <p class="white t-center"><b>Anda memilih Kota <?php echo $value->kota?></b></p>
                    <center>
                      	<?php echo "<img src='http://www.bmkg.go.id/ImagesStatus/Cuaca/" . $value->cuaca . ".gif' alt='" . $value->cuaca . "'>";?>
					  	  <p class="black small t-center"><?php echo $value->cuaca?></p>
	                      <p class="black small t-center">Suhu : <?php echo $value->suhumin?> - <?php echo $value->suhumax?>&deg;C</p>
	                      <p class="black small t-center">Kelembapan : <?php echo $value->kelembapanmin?> - <?php echo $value->kelembapanmax?>&#37;</p>         
                    </center>
                  <?php } ?>
                <?php }?>                
            </div>
			<div class="wrapper center pd-bt-30">
			<br>
				<p class="t-center"><a href="" class="white"><img src="img/cerah-berawan.gif" class="sm-icon" style="margin : auto;" /></a></p>
			</div>
		</div>
	</div>
</body>
</html>
