<?php

namespace Welinkeo\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orderlist
 *
 * @ORM\Table(name="orderlist")
 * @ORM\Entity(repositoryClass="Welinkeo\MainBundle\Repository\OrderlistRepository")
 */
class Orderlist
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="products", type="string", length=255)
     */
    private $products;

    /**
     * @var int
     *
     * @ORM\Column(name="delivery", type="integer", nullable=true)
     */
    private $delivery;

    /**
     * @var int
     *
     * @ORM\Column(name="address_id", type="integer")
     */
    private $addressId;

    /**
     * @var int
     *
     * @ORM\Column(name="shop_id", type="integer")
     */
    private $shopId;

    /**
     * @var int
     *
     * @ORM\Column(name="beneficiary_id", type="integer")
     */
    private $beneficiaryId;

    /**
     * @var int
     *
     * @ORM\Column(name="payement_id", type="integer")
     */
    private $payementId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text")
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text")
     */
    private $answer;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Orderlist
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set products
     *
     * @param string $products
     * @return Orderlist
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return string 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set delivery
     *
     * @param integer $delivery
     * @return Orderlist
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get delivery
     *
     * @return integer 
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     * @return Orderlist
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set shopId
     *
     * @param integer $shopId
     * @return Orderlist
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;

        return $this;
    }

    /**
     * Get shopId
     *
     * @return integer 
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * Set beneficiaryId
     *
     * @param integer $beneficiaryId
     * @return Orderlist
     */
    public function setBeneficiaryId($beneficiaryId)
    {
        $this->beneficiaryId = $beneficiaryId;

        return $this;
    }

    /**
     * Get beneficiaryId
     *
     * @return integer 
     */
    public function getBeneficiaryId()
    {
        return $this->beneficiaryId;
    }

    /**
     * Set payementId
     *
     * @param integer $payementId
     * @return Orderlist
     */
    public function setPayementId($payementId)
    {
        $this->payementId = $payementId;

        return $this;
    }

    /**
     * Get payementId
     *
     * @return integer 
     */
    public function getPayementId()
    {
        return $this->payementId;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Orderlist
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return Orderlist
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return Orderlist
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}
