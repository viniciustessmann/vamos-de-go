<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Driver;
use AdminBundle\Entity\User;
use AdminBundle\Form\DriverType;
use AdminBundle\Services\DriverService;
use AdminBundle\Form\UserType;
use AdminBundle\Services\UserService;
use Symfony\Component\HttpFoundation\Request;


class DriverController extends Controller
{
    /**
     * @Route("/motoristas", name="go_admin_driver_index")
     */
    public function indexAction()
    {   
        $userService = $this->get('user_service');
        $drivers = $userService->findAllByRole('ROLE_DRIVER');

        return $this->render('AdminBundle:Driver:index.html.twig', [
            'drivers' => $drivers
        ]);
    }

     /**
     * @Route("/novo_motorista", name="go_admin_driver_new")
     */
    public function newAction(Request $request)
    {   
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {

                $userManager = $this->get('fos_user.user_manager');
                $userManager->createUser($user);

                $user->setRoles(['ROLE_DRIVER']);
                $user->setPlainPassword($request->request->get('user')['password']);
                $user->setEnabled(true);

                $userService = $this->get('user_service');
                $userService->save($user);

              
                $this->addFlash('success', 'Usuário criado com sucesso!');
                return $this->redirectToRoute('go_admin_driver_index');

            } catch (\Exception $e) {
                var_dump($e->getMessage());die;
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Driver:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/editar_motorista/{id}", name="go_admin_driver_edit")
     */
    public function editAction(Request $request, User $user)
    {   
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { 
            try {

                $userManager = $this->get('fos_user.user_manager');
                $userManager->createUser($user);

                $user->setRoles(['ROLE_DRIVER']);
                $user->setPlainPassword($request->request->get('user')['password']);
                $user->setEnabled(true);

                $userService = $this->get('user_service');
                $userService->save($user);

              
                $this->addFlash('success', 'Usuário criado com sucesso!');
                return $this->redirectToRoute('go_admin_driver_index');

            } catch (\Exception $e) {
                var_dump($e->getMessage());die;
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Driver:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/apagar_motorista/{id}", name="go_admin_driver_delete")
     */
    public function deleteAction(Request $request, User $user)
    {   
        $userService = $this->get('user_service');
        $userService->delete($user);

        $this->addFlash('success', 'Motorista apagado com sucesso!');
        return $this->redirectToRoute('go_admin_user_index');
        
    }
}
