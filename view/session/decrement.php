<?php
$app->session->start();
if(isset($_SESSION['count'])) {
    $app->session->set('count', $app->session->get('count')-1);
}
else {
    $app->session->set('count', 0);
}

header("Location: ../session");
