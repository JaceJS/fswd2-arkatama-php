<?php
//Data Biodata
$nama = "Jonathan Salendah";
$tempat_lahir = "Manado";
$tanggal_lahir = "12 Mei 2003";
$jenis_kelamin = "Laki-laki";
$alamat = "Kombos Barat, Singkil, Manado";
$foto = "./assets/pp.jpeg";
$riwayat_pendidikan = "SMAN 9 Binsus Manado";
$hobi = "Mendengarkan Musik dan Bermain Game";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container">        
        <div class="card"> 
            <div class="picture">
                <img src="<?php echo $foto; ?>" alt="Foto">            
            </div>
            <div class="identity">
                <h1><?php echo $nama; ?></h1>
                <p><?php echo $tanggal_lahir.", ".$tempat_lahir; ?></p>                
                <p><?php echo $jenis_kelamin; ?></p>
                <p><?php echo $alamat; ?></p>
                <p><?php echo $riwayat_pendidikan; ?></p>                       
                <p><?php echo $hobi; ?></p>
            </div>
        </div>
    </div>
</body>
</html>

