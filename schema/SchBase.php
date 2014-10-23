<?php
/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:15 AM
 */

abstract class SchBase implements SchBaseInterface{
    protected $protocol = 'http';

    protected function parse_args($args, $defaults){
        return array_merge($defaults, $args);
    }
}