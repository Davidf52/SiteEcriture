<?php 
session_start(); 
session_destroy(); 
header('Location: ../article/index.php');