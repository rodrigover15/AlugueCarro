<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Veiculos;
use AdminBundle\Form\VeiculosType;

/**
 * Veiculos controller.
 *
 * @Route("/veiculos")
 */
class VeiculosController extends Controller
{
    /**
     * Lists all Veiculos entities.
     *
     * @Route("/", name="veiculos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $veiculos = $em->getRepository('AdminBundle:Veiculos')->findAll();

        return $this->render('veiculos/index.html.twig', array(
            'veiculos' => $veiculos,
        ));
    }

    /**
     * Creates a new Veiculos entity.
     *
     * @Route("/new", name="veiculos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $veiculo = new Veiculos();
        $form = $this->createForm('AdminBundle\Form\VeiculosType', $veiculo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($veiculo);
            $em->flush();

            return $this->redirectToRoute('veiculos_show', array('id' => $veiculo->getId()));
        }

        return $this->render('veiculos/new.html.twig', array(
            'veiculo' => $veiculo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Veiculos entity.
     *
     * @Route("/{id}", name="veiculos_show")
     * @Method("GET")
     */
    public function showAction(Veiculos $veiculo)
    {
        $deleteForm = $this->createDeleteForm($veiculo);

        return $this->render('veiculos/show.html.twig', array(
            'veiculo' => $veiculo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Veiculos entity.
     *
     * @Route("/{id}/edit", name="veiculos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Veiculos $veiculo)
    {
        $deleteForm = $this->createDeleteForm($veiculo);
        $editForm = $this->createForm('AdminBundle\Form\VeiculosType', $veiculo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($veiculo);
            $em->flush();

            return $this->redirectToRoute('veiculos_edit', array('id' => $veiculo->getId()));
        }

        return $this->render('veiculos/edit.html.twig', array(
            'veiculo' => $veiculo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Veiculos entity.
     *
     * @Route("/{id}", name="veiculos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Veiculos $veiculo)
    {
        $form = $this->createDeleteForm($veiculo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($veiculo);
            $em->flush();
        }

        return $this->redirectToRoute('veiculos_index');
    }

    /**
     * Creates a form to delete a Veiculos entity.
     *
     * @param Veiculos $veiculo The Veiculos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Veiculos $veiculo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('veiculos_delete', array('id' => $veiculo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
