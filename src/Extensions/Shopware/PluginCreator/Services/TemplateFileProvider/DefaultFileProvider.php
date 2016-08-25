<?php

namespace Shopware\PluginCreator\Services\TemplateFileProvider;

use Shopware\PluginCreator\Services\NameGenerator;
use Shopware\PluginCreator\Struct\Configuration;

/**
 * Class DefaultFileProvider returns the default files, always needed for a plugin
 * @package Shopware\PluginCreator\Services\TemplateFileProvider
 */
class DefaultFileProvider implements FileProviderInterface
{
    /**
     * @inheritdoc
     */
    public function getFiles(Configuration $configuration, NameGenerator $nameGenerator)
    {
        $pluginClassName = "{$configuration->name}.php";

        return [
            "PluginClass.tpl" => $pluginClassName,
            "plugin.xml.tpl" => "plugin.xml",
            "Readme.tpl" => "Readme.md",
            "LICENSE" => "LICENSE",
            "Subscriber/Frontend.tpl" => "Subscriber/Frontend.php",
            "phpunit.xml.dist.tpl" => "phpunit.xml.dist",
            "tests/PluginTest.tpl" => "tests/PluginTest.php",
            "Resources/services.xml.tpl" => "Resources/services.xml",
        ];
    }
}
