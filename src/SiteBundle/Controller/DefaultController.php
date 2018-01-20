<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Services\NewsletterService;
use AdminBundle\Services\NeighborhoodService;
use AdminBundle\Services\PassengerService;
use AdminBundle\Services\AddressService;
use AdminBundle\Entity\Newsletter;
use AdminBundle\Entity\Address;
use AdminBundle\Entity\Passenger;
use SiteBundle\Form\NewsletterType;
use SiteBundle\Form\PassengerType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        $passenger = new Passenger();

        $form = $this->createForm(PassengerType::class, $passenger);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
                
                $passengerService = $this->get('passenger_service');
                $passengerService->save($passenger);

                $addressService = $this->get('address_service');

                $neighborhoodService = $this->get('neighborhood_service');
                $neighborhood = $neighborhoodService->findById($request->request->get('passenger')['neighborhood']);


                $address = new Address();
                $address->setAddress($request->request->get('passenger')['address']);
                $address->setCep($request->request->get('passenger')['cep']);
                $address->setNumber($request->request->get('passenger')['number']);
                $address->setNeighborhood($neighborhood);


                $address->setPassenger($passenger);
                $addressService->save($address);



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
