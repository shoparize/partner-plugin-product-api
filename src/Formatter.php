<?php

namespace Shoparize\PartnerPluginProductApi;

trait Formatter
{
    /**
     * @param $price
     * @return string
     */
    public function priceFormat($price)
    {
        return number_format(round($price, 2), 2);
    }
}
