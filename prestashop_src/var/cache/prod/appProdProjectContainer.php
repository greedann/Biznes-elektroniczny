<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLraphv8\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLraphv8/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerLraphv8.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerLraphv8\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerLraphv8\appProdProjectContainer([
    'container.build_hash' => 'Lraphv8',
    'container.build_id' => '28e9eca2',
    'container.build_time' => 1729878127,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLraphv8');
