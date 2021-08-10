<?php
declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [__DIR__.'/src']);
    $parameters->set('app.pages.directory', __DIR__.'/src/Website/Action');

    $services = $containerConfigurator->services();
    $services->set(App\Rector\Rules\AddRouteAnnotationToPages::class);
};
