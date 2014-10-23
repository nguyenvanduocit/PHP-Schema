<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:52 AM
 */
class SchProduct extends SchBase
{
    protected $aggregateRating; // AggregateRating
    protected $audience; // Audience
    protected $brand; // TODO : Organization  or Brand
    protected $color; //text
    protected $depth; // TODO : QuantitativeValue  or Distance
    protected $gtin13; // text
    protected $gtin14; //text
    protected $gtin8; //text
    protected $height; // QuantitativeValue  or Distance
    protected $isAccessoryOrSparePartFor; //Product
    protected $isConsumableFor; //product
    protected $isRelatedTo; //product
    protected $isSimilarTo; //product
    protected $itemCondition; // OfferItemCondition
    protected $logo; //URL, TODO : ImageObject
    protected $manufacturer; // TODO : Organization
    protected $model; //ProductModel or Text
    protected $mpn;//	Text 	The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
    protected $offers; //TODO : Offers
    protected $productID; //Text
    protected $releaseDate; //Date
    protected $review; //TODO Review
    protected $sku; //text
    protected $weight; //QuantitativeValue
    protected $width; //QuantitativeValue  or Distance

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    function __construct($args = array())
    {
        $default = array(
            'aggregateRating' => new SchAggregateRating(),
            'audience' => new SchAudience()
        );
        $this->url = $this->protocol . '//schema.org/Product';
    }

    public function scope()
    {
        return sprintf("itemscope itemtype=\"%1s\"", $this->url);
    }

    public function prop($propname)
    {
        return sprintf("itemprop=\"%1s\"", $this->url);
    }
}