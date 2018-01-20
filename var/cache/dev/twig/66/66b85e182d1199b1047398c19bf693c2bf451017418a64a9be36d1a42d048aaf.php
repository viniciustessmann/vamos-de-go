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
        $__internal_13675d5440e5397e37d971608e12b04c64bec1cc384d187ee82a494ca178ba95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13675d5440e5397e37d971608e12b04c64bec1cc384d187ee82a494ca178ba95->enter($__internal_13675d5440e5397e37d971608e12b04c64bec1cc384d187ee82a494ca178ba95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_55e497dc5f29ba96d40490ffe9e4885848f749128781357e96d527b3665f26e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e497dc5f29ba96d40490ffe9e4885848f749128781357e96d527b3665f26e4->enter($__internal_55e497dc5f29ba96d40490ffe9e4885848f749128781357e96d527b3665f26e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_13675d5440e5397e37d971608e12b04c64bec1cc384d187ee82a494ca178ba95->leave($__internal_13675d5440e5397e37d971608e12b04c64bec1cc384d187ee82a494ca178ba95_prof);

        
        $__internal_55e497dc5f29ba96d40490ffe9e4885848f749128781357e96d527b3665f26e4->leave($__internal_55e497dc5f29ba96d40490ffe9e4885848f749128781357e96d527b3665f26e4_prof);

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
