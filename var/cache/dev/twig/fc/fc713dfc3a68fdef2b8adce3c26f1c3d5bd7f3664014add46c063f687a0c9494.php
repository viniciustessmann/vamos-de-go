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
        $__internal_871077925692f6b8c7fab92d32b700c0867b800188165010045decb0b3e257f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871077925692f6b8c7fab92d32b700c0867b800188165010045decb0b3e257f5->enter($__internal_871077925692f6b8c7fab92d32b700c0867b800188165010045decb0b3e257f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_530dc0877b0a79beeed6dc9467dc0c9cf736d1305cf02ad5c4c13a8d24a47bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530dc0877b0a79beeed6dc9467dc0c9cf736d1305cf02ad5c4c13a8d24a47bf2->enter($__internal_530dc0877b0a79beeed6dc9467dc0c9cf736d1305cf02ad5c4c13a8d24a47bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_871077925692f6b8c7fab92d32b700c0867b800188165010045decb0b3e257f5->leave($__internal_871077925692f6b8c7fab92d32b700c0867b800188165010045decb0b3e257f5_prof);

        
        $__internal_530dc0877b0a79beeed6dc9467dc0c9cf736d1305cf02ad5c4c13a8d24a47bf2->leave($__internal_530dc0877b0a79beeed6dc9467dc0c9cf736d1305cf02ad5c4c13a8d24a47bf2_prof);

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
