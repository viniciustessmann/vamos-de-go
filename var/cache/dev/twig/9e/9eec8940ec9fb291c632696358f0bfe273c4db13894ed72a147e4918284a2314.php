<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d0802a726c3b6013fd601a22016add055cf2fc497993e709d2d0e700a56619dc extends Twig_Template
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
        $__internal_e76309b2ff7d890d8401dc00291b87c31e9ea07e5e9b3db4164c84e31b49db24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76309b2ff7d890d8401dc00291b87c31e9ea07e5e9b3db4164c84e31b49db24->enter($__internal_e76309b2ff7d890d8401dc00291b87c31e9ea07e5e9b3db4164c84e31b49db24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c9e3812f29e25b73cda6b4d1c0b11168754d1fc33c97111d084601a772de73f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e3812f29e25b73cda6b4d1c0b11168754d1fc33c97111d084601a772de73f9->enter($__internal_c9e3812f29e25b73cda6b4d1c0b11168754d1fc33c97111d084601a772de73f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e76309b2ff7d890d8401dc00291b87c31e9ea07e5e9b3db4164c84e31b49db24->leave($__internal_e76309b2ff7d890d8401dc00291b87c31e9ea07e5e9b3db4164c84e31b49db24_prof);

        
        $__internal_c9e3812f29e25b73cda6b4d1c0b11168754d1fc33c97111d084601a772de73f9->leave($__internal_c9e3812f29e25b73cda6b4d1c0b11168754d1fc33c97111d084601a772de73f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
