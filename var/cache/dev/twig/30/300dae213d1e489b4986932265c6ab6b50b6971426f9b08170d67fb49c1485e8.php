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
        $__internal_08526cabfd451c48cff676a68b309fce3479b0f7f9c94fb68979d5e6a74847b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08526cabfd451c48cff676a68b309fce3479b0f7f9c94fb68979d5e6a74847b4->enter($__internal_08526cabfd451c48cff676a68b309fce3479b0f7f9c94fb68979d5e6a74847b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a49951cc5a3ef53839ab79fb1feca2ab6e2b71b1a6d9725ec2671bd743a345d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49951cc5a3ef53839ab79fb1feca2ab6e2b71b1a6d9725ec2671bd743a345d9->enter($__internal_a49951cc5a3ef53839ab79fb1feca2ab6e2b71b1a6d9725ec2671bd743a345d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_08526cabfd451c48cff676a68b309fce3479b0f7f9c94fb68979d5e6a74847b4->leave($__internal_08526cabfd451c48cff676a68b309fce3479b0f7f9c94fb68979d5e6a74847b4_prof);

        
        $__internal_a49951cc5a3ef53839ab79fb1feca2ab6e2b71b1a6d9725ec2671bd743a345d9->leave($__internal_a49951cc5a3ef53839ab79fb1feca2ab6e2b71b1a6d9725ec2671bd743a345d9_prof);

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
