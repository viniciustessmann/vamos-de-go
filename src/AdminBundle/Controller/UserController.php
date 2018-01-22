<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Service\UseService;
use AdminBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Entity\User;
use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Model\UserManagerInterface;
use AdminBundle\Services\UserService;
use AdminBundle\Services\AddressService;
use AdminBundle\Entity\Address;
use AdminBundle\Repository\AddressRepository;


class UserController extends Controller
{
     /**
     * @Route("/usuarios", name="go_admin_user_index")
     */
    public function indexAction()
    {   
        $userService = $this->get('user_service');
        $users = $userService->findAll();

       

        return $this->render('AdminBundle:User:index.html.twig', [
            'users' => $users
        ]);
    }

     /**
     * @Route("/novo_usuario", name="go_admin_user_new")
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

                $user->setRoles(['ROLE_ADMIN']);
                $user->setPlainPassword('admin123*');
                $user->setEnabled(true);

                $userService = $this->get('user_service');
                $userService->save($user);

              
                $this->addFlash('success', 'Usuário criado com sucesso!');
                return $this->redirectToRoute('go_admin_user_index');

            } catch (\Exception $e) {

                echo '<pre>';
                var_dump($e->getMessage());
                die;
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:User:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/editar_usuario/{id}", name="go_admin_user_edit")
     */
    public function editAction(Request $request, USer $user)
    {   
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $userService = $this->get('user_service');
                $userService->save($user);

                $this->addFlash('success', 'Usuário alterado com sucesso!');
                return $this->redirectToRoute('go_admin_user_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:User:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/apagar_usuario/{id}", name="go_admin_user_delete")
     */
    public function deleteAction(Request $request, User $user)
    {   
        $userService = $this->get('user_service');
        $userService->delete($user);

        $this->addFlash('success', 'Motorista apagado com sucesso!');
        return $this->redirectToRoute('go_admin_user_index');
        
    }

    /**
     * @Route("/login", name="go_admin_login")
     */
    public function loginAction(Request $request)
    {   
        
    }


     /**
     * @Route("/detalhes_usuario/{id}", name="go_admin_user_detail")
     */
    public function detailAction(USer $user)
    {   

        // $addressService = $this->get('address_service');
        // $address = $addressService->findByUser($user->getId());

        //$address = $user->getAddress();
        // echo '<pre>';
        // var_dump($user->getAddress()->getAddress());
        // die;

        // // $address = $user->getAddress();

        // echo '<pre>';
        // foreach ($address as $item) {
        //     var_dump($item->getAddress());
        // }
        // 
        // die;

        return $this->render('AdminBundle:User:detail.html.twig', [
            'user' => $user,
            // 'address' => $address
        ]);
    }
}
