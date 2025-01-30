<?php

namespace VentusForge\Neos\FormNavigation\Form\FormElements;

use Neos\Form\Core\Model\AbstractFormElement;
use Neos\Form\Core\Runtime\FormRuntime;

class PreviousPage extends AbstractFormElement
{
    public function beforeRendering(FormRuntime $formRuntime)
    {
        parent::beforeRendering($formRuntime);

        $currentPageIndex = $formRuntime->getCurrentPage()->getIndex();

        $this->setRenderingOption('__navigation_previousPageIndex', $currentPageIndex == 0 ? 0 : $currentPageIndex - 1);
    }
}
