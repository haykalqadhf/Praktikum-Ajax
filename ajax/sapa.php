<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : 'Tamu';
  echo "Halo, $nama! Selamat datang di AJAX!";
} else {
  echo "Akses tidak valid.";
}
?>