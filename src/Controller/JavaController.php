<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JavaController extends AbstractController
{
    /**
     * @Route("/java", name="java")
     */
    public function index(): Response
    {
        return $this->render('java/index.html.twig', [
            'controller_name' => 'JavaController',
        ]);
    }

    /**
     * @Route("/api/user/list", name="api_user_list", methods={"GET"})
     */
    public function listUsers(UserRepository $userRepository) 
    {
        //possibilite d'utiliser le serializerInterface avec serialize et retourner une Response de la même chose
        return $this->json($userRepository->findAll(), 200, [], ['groups' => 'list_users']);
    }
}
