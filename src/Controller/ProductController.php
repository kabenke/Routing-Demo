<?php

namespace App\Controller;

use App\Entity\Product;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/products",name="products_")
 */
class ProductController extends  AbstractController
{
    /**
     * @return Response
     * @Route("/home",name="home")
     */
    public function index()
    {
        return $this ->render('show.html.twig',[]);
    }


    /**
     * @Route("/{id}", name="show", requirements={"id":"\d+"})
     */
    public function show(Product $product):Response
    {
        return new Response('displaying ' .$product->getName());
    }

    /**
     * @return Response
     * @Route("/inventory" , name="inventory")
     */
    public function invententor()
    {
        return new Response('This the product inventory');
    }


}