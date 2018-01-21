<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7ddc50e0dcde7d135e1d04c6d2df7951a4ec14168e2b7ad711f7f4bdf8f4c09a extends Twig_Template
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
        $__internal_a3f53f371da8e84894001adec26afd9d2ff9b8bb762a1c46f8d412cf29bd1aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f53f371da8e84894001adec26afd9d2ff9b8bb762a1c46f8d412cf29bd1aef->enter($__internal_a3f53f371da8e84894001adec26afd9d2ff9b8bb762a1c46f8d412cf29bd1aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_038cc5d306a0df66df063bfea0f790cb608515027e7e35817b05973476d73223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038cc5d306a0df66df063bfea0f790cb608515027e7e35817b05973476d73223->enter($__internal_038cc5d306a0df66df063bfea0f790cb608515027e7e35817b05973476d73223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a3f53f371da8e84894001adec26afd9d2ff9b8bb762a1c46f8d412cf29bd1aef->leave($__internal_a3f53f371da8e84894001adec26afd9d2ff9b8bb762a1c46f8d412cf29bd1aef_prof);

        
        $__internal_038cc5d306a0df66df063bfea0f790cb608515027e7e35817b05973476d73223->leave($__internal_038cc5d306a0df66df063bfea0f790cb608515027e7e35817b05973476d73223_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
