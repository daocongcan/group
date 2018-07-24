<?php namespace Lovata\Shopaholic\Classes\Store\Product;

use Event;
use Lovata\Toolbox\Classes\Store\AbstractStoreWithParam;

use Lovata\Shopaholic\Models\Offer;
use Lovata\Shopaholic\Models\Product;
use Lovata\Shopaholic\Classes\Store\ProductListStore;

/**
 * Class SortingListStore
 * @package Lovata\Shopaholic\Classes\Store\Product
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class SortingListStore extends AbstractStoreWithParam
{
    protected static $instance;

    /**
     * Get ID list from database
     * @return array : array
     */
    protected function getIDListFromDB() 
    {
        switch ($this->sValue) {
            case ProductListStore::SORT_PRICE_ASC:
                $arElementIDList = $this->getByPriceASC();
                break;
            case ProductListStore::SORT_PRICE_DESC:
                $arElementIDList = $this->getByPriceDESC();
                break;
            case ProductListStore::SORT_NEW:
                $arElementIDList = $this->getNewProductList();
                break;
            case ProductListStore::SORT_NO:
                $arElementIDList = $this->getProductList();
                break;
            default:
                $arElementIDList = $this->getCustomSortingList();
                break;
        }

        return $arElementIDList;
    }

    /**
     * Get product list with custom sorting
     * @return array : array
     */
    protected function getCustomSortingList() 
    {
        $arEventResult = Event::fire('shopaholic.sorting.get.list', [$this->sValue]);
        if (empty($arEventResult)) {
            return [];
        }

        $arElementIDList = [];
        foreach ($arEventResult as $arEventProductIDList) {
            if (empty($arEventProductIDList) || !is_array($arEventProductIDList)) {
                continue;
            }

            $arElementIDList = $arEventProductIDList;
            break;
        }

        return $arElementIDList;
    }

    /**
     * Get sorting ID list by offer price (ASC)
     * @return array : array
     */
    protected function getByPriceASC() 
    {
        //Get product ID list (sort by offer price)
        //We can not use groupBy() in this place
        $arElementIDList = (array) Offer::active()->orderBy('price', 'asc')->lists('product_id');
        $arElementIDList = array_unique($arElementIDList);

        return $arElementIDList;
    }

    /**
     * Get sorting ID list by offer price (DESC)
     * @return array : array
     */
    protected function getByPriceDESC() 
    {
        //Get product ID list (sort by offer price)
        //We can not use groupBy() in this place
        $arElementIDList = (array) Offer::active()->orderBy('price', 'desc')->lists('product_id');
        $arElementIDList = array_unique($arElementIDList);

        return $arElementIDList;
    }

    /**
     * Get new products
     * @return array : array
     */
    protected function getNewProductList() 
    {
        $arElementIDList = (array) Product::orderBy('id', 'desc')->lists('id');

        return $arElementIDList;
    }

    /**
     * Get new products : array
     * @return array
     */
    protected function getProductList() 
    {
        $arElementIDList = (array) Product::lists('id');

        return $arElementIDList;
    }
}
