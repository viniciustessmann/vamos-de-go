<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cc043dc12647ffa55857b6feda9e42f7ef26a626bb5ef3b5272cc9f7fcf23581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58bc18f942844657ae970e7dd6ddeb8e7d9940ffbe91c11d47a6178640298b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bc18f942844657ae970e7dd6ddeb8e7d9940ffbe91c11d47a6178640298b2e->enter($__internal_58bc18f942844657ae970e7dd6ddeb8e7d9940ffbe91c11d47a6178640298b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9c3a6860b32f1b5154934bf087940f0897878da2d8fac7c2e9d5070694573ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3a6860b32f1b5154934bf087940f0897878da2d8fac7c2e9d5070694573ab1->enter($__internal_9c3a6860b32f1b5154934bf087940f0897878da2d8fac7c2e9d5070694573ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_58bc18f942844657ae970e7dd6ddeb8e7d9940ffbe91c11d47a6178640298b2e->leave($__internal_58bc18f942844657ae970e7dd6ddeb8e7d9940ffbe91c11d47a6178640298b2e_prof);

        
        $__internal_9c3a6860b32f1b5154934bf087940f0897878da2d8fac7c2e9d5070694573ab1->leave($__internal_9c3a6860b32f1b5154934bf087940f0897878da2d8fac7c2e9d5070694573ab1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
