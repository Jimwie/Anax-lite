<?php

$app->router->add("", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Home"]);
    echo $app->navbar->getHTML();
    $app->view->add("take1/home");
    $app->view->add("take1/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("about", function () use ($app) {
    $app->view->add("take1/header", ["title" => "About"]);
    echo $app->navbar->getHTML();
    $app->view->add("take1/about");
    $app->view->add("take1/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("report", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Report"]);
    echo $app->navbar->getHTML();
    $app->view->add("take1/report");
    $app->view->add("take1/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("session", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Session"]);
    echo $app->navbar->getHTML();
    $app->view->add("session/session");
    $app->view->add("take1/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("dice", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Session"]);
    echo $app->navbar->getHTML();
    $app->view->add("dice/dice");
    $app->view->add("take1/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("dice/roll", function () use ($app) {
    $app->view->add("dice/roll");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("dice/stop", function () use ($app) {
    $app->view->add("dice/stop");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("dice/newgame", function () use ($app) {
    $app->session->start();
    $app->session->destroy();
    $app->view->add("dice/newgame");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("session/increment", function () use ($app) {
    $app->view->add("session/increment");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("session/decrement", function () use ($app) {
    $app->view->add("session/decrement");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("session/status", function () use ($app) {
    $data = [
        "Session name" => session_name(),
        "Session status" => session_status(),
        "Session ID" => session_id(),
    ];

    $app->response->sendJson($data);
});

$app->router->add("session/dump", function () use ($app) {
    $app->session->start();
    $app->session->dump();
});

$app->router->add("session/destroy", function () use ($app) {
    $app->session->start();
    $app->session->destroy();
    $app->session->dump();
});


$app->router->add("status", function () use ($app) {
    $data = [
        "Server" => php_uname(),
        "PHP version" => phpversion(),
        "Included files" => count(get_included_files()),
        "Memory used" => memory_get_peak_usage(true),
        "Execution time" => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],
    ];

    $app->response->sendJson($data);
});
