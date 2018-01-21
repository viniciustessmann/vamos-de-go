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
        $__internal_81311681407218c19716657ed5ac86441fd327f9516cfcf98394178df0e5bf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81311681407218c19716657ed5ac86441fd327f9516cfcf98394178df0e5bf0c->enter($__internal_81311681407218c19716657ed5ac86441fd327f9516cfcf98394178df0e5bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_92b1da83a5492f8c88b9d534aaacf5d9dac123c2a2428863383858247ce0eadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b1da83a5492f8c88b9d534aaacf5d9dac123c2a2428863383858247ce0eadc->enter($__internal_92b1da83a5492f8c88b9d534aaacf5d9dac123c2a2428863383858247ce0eadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_81311681407218c19716657ed5ac86441fd327f9516cfcf98394178df0e5bf0c->leave($__internal_81311681407218c19716657ed5ac86441fd327f9516cfcf98394178df0e5bf0c_prof);

        
        $__internal_92b1da83a5492f8c88b9d534aaacf5d9dac123c2a2428863383858247ce0eadc->leave($__internal_92b1da83a5492f8c88b9d534aaacf5d9dac123c2a2428863383858247ce0eadc_prof);

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
