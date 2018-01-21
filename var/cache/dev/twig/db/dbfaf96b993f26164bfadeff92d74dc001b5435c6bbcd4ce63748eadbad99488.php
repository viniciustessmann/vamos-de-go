<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5cececcadcaaa248fda114f9931fb18d147f269dcd12144432d6d9a20625d5fd extends Twig_Template
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
        $__internal_fbebabb1f67495771e997f6ef342bf0dc1232cdf0e0addaf9c26e27709dc7a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbebabb1f67495771e997f6ef342bf0dc1232cdf0e0addaf9c26e27709dc7a71->enter($__internal_fbebabb1f67495771e997f6ef342bf0dc1232cdf0e0addaf9c26e27709dc7a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_101d33a1752f82584f34cb8616cd04721dc26844b9c699eab9a4d7230cbe62de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101d33a1752f82584f34cb8616cd04721dc26844b9c699eab9a4d7230cbe62de->enter($__internal_101d33a1752f82584f34cb8616cd04721dc26844b9c699eab9a4d7230cbe62de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fbebabb1f67495771e997f6ef342bf0dc1232cdf0e0addaf9c26e27709dc7a71->leave($__internal_fbebabb1f67495771e997f6ef342bf0dc1232cdf0e0addaf9c26e27709dc7a71_prof);

        
        $__internal_101d33a1752f82584f34cb8616cd04721dc26844b9c699eab9a4d7230cbe62de->leave($__internal_101d33a1752f82584f34cb8616cd04721dc26844b9c699eab9a4d7230cbe62de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
