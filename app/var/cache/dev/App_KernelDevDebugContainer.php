<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7U5Pm7q\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7U5Pm7q/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7U5Pm7q.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7U5Pm7q\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7U5Pm7q\App_KernelDevDebugContainer([
    'container.build_hash' => '7U5Pm7q',
    'container.build_id' => 'a00bafec',
    'container.build_time' => 1605560367,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7U5Pm7q');
