<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0ad66ec85df8dac03b67662e4e310a9601664c795bbb0bfe9640e965ecda9e64 extends Twig_Template
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
        $__internal_f9e24b8979955524df2a9c2293716798d95b7dc431ef34b485909ed941a5eb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e24b8979955524df2a9c2293716798d95b7dc431ef34b485909ed941a5eb7f->enter($__internal_f9e24b8979955524df2a9c2293716798d95b7dc431ef34b485909ed941a5eb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_eb0dc33789fa9080851d66132014044b21a3c26f45af75489f9279f1a8d21326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0dc33789fa9080851d66132014044b21a3c26f45af75489f9279f1a8d21326->enter($__internal_eb0dc33789fa9080851d66132014044b21a3c26f45af75489f9279f1a8d21326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f9e24b8979955524df2a9c2293716798d95b7dc431ef34b485909ed941a5eb7f->leave($__internal_f9e24b8979955524df2a9c2293716798d95b7dc431ef34b485909ed941a5eb7f_prof);

        
        $__internal_eb0dc33789fa9080851d66132014044b21a3c26f45af75489f9279f1a8d21326->leave($__internal_eb0dc33789fa9080851d66132014044b21a3c26f45af75489f9279f1a8d21326_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
