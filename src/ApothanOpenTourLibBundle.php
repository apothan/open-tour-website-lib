<?php
// src/Apothan/OpenToursBundle/ApothanOpenToursBundle.php
namespace Apothan\OpenTourLibBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Apothan\OpenTourLibBundle\DependencyInjection\ApothanOpenTourLibExtension;

class ApothanOpenTourLibBundle extends Bundle
{
    public function build(ContainerBuilder $container){
        parent::build($container);
    }

    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new ApothanOpenTourLibExtension();
        }
        return $this->extension;
    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}