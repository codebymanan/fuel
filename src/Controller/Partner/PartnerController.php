<?php

namespace App\Controller\Partner;

use App\Entity\Partner;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PartnerController extends AbstractController
{
    /**
     * @Route("/partner/list", name="partner_list")
     */
    public function index()
    {
        $partnerList = $this->getDoctrine()->getRepository(Partner::class)->findAll();
        return $this->render('partner/partner/index.html.twig', [
            'partnerList' => $partnerList,
        ]);
    }
    /**
     * @Route("/partner/add", name="partner_add")
     */
    public function partnerAdd(Request $request){
        if($request->getMethod() == 'POST'){
            $data = $request->request->all();
            if(!empty($this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $data['email']]))){
                echo '<script>alert("Email already exist")</script>';
            }else {
                $user = New User();
                $user->setEmail($data['email']);
                $user->setName($data['name']);
                function randomPassword() {
                    $alphabet = 'abcdefghijklmnopqrstuvwxyz1234567890';
                    $pass = array(); //remember to declare $pass as an array
                    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                    for ($i = 0; $i < 8; $i++) {
                        $n = rand(0, $alphaLength);
                        $pass[] = $alphabet[$n];
                    }
                    return implode($pass); //turn the array into a string
                }
                $user->setPlainPassword(randomPassword());
                $user->setUsername($data['email']);
                $user->setEnabled(true);
                $em = $this->getDoctrine()->getManager();
                $partner = New Partner();
                $partner->setAddress($data['address']);
                $partner->setNameOfEntity($data['nameOfEntity']);
                $partner->setSectorOfEntity($data['sectorOfActivity']);
                $partner->setPhoneNumber($data['phoneNumber']);
                $partner->setFunction($data['function']);
                $partner->setUser($user);
                $em->persist($user);
                $em->persist($partner);
                $em->flush();
                echo '<script>alert("New Partner has been added")</script>';
            }
        }
        return $this->render('partner/partner/add.html.twig');
    }
}
