<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5a3bbacb20ba4b25fd107d59e11444c9087adc87a3669033d15683c9bbb94e0d extends Twig_Template
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
        $__internal_43fbc7dc1cce3134555e36f31a92d591b348d75c137a881e2e7f56dc48a1cdff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fbc7dc1cce3134555e36f31a92d591b348d75c137a881e2e7f56dc48a1cdff->enter($__internal_43fbc7dc1cce3134555e36f31a92d591b348d75c137a881e2e7f56dc48a1cdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8e61987be1f3808589cb3d628ebc7e400173dfe99ab0271b7d52e91f578a7921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e61987be1f3808589cb3d628ebc7e400173dfe99ab0271b7d52e91f578a7921->enter($__internal_8e61987be1f3808589cb3d628ebc7e400173dfe99ab0271b7d52e91f578a7921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_43fbc7dc1cce3134555e36f31a92d591b348d75c137a881e2e7f56dc48a1cdff->leave($__internal_43fbc7dc1cce3134555e36f31a92d591b348d75c137a881e2e7f56dc48a1cdff_prof);

        
        $__internal_8e61987be1f3808589cb3d628ebc7e400173dfe99ab0271b7d52e91f578a7921->leave($__internal_8e61987be1f3808589cb3d628ebc7e400173dfe99ab0271b7d52e91f578a7921_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
