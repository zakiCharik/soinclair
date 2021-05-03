<?php

namespace App\Form;

use App\Entity\Adherant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AdherantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero_soinclair', TextType::class)
            ->add('cin', TextType::class)
            ->add('cartesoinclair', FileType::class, [
                'label' => 'Carte SoinClair (image file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('entreprise')
            ->add('code_client')
            ->add('phonenumber',TelType::class)
            ->add('lastname')
            ->add('firstname')
            ->add('ville')
            ->add('nom_conjoint_first')
            ->add('nom_conjoint_second')
            ->add('nbr_enfant')
            ->add('adresse')
            ->add('situation_pro',ChoiceType::class,[
                'choices'=>[
                    'actif' => 'actif',
                    'retraité' => 'retraité',
                    'Activité libérale' => 'Activité libérale',
                ]
            ])
            ->add('category_sociopro',ChoiceType::class,[
                'choices'=>[
                    'actif' => 'actif',
                    ' ' => ' ',
                ]
            ])
            ->add('maladie_chroni',ChoiceType::class,[
                'choices'=>[
                    'diabèthe' => 'diabèthe',
                    ' ' => ' ',
                ]
            ])
            ->add('formule_soin_clair',ChoiceType::class,[
                'choices'=>[
                    'premium' => 'premium',
                    'standard' => 'standard',
                    'classique' => 'classique',
                    ' ' => ' ',
                ]
            ])
            ->add('supp_one')
            ->add('supp_two')
            ->add('supp_three')
            ->add('user',UserType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adherant::class,
        ]);
    }
}
