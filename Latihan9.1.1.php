<?php
/**
 * Singleton class
 */
final class product
{
    /**
     * @var self
     */
    private static $instance;
    /**
     * @var mixed
     */
    public $mix;
    /**
     * return self instance
     * 
     * @return self
     */
    public static function getInstance(){
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function__construct(){
    }
    private function__clone(){
    }
    $firstProduct = product::getInstance();
    $secondProduct = product::getInstance();
    $firstProduct->mix = 'test';
    $secondProduct->mix = 'example';
    print_r($firstProduct->mix);
    //example
}