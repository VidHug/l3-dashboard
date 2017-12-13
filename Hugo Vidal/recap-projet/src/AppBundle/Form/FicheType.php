<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Projet;
use Doctrine\ORM\EntityRepository;

class FicheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('projet',EntityType::class,array(
                    'label' => 'Projet',
                    'class' => Projet::class,
                    'query_builder' => function (EntityRepository $er){
                        return $er->getOpenedProjects();
                      }
                    ))
                ->add('manager',null,array('label'=>'Manager du Projet'))
                ->add('ficheDate',null,array('label'=>'Date du Projet'))
                ->add('nbDayDone',null,array('label'=>'Nombre de jours effectués'))
                ->add('nbDaySold',null,array('label'=>'Nombre de jours vendus'))
                ->add('progression',null,array('label'=>'Progression du Projet'))
                ->add('comment',null,array('label'=>'Commentaire'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Fiche'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fiche';
    }


}
