<?php

namespace WSW\SiftScience\Entities;

use WSW\Money\Money;

/**
 * Class Item
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Item
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var Money
     */
    private $price;

    /**
     * @var string
     */
    private $upc;
    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var string
     */
    private $category;

    /**
     * @var array
     */
    private $tags;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Item
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Item
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Money
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Money $price
     *
     * @return Item
     */
    public function setPrice(Money $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param string $upc
     *
     * @return Item
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     *
     * @return Item
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     *
     * @return Item
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     *
     * @return Item
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @return Item
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     *
     * @return Item
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return Item
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return Item
     */
    public function setQuantity($quantity)
    {
        $this->quantity = (int) $quantity;

        return $this;
    }

    /**
     * @return Money
     */
    public function getTotalAmount()
    {
        $newAmount = bcmul($this->getPrice()->getAmount(), $this->getQuantity(), Money::SCALE);

        return $this->getPrice()->newInstance($newAmount);
    }
}
