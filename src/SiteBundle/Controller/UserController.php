<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Services\UserService;
use AdminBundle\Services\NewsletterService;
use AdminBundle\Form\AddressType;
use AdminBundle\Form\UserType;
use AdminBundle\Entity\User;
use AdminBundle\Entity\Address;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Entity\Newsletter;

class UserController extends Controller
{
    /**
     * @Route("/adicionar-usuario", name="add-user")
     */
    public function addUserAction(Request $request)
    {   
        $data = $request->request->all();
        $user = new User();

        $userManager = $this->get('fos_user.user_manager');
        $userManager->createUser($user);

        $token = md5(date('y-m-d h:m:s'));

        $user->setName($data['name']);
        $user->setEmail($data['email']);
        $user->setPhone($data['phone']);
        $user->setToken($token);
        $user->setRoles(['ROLE_USER']);
        $user->setPlainPassword('123');
        $user->setEnabled(false);
           
        $userService = $this->get('user_service');
        $userService->save($user);

        return $this->redirectToRoute('add-address', [
            'user' => $user->getId(), 
            'token' => $token,
            'type' => 'origin'
        ]);
    }

    /**
     * @Route("/editar-usuario/{user}/{token}", name="edit-user")
     */
    public function editUserAction(Request $request, User $user, $token)
    {   

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
        
                $userManager = $this->get('fos_user.user_manager');
                $userManager->createUser($user);

                $user->setPlainPassword($request->request->get('user')['password']);
                $user->setEnabled(true);

                $userService = $this->get('user_service');
                $userService->save($user);


                $this->addFlash('success', 'Cliente criado com sucesso!');
                return $this->redirectToRoute('sucess-form');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
                var_dump($e->getMessage());die;
                return $this->redirectToRoute('sucess-form');
            }
        }

        return $this->render('SiteBundle:User:edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/adicionar-enderecos/{user}/{token}/{type}", name="add-address")
     */
    public function addAdressAction(Request $request, User $user, $token, $type)
    {   

        $typeText = 'destino';
        if ($type == 'origin') {
            $typeText = 'origem';
        }

        $address = new Address();

        $form = $this->createForm(AddressType::class, $address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
            
                $addressService = $this->get('address_service');
                $addressService->save($address);

                if ($type == 'origin') {
                    $user->setAddress($address);
                    $typeText = 'origem';
                } 

                if ($type == 'destiny') {
                    $user->setDestinyAddress($address);
                    $typeText = 'destino';
                }

                $userService = $this->get('user_service');
                $userService->save($user);

                if ($type == 'origin') {
                    $this->addFlash('success', 'Cliente criado com sucesso!');
                    return $this->redirectToRoute('add-address', [
                        'user' => $user->getId(),
                        'token' => $token,
                        'type' => 'destiny',
                        'typetext' => $typeText
                    ]);
                }

                $this->addFlash('success', 'Cliente criado com sucesso!');
                return $this->redirectToRoute('edit-user', [
                    'user' => $user->getId(),
                    'token' => $user->getToken()
                ]);

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
                var_dump($e->getMessage());die;
                return $this->redirectToRoute('home', ['status' => 2]);
            }
        }

        return $this->render('SiteBundle:User:add-address.html.twig', [
            'form' => $form->createView(),
            'typetext' => $typeText,
            'type' => 'origin' 
        ]);
    }

     /**
     * @Route("/sucesso", name="sucess-form")
     */
    public function sucessFormAction()
    {

        return $this->render('SiteBundle:User:sucess.html.twig');
    }


    /**
     * @Route("/adicionar-newsletter/{email}", name="add-newsletter")
     */
    public function addNewsletterAction($email)
    {   
        $newsletterService = $this->get('newsletter_service');
        $count = $newsletterService->existsEmail($email);

        if ($count > 0) {
            echo '2';
            die;
        }

        $newsletter = new Newsletter();
        $newsletter->setEmail($email);
        $newsletterService->save($newsletter);
        echo '1';
        die;
    }
}
