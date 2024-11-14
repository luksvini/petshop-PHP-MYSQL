<?php


session_start();

// Encerra a sessão
session_destroy();

// Redireciona de volta para a mesma página
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;