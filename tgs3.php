<?php

tampilkan_bilangan (10);

function tampilkan_bilangan (int $bilangan, int $index = 5) {

  if ($index < $bilangan) {
    tampilkan_bilangan ($bilangan, $index + 1);
  }

  echo "Perulangan ke-{$index} <br/>";
}
?>



