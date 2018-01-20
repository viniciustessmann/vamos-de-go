<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_460a8dfb2abd51d2608525c04baa1e3c67f3ec7bb2bca771fd76d1c6b2a3616e extends Twig_Template
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
        $__internal_4555419c256f7500346070cf503f3f55ded764dfb8fcc09a14382832b3dc3a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4555419c256f7500346070cf503f3f55ded764dfb8fcc09a14382832b3dc3a94->enter($__internal_4555419c256f7500346070cf503f3f55ded764dfb8fcc09a14382832b3dc3a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_dd6f047c42e8c166870a0b270e457f419e041e50ac269fcebe24978b03ec8cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6f047c42e8c166870a0b270e457f419e041e50ac269fcebe24978b03ec8cf0->enter($__internal_dd6f047c42e8c166870a0b270e457f419e041e50ac269fcebe24978b03ec8cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_4555419c256f7500346070cf503f3f55ded764dfb8fcc09a14382832b3dc3a94->leave($__internal_4555419c256f7500346070cf503f3f55ded764dfb8fcc09a14382832b3dc3a94_prof);

        
        $__internal_dd6f047c42e8c166870a0b270e457f419e041e50ac269fcebe24978b03ec8cf0->leave($__internal_dd6f047c42e8c166870a0b270e457f419e041e50ac269fcebe24978b03ec8cf0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
