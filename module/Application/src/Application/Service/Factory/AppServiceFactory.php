<?php
namespace Application\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Application\Service\AppService;

/**
 *
 * @author mac
 *        
 */
class AppServiceFactory implements FactoryInterface
{

    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     *
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        
        $xserv = new AppService();
        $em = $serviceLocator->get("doctrine.entitymanager.orm_default");
        $xserv->setEntityManager($em);
        return $xserv;
    }
}

