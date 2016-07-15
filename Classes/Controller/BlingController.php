<?php

namespace CedricZiel\Ajaxtest\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class BlingController
 * @package CedricZiel\AjaxTest\Controller
 */
class BlingController extends ActionController
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
            'message' => 'Foo',
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
            'message' => 'Bar',
        ];

        return json_encode($object);
    }
}
