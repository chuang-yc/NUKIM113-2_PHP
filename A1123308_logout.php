<?php
session_start();    // 啟動或繼續現有的 Session，確保可以操作 Session 資料
session_destroy();  // 銷毀目前的 Session，清除所有儲存在 Session 中的資料
header("Location:A1123308_login.php"); // 將使用者重新導向到登入頁面
?>