<?php

$app->session->start();
$_SESSION['game']->save();

header("Location: ../dice");
