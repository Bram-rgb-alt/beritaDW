<?php
session_start();
session_unset();  // Hapus semua variabel session
session_destroy(); // Hancurkan session

header("Location: index.php?page=login");
exit();