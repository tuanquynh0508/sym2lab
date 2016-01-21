<?php

namespace Lab\FormtestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

use Lab\FormtestBundle\Form\Model\GroupContact;
use Lab\FormtestBundle\Form\Model\PhoneNumber;
use Lab\FormtestBundle\Form\Type\ContactType;
/**
 * The controller form test.
 *
 * @package FormtestBundle
 * @author Nguyen Nhu Tuan
 *
 * @Route("/form/type")
 */
class FormtypeController extends Controller
{
    /**
     * @Route("/demo1")
     * @Template("LabFormtestBundle:Formtype:demo1.html.twig")
     */
    public function demo1Action(Request $request)
    {
        $form = $this->get('sym2lab.formtest.form.group_contact');

        //Bind data to form
        $groupContact = new GroupContact();
        $groupContact->setTitle('Vi du cai nao');
        for($i=0;$i<=5;$i++) {
            $phoneNumber = new PhoneNumber("Peopel $i", "+84", "090325822$i");
            $groupContact->addListPhoneNumbers($phoneNumber);
        }
        $form->setData($groupContact);

        $form->handleRequest($request);
        if ($form->isValid()) {
            var_dump($request->request);
            echo "OK";die;
        }

        return array(
            'form' => $form->createView(),
        );
    }
	
	/**
     * @Route("/contact", _name="form_contact")
     * @Template("LabFormtestBundle:Formtype:contact.html.twig")
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            var_dump($request->request);
            echo "OK";die;
        }

        return array(
            'form' => $form->createView(),
        );
    }
}
