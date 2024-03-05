<?php
    session_start(); 

    include 'conexion_db.php';

    header('Location: login.php');

    session_destroy();


