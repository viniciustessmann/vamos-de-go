<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c738d500c2e066ac99431652a6f1e064a168a52e016f45a15f0ae968484567e5 extends Twig_Template
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
        $__internal_d0369e09055e80d9bd3ab4f7e17162df1918b885eec92443fc00d47e18a756a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0369e09055e80d9bd3ab4f7e17162df1918b885eec92443fc00d47e18a756a2->enter($__internal_d0369e09055e80d9bd3ab4f7e17162df1918b885eec92443fc00d47e18a756a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8f222c4065c3f6606bebe8ad465751bccefe57f65b11e1ea2ee5f22ae4fd9711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f222c4065c3f6606bebe8ad465751bccefe57f65b11e1ea2ee5f22ae4fd9711->enter($__internal_8f222c4065c3f6606bebe8ad465751bccefe57f65b11e1ea2ee5f22ae4fd9711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d0369e09055e80d9bd3ab4f7e17162df1918b885eec92443fc00d47e18a756a2->leave($__internal_d0369e09055e80d9bd3ab4f7e17162df1918b885eec92443fc00d47e18a756a2_prof);

        
        $__internal_8f222c4065c3f6606bebe8ad465751bccefe57f65b11e1ea2ee5f22ae4fd9711->leave($__internal_8f222c4065c3f6606bebe8ad465751bccefe57f65b11e1ea2ee5f22ae4fd9711_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
