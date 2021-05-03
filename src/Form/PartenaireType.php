<?php

namespace App\Form;

use App\Entity\Partenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class PartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('specialite')
            ->add('adresse')
            ->add('ville')
            ->add('logo', FileType::class, [
                'label' => 'Fichier Tarifs (Xlsx, Word)',

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
                        ],
                        'mimeTypesMessage' => 'Please upload a valid XLSX document',
                    ])
                ],
            ])
            ->add('entreprise')
            ->add('phone_mobile')
            ->add('phone_fix')
            ->add('champs_supp')
            ->add('description_profil')
            ->add('logo_path', FileType::class, [
                'label' => 'BDD prestataire (Xlsx, Word)',

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
                        ],
                        'mimeTypesMessage' => 'Please upload a valid XLSX document',
                    ])
                ],
            ])
//            ->add('tarifs')
            ->add('user',UserType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Partenaire::class,
        ]);
    }
}
