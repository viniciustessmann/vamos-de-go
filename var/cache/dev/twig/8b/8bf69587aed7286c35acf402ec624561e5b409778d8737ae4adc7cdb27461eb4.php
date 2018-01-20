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
        $__internal_8b3e51976a7f404c1df2da446b09e86189453f85bb6d2d88b810ea0f8f156837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3e51976a7f404c1df2da446b09e86189453f85bb6d2d88b810ea0f8f156837->enter($__internal_8b3e51976a7f404c1df2da446b09e86189453f85bb6d2d88b810ea0f8f156837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b895dde5bbee3569383461447da401c2b90a7bd3786c734ef975cbd552ba70d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b895dde5bbee3569383461447da401c2b90a7bd3786c734ef975cbd552ba70d0->enter($__internal_b895dde5bbee3569383461447da401c2b90a7bd3786c734ef975cbd552ba70d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8b3e51976a7f404c1df2da446b09e86189453f85bb6d2d88b810ea0f8f156837->leave($__internal_8b3e51976a7f404c1df2da446b09e86189453f85bb6d2d88b810ea0f8f156837_prof);

        
        $__internal_b895dde5bbee3569383461447da401c2b90a7bd3786c734ef975cbd552ba70d0->leave($__internal_b895dde5bbee3569383461447da401c2b90a7bd3786c734ef975cbd552ba70d0_prof);

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
