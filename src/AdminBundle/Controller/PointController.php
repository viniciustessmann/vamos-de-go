<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Point;
use AdminBundle\Form\PointType;
use AdminBundle\Services\PointService;
use Symfony\Component\HttpFoundation\Request;


class PointController extends Controller
{
    /**
     * @Route("/pontos", name="go_admin_point_index")
     */
    public function indexAction()
    {   
        $pointService = $this->get('point_service');
        $points = $pointService->findAll();

        return $this->render('AdminBundle:Point:index.html.twig', [
            'points' => $points
        ]);
    }

     /**
     * @Route("/novo_ponto", name="go_admin_point_new")
     */
    public function newAction(Request $request)
    {   
        $point = new Point();

        $form = $this->createForm(PointType::class, $point);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
                
                $pointService = $this->get('point_service');
                $pointService->save($point);

                $this->addFlash('success', 'Ponto criado com sucesso!');
                return $this->redirectToRoute('go_admin_point_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Point:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/editar_ponto/{id}", name="go_admin_point_edit")
     */
    public function editAction(Request $request, Point $point)
    {   
        $form = $this->createForm(PointType::class, $point);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $pointService = $this->get('point_service');
                $pointService->save($point);

                $this->addFlash('success', 'Ponto alterado com sucesso!');
                return $this->redirectToRoute('go_admin_point_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Point:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/apagar_ponto/{id}", name="go_admin_point_delete")
     */
    public function deleteAction(Request $request, Point $point)
    {   
        $pointService = $this->get('point_service');
        $pointService->delete($point);

        $this->addFlash('success', 'Ponto apagado com sucesso!');
        return $this->redirectToRoute('go_admin_point_index');
        
    }
}
