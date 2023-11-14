<?php
require "../vendor/autoload.php";
require "index.php";

if (isset($_GET['filter'])) {
  $filter = $_GET['filter'];

  if ($filter == 'all') {
    foreach($store->showElements() as $e) {
      echo "<br>$e";
    };
  } else if ($filter == 'products') {
    foreach($store->showProducts() as $e) {
      echo "<br>$e";
    };
  } else if ($filter == 'services') {
    foreach($store->showServices() as $e) {
      echo "<br>$e";
    };
  } else if ($filter == 'expiration') {
    foreach($store->showExpiredProducts() as $e) {
      echo "<br>$e";
    };  } else if ($filter == 'unexpired') {
      foreach($store->showNoExpiredProducts() as $e) {
        echo "<br>$e";
      };
  }
}
