<?php

require_once "../requisitos.php";
logout();
session_destroy();
header("Location: index.php");
?>