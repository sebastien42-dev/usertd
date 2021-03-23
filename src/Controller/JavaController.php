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
     * @Route("/api/user/list", name="api_user_list")
     */
    public function listUsers(UserRepository $userRepository) 
    {
        $users = $userRepository->findAll();

        return $this->json($users, 200,  [], ['groups' => 'list_users']);
    }
}
