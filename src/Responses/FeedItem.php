<?php

namespace Shoparize\PartnerPluginProductApi\Responses;

use Shoparize\PartnerPluginProductApi\Formatter;

class FeedItem
{
    use Formatter;

    public $id;

    public $title;

    public $description;

    public $link;

    public $images = [];

    public $mobile_link;

    public $availability;

    public $price;

    public $brand;

    public $gtin;

    public $condition;

    public $currency_code;

    public $shipping_length;

    public $shipping_width;

    public $shipping_height;

    public $shipping_weight;

    public $size_unit;

    public $sale_price;

    public $colors;

    public $sizes;

    /**
     * @var FeedShipping
     */
    public $shipping;

    public $weight_unit;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->images[] = $image;
    }

    /**
     * @param mixed $mobile_link
     */
    public function setMobileLink($mobile_link)
    {
        $this->mobile_link = $mobile_link;
    }

    /**
     * @param mixed $availability
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $this->priceFormat($price);
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $gtin
     */
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;
    }

    /**
     * @param mixed $condition
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    /**
     * @param mixed $currency_code
     */
    public function setCurrencyCode($currency_code)
    {
        $this->currency_code = $currency_code;
    }

    /**
     * @param mixed $shipping_length
     */
    public function setShippingLength($shipping_length)
    {
        $this->shipping_length = $shipping_length;
    }

    /**
     * @param mixed $shipping_width
     */
    public function setShippingWidth($shipping_width)
    {
        $this->shipping_width = $shipping_width;
    }

    /**
     * @param mixed $shipping_height
     */
    public function setShippingHeight($shipping_height)
    {
        $this->shipping_height = $shipping_height;
    }

    /**
     * @param mixed $shipping_weight
     */
    public function setShippingWeight($shipping_weight)
    {
        $this->shipping_weight = $shipping_weight;
    }

    /**
     * @param mixed $size_unit
     */
    public function setSizeUnit($size_unit)
    {
        $this->size_unit = $size_unit;
    }

    /**
     * @param mixed $sale_price
     */
    public function setSalePrice($sale_price)
    {
        $this->sale_price = $this->priceFormat($sale_price);
    }

    /**
     * @param FeedShipping $shipping
     */
    public function setShipping(FeedShipping $shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @param mixed $weight_unit
     */
    public function setWeightUnit($weight_unit)
    {
        $this->weight_unit = $weight_unit;
    }

    /**
     * @param mixed $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }

    /**
     * @param mixed $sizes
     */
    public function setSizes($sizes)
    {
        $this->sizes = $sizes;
    }
}
