<?php

namespace Lab\ConfigtestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * The controller form test.
 *
 * @package FormtestBundle
 * @author Nguyen Nhu Tuan
 *
 * @Route("/config/inject")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $testConfigService = $this->get('lab_configtest.service.testconfig');
        echo $testConfigService;die;
        return $this->render('LabConfigtestBundle:Default:index.html.twig');
    }
}
