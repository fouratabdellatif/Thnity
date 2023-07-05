<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageVehicule', FileType::class, ['mapped' => false])
            ->add('prenomChauff')
            ->add('numChauff')
            ->add('dateOffre', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'datepicker'],
            ])
            ->add('heure')
            ->add('prixOffre')
            ->add('depart')
            ->add('destination')
            ->add('placesDispo')
            // ->add('idUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
