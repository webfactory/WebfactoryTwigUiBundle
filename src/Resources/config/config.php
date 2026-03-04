<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {

    $container->extension(
        'twig_component',
        [
            'anonymous_template_directory' => 'components',
        ]
    );
};
