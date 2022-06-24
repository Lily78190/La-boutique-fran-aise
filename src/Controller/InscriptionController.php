<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\InscriptionType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index()
    {
        $user = new User();
        $form = $this->createForm(InscriptionType::class, $user);
       
        return $this->render('inscription/index.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}