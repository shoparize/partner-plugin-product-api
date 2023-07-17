<?php

namespace Shoparize\PartnerPluginProductApi\Responses;

class FeedResponse
{
    /**
     * @var array
     */
    public $items = [];

    /**
     * @param FeedItem $item
     *
     * @return void
     */
    public function setItem(FeedItem $item)
    {
        $this->items[] = $item;
    }

    /**
     * @param array $items
     *
     * @return void
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    public function getJson()
    {
        return json_encode($this->items, JSON_UNESCAPED_UNICODE);
    }
}
