<?php
    include_once dirname(__FILE__) . './partials/contents.php';
?>
<?php foreach( $notes as $note ):?>

    <li>
        <a class="text-blue-500 hover:underline" href="/notes?id=<?= $note['id'];?>"><?= $note['notes']?></a>
    </li>
<?php endforeach;?>
</body>
</html>