<?php


$page = $_GET["page"] ?? 1;
$tab = $_GET['onglet'] ?? 0;

$currentPage = $pages[$page];
$file = $currentPage['url'];

if(isset($currentPage['tabs']) && isset($currentPage['tabs'][$tab])){
    $file = $currentPage['tabs'][$tab]['url'] ?? $file;
}

include($file);
