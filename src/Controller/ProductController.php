<?php
// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController
{
    #[Route('/product', name: 'create_product')]
    public function createProduct(EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(1999);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }
    public function getProducts(EntityManagerInterface $entityManager): Response
    {
        $product = $entityManager->getRepository(Product::class)->findAll();

        $allProducts = [];
        foreach ($product as $p) {
            $allProducts[] = $p->getName();
        }


        return new Response('Check out this great product: '.implode(', ', $allProducts));
    }
}