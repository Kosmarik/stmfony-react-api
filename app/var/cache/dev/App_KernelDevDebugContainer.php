<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX8KPus7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX8KPus7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX8KPus7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX8KPus7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX8KPus7\App_KernelDevDebugContainer([
    'container.build_hash' => 'X8KPus7',
    'container.build_id' => '7c319605',
    'container.build_time' => 1605267741,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX8KPus7');
