<?php
/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:52 AM
 */

class SchAggregateRating extends SchRating {
    protected $itemReviewed;//Thing
    protected $ratingCount;//number
    protected $reviewCount;//number
    function __construct()
    {
        $this->url = $this->protocol . '//schema.org/AggregateRating';
    }

    public function toAttribute()
    {
        // TODO: Implement toAttribute() method.
    }

    public function toLDJSON()
    {
        // TODO: Implement toLDJSON() method.
    }

    public function toRDFa()
    {
        // TODO: Implement toRDFa() method.
    }

    public function toHTML()
    {
        // TODO: Implement toHTML() method.
    }
}