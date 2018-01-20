<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Neighborhood;
use AdminBundle\Form\NeighborhoodType;
use AdminBundle\Services\NeighborhoodService;
use Symfony\Component\HttpFoundation\Request;


class NeighborhoodController extends Controller
{
    /**
     * @Route("/bairros", name="go_admin_neighborhood_index")
     */
    public function indexAction()
    {   
        $neighborhoodService = $this->get('neighborhood_service');
        $neighborhoods = $neighborhoodService->findAll();

        return $this->render('AdminBundle:Neighborhood:index.html.twig', [
            'neighborhoods' => $neighborhoods
        ]);
    }

     /**
     * @Route("/novo_bairro", name="go_admin_neighborhood_new")
     */
    public function newAction(Request $request)
    {   
        $neighborhood = new Neighborhood();

        $form = $this->createForm(NeighborhoodType::class, $neighborhood);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $neighborhoodService = $this->get('neighborhood_service');
                $neighborhoodService->save($neighborhood);

                $this->addFlash('success', 'Bairro criado com sucesso!');
                return $this->redirectToRoute('go_admin_neighborhood_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Neighborhood:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/editar_bairro/{id}", name="go_admin_neighborhood_edit")
     */
    public function editAction(Request $request, Neighborhood $neighborhood)
    {   
        $form = $this->createForm(NeighborhoodType::class, $neighborhood);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $neighborhoodService = $this->get('neighborhood_service');
                $neighborhoodService->save($neighborhood);

                $this->addFlash('success', 'Bairro criado com sucesso!');
                return $this->redirectToRoute('go_admin_neighborhood_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Neighborhood:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/apagar_bairro/{id}", name="go_admin_neighborhood_delete")
     */
    public function deleteAction(Request $request, Neighborhood $neighborhood)
    {   
        $neighborhoodService = $this->get('neighborhood_service');
        $neighborhoodService->delete($neighborhood);

        $this->addFlash('success', 'Bairro apagado com sucesso!');
        return $this->redirectToRoute('go_admin_neighborhood_index');
        
    }
}
