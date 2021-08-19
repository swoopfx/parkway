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
use Doctrine\ORM\EntityManager;
use Application\Entity\PollingUnit;
use Doctrine\ORM\Query;
use Application\Entity\Lga;
use Application\Entity\AnnouncedPuResults;
use Application\Entity\Party;

class IndexController extends AbstractActionController
{

    /**
     *
     * @var CartService
     */
    private $cartService;

    /**
     *
     * @var EntityManager
     */
    private $entityManager;

    public function indexAction()
    {
        return new ViewModel();
    }

    public function q2Action()
    {
        $viewModel = new ViewModel();
        return $viewModel;
    }

    public function q3Action()
    {
        $viewModel = new ViewModel();
        return $viewModel;
    }

    public function getAllPartyAction()
    {
        $jsonModel = new JsonModel();
        $em = $this->entityManager;
        $repo = $em->getRepository(Party::class);
        $data = $repo->createQueryBuilder('p')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
        $jsonModel->setVariables([
            "data" => $data
        ]);
        return $jsonModel;
    }

    public function pollingUnitSumTotalAction()
    {
        $jsonModel = new JsonModel();
        $response = $this->getResponse();
        $id = $this->params()->fromRoute("id");
        $em = $this->entityManager;
        $sumTotal = 0;
        
        $repo = $em->getRepository(PollingUnit::class);
        $puData = $repo->createQueryBuilder('p')
            ->select([
            'p',
            // 'w',
            "pu"
        ])
            ->
        // ->leftJoin("p.wardId", "w")
        
        leftJoin("p.puResult", "pu")
            ->where("p.lgaId = :id")
            ->setParameters([
            "id" => $id
        ])
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
        if (count($puData)) {
            
            for ($i = 0; $i < count($puData); $i ++) {
                if (count($puData[$i]['puResult']) > 0) {
                    for ($x = 0; $x < count($puData[$i]['puResult']); $x ++) {
                        $sumTotal += $puData[$i]['puResult'][$x]['partyScore'];
                    }
                }
            }
        }
        $jsonModel->setVariables([
            "data" => $sumTotal
        ]);
        return $jsonModel;
    }

    public function getAllLgaAction()
    {
        $jsonModel = new JsonModel();
        $response = $this->getResponse();
        // $id = $this->params()->fromRoute("id", NULL);
        $em = $this->entityManager;
        $repo = $em->getRepository(Lga::class);
        $data = $repo->createQueryBuilder("p")
            ->
        // ->select("")
        getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
        // var_dump($data);
        $jsonModel->setVariables([
            "data" => $data
        ]);
        return $jsonModel;
    }

    /**
     * This gets a list of availaible polling unitss
     *
     * @return \Zend\View\Model\JsonModel
     */
    // public function getAllPollingUnitAction()
    // {
    // $jsonModel = new JsonModel();
    // $response = $this->getResponse();
    
    // $em = $this->entityManager;
    // $repo = $em->getRepository(PollingUnit::class);
    // $data = $repo->createQueryBuilder("p")
    // ->getQuery()
    // ->getResult(Query::HYDRATE_ARRAY);
    // // var_dump($data);
    // $jsonModel->setVariables([
    // "data" => $data
    // ]);
    // return $jsonModel;
    // }
    
    /**
     * Used to get list of specifi Polling Unit
     *
     * @return \Zend\View\Model\JsonModel
     */
    public function getPollingUnitAction()
    {
        $jsonModel = new JsonModel();
        $id = $this->params()->fromRoute("id");
        $em = $this->entityManager;
        $repo = $em->getRepository(PollingUnit::class);
        $data = $repo->createQueryBuilder('p')
            ->select([
            'p',
            'w'
        ])
            ->leftJoin("p.wardId", "w")
            ->
        // ->leftJoin("p.lgaId", "l")
        where("p.lgaId = :id")
            ->setParameters([
            "id" => $id
        ])
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
        
        $jsonModel->setVariables([
            "data" => $data
        ]);
        return $jsonModel;
    }

    public function getPollingUnitDetailsAction()
    {
        $jsonModel = new JsonModel();
        $id = $this->params()->fromRoute("id", NULL);
        $em = $this->entityManager;
        $repo = $em->getRepository(AnnouncedPuResults::class);
        $prepo = $em->getRepository(PollingUnit::class);
        $pdata = $prepo->createQueryBuilder('p')
            ->select([
            'p',
            'w'
        ])
            ->leftJoin("p.wardId", "w")
            ->
        // ->leftJoin("p.lgaId", "l")
        where("p.id = :id")
            ->setParameters([
            "id" => $id
        ])
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
        // var_dump($pdata);
        $data = $repo->createQueryBuilder("a")
            ->select([
            'a',
            'p'
        ])
            ->leftJoin("a.pollingUnitUniqueid", "p")
            ->where('a.pollingUnitUniqueid = :pid')
            ->setParameters([
            "pid" => $id
        ])
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
        // var_dump($data);
        $jsonModel->setVariables([
            "data" => $data,
            "pdetails" => $pdata[0]
        ]);
        return $jsonModel;
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
        return $this;
    }

    /**
     *
     * @return the $entityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     *
     * @param field_type $entityManager            
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;
        return $this;
    }
}
