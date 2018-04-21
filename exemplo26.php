<?php

session_start();

session_unset($_SESSION['nome']);//limpa a variavel de seccão;

echo $_SESSION["nome"];

session_destroy();//expulsa, o usuario e limpa a sessão;


//para acabar a sessão, sesion unset.
?>