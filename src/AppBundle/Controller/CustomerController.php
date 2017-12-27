<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Customer;
class CustomerController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $customers=$em->getRepository("AppBundle:Customer")->findAll();

        return $this->render('AppBundle:Customer:list.html.twig', array(
                'customers'=>$customers
        ));
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $customer=new Customer();
        $form = $this->createFormBuilder($customer, array('action' => $this->generateUrl('customer_add'),'method' => 'POST'))
                 ->add('name', 'text')
                 ->add('cnp', 'text')
                 ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
              $name=$form->get('name')->getData();
              $cnp=$form->get('cnp')->getData();
              $customer->setName($name);
              $customer->setCnp($cnp);
              $customer->setCreatedat(new \DateTime('NOW'));
              $em->persist($customer);
              $em->flush();
              return $this->redirectToRoute('customer_list');
        }
        return $this->render('AppBundle:Customer:add.html.twig', array(
              'form' => $form->createView(),
        ));
    }

}
