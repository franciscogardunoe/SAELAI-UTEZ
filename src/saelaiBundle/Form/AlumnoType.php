<?php

namespace saelaiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AlumnoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('apellidop')
                ->add('apellidom')
                ->add('matricula')
                ->add('contrasena')
                ->add('idgrupo')
                ->add('nombre', TextType::class, array(
                    'label' => 'Name',
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '',
                        'max_length' => 30,
                        'required' => TRUE)
                ))
                ->add('apellidop', TextType::class, array(
                    'label' => 'Surname',
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '',
                        'max_length' => 25,
                        'required' => TRUE)
                ))
                ->add('apellidom', TextType::class, array(
                    'label' => 'Second surname',
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '',
                        'max_length' => 25,
                        'required' => FALSE)
                ))
                ->add('matricula', TextType::class, array(
                    'label' => 'Matricula',
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '',
                        'max_length' => 25,
                        'required' => TRUE)
                ))
                ->add('contrasena', TextType::class, array(
                    'label' => 'Password',
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '',
                        'max_length' => 16,
                        'required' => TRUE)
                ))
                ->add('idgrupo', entitytype::class, array('class' => 'saelaiBundle:Grupo',
                    'property' => 'cuatrimestre',
                    'choice_value' => 'idGrupo',
                    'expanded' => false,
                    'multiple' => false,
                    'label' => 'Select a group',
                    'attr' => array(
                        'class' => 'form-control')
                ))
                ->add('submit', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, array(
                    'label' => "Register",
                    'attr' => array(
                        'class' => 'btn btn-success')
                ))
                ->add('submit', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, array(
                    'label' => "Register",
                    'attr' => array(
                        'class' => 'btn btn-success')
                ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'saelaiBundle\Entity\Alumno'
        ));
    }

}
