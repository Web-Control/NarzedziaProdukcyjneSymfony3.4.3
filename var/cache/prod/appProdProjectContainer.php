<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZo7wtzc\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZo7wtzc/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerZo7wtzc.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerZo7wtzc\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerZo7wtzc\appProdProjectContainer(array(
    'container.build_hash' => 'Zo7wtzc',
    'container.build_id' => '436218a8',
    'container.build_time' => 1519792748,
));