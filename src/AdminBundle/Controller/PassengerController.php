<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Passenger;
use AdminBundle\Entity\Way;
use AdminBundle\Entity\User;
use AdminBundle\Form\PassengerType;
use AdminBundle\Form\PassengerWayType;
use AdminBundle\Services\PassengerService;
use AdminBundle\Form\UserType;
use AdminBundle\Form\UserWayType;
use AdminBundle\Services\UserService;
use Symfony\Component\HttpFoundation\Request;


class PassengerController extends Controller
{
    /**
     * @Route("/clientes", name="go_admin_client_index")
     */
    public function indexAction()
    {   
        $userService = $this->get('user_service');
        $clients = $userService->findAllByRole('ROLE_USER');

        return $this->render('AdminBundle:Client:index.html.twig', [
            'clients' => $clients
        ]);
    }

     /**
     * @Route("/novo_cliente", name="go_admin_client_new")
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

                $user->setRoles(['ROLE_USER']);
                $user->setPlainPassword($request->request->get('user')['password']);
                $user->setEnabled(true);

                $userService = $this->get('user_service');
                $userService->save($user);

              
                $this->addFlash('success', 'Usuário criado com sucesso!');
                return $this->redirectToRoute('go_admin_client_index');

            } catch (\Exception $e) {
                var_dump($e->getMessage());die;
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Client:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/editar_cliente/{id}", name="go_admin_client_edit")
     */
    public function editAction(Request $request, User $user)
    {   
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {

                $userManager = $this->get('fos_user.user_manager');
                $userManager->createUser($user);

                $user->setRoles(['ROLE_USER']);
                $user->setPlainPassword($request->request->get('user')['password']);
                $user->setEnabled(true);

                $userService = $this->get('user_service');
                $userService->save($user);

              
                $this->addFlash('success', 'Usuário criado com sucesso!');
                return $this->redirectToRoute('go_admin_client_index');

            } catch (\Exception $e) {
                var_dump($e->getMessage());die;
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Client:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/apagar_cliente/{id}", name="go_admin_client_delete")
     */
    public function deleteAction(Request $request, User $user)
    {   
        $userService = $this->get('user_service');
        $userService->delete($user);

        $this->addFlash('success', 'Cliente apagado com sucesso!');
        return $this->redirectToRoute('go_admin_client_index');
        
    }

    /**
     * @Route("/detalhes_cliente/{id}", name="go_admin_client_detail")
     */
    public function detailAction(User $user)
    {   
        return $this->render('AdminBundle:Client:detail.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/definir_rota/{id}", name="go_admin_client_set_way")
     */
    public function setWayAction(Request $request, user $passenger)
    {     
        $way = new Way();
        $form = $this->createForm(PassengerWayType::class, $way);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $wayId =  $request->request->get('passenger_way')['points'];
                $wayService = $this->get('way_service');
                $way = $wayService->findById($wayId);

                
                $way = $this->getDoctrine()->getRepository('AdminBundle:Way')->find($wayId);
                $way->setPassengers($passenger);

                $this->getDoctrine()->getManager()->persist($way);
                $this->getDoctrine()->getManager()->flush();

    

                $this->addFlash('success', 'Cliente alterado com sucesso!');
                return $this->redirectToRoute('go_admin_client_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Client:setway.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
