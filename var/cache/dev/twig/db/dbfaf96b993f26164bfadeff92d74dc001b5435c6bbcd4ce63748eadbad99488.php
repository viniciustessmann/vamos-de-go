<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5cececcadcaaa248fda114f9931fb18d147f269dcd12144432d6d9a20625d5fd extends Twig_Template
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
        $__internal_055c2daad869993063220755bb49fe81e0d53cc82dfe4694693900bb6ef3b19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055c2daad869993063220755bb49fe81e0d53cc82dfe4694693900bb6ef3b19b->enter($__internal_055c2daad869993063220755bb49fe81e0d53cc82dfe4694693900bb6ef3b19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b4ab8bd63278ac4ab09a30556db7e153eb2e94441c6e715bf5310cb3633116dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ab8bd63278ac4ab09a30556db7e153eb2e94441c6e715bf5310cb3633116dc->enter($__internal_b4ab8bd63278ac4ab09a30556db7e153eb2e94441c6e715bf5310cb3633116dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_055c2daad869993063220755bb49fe81e0d53cc82dfe4694693900bb6ef3b19b->leave($__internal_055c2daad869993063220755bb49fe81e0d53cc82dfe4694693900bb6ef3b19b_prof);

        
        $__internal_b4ab8bd63278ac4ab09a30556db7e153eb2e94441c6e715bf5310cb3633116dc->leave($__internal_b4ab8bd63278ac4ab09a30556db7e153eb2e94441c6e715bf5310cb3633116dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
