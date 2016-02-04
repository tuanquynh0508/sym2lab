<?php

namespace Lab\SerializertestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * The controller form test.
 *
 * @author Nguyen Nhu Tuan
 *
 * @Route("/serializer")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/weather/{code}",
     *	defaults={"code" = "HaiPhong"},
     *	requirements={
     *		"code": "[\w ]+"
     *	}
     * )
     * @Template("LabSerializertestBundle:Default:index.html.twig")
     */
    public function indexAction($code)
    {
        $serializer = $this->get('jms_serializer');
        $dataFilename = realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'hanoi.json');
        //$url = $this->container->getParameter('openweathermap_url');
        //$url = str_replace('{code}', urlencode($code), $url);
        $dataJson = file_get_contents($dataFilename);
        $data = $serializer->deserialize($dataJson, 'Lab\SerializertestBundle\Model\Weather', 'json');

        return array('data' => $data);
    }

    /**
     * @Route("/test2")
     * @Template()
     */
    public function test2Action()
    {
        $serializer = $this->get('jms_serializer');
        $dataFilename = realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'customer.json');
        $dataJson = file_get_contents($dataFilename);
        $data = $serializer->deserialize($dataJson, 'Lab\SerializertestBundle\Model\Customer', 'json');
var_dump($data);die;
        return array('data' => $data);
    }
}
