<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/faq", name="faq")
     */
    public function listAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/faq.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/faq_eng", name="faq_eng")
     */
    public function faqAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/faq_eng.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/google77b5377000d02d5a.html", name="google")
     */
    public function ShowAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/google77b5377000d02d5a.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/sitemap.xml", name="sitemap")
     */
    public function testAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/sitemap.xml', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/eng", name="homepage-eng")
     */
    public function engAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index-eng.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
