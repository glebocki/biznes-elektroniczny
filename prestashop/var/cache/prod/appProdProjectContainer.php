<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXucxdsz\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXucxdsz/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXucxdsz.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXucxdsz\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXucxdsz\appProdProjectContainer([
    'container.build_hash' => 'Xucxdsz',
    'container.build_id' => '6444a323',
    'container.build_time' => 1607721255,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXucxdsz');