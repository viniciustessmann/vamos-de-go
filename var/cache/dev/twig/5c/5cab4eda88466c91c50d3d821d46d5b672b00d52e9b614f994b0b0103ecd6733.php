<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ed20c9c1a4f71b45edbaea5befdbbeee9254abadeb83ad7a63478f915730d1c extends Twig_Template
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
        $__internal_8f233d2836486df35d04c9e9c41b8c5f8cab6c5b18009a7ea33406f0e6dd3a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f233d2836486df35d04c9e9c41b8c5f8cab6c5b18009a7ea33406f0e6dd3a68->enter($__internal_8f233d2836486df35d04c9e9c41b8c5f8cab6c5b18009a7ea33406f0e6dd3a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1836dc84461f770973dd578f5365d8abe6c2409849913dccdbbc16eee0e4e475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1836dc84461f770973dd578f5365d8abe6c2409849913dccdbbc16eee0e4e475->enter($__internal_1836dc84461f770973dd578f5365d8abe6c2409849913dccdbbc16eee0e4e475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_8f233d2836486df35d04c9e9c41b8c5f8cab6c5b18009a7ea33406f0e6dd3a68->leave($__internal_8f233d2836486df35d04c9e9c41b8c5f8cab6c5b18009a7ea33406f0e6dd3a68_prof);

        
        $__internal_1836dc84461f770973dd578f5365d8abe6c2409849913dccdbbc16eee0e4e475->leave($__internal_1836dc84461f770973dd578f5365d8abe6c2409849913dccdbbc16eee0e4e475_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
