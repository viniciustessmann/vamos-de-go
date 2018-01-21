<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9c4fb0e52721346bfbf1971f4383ef7afff1937b51d653c93e5d2e603b8d1c8d extends Twig_Template
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
        $__internal_11b7b0f9313b167c6e2426638418b2f87f035f45fca1cdfa54107c7e3c94386c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b7b0f9313b167c6e2426638418b2f87f035f45fca1cdfa54107c7e3c94386c->enter($__internal_11b7b0f9313b167c6e2426638418b2f87f035f45fca1cdfa54107c7e3c94386c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_adc07e0a3457e91905641d448942473f9032dbe9ce7a6bb302ed209e5bd9bf35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc07e0a3457e91905641d448942473f9032dbe9ce7a6bb302ed209e5bd9bf35->enter($__internal_adc07e0a3457e91905641d448942473f9032dbe9ce7a6bb302ed209e5bd9bf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_11b7b0f9313b167c6e2426638418b2f87f035f45fca1cdfa54107c7e3c94386c->leave($__internal_11b7b0f9313b167c6e2426638418b2f87f035f45fca1cdfa54107c7e3c94386c_prof);

        
        $__internal_adc07e0a3457e91905641d448942473f9032dbe9ce7a6bb302ed209e5bd9bf35->leave($__internal_adc07e0a3457e91905641d448942473f9032dbe9ce7a6bb302ed209e5bd9bf35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
