<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCmeTSua\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCmeTSua/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCmeTSua.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCmeTSua\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCmeTSua\App_KernelDevDebugContainer([
    'container.build_hash' => 'CmeTSua',
    'container.build_id' => '861efaba',
    'container.build_time' => 1733340047,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCmeTSua');
