<!DOCTYPE html>
<html>
<head>
    <title>Bon Pembayaran</title>
</head>
<body class="body1">
<div class="bon">
    <div class="bon-title">Bon Pembayaran</div>
    <div class="bon-info">
        <?php
        $a=$_POST['nrm'];
        $b=$_POST['np'];
        $c=$_POST['ttl'];
        $d=$_POST['umur'];
        $e=$_POST['jk'];
        if($e=="LAKI - LAKI"){
        }else{
            $e="PEREMPUAN";}
        $f=$_POST['jly'];
        if($f=="UMUM"){
            $harga=50000;
        }elseif($f=="POLI THT"){
            $harga=75000;
        }elseif($f=="POLI BEDAH"){
            $harga=100000;
        }elseif($f=="POLI ANAK"){
            $harga=125000;
        }else{
            $harga=5000;
        }
        $biaya_admin = 5000; 
        $total = $harga + $biaya_admin;
        echo"No Rekam Medis     : $a<br>";
        echo"Nama Pasien        : $b<br>";
        echo"Tempat Tanggal Lahir   : $c<br>";
        echo"Umur               : $d tahun<br>";
        echo"Jenis Kelamin      : $e<br>";
        echo"Jenis Layanan       : $f<br>";
        echo"biaya admin         : Rp ".number_format($biaya_admin,0,',','.')."<br>";
        ?>
    </div>
    <div class="bon-total">
        <?php echo "Total Bayar  : Rp ".number_format($total,0,',','.'); ?>
    </div>
    <?php
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";
?>
    <a href="inputrs.php">Kembali</a>
</div>
</body>
</html>