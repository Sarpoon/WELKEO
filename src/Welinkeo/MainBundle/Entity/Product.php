<?php

namespace Welinkeo\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="Welinkeo\MainBundle\Repository\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="Price", type="integer")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $countryId;

    /**
     * @var int
     *
     * @ORM\Column(name="shop_id", type="integer")
     */
    private $shopId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="string", length=255, nullable=true)
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="string", length=255, nullable=true)
     */
    private $photo2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="photo3", type="string", length=255, nullable=true)
     */
    private $photo3;
    
    /**
     * @var string
     *
     * @ORM\Column(name="photo4", type="string", length=255, nullable=true)
     */
    private $photo4; 

    /**
     * @var string
     *
     * @ORM\Column(name="photo5", type="string", length=255, nullable=true)
     */
    private $photo5;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer", nullable=true)
     */
    private $weight;

    /**
     * @var int
     *
     * @ORM\Column(name="volume_category_id", type="integer", nullable=true)
     */
    private $volumeCategoryId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_promoted", type="boolean")
     */
    private $isPromoted;

    /**
     * @var int
     *
     * @ORM\Column(name="promotion", type="integer", nullable=true)
     */
    private $promotion;

    /**
     * @var string
     *
     * @ORM\Column(name="teaser", type="text")
     */
    private $teaser;

    /**
     * @var string
     *
     * @ORM\Column(name="main_description", type="text")
     */
    private $mainDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_description1", type="text", nullable=true)
     */
    private $additionalDescription1;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_description2", type="text", nullable=true)
     */
    private $additionalDescription2;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_description3", type="text", nullable=true)
     */
    private $additionalDescription3;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;


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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return Product
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Product
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
     * Set photos
     *
     * @param string $photos
     * @return Product
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return string 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Product
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set volumeCategoryId
     *
     * @param integer $volumeCategoryId
     * @return Product
     */
    public function setVolumeCategoryId($volumeCategoryId)
    {
        $this->volumeCategoryId = $volumeCategoryId;

        return $this;
    }

    /**
     * Get volumeCategoryId
     *
     * @return integer 
     */
    public function getVolumeCategoryId()
    {
        return $this->volumeCategoryId;
    }

    /**
     * Set isPromoted
     *
     * @param boolean $isPromoted
     * @return Product
     */
    public function setIsPromoted($isPromoted)
    {
        $this->isPromoted = $isPromoted;

        return $this;
    }

    /**
     * Get isPromoted
     *
     * @return boolean 
     */
    public function getIsPromoted()
    {
        return $this->isPromoted;
    }

    /**
     * Set promotion
     *
     * @param integer $promotion
     * @return Product
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return integer 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set teaser
     *
     * @param string $teaser
     * @return Product
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;

        return $this;
    }

    /**
     * Get teaser
     *
     * @return string 
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Set mainDescription
     *
     * @param string $mainDescription
     * @return Product
     */
    public function setMainDescription($mainDescription)
    {
        $this->mainDescription = $mainDescription;

        return $this;
    }

    /**
     * Get mainDescription
     *
     * @return string 
     */
    public function getMainDescription()
    {
        return $this->mainDescription;
    }

    /**
     * Set additionalDescription
     *
     * @param string $additionalDescription
     * @return Product
     */
    public function setAdditionalDescription($additionalDescription)
    {
        $this->additionalDescription = $additionalDescription;

        return $this;
    }

    /**
     * Get additionalDescription
     *
     * @return string 
     */
    public function getAdditionalDescription()
    {
        return $this->additionalDescription;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Product
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set categoryId
     *
     * @param \Welinkeo\MainBundle\Entity\Category $categoryId
     * @return Product
     */
    public function setCategoryId(\Welinkeo\MainBundle\Entity\Category $categoryId = null)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return \Welinkeo\MainBundle\Entity\Category 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set shopId
     *
     * @param integer $shopId
     * @return Product
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
     * Set photo1
     *
     * @param string $photo1
     * @return Product
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;

        return $this;
    }

    /**
     * Get photo1
     *
     * @return string 
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * Set photo2
     *
     * @param string $photo2
     * @return Product
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;

        return $this;
    }

    /**
     * Get photo2
     *
     * @return string 
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * Set photo3
     *
     * @param string $photo3
     * @return Product
     */
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;

        return $this;
    }

    /**
     * Get photo3
     *
     * @return string 
     */
    public function getPhoto3()
    {
        return $this->photo3;
    }

    /**
     * Set photo4
     *
     * @param string $photo4
     * @return Product
     */
    public function setPhoto4($photo4)
    {
        $this->photo4 = $photo4;

        return $this;
    }

    /**
     * Get photo4
     *
     * @return string 
     */
    public function getPhoto4()
    {
        return $this->photo4;
    }

    /**
     * Set photo5
     *
     * @param string $photo5
     * @return Product
     */
    public function setPhoto5($photo5)
    {
        $this->photo5 = $photo5;

        return $this;
    }

    /**
     * Get photo5
     *
     * @return string 
     */
    public function getPhoto5()
    {
        return $this->photo5;
    }

    /**
     * Set additionalDescription1
     *
     * @param string $additionalDescription1
     * @return Product
     */
    public function setAdditionalDescription1($additionalDescription1)
    {
        $this->additionalDescription1 = $additionalDescription1;

        return $this;
    }

    /**
     * Get additionalDescription1
     *
     * @return string 
     */
    public function getAdditionalDescription1()
    {
        return $this->additionalDescription1;
    }

    /**
     * Set additionalDescription2
     *
     * @param string $additionalDescription2
     * @return Product
     */
    public function setAdditionalDescription2($additionalDescription2)
    {
        $this->additionalDescription2 = $additionalDescription2;

        return $this;
    }

    /**
     * Get additionalDescription2
     *
     * @return string 
     */
    public function getAdditionalDescription2()
    {
        return $this->additionalDescription2;
    }

    /**
     * Set additionalDescription3
     *
     * @param string $additionalDescription3
     * @return Product
     */
    public function setAdditionalDescription3($additionalDescription3)
    {
        $this->additionalDescription3 = $additionalDescription3;

        return $this;
    }

    /**
     * Get additionalDescription3
     *
     * @return string 
     */
    public function getAdditionalDescription3()
    {
        return $this->additionalDescription3;
    }
}
