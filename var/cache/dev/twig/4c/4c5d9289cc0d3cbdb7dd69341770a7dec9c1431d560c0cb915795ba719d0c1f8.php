<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4bedf7b29ba719d8683b56908e47582bdec8a723dd046ae90598d792edbac858 extends Twig_Template
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
        $__internal_c12862083a01671304f1488b834da24d78597644873cd72067fb94a1d82f5b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12862083a01671304f1488b834da24d78597644873cd72067fb94a1d82f5b63->enter($__internal_c12862083a01671304f1488b834da24d78597644873cd72067fb94a1d82f5b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e51936f637943a3775cb5e4205da4a5ea6b2371227a1aec305ffe7488cf05bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51936f637943a3775cb5e4205da4a5ea6b2371227a1aec305ffe7488cf05bfb->enter($__internal_e51936f637943a3775cb5e4205da4a5ea6b2371227a1aec305ffe7488cf05bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_c12862083a01671304f1488b834da24d78597644873cd72067fb94a1d82f5b63->leave($__internal_c12862083a01671304f1488b834da24d78597644873cd72067fb94a1d82f5b63_prof);

        
        $__internal_e51936f637943a3775cb5e4205da4a5ea6b2371227a1aec305ffe7488cf05bfb->leave($__internal_e51936f637943a3775cb5e4205da4a5ea6b2371227a1aec305ffe7488cf05bfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
