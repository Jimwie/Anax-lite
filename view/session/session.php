<?php
$app->session->start();
if(isset($_SESSION['count'])) {
    $app->session->set('count', $app->session->get('count'));
}
else {
    $app->session->set('count', 0);
}

 ?>
<div class="container" role="main">
        <div class="page-header">
            <h1>Session</h1>
        </div>
        <div class="text">
            <h1><?php echo 'Count = ' . $_SESSION['count'] ?></h1>
            <a href="session/increment">Increment</a><br>
            <a href="session/decrement">Decrement</a><br>
            <a href="session/status">Session status</a><br>
            <a href="session/dump">Session dump</a><br>
            <a href="session/destroy">Session destroy</a><br>

        </div>

    </div>
