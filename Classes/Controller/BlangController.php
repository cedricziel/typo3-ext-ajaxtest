<?php

namespace CedricZiel\Ajaxtest\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class BlangController
 * @package CedricZiel\AjaxTest\Controller
 */
class BlangController extends ActionController
{
    /**
     * Do nothing. Just render the standard object
     */
    public function plainAction()
    {
        // render template
    }

    /**
     * @return string
     */
    public function fooAction()
    {
        $object = $this->createSecretObject();
        $object->data = [
            'message' => 'Blang Foo',
        ];

        return json_encode($object);
    }

    /**
     * @return \stdClass
     */
    protected function createSecretObject()
    {
        $object = new \stdClass();
        $object->timestamp = time();

        return $object;
    }

    /**
     * @return string
     */
    public function barAction()
    {
        $object = $this->createSecretObject();
        $object->data = [
            'message' => 'Blang Bar',
        ];

        return json_encode($object);
    }
}
