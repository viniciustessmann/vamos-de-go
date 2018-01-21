<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3605374172f5c4fe12c12ed29503cbcd841dc520570183d153b071e72f135ad3 extends Twig_Template
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
        $__internal_0830b817138dd30e6642acce617f3161cdc2b051aca427f2c6fd47a706fb9923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0830b817138dd30e6642acce617f3161cdc2b051aca427f2c6fd47a706fb9923->enter($__internal_0830b817138dd30e6642acce617f3161cdc2b051aca427f2c6fd47a706fb9923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_74356220d969083fa104076d705de94c8d45b95bd6cc05672a098fb474fb0789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74356220d969083fa104076d705de94c8d45b95bd6cc05672a098fb474fb0789->enter($__internal_74356220d969083fa104076d705de94c8d45b95bd6cc05672a098fb474fb0789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0830b817138dd30e6642acce617f3161cdc2b051aca427f2c6fd47a706fb9923->leave($__internal_0830b817138dd30e6642acce617f3161cdc2b051aca427f2c6fd47a706fb9923_prof);

        
        $__internal_74356220d969083fa104076d705de94c8d45b95bd6cc05672a098fb474fb0789->leave($__internal_74356220d969083fa104076d705de94c8d45b95bd6cc05672a098fb474fb0789_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
