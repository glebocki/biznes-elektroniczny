<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUegiipk\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUegiipk/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUegiipk.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUegiipk\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUegiipk\appProdProjectContainer([
    'container.build_hash' => 'Uegiipk',
    'container.build_id' => 'cfc9c878',
    'container.build_time' => 1604944754,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUegiipk');
