<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a24742f0d9d56d204357601c2e6804adcfacf62f5801a53e1bb7a327e9757632 extends Twig_Template
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
        $__internal_2954aa8ee434ec94b2a7e0b8925c141b8d7ed007ba3979ed61e29690830cc9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2954aa8ee434ec94b2a7e0b8925c141b8d7ed007ba3979ed61e29690830cc9c6->enter($__internal_2954aa8ee434ec94b2a7e0b8925c141b8d7ed007ba3979ed61e29690830cc9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_89b82254836be37b395cad20311caef82502130221c0c04e897fc1d46e7bab88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b82254836be37b395cad20311caef82502130221c0c04e897fc1d46e7bab88->enter($__internal_89b82254836be37b395cad20311caef82502130221c0c04e897fc1d46e7bab88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_2954aa8ee434ec94b2a7e0b8925c141b8d7ed007ba3979ed61e29690830cc9c6->leave($__internal_2954aa8ee434ec94b2a7e0b8925c141b8d7ed007ba3979ed61e29690830cc9c6_prof);

        
        $__internal_89b82254836be37b395cad20311caef82502130221c0c04e897fc1d46e7bab88->leave($__internal_89b82254836be37b395cad20311caef82502130221c0c04e897fc1d46e7bab88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
