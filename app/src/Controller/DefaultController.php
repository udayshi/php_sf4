<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(ParameterBagInterface $params,ContainerInterface $ci,Request $request)
    {
        #https://github.com/KnpLabs/KnpPaginatorBundle
        $data=[];
        for($i=0;$i<100;$i++){
            $data[]=['id'=>$i,'title'=>'uday','date'=>date('Y-m-d H:i:s')];
        }

        $paginator  = $ci->get('knp_paginator');
        $pagination = $paginator->paginate(
            $data, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );


        return $this->render('paginator/index.html.twig', [
            'pagination'=>$pagination
        ]);
    }
}
