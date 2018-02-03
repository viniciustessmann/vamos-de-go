<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Services\UserService;
use AdminBundle\Form\AddressType;
use AdminBundle\Entity\User;
use AdminBundle\Entity\Address;
use Symfony\Component\HttpFoundation\Request;

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
            'token' => $token
        ]);
    }

    /**
     * @Route("/adicionar-enderecos/{user}/{token}/{type}", name="add-address")
     */
    public function addAdressAction(Request $request, User $user, $token, $type)
    {   

        $address = new Address();

        $form = $this->createForm(AddressType::class, $address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
            
                $addressService = $this->get('address_service');
                $addressService->save($address);

                if ($type == 'origin') {
                    $user->setAddress($address);
                } 

                if ($type == 'destiny') {
                    $user->setDestinyAddress($address);
                }

                $userService = $this->get('user_service');
                $userService->save($user);

                if ($type == 'origin') {
                    $this->addFlash('success', 'Cliente criado com sucesso!');
                    return $this->redirectToRoute('add-address', [
                        'user' => $user->getId(),
                        'token' => $token,
                        'type' => 'destiny'
                    ]);
                }

                $this->addFlash('success', 'Cliente criado com sucesso!');
                return $this->redirectToRoute('home', ['status' => 1]);

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
                var_dump($e->getMessage());die;
                return $this->redirectToRoute('home', ['status' => 2]);
            }
        }

        return $this->render('SiteBundle:User:add-address.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
