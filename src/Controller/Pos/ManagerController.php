<?php

namespace App\Controller\Pos;

use App\Entity\Pos;
use App\Entity\PosManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManagerController extends AbstractController
{
    /**
     * @Route("/pos/manager/list", name="manager_list")
     */
    public function managerList()
    {
        $managerList = $this->getDoctrine()->getRepository(PosManager::class)->findAll();
        return $this->render('pos/manager/index.html.twig', [
            'managerList' => $managerList
        ]);
    }
    /**
     * @Route("/pos/manager/add", name="manager_add")
     */
    public function managerAdd(Request $request)
    {
        if($request->getMethod() == 'POST'){
            $data = $request->request->all();
            $posManager = New PosManager();
            $posManager->setName($data['name']);
            $posManager->setSurname($data['surName']);
            $posManager->setBirthDate($data['birth']);
            $posManager->setAddress($data['address']);
            $posManager->setEmail($data['email']);
            $posManager->setNIC($data['nic']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($posManager);
            $em->flush();
            echo '<script>alert("New Pos Manager has been added")</script>';
        }
        $managerList = $this->getDoctrine()->getRepository(PosManager::class)->findAll();
        return $this->render('pos/manager/add.html.twig', [
            'managerList' => $managerList
        ]);
    }
    /**
     * @Route("/pos/availabilities/check/{id},{name}", name="manager_availabilities_check")
     */
    public function managerAvailabilitiesCheck($id,$name){
        $check = $this->getDoctrine()->getRepository(Pos::class)->findOneBy(['Manager' => $id]);
        if (empty($check)){
            return new Response('<option value="'.$id.'">'.$name.'</option>');
        }else{
            return new Response('');
        }
    }
}
