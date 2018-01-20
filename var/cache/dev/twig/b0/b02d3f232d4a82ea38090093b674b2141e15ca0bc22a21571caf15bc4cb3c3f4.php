<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ecbbffce36f0dbc8c0ccf0d271859e846dd305a07c3b13ddfcf536c136300559 extends Twig_Template
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
        $__internal_ed6c4ad9889588372a8009c796c92aef34ef9ce713a10c72c7b8364701934a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6c4ad9889588372a8009c796c92aef34ef9ce713a10c72c7b8364701934a81->enter($__internal_ed6c4ad9889588372a8009c796c92aef34ef9ce713a10c72c7b8364701934a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_07f04e9dbf2fab9f2b888403147a47e5e965b18c4f0d89a4a554ba3a709c73a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f04e9dbf2fab9f2b888403147a47e5e965b18c4f0d89a4a554ba3a709c73a2->enter($__internal_07f04e9dbf2fab9f2b888403147a47e5e965b18c4f0d89a4a554ba3a709c73a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_ed6c4ad9889588372a8009c796c92aef34ef9ce713a10c72c7b8364701934a81->leave($__internal_ed6c4ad9889588372a8009c796c92aef34ef9ce713a10c72c7b8364701934a81_prof);

        
        $__internal_07f04e9dbf2fab9f2b888403147a47e5e965b18c4f0d89a4a554ba3a709c73a2->leave($__internal_07f04e9dbf2fab9f2b888403147a47e5e965b18c4f0d89a4a554ba3a709c73a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
