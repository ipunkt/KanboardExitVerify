<?php

namespace Kanboard\Plugin\VerifyExit;


use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:js", array("template" => "plugins/VerifyExit/unload_verify.js"));
    }
}