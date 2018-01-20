<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Way;
use AdminBundle\Form\WayType;
use AdminBundle\Services\WayService;
use Symfony\Component\HttpFoundation\Request;


class RouteController extends Controller
{
    /**
     * @Route("/rotas", name="go_admin_way_index")
     */
    public function indexAction()
    {   
        $wayService = $this->get('way_service');
        $ways = $wayService->findAll();

        return $this->render('AdminBundle:Way:index.html.twig', [
            'ways' => $ways
        ]);
    }

     /**
     * @Route("/detalhes_rota/{id}", name="go_admin_way_detail")
     */
    public function detailAction(Way $way)
    {   
        return $this->render('AdminBundle:Way:detail.html.twig', [
            'way' => $way
        ]);
    }

     /**
     * @Route("/nova_rota", name="go_admin_way_new")
     */
    public function newAction(Request $request)
    {   
        $way = new Way();

        $form = $this->createForm(WayType::class, $way);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
                
                $wayService = $this->get('way_service');
                $wayService->save($way);

                $this->addFlash('success', 'Rota criada com sucesso!');
                return $this->redirectToRoute('go_admin_way_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Way:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/editar_rota/{id}", name="go_admin_way_edit")
     */
    public function editAction(Request $request, Way $way)
    {   
        $form = $this->createForm(WayType::class, $way);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $wayService = $this->get('way_service');
                $wayService->save($way);

                $this->addFlash('success', 'Rota alterada com sucesso!');
                return $this->redirectToRoute('go_admin_way_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Way:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/apagar_rota/{id}", name="go_admin_way_delete")
     */
    public function deleteAction(Request $request, Way $way)
    {   
        $wayService = $this->get('way_service');
        $wayService->delete($way);

        $this->addFlash('success', 'Rota apagada com sucesso!');
        return $this->redirectToRoute('go_admin_way_index');
        
    }
}
