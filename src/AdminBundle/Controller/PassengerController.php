<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Passenger;
use AdminBundle\Entity\Way;
use AdminBundle\Form\PassengerType;
use AdminBundle\Form\PassengerWayType;
use AdminBundle\Services\PassengerService;
use Symfony\Component\HttpFoundation\Request;


class PassengerController extends Controller
{
    /**
     * @Route("/clientes", name="go_admin_client_index")
     */
    public function indexAction()
    {   
        $passengerService = $this->get('passenger_service');
        $clients = $passengerService->findAll();

        return $this->render('AdminBundle:Client:index.html.twig', [
            'clients' => $clients
        ]);
    }

     /**
     * @Route("/novo_cliente", name="go_admin_client_new")
     */
    public function newAction(Request $request)
    {   
        $passenger = new Passenger();

        $form = $this->createForm(PassengerType::class, $passenger);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
                
                $passengerService = $this->get('passenger_service');
                $passengerService->save($passenger);

                $this->addFlash('success', 'Passageiro criado com sucesso!');
                return $this->redirectToRoute('go_admin_client_index');

            } catch (\Exception $e) {
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
    public function editAction(Request $request, Passenger $passenger)
    {   
        $form = $this->createForm(PassengerType::class, $passenger);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $passengerService = $this->get('passenger_service');
                $passengerService->save($passenger);

                $this->addFlash('success', 'Cliente alterado com sucesso!');
                return $this->redirectToRoute('go_admin_client_index');

            } catch (\Exception $e) {
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
    public function deleteAction(Request $request, Passenger $passenger)
    {   
        $passengerService = $this->get('passenger_service');
        $passengerService->delete($passenger);

        $this->addFlash('success', 'Cliente apagado com sucesso!');
        return $this->redirectToRoute('go_admin_passenger_index');
        
    }

    /**
     * @Route("/definir_rota/{id}", name="go_admin_client_set_way")
     */
    public function setWayAction(Request $request, Passenger $passenger)
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
