<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('title', null, array('label' => 'Título:', 'attr' => array('max-length' => 255)))
			->add('description', null, array('label' => 'Descrição:', 'attr' => array('max-length' => 4000)))
			->add('image', null, array('label' => 'Url da imagem:'))
			->add('stock', null, array('label' => 'Quantidade em estoque:', 'attr' => array('min' => 1)))
		;
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults([
			'data_class' => Product::class,
		]);
	}
}
