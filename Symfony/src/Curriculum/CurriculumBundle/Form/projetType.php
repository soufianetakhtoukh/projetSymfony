<?php

namespace Curriculum\CurriculumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class projetType extends AbstractType{
	
	public function buildform(FormBuilderInterface $builder,array $options )
	{
		$builder
		->add('projet','text')
		->add('valider','submit');
	}
	public function getName(){
		
		return 'curriculum_curriculumBundle_projet';
	}
	
}
