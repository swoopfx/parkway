<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="cart")
 * @author otaba
 *        
 */
class Cart
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @ORM\Column(name="product_name", type="string", nullable=true)
     * @var string
     */
    private $productName;
    
    /**
     * @ORM\Column(name="price", type="string", nullable=true)
     * @var unknown
     */
    private $price;
    
    
    
    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $productName
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return the $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @param unknown $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}

