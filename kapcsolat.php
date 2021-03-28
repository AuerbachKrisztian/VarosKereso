<?php
$host="localhost";
$fnev="root";
$jelszo="";
$adatbazis="varosok";
$kapcsolat = new mysqli($host,$fnev,$jelszo,$adatbazis);

// Check connection
if ($kapcsolat -> connect_errno) {
  echo "Sikertelen az adabtbázishoz való kapcsolodás " . $mysqli -> connect_error;
  exit();
}

