<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e9f2f5540bf364fe022f78a98dc2506943a1318985e4f4aa19755d326d635268 extends Twig_Template
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
        $__internal_feef098c30f2148290e201f5454ac6a8b146f2066cf0b0d9e6d7f898db9bfebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feef098c30f2148290e201f5454ac6a8b146f2066cf0b0d9e6d7f898db9bfebf->enter($__internal_feef098c30f2148290e201f5454ac6a8b146f2066cf0b0d9e6d7f898db9bfebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4d65f755b5a7a8a7ed96636c93ad139536b274b8dc818ce0fdd213fb6ae4dc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d65f755b5a7a8a7ed96636c93ad139536b274b8dc818ce0fdd213fb6ae4dc52->enter($__internal_4d65f755b5a7a8a7ed96636c93ad139536b274b8dc818ce0fdd213fb6ae4dc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_feef098c30f2148290e201f5454ac6a8b146f2066cf0b0d9e6d7f898db9bfebf->leave($__internal_feef098c30f2148290e201f5454ac6a8b146f2066cf0b0d9e6d7f898db9bfebf_prof);

        
        $__internal_4d65f755b5a7a8a7ed96636c93ad139536b274b8dc818ce0fdd213fb6ae4dc52->leave($__internal_4d65f755b5a7a8a7ed96636c93ad139536b274b8dc818ce0fdd213fb6ae4dc52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
