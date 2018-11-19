<?php

namespace App\Controller;

use App\Services\ServiceDemoHello;
use App\Services\ServiceDemoConstructor;
use App\Services\ServiceDemoHelloDefault;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(ServiceDemoHello $sd,ServiceDemoConstructor $sdc,ServiceDemoHelloDefault $sdd)
    {
        $services=[];
        $services['hello']=$sd->hello();
        $services['hello_log']=$sdc->hello();
        $services['hello_default']=$sdd->hello();

        return $this->render('default/index.html.twig', [
            'services' => $services,
        ]);
    }
}
