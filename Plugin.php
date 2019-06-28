<?php

namespace Kanboard\Plugin\VerifyExit;


use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:js", array("template" => "plugins/VerifyExit/unload_verify.js"));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

}