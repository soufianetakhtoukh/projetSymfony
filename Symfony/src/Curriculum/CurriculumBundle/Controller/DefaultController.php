<?php

namespace Curriculum\CurriculumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Curriculum\CurriculumBundle\Controller\MethodesTraitement;
use Curriculum\CurriculumBundle\Entity\Profils;
use Curriculum\CurriculumBundle\Form\projetType;

class DefaultController extends Controller {
		public $proj ='developpeur java';
	public function ajoutAction() {
		$form = $this -> createForm(new projetType());
		$form -> bind($this -> get('request'));
		$proj = $form['projet'] -> getData();
		return $this -> render('CurriculumBundle:Default:index.html.twig', array('form' => $form -> createView()));
	}

	/*
	 * @Route("/affichage",name="affichage")
	 */

	public function afficheAction() {
		
		$em = $this -> getDoctrine() -> getManager();

		$traiter = new MethodesTraitement();
		$tableau = $traiter -> TraitementDesCompetences($this->proj, $em);

		return $this -> render('CurriculumBundle:Default:affichage.html.twig', array('sou' => $tableau));
	}

}
