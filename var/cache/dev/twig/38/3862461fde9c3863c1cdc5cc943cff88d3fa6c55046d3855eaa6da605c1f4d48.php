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
        $__internal_bdbe185ebb1758d07626239d3b6aad4680c2849c08780f29e1fdad3e041146f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbe185ebb1758d07626239d3b6aad4680c2849c08780f29e1fdad3e041146f4->enter($__internal_bdbe185ebb1758d07626239d3b6aad4680c2849c08780f29e1fdad3e041146f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_250255818505896dc297368dfee594ea517b5fbe0f611b05b8563bdbcf3ff9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250255818505896dc297368dfee594ea517b5fbe0f611b05b8563bdbcf3ff9eb->enter($__internal_250255818505896dc297368dfee594ea517b5fbe0f611b05b8563bdbcf3ff9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bdbe185ebb1758d07626239d3b6aad4680c2849c08780f29e1fdad3e041146f4->leave($__internal_bdbe185ebb1758d07626239d3b6aad4680c2849c08780f29e1fdad3e041146f4_prof);

        
        $__internal_250255818505896dc297368dfee594ea517b5fbe0f611b05b8563bdbcf3ff9eb->leave($__internal_250255818505896dc297368dfee594ea517b5fbe0f611b05b8563bdbcf3ff9eb_prof);

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
