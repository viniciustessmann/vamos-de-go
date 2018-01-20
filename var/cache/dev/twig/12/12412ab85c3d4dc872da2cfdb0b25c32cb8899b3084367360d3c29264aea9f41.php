<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_31251581335495ce79dacf0704e844f5381d465a76287b602947c59f1b4810ae extends Twig_Template
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
        $__internal_353088c80a3913f4809cd2d5c0cd66cc973f4613f76d9142fbcc525654fb896f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353088c80a3913f4809cd2d5c0cd66cc973f4613f76d9142fbcc525654fb896f->enter($__internal_353088c80a3913f4809cd2d5c0cd66cc973f4613f76d9142fbcc525654fb896f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_72fc5f001924ea9ba1b77a1e862161bc93bec8d5d9f395387c17ccb3ccfbed2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fc5f001924ea9ba1b77a1e862161bc93bec8d5d9f395387c17ccb3ccfbed2d->enter($__internal_72fc5f001924ea9ba1b77a1e862161bc93bec8d5d9f395387c17ccb3ccfbed2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_353088c80a3913f4809cd2d5c0cd66cc973f4613f76d9142fbcc525654fb896f->leave($__internal_353088c80a3913f4809cd2d5c0cd66cc973f4613f76d9142fbcc525654fb896f_prof);

        
        $__internal_72fc5f001924ea9ba1b77a1e862161bc93bec8d5d9f395387c17ccb3ccfbed2d->leave($__internal_72fc5f001924ea9ba1b77a1e862161bc93bec8d5d9f395387c17ccb3ccfbed2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
