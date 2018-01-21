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
        $__internal_d798a945ea6f499519ae55b1866c35f47925c6099ff02283db69666f2ace6988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d798a945ea6f499519ae55b1866c35f47925c6099ff02283db69666f2ace6988->enter($__internal_d798a945ea6f499519ae55b1866c35f47925c6099ff02283db69666f2ace6988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a06f1aaaca5202ce4ab9c27200e80bc8208753927bfc364aa1d1ab1faff440e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06f1aaaca5202ce4ab9c27200e80bc8208753927bfc364aa1d1ab1faff440e0->enter($__internal_a06f1aaaca5202ce4ab9c27200e80bc8208753927bfc364aa1d1ab1faff440e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_d798a945ea6f499519ae55b1866c35f47925c6099ff02283db69666f2ace6988->leave($__internal_d798a945ea6f499519ae55b1866c35f47925c6099ff02283db69666f2ace6988_prof);

        
        $__internal_a06f1aaaca5202ce4ab9c27200e80bc8208753927bfc364aa1d1ab1faff440e0->leave($__internal_a06f1aaaca5202ce4ab9c27200e80bc8208753927bfc364aa1d1ab1faff440e0_prof);

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
