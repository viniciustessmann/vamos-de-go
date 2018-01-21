<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f1cfae1480b2dde93094696995ae1c3bc106d29b252ff97dea3c158db91b0517 extends Twig_Template
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
        $__internal_a5b6c1ba0708216fc28efb36499b39ce88cf4a359584daf70cf681fc8ef23ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b6c1ba0708216fc28efb36499b39ce88cf4a359584daf70cf681fc8ef23ff5->enter($__internal_a5b6c1ba0708216fc28efb36499b39ce88cf4a359584daf70cf681fc8ef23ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_14a134b6388b41ee729e26e4881b083e3673aaa4ea8586f47f719d8d25b10ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a134b6388b41ee729e26e4881b083e3673aaa4ea8586f47f719d8d25b10ab2->enter($__internal_14a134b6388b41ee729e26e4881b083e3673aaa4ea8586f47f719d8d25b10ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_a5b6c1ba0708216fc28efb36499b39ce88cf4a359584daf70cf681fc8ef23ff5->leave($__internal_a5b6c1ba0708216fc28efb36499b39ce88cf4a359584daf70cf681fc8ef23ff5_prof);

        
        $__internal_14a134b6388b41ee729e26e4881b083e3673aaa4ea8586f47f719d8d25b10ab2->leave($__internal_14a134b6388b41ee729e26e4881b083e3673aaa4ea8586f47f719d8d25b10ab2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
