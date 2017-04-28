<?php
require ANAX_INSTALL_PATH . "/vendor/autoload.php";
$app->session->start();
if (isset($_SESSION['game'])) {
    $app->session->set('game', $app->session->get('game'));
} else {
    $game = new \Jay\Dice\Dicegame();
    $app->session->set('game', $game);
}
$throws = "";
foreach ($_SESSION['game']->throws as $value) {
    $throws .= $value . ", ";
}

?>
<div class="container" role="main">
        <div class="page-header">
            <h1>Dice</h1>
        </div>
        <div class="text">
            <h2>Player 1: <?php echo $_SESSION['game']->players[0]->score ?> </h2>
            <h2>Player 2: <?php echo $_SESSION['game']->players[1]->score ?> </h2>
            <h4>Current player is: <?php echo $_SESSION['game']->currentPlayer + 1 ?> </h4>
            <h4> Current round score is: <?php echo array_sum($_SESSION['game']->throws) ?> </h4>
            <h4> Throws: <?php echo $throws ?> </p>
            <a href="dice/roll">Roll</a><br>
            <a href="dice/stop">Save</a><br>
            <a href="dice/newgame">New Game</a><br>
        </div>
    </div>
