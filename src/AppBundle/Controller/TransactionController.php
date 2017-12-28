<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Transaction;
class TransactionController extends Controller
{
    public function addAction(Request $reuqest)
    {
      //  $em = $this->getDoctrine()->getManager();
      //  $transaction=new Transaction();
      //  $form = $this->createFormBuilder($transaction, array('action' => $this->generateUrl('transaction_add'),'method' => 'POST'))
      //          ->add('customer_id', 'Choice',array(
      //            'choices' => array(
      //             'English' => 'en',
      //             'Spanish' => 'es',
      //             'Bork'   => 'muppets',
      //             'Pirate' => 'arr'
      //          ),)
      //          ->add('amount', 'number')
      //          ->getForm();
      //   return $this->render('AppBundle:Transaction:add.html.twig', array(
      //         'form'=>$form,
      //   ));
    }

    public function listAction()
    {
        return $this->render('AppBundle:Transaction:list.html.twig', array(
                // ...
        ));
    }

}
