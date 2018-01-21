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
        $__internal_b38d6dfd9037c8376a1e51f534173464ee1211be5a0d1972535eed4a4e7b733c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38d6dfd9037c8376a1e51f534173464ee1211be5a0d1972535eed4a4e7b733c->enter($__internal_b38d6dfd9037c8376a1e51f534173464ee1211be5a0d1972535eed4a4e7b733c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_79aa4d4911fa4a05953eb232b59c659b16b9356c52535c718638462b03ab8780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aa4d4911fa4a05953eb232b59c659b16b9356c52535c718638462b03ab8780->enter($__internal_79aa4d4911fa4a05953eb232b59c659b16b9356c52535c718638462b03ab8780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b38d6dfd9037c8376a1e51f534173464ee1211be5a0d1972535eed4a4e7b733c->leave($__internal_b38d6dfd9037c8376a1e51f534173464ee1211be5a0d1972535eed4a4e7b733c_prof);

        
        $__internal_79aa4d4911fa4a05953eb232b59c659b16b9356c52535c718638462b03ab8780->leave($__internal_79aa4d4911fa4a05953eb232b59c659b16b9356c52535c718638462b03ab8780_prof);

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
