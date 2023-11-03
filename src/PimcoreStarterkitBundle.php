<?php

namespace SergeDesign\StarterkitBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\PimcoreBundleAdminClassicInterface;
use Pimcore\Extension\Bundle\Traits\BundleAdminClassicTrait;

use SergeDesign\StarterkitBundle\Installer\Install;

class PimcoreStarterkitBundle extends AbstractPimcoreBundle implements PimcoreBundleAdminClassicInterface
{
    use BundleAdminClassicTrait;

    final public function getInstaller(): Install
    {
        return $this->container->get(Install::class);
    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getJsPaths(): array
    {
        return [
            '/bundles/starterkit/js/pimcore/startup.js'
        ];
    }

}
