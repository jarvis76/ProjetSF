<?php

namespace App\Controller;

use App\Entity\Professionnels;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class ProfessionnelsController extends Controller
{
    /**
     * @Route("/professionnels", name="professionnels")
     */
    public function index()
    {
        return $this->render('professionnels/index.html.twig', [
            'controller_name' => 'ProfessionnelsController',
        ]);
    }

    /**
     * @Route("/professionnels/formulaire", name="professionnels_formulaire")
     */
    public function formulaire(Request $request)
    {
        $professionnels = new Professionnels();
        $professionnels->setName('Toto Compagny');
        $professionnels->setCategorie('traiteur de porc');
        $professionnels->setSiret(00000000000000000);

        $formulaire = $this->createFormBuilder($professionnels)
            ->add('name', TextType::class)
            ->add('categorie', TextType::class)
            ->add('siret', NumberType::class)
            ->add('envoyer', SubmitType::class, array('label' => 'Inscrire professionnels'))
            ->getForm();

        $formulaire->handleRequest($request);
        if($formulaire->isSubmitted() && $formulaire->isValid()) {
            $professionnels = $formulaire->getData();

            return $this->redirectToRoute('professionnells')
        }

        return $this->render('professionnels/index.html.twig',
            array(
                'formulaire' => $formulaire->createView()
            )
        );
    }
    public function formulaireOK()
    {
        return $this->render('professionnels/formOK.html.twig', [
            'controller_name' => 'ProfessionnelsController',
        ]);
    }
}
