<?php

    //Transaksi penjualan produk
$nama_produk = "Jaket gunung";
$harga_satuan = 250000;
$qty = 2;

    //Hitung harga yang harus di bayar
$total_harga = $harga_satuan * $qty;
echo "Nama produk: " . $nama_produk;
echo "<br>Harga satuan: " . $harga_satuan;
echo "<br>Jumlah barang: " . $qty;
echo "<br>Total bayar: Rp" . $total_harga;

    //Terdapat diskon 5% jika Sub total lebih dari 500.000
$subtotal= $harga_satuan * $qty;
if($subtotal >= 500000){
    $diskon= $subtotal * 5/100;
}else{
    $diskon = 0;
}

    $total = $subtotal - $diskon;

echo "<br>diskon: " . $diskon;
echo "<br>Total bayar: Rp" . $total;