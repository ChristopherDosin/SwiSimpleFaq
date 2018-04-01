<?php

namespace SwiSimpleFaq;

use Doctrine\ORM\Tools\SchemaTool;
use Shopware\Components\Model\ModelManager;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UpdateContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Theme\LessDefinition;
use SwiSimpleFaq\Models\Faq;

class SwiSimpleFaq extends Plugin {

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PreDispatch' => 'addTemplateDir',
        ];
    }

    /**
     * @param InstallContext $context
     * This method is called on plugin installation
     */
    public function install(InstallContext $context)
    {
        $this->updateSchema();
        $this->createDemo();
    }

    public function addTemplateDir(\Enlight_Controller_ActionEventArgs $args)
    {
        $args->getSubject()->View()->addTemplateDir($this->getPath() . '/Resources/views');
    }

    public function uninstall(UninstallContext $context)
    {
        $entityManager = $this->container->get('models');

        $tool = new SchemaTool($entityManager);

        $classMetaData = [
            $entityManager->getClassMetadata(Faq::class)
        ];

        $tool->dropSchema($classMetaData);
    }

    private function updateSchema()
    {
        $entityManager = $this->container->get('models');

        $tool = new SchemaTool($entityManager);

        $classMetaData = [
            $entityManager->getClassMetadata(Faq::class
            )
        ];

        $tool->createSchema($classMetaData);
    }

    private function createDemo()
    {
        /** @var ModelManager $entitymanager */
        $entitymanager = $this->container->get('models');

        $faq = new Faq();
        $faq->setQuestion('Das ist eine Testfrage');
        $faq->setAnswer('Das ist eine Antwort');
        $faq->setActive(true);

        $entitymanager->persist($faq);
        $entitymanager->flush($faq);
    }

}