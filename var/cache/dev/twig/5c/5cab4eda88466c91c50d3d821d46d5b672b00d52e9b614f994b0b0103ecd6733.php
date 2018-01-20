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
        $__internal_c47bc5eaea54256ff4f6171a64c735bd7b7b39efa67109ddbc407172032550c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47bc5eaea54256ff4f6171a64c735bd7b7b39efa67109ddbc407172032550c6->enter($__internal_c47bc5eaea54256ff4f6171a64c735bd7b7b39efa67109ddbc407172032550c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6e63fc871c6d62cb5e1434900bf809f8a7239f06be839983522249bd20eb1784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e63fc871c6d62cb5e1434900bf809f8a7239f06be839983522249bd20eb1784->enter($__internal_6e63fc871c6d62cb5e1434900bf809f8a7239f06be839983522249bd20eb1784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_c47bc5eaea54256ff4f6171a64c735bd7b7b39efa67109ddbc407172032550c6->leave($__internal_c47bc5eaea54256ff4f6171a64c735bd7b7b39efa67109ddbc407172032550c6_prof);

        
        $__internal_6e63fc871c6d62cb5e1434900bf809f8a7239f06be839983522249bd20eb1784->leave($__internal_6e63fc871c6d62cb5e1434900bf809f8a7239f06be839983522249bd20eb1784_prof);

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
