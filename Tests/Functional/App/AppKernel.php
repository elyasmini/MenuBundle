<?php

use Symfony\Cmf\Component\Testing\HttpKernel\TestKernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends TestKernel
{
    public function configure()
    {
        $this->requireBundleSets(array(
            'default', 'phpcr_odm', 'sonata_admin'
        ));

        $this->addBundles(array(
            new \Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new \Symfony\Cmf\Bundle\MenuBundle\CmfMenuBundle(),
        ));
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.php');
    }

}
