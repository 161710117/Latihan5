<?php

require_once 'konstrak.php';

$baju = new baju('Laila','Hitam Putih','Syari','Rabbani');
echo "Nama Baju = ".$baju->get_namabaju();
echo "<br />";
echo "Warna = ".$baju->get_warna();
echo "<br />";
echo "Type = ".$baju->get_type();
echo "<br />";
echo "Merk = ".$baju->get_merk();
echo "<br />";
?>