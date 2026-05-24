<?php session_destroy(); session_start(); set_flash('success','Berhasil logout.'); redirect('index.php?page=login');
