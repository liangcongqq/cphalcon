<?php

class Test2Controller extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    }

    public function otherAction()
    {
    }

    public function anotherAction()
    {
        return 100;
    }

    public function anotherTwoAction($a, $b)
    {
        return $a + $b;
    }

    public function anotherThreeAction()
    {
        $this->dispatcher->forward(
            [
                'controller' => 'test2',
                'action'     => 'another_four'
            ]
        );

        return;
    }

    public function anotherFourAction()
    {
        return 120;
    }

    public function anotherFiveAction()
    {
        return $this->dispatcher->getParam('param1') + $this->dispatcher->getParam('param2');
    }

}
