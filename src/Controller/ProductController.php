<?php
// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\domain\Product;
use App\domain\Product2;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController
{
    #[Route('/product', name: 'create_product')]
    public function createProduct(EntityManagerInterface $entityManager): Response
    {
        $product = new Product2();
        $product->setName('Visor');
        $product->setPrice(3434);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }
    public function getProducts(EntityManagerInterface $entityManager): Response
    {
        $product = $entityManager->getRepository(Product2::class)->findAll();

        $allProducts = [];
        foreach ($product as $p) {
            $allProducts[] = $p->getName();
        }


        return new Response('Check out this greoooat product: '.implode(', ', $allProducts));
    }
}