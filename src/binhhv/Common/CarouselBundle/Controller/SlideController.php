<?php

namespace binhhv\Common\CarouselBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use binhhv\Common\CarouselBundle\Entity\Slide;
use binhhv\Common\CarouselBundle\Form\SlideType;

/**
 * Slide controller.
 *
 */
class SlideController extends Controller
{
    /**
     * Lists all Slide entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $slides = $em->getRepository('CommonCarouselBundle:Slide')->findAll();

        return $this->render('@CommonCarousel/slide/index.html.twig', array(
            'slides' => $slides,
        ));
    }

    /**
     * Creates a new Slide entity.
     *
     */
    public function newAction(Request $request)
    {
        $slide = new Slide();
        $form = $this->createForm('binhhv\Common\CarouselBundle\Form\SlideType', $slide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($slide);
            $em->flush();

            return $this->redirectToRoute('admin_slide_show', array('id' => $slide->getId()));
        }

        return $this->render('@CommonCarousel/slide/new.html.twig', array(
            'slide' => $slide,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Slide entity.
     *
     */
    public function showAction(Slide $slide)
    {
        $deleteForm = $this->createDeleteForm($slide);

        return $this->render('@CommonCarousel/slide/show.html.twig', array(
            'slide' => $slide,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Slide entity.
     *
     */
    public function editAction(Request $request, Slide $slide)
    {
        $deleteForm = $this->createDeleteForm($slide);
        $editForm = $this->createForm('binhhv\Common\CarouselBundle\Form\SlideType', $slide);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($slide);
            $em->flush();

            return $this->redirectToRoute('admin_slide_edit', array('id' => $slide->getId()));
        }

        return $this->render('@CommonCarousel/slide/edit.html.twig', array(
            'slide' => $slide,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Slide entity.
     *
     */
    public function deleteAction(Request $request, Slide $slide)
    {
        $form = $this->createDeleteForm($slide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($slide);
            $em->flush();
        }

        return $this->redirectToRoute('admin_slide_index');
    }

    /**
     * Creates a form to delete a Slide entity.
     *
     * @param Slide $slide The Slide entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Slide $slide)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_slide_delete', array('id' => $slide->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
