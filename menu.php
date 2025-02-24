<?php include('variables.php') ?> 

<ol>
    <?php foreach ($pages as $pageId => $page): ?>
        <li>
            <a href="?page=<?= $pageId ?>"><?= $page['name'] ?></a>
            <?php if(isset($page['tabs']) && count($page['tabs']) > 0): ?>
                <ul>
                    <?php foreach ($page['tabs'] as $tabId => $tab) : ?>
                        <li>
                            <a href="?page=<?= $pageId ?>&onglet=<?= $tabId ?>"><?= $tab['name'] ?></a>
                        </li>                    
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </li>
    <?php endforeach ?>
    
</ol>

