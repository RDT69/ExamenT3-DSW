<?php
require "../vendor/autoload.php";
require "index.php";

if (isset($_GET['filter'])) {
  $filter = $_GET['filter'];

  if ($filter == 'all') {
    foreach($shop->showElements() as $e) {
      echo "<br>$e";
    };
  } else if ($filter == 'products') {
    foreach($shop->showProducts() as $e) {
      echo "<br>$e";
    };
  } else if ($filter == 'services') {
    foreach($shop->showServices() as $e) {
      echo "<br>$e";
    };
  } else if ($filter == 'expirationDate') {
    foreach($shop->showExpiredProducts() as $e) {
      echo "<br>$e";
    };  } else if ($filter == 'unexpired') {
      foreach($shop->showNoExpiredProducts() as $e) {
        echo "<br>$e";
      };
  }
}
