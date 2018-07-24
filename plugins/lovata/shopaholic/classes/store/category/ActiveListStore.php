<?php namespace Lovata\Shopaholic\Classes\Store\Category;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithoutParam;

use Lovata\Shopaholic\Models\Category;

/**
 * Class ActiveListStore
 * @package Lovata\Shopaholic\Classes\Store\Category
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
        $arElementIDList = (array) Category::active()->lists('id');

        return $arElementIDList;
    }
}
