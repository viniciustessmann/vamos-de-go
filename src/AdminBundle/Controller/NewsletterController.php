<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Newsletter;
use AdminBundle\Form\NewsletterType;
use AdminBundle\Services\NewsletterService;
use Symfony\Component\HttpFoundation\Request;


class NewsletterController extends Controller
{
    /**
     * @Route("/newsletters", name="go_admin_newsletter_index")
     */
    public function indexAction()
    {   
        $newsletterService = $this->get('newsletter_service');
        $newsletters = $newsletterService->findAll();

        return $this->render('AdminBundle:Newsletter:index.html.twig', [
            'newsletters' => $newsletters
        ]);
    }

     /**
     * @Route("/novo_newsletter", name="go_admin_newsletter_new")
     */
    public function newAction(Request $request)
    {   
        $newsletter = new Newsletter();

        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            try {
                
                $newsletterService = $this->get('newsletter_service');
                $newsletterService->save($newsletter);

                $this->addFlash('success', 'Newsletter criado com sucesso!');
                return $this->redirectToRoute('go_admin_newsletter_index');

            } catch (\Exception $e) {
                var_dump($e->getMessage());die;
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Newsletter:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/editar_newsletter/{id}", name="go_admin_newsletter_edit")
     */
    public function editAction(Request $request, Newsletter $newsletter)
    {   
        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
                $newsletterService = $this->get('newsletter_service');
                $newsletterService->save($newsletter);

                $this->addFlash('success', 'Newsletter alterado com sucesso!');
                return $this->redirectToRoute('go_admin_newsletter_index');

            } catch (\Exception $e) {
                $this->addFlash('danger', 'Algo de errado aconteceu! Por favor, tente novamente.');
            }
        }

        return $this->render('AdminBundle:Newsletter:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/apagar_newsletter/{id}", name="go_admin_newsletter_delete")
     */
    public function deleteAction(Request $request, Newsletter $newsletter)
    {   
        $newsletterService = $this->get('newsletter_service');
        $newsletterService->delete($newsletter);

        $this->addFlash('success', 'Newsletter apagado com sucesso!');
        return $this->redirectToRoute('go_admin_newsletter_index');
        
    }
}
