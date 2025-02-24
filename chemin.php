<?php

include('variables.php');

$page = $_GET['page'] ?? 0;
$tab = $_GET['onglet'] ?? 0;

if(isset($pages[$page])): ?>
    <a href="?page=<?= $page ?>"><?= $pages[$page]['name'] ?></a>

    <?php if(isset($pages[$page]['tabs'][$tab])) : ?>
        > <a href="?page=<?= $page ?>&onglet=<?= $tab ?>"><?= $pages[$page]['tabs'][$tab]['name'] ?></a>
    <?php endif ?>

<?php endif ?>

