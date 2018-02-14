<?php require_once('../src/init.php'); ?>
<?php
$user = $db->createUser('Federica', 'Alfano', 'alfanofederica95@gmail.com', 'root');
$boards = $db->createBoard(1);

/*if (false === isset($_GET['id']))
    die('Missing board ID');*/
$lanes = $db->createLane(1, 'cool');
?>

<!DOCTYPE html>
<html>
<?php require_once('../src/head.php'); ?>
<body>
<div class="boardPage">
    <div class="toolBar">
        <h4 class="toolBar_title">SEMAINE INTENSIVE PHP</h4>
    </div>
    <?php foreach ($lanes as $lane) {
        $cards = $db->getLanesCards($lane['laneID']);
        ?>
    <div class="cardArea_container">
        <h4 class="cardArea_container_title"><?= $lane['name'] ?></h4>
    </div>
            <?php foreach ($cards as $card) { ?>
            <div class="cardArea_container">
            <div class="cardArea_title"><?= $card['title'] ?></div>
            <?php } ?>
        </div>

    <?php } ?>
</div>
</body>
</html>

