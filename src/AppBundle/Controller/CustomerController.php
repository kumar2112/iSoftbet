<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
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

    public function addAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('AppBundle:Customer:add.html.twig');
    }

    public function createAction(Request $request){
         $response = new JsonResponse();
         $responseData=array();
         $error=array();
         if ($request->getMethod() == 'POST') {
             $em = $this->getDoctrine()->getManager();
             $customer=new Customer();
             $cnp=$request->request->get('cnp');
             $name=$request->request->get('name');

             $cnpMatch='/^[0-9]{14}$/';
             if(empty($cnp)){
                 $error['cnp']="Account number is mandatory";
             }else if(!preg_match($cnpMatch,$cnp,$match)){
                  $error['cnp']="Invalid accound number it should be a 14 digit number";
             }

             if(empty($name)){
                 $error['name']="Account holder name is mandatory";
             }
             $customerCount = $em->createQuery(
                              'SELECT COUNT(c.cnp) as total
                               FROM AppBundle\Entity\Customer c
                               WHERE c.cnp = :cnp'
                           )->setParameter('cnp', $cnp)
                            ->execute();
            if($customerCount[0]['total']>0){
                  $error['cnp']="Account number is holded by a customer";
            }
            if(count($error)>0){
                  $responseData['status']="failed";
                  $responseData['error']=$error;
           }else{
                 $customer->setName($name);
                 $customer->setCnp($cnp);
                 $customer->setBalance(0.00);
                 $customer->setCreatedat(new \DateTime('NOW'));
                 $em->persist($customer);
                 $em->flush();
                 $responseData['status']="success";
                 $responseData['CustomerId']=$customer->getId();
            }
            $response->setData($responseData);
         }
         return $response;

    }

}
