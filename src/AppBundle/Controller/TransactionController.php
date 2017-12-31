<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Transaction;
class TransactionController extends Controller
{
    public function addAction(Request $reuqest)
    {

        return $this->render('AppBundle:Transaction:add.html.twig', array(

        ));
    }

    public function editAction($transactionid,Request $reuqest)
    {   $em = $this->getDoctrine()->getManager();
        $transaction=$em->getRepository("AppBundle:Transaction")->findOneBy(array('id'=>$transactionid));
        return $this->render('AppBundle:Transaction:edit.html.twig', array(
              'transaction'=>$transaction
        ));
    }

    public function listAction()
    {   $em = $this->getDoctrine()->getManager();
        $transactions=$em->getRepository("AppBundle:Transaction")->findAll();
        return $this->render('AppBundle:Transaction:list.html.twig', array(
              'transactions'=>$transactions
        ));
    }

    public function createAction(Request $request){
         $response = new JsonResponse();
         $responseData=array();
         $error=array();
         if ($request->getMethod() == 'POST') {
             $em = $this->getDoctrine()->getManager();

             $cnp=$request->request->get('cnp');
             $amount=$request->request->get('amount');
             $type=$request->request->get('type');

             $cnpMatch='/^[0-9]{14}/';
             $customer=$em->getRepository("AppBundle:Customer")->findOneBy(array('cnp'=>trim($cnp)));
             if(empty($cnp)){
                 $error['cnp']="Account number is mandatory";
             }else if(!preg_match($cnpMatch,$cnp,$match)){
                  $error['cnp']="Invalid account number it should be a 14 digit number";
             }else if(empty($customer)){
                   $error['cnp']="No Customer Found of this Account Number";
             }
             if(empty($amount)){
                 $error['amount']="Amount is mandatory";
             }



            if(count($error)>0){
                  $responseData['status']="failed";
                  $responseData['error']=$error;
           }else{
                $transaction=new Transaction();
                $transaction->setCustomer($customer);
                $transaction->setAmount($amount);
                $transaction->setType($type);
                $transaction->setCreatedAt(new \DateTime('NOW'));
                $em->persist($transaction);
                $em->flush();
                $responseData['status']="success";
                $responseData['transaction']=array('id'=>$transaction->getId(),
                                                    'customerid'=>$customer->getId(),
                                                    'amount' =>$transaction->getAmount()
                                             );

            }
            $response->setData($responseData);
         }
         return $response;

    }

    public function updateAction(Request $request){
         $response = new JsonResponse();
         $responseData=array();
         $error=array();
         if ($request->getMethod() == 'POST') {
             $em = $this->getDoctrine()->getManager();
             $id=$request->request->get('id');
             $cnp=$request->request->get('cnp');
             $amount=$request->request->get('amount');
             $type=$request->request->get('type');

             $cnpMatch='/^[0-9]{14}/';
             $customer=$em->getRepository("AppBundle:Customer")->findOneBy(array('cnp'=>trim($cnp)));
             $transaction=$em->getRepository("AppBundle:Transaction")->findOneBy(array('id'=>$id));
             if(empty($id)){
                 $error['id']="Transaction id is mandatory.";
             }else if(empty($transaction)){
                $error['id']="Invalid transaction id.";
             }
             if(empty($cnp)){
                 $error['cnp']="Account number is mandatory";
             }else if(!preg_match($cnpMatch,$cnp,$match)){
                  $error['cnp']="Invalid account number it should be a 14 digit number.";
             }else if(empty($customer)){
                   $error['cnp']="No Customer Found of this Account Number";
             }
             if(empty($amount)){
                 $error['amount']="Amount is mandatory";
             }



           if(count($error)>0){
                  $responseData['status']="failed";
                  $responseData['error']=$error;
           }else{
                $transaction->setCustomer($customer);
                $transaction->setAmount($amount);
                $transaction->setType($type);
                $transaction->setUpdatedAt(new \DateTime('NOW'));
                $em->persist($transaction);
                $em->flush();
                $responseData['status']="success";
                $responseData['transaction']=array('id'=>$transaction->getId(),
                                                    'customerid'=>$customer->getId(),
                                                    'amount' =>$transaction->getAmount()
                                             );

            }
            $response->setData($responseData);
         }
         return $response;
      }

      public function deleteAction($transactionid){
            $response = new JsonResponse();
            $responseData=array();
            $error=array();
            $em = $this->getDoctrine()->getManager();
            $transaction=$em->getRepository("AppBundle:Transaction")->findOneBy(array('id'=>$transactionid));
            if(empty($transactionid)){
                 $error['transactionid']="Transaction id is mandatory";
            }else if(empty($transaction)){
                $error['transactionid']="Invalid Transaction Id";
            }
            if(count($error)>0){
                   $responseData['status']="failed";
                   $responseData['error']=$error;
             }else{
                 $em->remove($transaction);
                 $em->flush();
                 $responseData['status']="success";
             }
             $response->setData($responseData);
             return $response;
      }

      public function getSingleTransactionAction($customerid,$transactionid){
            $response = new JsonResponse();
            $responseData=array();
            $error=array();
            $em = $this->getDoctrine()->getManager();
            $customer=$em->getRepository("AppBundle:Customer")->findOneBy(array('cnp'=>trim($customerid)));
            $transaction=$em->getRepository("AppBundle:Transaction")->findOneBy(array('id'=>$transactionid,'customer'=>$customer));
            if($transaction){
                  $responseData['status']="success";
                  $responseData['transaction']=array('transactionId'=>$transaction->getId(),
                                                      'amount' =>$transaction->getAmount(),
                                                      'date'=>$transaction->getCreatedAt()->format('d.m.Y')
                                                );
            }else{
                  $responseData['status']="failed";
                  $responseData['error']="Invalid transactionid or customerid";
            }
            $response->setData($responseData);
            return $response;
      }
      

}
