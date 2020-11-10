<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Service\CartService;

class IndexController extends AbstractActionController
{

    /**
     *
     * @var CartService
     */
    private $cartService;

    public function indexAction()
    {
        return new ViewModel();
    }

    public function cartAction()
    {
        $allCart = $this->cartService->getAllCart();
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $jsonModel = new JsonModel([
            "cart" => $allCart
        ]);
        return $jsonModel;
    }

    public function totalpriceAction()
    {
        $total = $this->cartService->cartTotal();
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $jsonModel = new JsonModel([
            "price" => $total
        ]);
        return $jsonModel;
    }

    public function discountAction()
    {
        $request = $this->getRequest();
        $jsonModel = new JsonModel();
        $response = $this->getResponse();
        if ($request->isPost()) {
            $post = $request->getPost()->toArray();
            $cartService = $this->cartService;
            $discount = $cartService->setDiscount($post["code"])->discountCalculator();
            $response->setStatusCode(201);
            $jsonModel->setVariable("discount", $discount);
        }
        
        return $jsonModel;
    }

    /**
     *
     * @return the $cartService
     */
    public function getCartService()
    {
        return $this->cartService;
    }

    /**
     *
     * @param field_type $cartService            
     */
    public function setCartService($cartService)
    {
        $this->cartService = $cartService;
    }
}
