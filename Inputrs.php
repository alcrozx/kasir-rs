<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>KASIR RS SEHAT SENTOSA</title>

</head>
<body>
<form action="cetakrs.php" method="post">
<pre>
<div class="Form">
      <div class="header">  
=================================================            
<strong>RUMAH SAKIT SEHAT SENTOSA</strong>
Jl. Merdeka No. 123, Jakarta
=================================================
</div>
No Rekam Medis        : <input type="text" name="nrm">
Nama Pasien           : <input type="text" name="np">
Tempat Tanggal Lahir  : <input type="text" name="ttl"> 
Umur                  : <input type="text" name="umur"> Tahun
Jenis kelamin         : <input type="radio" name="jk" value="LAKI - LAKI">Laki-laki
                        <input type="radio" name="jk" value="PEREMPUAN">Perempuan
Jenis Layanan         : <select name="jly">
                        <option value="UMUM">UMUM</option>
                        <option value="POLI THT">POLI THT</option>
                        <option value="POLI BEDAH">POLI BEDAH</option>
                        <option value="POLI ANAK">POLI ANAK</option>
                        </select> 
<?php
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";
?>        
<div class="box">
                   <input type="submit" value="DAFTAR"> <input type="reset" value="BATAL">  
</div>                      
</div>
</pre>
</form>
</body>
</html>