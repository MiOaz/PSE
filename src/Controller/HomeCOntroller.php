<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        return $this->render('Mihail/home_main_menu.html.twig');
    }

    #[Route('/pagini-statice', name: 'static_pages')]
    public function staticPages(): Response
    {
        $pages = [
            ['name' => 'Achimescu Andrei', 'route' => 'achimescu-andrei'],
            ['name' => 'Adelina', 'route' => 'adelina_page'],
            ['name' => 'Alexandra', 'route' => 'alexandra'],
            ['name' => 'Barbuț', 'route' => 'barbut'],
            ['name' => 'Cocerba', 'route' => 'app_cocerba'],
            ['name' => 'Radu P', 'route' => 'cry'],
            ['name' => 'Dark In Violet', 'route' => 'DarkInViolet'],
            ['name' => 'dewzv', 'route' => 'dewzv'],
            ['name' => 'Dragomir', 'route' => 'app_dragomir'],
            ['name' => 'Figlea', 'route' => 'page_figlea'],
            ['name' => 'Guia Vlad', 'route' => 'app_name'],
            
            ['name' => 'Lascus Rut', 'route' => 'lascus_rut'],
            ['name' => 'Lucianyck', 'route' => 'app_lucianyck'],
            ['name' => 'Petru Lazar', 'route' => 'petrulazar_hero'],
            ['name' => 'Podar', 'route' => 'app_podar'],
            ['name' => 'Ovidiu Pop', 'route' => 'ovidiu_route'],
            ['name' => 'Pop Patricia', 'route' => 'app_pop_patricia'],
            ['name' => 'Prata Antoniu', 'route' => 'prata_antoniu_hero'],
            ['name' => 'Radu Nicoleta Diana', 'route' => 'radu_nicoletadiana'],
            ['name' => 'Rusca Bogdan', 'route' => 'bogdan_rusca_hero'],
            ['name' => 'Toma Laurențiu', 'route' => 'toma-laurentiu'],
            ['name' => 'Truță George Marius', 'route' => 'Truta_George_Marius'],
        ];

        return $this->render('Mihail/homepage.html.twig', [
            'pages' => $pages,
        ]);
    }

    #[Route('/pagini-dinamice', name: 'dynamic_pages')]
    public function dynamicPages(): Response
    {
        $dynamicPages = [
            ['name' => 'Bzovii Elena', 'route' => 'bzovii_elena'],
            ['name' => 'Drăgan', 'route' => 'dragan_page'],
            ['name' => 'Rusu Cătălin', 'route' => 'Rusu'],
            ['name' => 'Ionuț', 'route' => 'ionut_page'],
        ];

        return $this->render('Mihail/dynamic_pages.html.twig', [
            'dynamicPages' => $dynamicPages,
        ]);
    }

    #[Route('/bloguri', name: 'blogs')]
    public function blogs(): Response
    {
        $blogs = [
            ['name' => 'Highlander', 'route' => 'highlander_hero_page'],
            
            
        ];

        return $this->render('Mihail/blogs.html.twig', [
            'blogs' => $blogs,
        ]);
    }
}
   