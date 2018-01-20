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
        $__internal_d4d6872e473151e4a71400d306804a75d25980e5a0f3324d29bb53c3423ed823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d6872e473151e4a71400d306804a75d25980e5a0f3324d29bb53c3423ed823->enter($__internal_d4d6872e473151e4a71400d306804a75d25980e5a0f3324d29bb53c3423ed823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6d0936dd03d1199bbb37d5aba25663891cc677686aa83a2904a7afc0afc2c0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0936dd03d1199bbb37d5aba25663891cc677686aa83a2904a7afc0afc2c0d7->enter($__internal_6d0936dd03d1199bbb37d5aba25663891cc677686aa83a2904a7afc0afc2c0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d4d6872e473151e4a71400d306804a75d25980e5a0f3324d29bb53c3423ed823->leave($__internal_d4d6872e473151e4a71400d306804a75d25980e5a0f3324d29bb53c3423ed823_prof);

        
        $__internal_6d0936dd03d1199bbb37d5aba25663891cc677686aa83a2904a7afc0afc2c0d7->leave($__internal_6d0936dd03d1199bbb37d5aba25663891cc677686aa83a2904a7afc0afc2c0d7_prof);

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
