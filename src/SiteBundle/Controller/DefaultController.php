<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Services\NewsletterService;
use AdminBundle\Services\NeighborhoodService;
use AdminBundle\Services\PassengerService;
use AdminBundle\Services\AddressService;
use AdminBundle\Services\UserService;
use AdminBundle\Entity\Newsletter;
use AdminBundle\Entity\Address;
use AdminBundle\Entity\Passenger;
use AdminBundle\Entity\User;
use SiteBundle\Form\NewsletterType;
use SiteBundle\Form\PassengerType;
use SiteBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
                
                $userManager = $this->get('fos_user.user_manager');
                $userManager->createUser($user);

                $user->setRoles(['ROLE_ADMIN']);
                $user->setPlainPassword('test');
                $user->setEnabled(true);

                $neighborhoodService = $this->get('neighborhood_service');
                $neighborhood = $neighborhoodService->findById($request->request->get('user')['neighborhood']);

                

                $address = new Address();
                $address->setAddress($request->request->get('user')['address']);
                $address->setCep($request->request->get('user')['cep']);
                $address->setNumber($request->request->get('user')['number']);
                $address->setNeighborhood($neighborhood);
                $address->setUser($user);

                $addressService = $this->get('address_service');
                $addressService->save($address);

                $user->setAddress($address);
                $userService = $this->get('user_service');
                $userService->save($user);

                $this->addFlash('success', 'Cliente criado com sucesso!');
                return $this->redirectToRoute('home', ['status' => 1]);

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
                var_dump($e->getMessage());die;
                return $this->redirectToRoute('home', ['status' => 2]);
            }
        }

        return $this->render('SiteBundle:Default:home.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/pre-venda", name="pre-order")
     */
    public function preOrderAction()
    {

        return $this->render('SiteBundle:Default:pre-order.html.twig');
    }

    /**
     * @Route("/regulamento", name="regulation")
     */
    public function regulationAction()
    {

        return $this->render('SiteBundle:Default:regulation.html.twig');
    }

    /**
     * @Route("/experimente", name="test-now")
     */
    public function tryAction()
    {

        return $this->render('SiteBundle:Default:try.html.twig');
    }

    /**
     * @Route("/seja-parceiro", name="partner")
     */
    public function partnerAction()
    {

        return $this->render('SiteBundle:Default:partner.html.twig');
    }
}
