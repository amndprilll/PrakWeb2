<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-color:#C0C0C0;">
  <h3>Belanja Online</h3>
    <div class="container">
    <form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Nama Customer:</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Lengkap " type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk:</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="radio_1" class="custom-control-label">KUlKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Produk:</label> 
    <div class="col-8">
      <input id="jumlah" placeholder="Jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="Data anda tersimpan" type="submit" class="btn btn-dark">Kirim</button>
    </div>
  </div>
</form>
    </div>
    
      <h5>Daftar Harga</h5>
      <ul class="harga-list">
        <li class="harga-item">TV: 4.200.000</li>
        <li class="harga-item">Kulkas: 3.100.000</li>
        <li class="harga-item">Mesin Cuci: 3.100.000</li>
      </ul>
      <h5>Harga dapat berubah  setiap saat.</h5>
    </div>
    <hr>


<?php
if(isset($_POST['proses'])){
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$total = 0;
if ($produk == "TV"){
  $total = 4200000 * $jumlah;
} elseif ($produk == "Kulkas"){
  $total = 3100000 * $jumlah;
} elseif ($produk == "Mesin Cuci"){
  $total = 3800000 * $jumlah;
}

echo "<p>Nama Customer : $customer</p>";
echo "<p>Pilih Produk :  $produk<p>";
echo "<p>Jumlah Produk: $jumlah</p>";
echo "<p>Total Belanja Rp. " . number_format($total) . ",-";
}
?>
</body>
</html>

