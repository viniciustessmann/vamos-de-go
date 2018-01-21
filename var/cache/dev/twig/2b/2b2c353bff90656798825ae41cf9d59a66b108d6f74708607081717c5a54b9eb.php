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
        $__internal_3f79c4606108b1ed3b500850d2341ce09304ce19a75fb0e47fb1c63d82a2a527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f79c4606108b1ed3b500850d2341ce09304ce19a75fb0e47fb1c63d82a2a527->enter($__internal_3f79c4606108b1ed3b500850d2341ce09304ce19a75fb0e47fb1c63d82a2a527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_aa6db3088251cdb40b152c80654ca4f6b25e71e73a76c223d7e8f8008f7a2dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6db3088251cdb40b152c80654ca4f6b25e71e73a76c223d7e8f8008f7a2dba->enter($__internal_aa6db3088251cdb40b152c80654ca4f6b25e71e73a76c223d7e8f8008f7a2dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3f79c4606108b1ed3b500850d2341ce09304ce19a75fb0e47fb1c63d82a2a527->leave($__internal_3f79c4606108b1ed3b500850d2341ce09304ce19a75fb0e47fb1c63d82a2a527_prof);

        
        $__internal_aa6db3088251cdb40b152c80654ca4f6b25e71e73a76c223d7e8f8008f7a2dba->leave($__internal_aa6db3088251cdb40b152c80654ca4f6b25e71e73a76c223d7e8f8008f7a2dba_prof);

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
