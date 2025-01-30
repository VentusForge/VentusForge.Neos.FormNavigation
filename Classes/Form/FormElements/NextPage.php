<?php

namespace VentusForge\Neos\FormNavigation\Form\FormElements;

use Neos\Form\Core\Model\AbstractFormElement;
use Neos\Form\Core\Runtime\FormRuntime;

class NextPage extends AbstractFormElement
{
    public function beforeRendering(FormRuntime $formRuntime)
    {
        parent::beforeRendering($formRuntime);

        $currentPageIndex = $formRuntime->getCurrentPage()->getIndex();
        $pageCounter = count($formRuntime->getPages());

        $this->setRenderingOption('__navigation_nextPageExists', $currentPageIndex + 1 < $pageCounter);
        $this->setRenderingOption('__navigation_nextPageIndex', $currentPageIndex + 1);
        $this->setRenderingOption('__formPageCounter', $pageCounter);
    }
}
