<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGM7x8B2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGM7x8B2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGM7x8B2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGM7x8B2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGM7x8B2\App_KernelDevDebugContainer([
    'container.build_hash' => 'GM7x8B2',
    'container.build_id' => '2a47fc1d',
    'container.build_time' => 1605650182,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGM7x8B2');
