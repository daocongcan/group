<?php namespace Lovata\Shopaholic\Classes\Store\Brand;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithoutParam;

use Lovata\Shopaholic\Models\Brand;

/**
 * Class SortingListStore
 * @package Lovata\Shopaholic\Classes\Store\Brand
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class SortingListStore extends AbstractStoreWithoutParam
{
    protected static $instance;

    /**
     * Get ID list from database
     * @return array
     */
    protected function getIDListFromDB()
    {
        $arElementIDList = (array) Brand::orderBy('sort_order', 'asc')->lists('id');

        return $arElementIDList;
    }
}
