<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7794ab6b3538a9909aeb3dec065c99388729d7eb4faf788b0ee08380c9e15e35 extends Twig_Template
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
        $__internal_d8dfc3e50d3b7f7a40105be86215c72acfb766b779055e601b36074686f86eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8dfc3e50d3b7f7a40105be86215c72acfb766b779055e601b36074686f86eaa->enter($__internal_d8dfc3e50d3b7f7a40105be86215c72acfb766b779055e601b36074686f86eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9a69915e5e3274e73ad78b85b6c0a2e919f0604a6664d15d1896a8faff224c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a69915e5e3274e73ad78b85b6c0a2e919f0604a6664d15d1896a8faff224c50->enter($__internal_9a69915e5e3274e73ad78b85b6c0a2e919f0604a6664d15d1896a8faff224c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d8dfc3e50d3b7f7a40105be86215c72acfb766b779055e601b36074686f86eaa->leave($__internal_d8dfc3e50d3b7f7a40105be86215c72acfb766b779055e601b36074686f86eaa_prof);

        
        $__internal_9a69915e5e3274e73ad78b85b6c0a2e919f0604a6664d15d1896a8faff224c50->leave($__internal_9a69915e5e3274e73ad78b85b6c0a2e919f0604a6664d15d1896a8faff224c50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
