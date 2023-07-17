<?php

namespace Shoparize\PartnerPluginProductApi\Responses;

use Shoparize\PartnerPluginProductApi\Formatter;

class FeedShipping
{
    use Formatter;

    public $country;

    public $service;

    public $price;

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @param mixed $service
     */
    public function setService($service): void
    {
        $this->service = $service;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $this->priceFormat($price);
    }
}
