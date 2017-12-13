<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need

        $entityManager = $this->container->get('doctrine.orm.entity_manager');
        $fiches = $entityManager
                    ->getRepository('AppBundle:Fiche')
                    ->findAll();

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/hello/{name}", name="hello")
     */
	public function helloAction(Request $request, $name)
    {
        return $this->render('default/hello.html.twig', ['name' => $name]);
    }

    /**
     * @Route("/", name="dashboard")
     */
	public function dashboardAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $fiches = $em->getRepository('AppBundle:Fiche')->findAll();
        $managers = $em->getRepository('AppBundle:Manager')->findAll();
        $projets = $em->getRepository('AppBundle:Projet')->findAll();

        return $this->render('default/dashboard.html.twig',array(
            'fiches' => $fiches,
            'managers' => $managers,
            'projets' => $projets,
        ));
    }
}
