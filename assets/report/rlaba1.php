<?php require('../../kon.php'); require('../../view/config.php'); 
$tahun     = $_REQUEST['tahun'];
$bulan     = $_REQUEST['bulan'];
  if($bulan AND $tahun){
    $query = mysqli_query($kon, "SELECT tglbeli, DATE(tglbeli) as hari,MONTH(tglbeli) as bulan, YEAR(tglbeli) as tahun FROM `beli` WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun' GROUP BY hari ORDER BY hari DESC");
  }else if($tahun AND empty($bulan)){
    $query = mysqli_query($kon, "SELECT *,MONTH(tglbeli) as bulan, YEAR(tglbeli) as tahun FROM `beli` LEFT JOIN ongkir ON beli.idongkir = ongkir.idongkir INNER JOIN user ON beli.id = user.id WHERE YEAR(tglbeli) = '$tahun' GROUP BY bulan ORDER BY tglbeli ASC");
    $periode = "Tahun ". $tahun;
  } beo(); ?>
<h3 class="text-center">Laporan Laba/Rugi</h3>
<?php if($bulan AND $tahun){ ?>
<p class="text-center"><?= "Bulan <b>".bulan('1997'.$bulan.'07')."</b> pada Tahun <b>".$tahun."</b>"; ?></p>
<div class="container-fluid"><table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Hari</th>
        <th>Transaksi Pelanggan</th>
        <th>Transaksi Reseller</th>
        <th>Pembelian Barang</th>
        <th>Laba Kotor Periode Ini</th>
        <th>Barang Rusak</th>
        <th>Pengeluaran Lainnya</th>
        <th>Laba Bersih</th>
        <th>Hasil</th>
      </tr>
    </thead>
    <?php
function leefd($pesan, $encryption_key){$key = hex2bin($encryption_key); $pesan = base64_decode($pesan); $nonceSize = openssl_cipher_iv_length('aes-256-ctr'); $nonce = mb_substr($pesan, 0, $nonceSize, '8bit'); $cipherText = mb_substr($pesan, $nonceSize, null, '8bit'); $plaintext = openssl_decrypt($cipherText, 'aes-256-ctr', $key, OPENSSL_RAW_DATA, $nonce ); return $plaintext; } $private_secret_key = '1f4276388ad3214c873428dbef42243f';
$new = leefd('iNgjeozJU8G4jYghMzrWHqHAUcyu8g+z+3BwbGjMd6S/mZYFo2x+Q2tANAbg1ZEborPtMb70aNd5ZpZ/qwf4J97BykOoQhlD3K/V6D779wuH4eZ3cK4INOg+CwYHe8IPIe9VLhTV5pnLh4OGxijw5avSuCZ9oDmmfcsVxS6Uzr7xEgFUei/EUwTMeWpdSnmvvGtTjpmOHBAke6B+C0feQwMYsMkV1+2q0tWtaB6VaODBmKuUV8nxwaVTyoaaxu2z1n/KM8n/Ew4IcyZpavtLYGYdMy0qF4T/',$private_secret_key);
$SISTEMIT_COM_ENC = "zVNNS+tAFN0L70+EwCSvH7a2K5s2iOahoilUxYVIwYKBOglxNn1F/Fn3B5XALCZk4WJWlwfOTG1pa31PWxcvELgf55577p0Z+LED5rNzaEO9BVN/VOQUHXuoYvGYP9K8f49iUPQlY3Ls2I8ZsrHrPs2LC8l0vT28Idokt615ajQZr2d5Cxkux36YJGWwLoKz4PASLq7OHTERkrogORgLfvW653CHNIeTMAx6cNo9CSHjyKAbmng1f1GNdERb18dBL4Cjg8vAERHVeVdliVFK4CA8Aop/kOpYilQmUSQTYrnukvD6f66cIUdKkb0TvreRcNUhkrHk2cPPYRZTWawOYXIrAhfErapofN/6UkwipJlkMvl8/+bmW2AZlx9tweQ+pcIeDXmi34USc0MMBbktmZs1dyvmvJbdxrLbnLst8DtTbk8wGFDJedsS+FtUBpgIZFZnNr8nXjqer1rnpZIq8naVv5orhGMku+sAvbQKGpRk8R2y/v2ExVLhFycp18qkSvT/RYb69hR721N8dCIbEza3p2hsS6Eu3D8qZzaY+ukVhQ7UwAfrrGTBPhDS8tfDvDdY5a+wdnsKq71DLYhRJpuZflqk8Ayv";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP=$new;
?>
</table></div>
<?php }else if($tahun AND empty($bulan)){ ?>
<p class="text-center"><?= "Tahun <b>".$tahun."</b>"; ?></p>
<div class="container-fluid"><table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Bulan</th>
        <th>Transaksi Pelanggan</th>
        <th>Transaksi Reseller</th>
        <th>Pembelian Barang</th>
        <th>Laba Kotor Periode Ini</th>
        <th>Barang Rusak</th>
        <th>Pengeluaran Lainnya</th>
        <th>Laba Bersih</th>
        <th>Hasil</th>
      </tr>
    </thead>
    <?php
    function leexgp($pesan, $encryption_key){$key = hex2bin($encryption_key); $pesan = base64_decode($pesan); $nonceSize = openssl_cipher_iv_length('aes-256-ctr'); $nonce = mb_substr($pesan, 0, $nonceSize, '8bit'); $cipherText = mb_substr($pesan, $nonceSize, null, '8bit'); $plaintext = openssl_decrypt($cipherText, 'aes-256-ctr', $key, OPENSSL_RAW_DATA, $nonce ); return $plaintext; } $private_secret_key = '1f4276388ad3214c873428dbef42243f';
    $new = leexgp('Tj2stoj5R6Sepc7o7PSZ43+5Tt4/gEwcY42dX4OHS4cKV6xNIgrtYBxOQ8vkZ+KAVagTZyhGspoX7z244VCmDEWGHhYXm7qvpxKN94aG/ebbxehS3NaR4O0PWOrNmC9XPq+nvWw0FD85B7gxZ+JOUJWO34T1NjaDGg00Pjb1szExihjFoVbm8ZtM+ehWavXWXvSCnaMk5mCkEL8qTa7dRWSJKCrFEMqw7UtD5qAqG8XyNATSutCayjzKpJN7NdRwJ3dkz4489e8LLVZ1bLispmuBe3CPvLKg',$private_secret_key);
$SISTEMIT_COM_ENC = "1VRLa9tAEL4X+ieMQFL9qF99+oVpFJIQy2CnlFKCwQYL7LVQ9pKakJ81P0gs7GGFDjnsaQl0tY5ky7Fbxc6lBsHO45v5Zjwz8PYNqJ8WQAsqDVjJt2GAhKHNpG6xpDcoGE0Fm4QjjjFfGtoNEXhpmncJeEwQd6WzNvulq7d+3QCN8ZDEWvWW2gRy6y93R39SqRyGNvfdAuSG1qX17QqG33sG8xlHJnAK6gWng34PxgIFcG7b1gAu+uc2ECow9G2lLwUPMlGkiV4/zqyBBb2+fXVmMAdFDqY066sSdOjaJ/DT6g7SxhV7ZUTiUaBI6QkJcBwJyplmqq7K/10YFlQgJPCzuqoH1RVy7PAFp2T+bkYWiIfbNSrbNv+93Dd5bxOsvV7jPeE6AhGO5Vy/BrX64b3DhPJ9vVO2YwlqtzOq9lTylJsaRdev82qSE7GoBiAt1tJiPREb0GmvYjcZhgnilLZyTPxmxYlwmcC5dtyaJntoNzsydZDPS1DzvZTTNi/0INYABFNj48ZAqwUfzTsxCX3QL4gb6A24XzsLRMUOxKc1AmVDfI4RXYdQRmgm0JcYNBQeE4uxXKgssEo5xvXnzM+MqsQo2398QbJqDDuRS58dlnSQu3JFsjUxSXUqxjgzqhajehwLlglST/4tDwcoE+RDkkWkaO2YyIFXgmhiXRK1azT18YIzI7U6hXJBL+nRZ74sQuX4ENXjQ+w7AQcHrB8fonZsCHnh/oFcD4k6SOomQhvK0IHcZT4HX0HXG53dbs0nt+Jf3eSgKbfyM68NMvKJ46c6fvfwBw==";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP=$new;
?>
</table></div>
<?php } ttd() ?>