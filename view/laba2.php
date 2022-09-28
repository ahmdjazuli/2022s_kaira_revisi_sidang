<?php require('head.php'); hel('Laba/Rugi Bulanan');
$action = isset($_GET['action']) ? $_GET['action'] : ''; 
switch($action){ default:
$query = mysqli_query($kon, "SELECT tglbeli, MONTH(tglbeli) as bulan, YEAR(tglbeli) as tahun FROM `beli` WHERE status = 'Diterima' GROUP BY bulan ORDER BY tglbeli ASC");
?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2>Rumus</h2>
            1. Laba Kotor = Hasil Penjualan (Transaksi Pelanggan dan Transaksi Reseller) - Harga Modal (Pembelian Barang).<br>
            2. Laba Bersih = Laba Kotor - Beban Usaha (Barang Rusak dan Pengeluaran Lainnya). <br>
            3. L = Laba/Rugi. <br>
            4. Ketika hasil <u>"L" negatif</u>, toko dalam kondisi <b>Merugi</b>, sedangkan ketika hasil <u>"L" positif</u> maka toko tersebut mendapat <b>keuntungan/laba</b>. <br>
            5. Jika hasil <u>0</u>, toko tidak mengalami keuntungan ataupun rugi.
          </div>
          <div class="card-body">
          <form name="table" method="POST">
            <table id="table" class="table table-bordered table-hover">
              <thead class="bg-black">
                <tr class="text-center">
                  <th>No</th>
                  <th>Periode</th>
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
              <tbody>
              <?php $no = 1;
                while($j = mysqli_fetch_array($query)){
                  $bulan = $j['bulan']; $tahun = $j['tahun'];
                  $woy = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(total) as total FROM beli INNER JOIN user ON beli.id = user.id WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun' AND level = 'pelanggan'"));
                  $woy1 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(total) as total FROM beli INNER JOIN user ON beli.id = user.id WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun' AND level = 'reseller'"));
                  $woy2 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(hargamasuk*jumlah) as total FROM masuk WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun'"));
                  $woy3 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(total) as total FROM pengeluaran WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun'"));
                  $woy4 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(hargarusak*jumlah) as total FROM rusak WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun'"));
                  $wjsn = $woy['total']+$woy1['total']-$woy2['total']-$woy3['total']-$woy4['total']; ?>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?php 
                      if($j['bulan'] == 6){echo 'Juni'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 7){echo 'Juli'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 8){echo 'Agustus'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 9){echo 'September'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 10){echo 'Oktober'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 11){echo 'November'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 12){echo 'Desember'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 1){echo 'Januari'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 2){echo 'Februari'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 3){echo 'Maret'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 4){echo 'April'.' - '. $j['tahun']; }
                      else if($j['bulan'] == 5){echo 'Mei'.' - '. $j['tahun']; }
                    ?></td>
                    <td>Rp. <?= number_format($woy['total'],0,'.','.') ?></td>
                    <td>Rp. <?= number_format($woy1['total'],0,'.','.') ?></td>
                    <td>Rp. <?= number_format($woy2['total'],0,'.','.') ?></td>
                    <td>Rp. <?= number_format($woy['total']+$woy1['total'],0,'.','.') ?></td>
                    <td>Rp. <?= number_format($woy4['total'],0,'.','.') ?></td>
                    <td>Rp. <?= number_format($woy3['total'],0,'.','.') ?></td>
                    <td>Rp. <?= number_format($wjsn,0,'.','.') ?></td>
                    <td>
                      <?= $wjsn  > 0 ? "L+" : '';?>
                      <?= $wjsn  < 0 ? "L-" : '';?>
                      <?= $wjsn == 0 ? "0" : '';?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php break; } require('foot.php'); ?>