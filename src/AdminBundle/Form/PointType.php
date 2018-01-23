<?php
namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AdminBundle\Entity\Neighborhood;
use AdminBundle\Repository\NeighborhoodRepository;

class PointType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nome do ponto',
                'attr' => ['class' => 'form-control']
            ])
            ->add('address', TextType::class, [
                'label' => 'Endereço do ponto',
                'attr' => ['class' => 'form-control']
            ])
            ->add('number', TextType::class, [
                'label' => 'Número',
                'attr' => ['class' => 'form-control']
            ])
            ->add('cep', TextType::class, [
                'label' => 'CEP',
                'attr' => ['class' => 'form-control']
            ])
            ->add('neighborhood', EntityType::class, [
                'class' => Neighborhood::class,
                'choice_label' => 'name',
                'label' => 'Bairro',
                'attr' => ['class' => 'form-control'],
                'multiple' => false,
                // 'mapped' => false,
                'query_builder' => function(NeighborhoodRepository $repo) {
                    return $repo->createAlphabeticalQueryBuilder();
                }
            ])
            ->add('lat', TextType::class, [
                'label' => 'Latitude',
                'data' => '-31.767145409833574',
                'attr' => ['class' => 'form-control']
            ])
            ->add('lng', TextType::class, [
                'label' => 'Longetude',
                'data' => '-52.3414027',
                'attr' => ['class' => 'form-control']
            ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'margin-top: 20px;'
                ],
                'label' => 'Salvar'
            ]);
    }

}