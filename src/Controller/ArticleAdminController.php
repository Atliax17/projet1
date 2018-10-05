<?php
/**
 * Created by PhpStorm.
 * User: Jean-baptiste
 * Date: 05/10/2018
 * Time: 15:42
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleAdminController extends AbstractController
{
    /**
     * @Route("/admin/article/new")
     */
    public function new()

    {
        return new Response('celestin');
    }
}