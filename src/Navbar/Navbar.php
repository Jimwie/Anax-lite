<?php

namespace Jay\Navbar;

/**
 * Navbar to generate HTML för a navbar from a configuration array.
 */
class Navbar implements
    \Anax\Common\ConfigureInterface,
    \Anax\Common\AppInjectableInterface
{
     use \Anax\Common\ConfigureTrait,
     \Anax\Common\AppInjectableTrait;
    /**
     * Get HTML for the navbar.
     *
     * @return string as HTML with the navbar.
     */
     public function getHTML()
    {
        $navHtml = <<<EOD
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Jimmys Me-sida</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
              <ul class="nav navbar-nav">
EOD;

        foreach ($this->config["items"] as $key => $value) {
            $navHtml .= "<li><a href='" . $this->app->url->create($value["route"]) . "'>" . $value["text"] . "</a></li>";
        }

        $navHtml .= <<<EOD
                    </ul>
                </div>
            </div>
        </nav>
EOD;

        return $navHtml;
    }
}
