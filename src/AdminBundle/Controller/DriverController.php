<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Driver;
use AdminBundle\Form\DriverType;
use AdminBundle\Services\DriverService;
use Symfony\Component\HttpFoundation\Request;


class DriverController extends Controller
{
    /**
     * @Route("/motoristas", name="go_admin_driver_index")
     */
    public function indexAction()
    {   
        $driverService = $this->get('driver_service');
        $drivers = $driverService->findAll();

        return $this->render('AdminBundle:Driver:index.html.twig', [
            'drivers' => $drivers
        ]);
    }

     /**
     * @Route("/novo_motorista", name="go_admin_driver_new")
     */
    public function newAction(Request $request)
    {   
        $driver = new Driver();

        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
                
                $driverService = $this->get('driver_service');
                $driverService->save($driver);

                $this->addFlash('success', 'Motorista criado com sucesso!');
                return $this->redirectToRoute('go_admin_driver_index');

            } catch (\Exception $e) {
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
    public function editAction(Request $request, Driver $driver)
    {   
        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $driverService = $this->get('driver_service');
                $driverService->save($driver);

                $this->addFlash('success', 'Motorista alterado com sucesso!');
                return $this->redirectToRoute('go_admin_driver_index');

            } catch (\Exception $e) {
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
    public function deleteAction(Request $request, Driver $driver)
    {   
        $driverService = $this->get('driver_service');
        $driverService->delete($driver);

        $this->addFlash('success', 'Motorista apagado com sucesso!');
        return $this->redirectToRoute('go_admin_driver_index');
        
    }
}
