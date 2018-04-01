<?php

/**
 * Class Shopware_Controllers_Backend_Faq
 */
class Shopware_Controllers_Backend_Faq extends Shopware_Controllers_Backend_Application
{
    /*
     * Inject the FAQ Model and set an alias
     */
    protected $model = 'SwiSimpleFaq\Models\Faq';
    protected $alias = 'faq';
}