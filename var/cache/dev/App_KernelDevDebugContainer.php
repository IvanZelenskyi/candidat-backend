<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXxJLuqh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXxJLuqh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXxJLuqh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXxJLuqh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXxJLuqh\App_KernelDevDebugContainer([
    'container.build_hash' => 'XxJLuqh',
    'container.build_id' => 'de637b1a',
    'container.build_time' => 1700669617,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXxJLuqh');
