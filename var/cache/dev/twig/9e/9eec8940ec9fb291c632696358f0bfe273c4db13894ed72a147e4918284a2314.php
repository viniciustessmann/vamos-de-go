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
        $__internal_a3e3c4c8feac7a4ec2f36d0462a5274b642112352aa5377cd770c4f8e74ba4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e3c4c8feac7a4ec2f36d0462a5274b642112352aa5377cd770c4f8e74ba4f5->enter($__internal_a3e3c4c8feac7a4ec2f36d0462a5274b642112352aa5377cd770c4f8e74ba4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2cdcb3a6bdb1a62d633fedd12355d47b87f0e54f2ae3b1871f991d10f9f54825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdcb3a6bdb1a62d633fedd12355d47b87f0e54f2ae3b1871f991d10f9f54825->enter($__internal_2cdcb3a6bdb1a62d633fedd12355d47b87f0e54f2ae3b1871f991d10f9f54825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a3e3c4c8feac7a4ec2f36d0462a5274b642112352aa5377cd770c4f8e74ba4f5->leave($__internal_a3e3c4c8feac7a4ec2f36d0462a5274b642112352aa5377cd770c4f8e74ba4f5_prof);

        
        $__internal_2cdcb3a6bdb1a62d633fedd12355d47b87f0e54f2ae3b1871f991d10f9f54825->leave($__internal_2cdcb3a6bdb1a62d633fedd12355d47b87f0e54f2ae3b1871f991d10f9f54825_prof);

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
