<?php
namespace Application\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Application\Controller\IndexController;
use Application\Service\CartService;

/**
 *
 * @author otaba
 *        
 */
class IndexControllerFactory implements FactoryInterface
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
        
       $ctr = new IndexController();
       /**
        * 
        * @var CartService $cartService
        */
       $cartService = $serviceLocator->getServiceLocator()->get("cartService");
       
       $ctr->setCartService($cartService)->setEntityManager($cartService->getEntityManager());
       return $ctr;
    }
}

