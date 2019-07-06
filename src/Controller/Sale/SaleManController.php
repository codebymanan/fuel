<?php

namespace App\Controller\Sale;

use App\Entity\SaleMan;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SaleManController extends AbstractController
{
    /**
     * @Route("/sale/saleman/list", name="sale_sale_man_list")
     */
    public function index()
    {
        $saleManList = $this->getDoctrine()->getRepository(SaleMan::class)->findAll();
        return $this->render('sale/sale_man/index.html.twig', [
            'saleManList' => $saleManList,
        ]);
    }

    /**
     * @Route("/sale/saleman/add", name="sale_sale_man_add")
     */
    public function saleManAdd(Request $request){
        if($request->getMethod() == 'POST'){
            $data = $request->request->all();
            $saleMan = New SaleMan();
            $saleMan->setName($data['name']);
            $saleMan->setSurName($data['surName']);
            $saleMan->setBirthDate($data['birth']);
            $saleMan->setNIC($data['nic']);
            $saleMan->setPhoneNumber($data['phoneNumber']);
            $saleMan->setEmail($data['email']);
            $saleMan->setAddress($data['address']);
            $saleMan->setType($data['type']);
            if($data['type'] == 'adhoc'){
                $saleMan->setLocalisation($data['localisation']);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($saleMan);
            $em->flush();
            echo '<script>alert("New sale man has been added")</script>';
        }
        return $this->render('sale/sale_man/add.html.twig');
    }
}
