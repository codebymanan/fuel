<?php

namespace App\Controller\Pos;

use App\Entity\Pos;
use App\Entity\PosManager;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PosController extends AbstractController
{
    /**
     * @Route("/pos/list", name="pos_list")
     */
    public function posList()
    {
        $posList = $this->getDoctrine()->getRepository(Pos::class)->findAll();
        return $this->render('pos/pos/index.html.twig', [
            'posList' => $posList,
        ]);
    }
    /**
     * @Route("/pos/add", name="pos_add")
     */
    public function posAdd(Request $request)
    {
        if($request->getMethod() == 'POST'){
            $data = $request->request->all();
            $pos = New Pos();
            $pos->setName($data['name']);
            $pos->setAddress($data['address']);
            $pos->setTel($data['tel']);
            $pos->setManager($this->getDoctrine()->getRepository(PosManager::class)->find($data['manager']));
            $pos->setPartner($this->getDoctrine()->getRepository(User::class)->find($data['partner']));
            $em = $this->getDoctrine()->getManager();
            $em->persist($pos);
            $em->flush();
            echo '<script>alert("New Pos has been added")</script>';
        }
//
//        $posList = $this->getDoctrine()->getRepository(Pos::class)->findAll();
        $managers = $this->getDoctrine()->getRepository(PosManager::class)->findAll();
        $repository = $this->getDoctrine()
            ->getRepository(User::class);
        $query = $repository->createQueryBuilder('p')
            ->where('p.roles LIKE :price')
            ->setParameter('price', '%ROLE_PARTNER%')
            ->getQuery();

        $partner = $query->getResult();
        return $this->render('pos/pos/add.html.twig', [
            'managers' => $managers,
            'partner' => $partner
        ]);
    }
}
