<?php

namespace Shoparize\PartnerPluginProductApi;

class Helper
{
    /**
     * @var string
     */
    protected $shopId;

    /**
     * @param $shoparizeShopId string
     */
    public function __construct($shoparizeShopId)
    {
        $this->shopId = $shoparizeShopId;
    }

    /**
     * @return bool
     */
    public function isAllow()
    {
        $header = strtoupper(str_replace('-', '_', 'Shoparize-Partner-Key'));
        $shopId = isset($_SERVER['HTTP_' . $header]) ? $_SERVER['HTTP_' . $header] : null;
        if ($shopId != $this->shopId) {
            return false;
        }

        return true;
    }

    /**
     * @param $date
     * @param string $format
     * @return bool
     */
    public function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = \DateTime::createFromFormat($format, $date);

        return $d && $d->format($format) == $date;
    }
}
