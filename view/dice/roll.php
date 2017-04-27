<?php

$app->session->start();
$_SESSION['game']->play();

header("Location: ../dice");
