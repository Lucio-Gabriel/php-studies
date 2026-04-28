<?php

$usuario = $_GET['user'] ?? 'Visitante';

// echo $usuario;
$cor_personalizada = null;
$cor_padrao = "#3333";

$corSelect = $cor_personalizada ?? $cor_padrao;

echo $corSelect;