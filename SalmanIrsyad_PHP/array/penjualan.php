<!DOCTYPE html>
<html>
<body>
    <br><br><br>

<?php
$penjualan = array (
  array("Komputer",100,90,120,80,110,500),
  array("Laptop",50,70,110,100,80,410),
  array("Hp",150,200,160,110,90,710),
  array("PS",40,20,60,30,70,220),
  array("Tablet",110,130,100,80,50,470),
  array("Modem",350,200,100,130,230,1010)
);
?>

<table border="1" align="center">
    <tr>
    <th colspan="7" bgcolor="yellow" style="color:red;">Laporan Penjualan Barang Akhir Bulan</th>
    </tr>
    <tr bgcolor="blue" style="color:white;">
        <th>Nama Barang</th>
        <th>Januari</th>
        <th>Februari</th>
        <th>Maret</th> v
        <th>April</th>
        <th>Mei</th>
        <th>Total</th>
    </tr>
    <?php
    for ($row = 0; $row < 6; $row++) {
        echo "<tr>";
        for ($col = 0; $col < 7; $col++) {
          echo "<td>".$penjualan[$row][$col]."</td>";
        }
        echo "</tr>";
      }
    ?>
</table>

</body>
</html>