<?php

namespace Yoke\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        /*
        $prefix = substr($package->getPrettyName(), 0, 23);
        if ('yoke/template-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install template, yoke templates '
                .'should always start their package name with '
                .'"yoke/template-"'
            );
        }

        return 'data/templates/'.substr($package->getPrettyName(), 23);*/
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'yoke-template' === $packageType;
    }
}