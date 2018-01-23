<?php
namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AdminBundle\Entity\Point;
use AdminBundle\Entity\Driver;
use AdminBundle\Entity\User;
use AdminBundle\Repository\PointRepository;
use AdminBundle\Repository\DriverRepository;
use AdminBundle\Repository\UserRepository;

class WayType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nome da rota',
                'attr' => ['class' => 'form-control']
            ])
            ->add('value', NumberType::class, [
                'label' => 'Valor',
                'attr' => ['class' => 'form-control']
            ])
            ->add('min', IntegerType::class, [
                'label' => 'Minimo de pessoas',
                'attr' => ['class' => 'form-control']
            ])
            ->add('start', TimeType::class, [
                'label' => 'Saida',
                'attr' => ['class' => 'form-control']
            ])
            ->add('end', TimeType::class, [
                'label' => 'Chegada',
                'attr' => ['class' => 'form-control']
            ])
            ->add('points', EntityType::class, [
                'class' => Point::class,
                'choice_label' => 'name',
                'attr' => ['class' => 'form-control'],
                'multiple' => true,
                'query_builder' => function(PointRepository $repo) {
                    return $repo->createAlphabeticalQueryBuilder();
                }
            ])
            // ->add('drivers', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'name',
            //     'attr' => ['class' => 'form-control'],
            //     'multiple' => true,
            //     'query_builder' => function(UserRepository $repo) {
            //         return $repo->createAlphabeticalQueryBuilderDrivers();
            //     }
            // ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'margin-top: 20px;'
                ],
                'label' => 'Salvar'
            ]);
    }

    /**
    * {@inheritdoc}
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Way'
        ));
    }
}