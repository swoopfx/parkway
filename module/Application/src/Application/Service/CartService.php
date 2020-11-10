<?php
namespace Application\Service;

use Doctrine\ORM\EntityManager;
use Application\Entity\Cart;
use Doctrine\ORM\Query;

/**
 *
 * @author otaba
 *        
 */
class CartService
{

    /**
     *
     * @var EntityManager
     */
    private $entityManager;

    private $price;

    private $discount;

    // TODO - Insert your code here
    
    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }

    public function getAllCart()
    {
        $em = $this->entityManager;
        $res = $em->getRepository(Cart::class)
            ->createQueryBuilder("c")
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
        return $res;
    }

    public function cartTotal()
    {
        $em = $this->entityManager;
        $res = $em->getRepository(Cart::class)
            ->createQueryBuilder("c")
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);
        $totalPrice = 0;
        foreach ($res as $price) {
            $totalPrice += $price["price"];
        }
        return $totalPrice;
    }

    public function discountCalculator()
    {
        $this->price = $this->cartTotal();
        switch ($this->discount) {
            case "FIXED10":
                return (int) $this->price - 10;
                break;
            
            case "PERCENT10":
                return (0.9 * $this->price);
                break;
            
            case "MIXED10":
                $pecentage = (0.9 * $this->price);
                $fixed = (int) $this->price - 10;
                if ($pecentage > $fixed) {
                    return $pecentage;
                } else {
                    return $fixed;
                }
                break;
            
            case "REJECTED10":
                return (0.9 * $this->price) - 10;
                break;
            
            default:
                return $this->price;
        }
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
    }

    /**
     *
     * @return the $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     *
     * @return the $discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     *
     * @param field_type $price            
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     *
     * @param field_type $discount            
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }
}

