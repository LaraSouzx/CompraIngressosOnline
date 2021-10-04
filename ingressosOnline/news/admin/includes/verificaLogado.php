<?php
session_start();
if (!isset($_SESSION['logado'])) {
  echo "<script>
        location.href='../../index.php';
      </script>";
}
?>