<?php namespace Lovata\Shopaholic\Classes\Store\Offer;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithoutParam;

use Lovata\Shopaholic\Models\Offer;

/**
 * Class ActiveListStore
 * @package Lovata\Shopaholic\Classes\Store\Offer
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class ActiveListStore extends AbstractStoreWithoutParam
{
    protected static $instance;

    /**
     * Get ID list from database
     * @return array : array
     */
    protected function getIDListFromDB() 
    {
        $arElementIDList = (array) Offer::active()->lists('id');

        return $arElementIDList;
    }
}
