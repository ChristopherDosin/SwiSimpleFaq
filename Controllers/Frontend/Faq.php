<?php

use SwiSimpleFaq\Models\Faq;

/**
 * Class Shopware_Controllers_Frontend_Faq
 */
class Shopware_Controllers_Frontend_Faq extends Enlight_Controller_Action
{
    /**
     * Get's all FAQ entries and put it to the frontend view
     */
    public function indexAction()
    {
        /*
         * Load the specific frontend view template
         */
        $this->view->loadTemplate(__DIR__ . '/../../Resources/views/frontend/faq/index.tpl');

        /*
         * Get all FAQ's from the swi_faq DB table
         * @var \Doctrine\DBAL\Query\QueryBuilder $queryBuilder
         */
        $queryBuilder = $this->container->get('dbal_connection')->createQueryBuilder();

        $faq = $queryBuilder->select('faq.question, faq.answer', 'faq.active')
            ->from('swi_faq', 'faq')
            ->execute()
            ->fetchAll();

        /*
         * Assign the @var $faq to the view
         */
        $this->View()->assign('faq', $faq);
    }
}