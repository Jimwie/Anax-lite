<?php
$navbar = [
    "config" => [
        "navbar-class" => "navbar"
    ],
    "items" => [
        "hem" => [
            "text" => "Home",
            "route" => $app->url->create(""),
        ],
        "about" => [
            "text" => "About",
            "route" => $app->url->create("about"),
        ],
        "report" => [
            "text" => "Report",
            "route" => $app->url->create("report"),
        ],
    ]
];

$navHtml = <<<EOD
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Jimmys Me-sida</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
EOD;

foreach ($navbar["items"] as $key => $value) {
    $navHtml .= "<li><a href=\"" . $value["route"] . "\">" . $value["text"] . "</a></li>";
}

$navHtml .= <<<EOD
            </ul>
        </div>
    </div>
</nav>
EOD;

echo $navHtml;
