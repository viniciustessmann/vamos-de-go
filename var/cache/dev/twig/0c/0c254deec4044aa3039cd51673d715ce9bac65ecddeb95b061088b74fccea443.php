<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_acbf7a08180f79b61dcaf013df035765a7e3ed8a8b835ff37a9900e84f5b6f99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cdcd478e12d8838a8b9475dc53f7d849db2dc552302df9afe7a20e15b853d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdcd478e12d8838a8b9475dc53f7d849db2dc552302df9afe7a20e15b853d31->enter($__internal_5cdcd478e12d8838a8b9475dc53f7d849db2dc552302df9afe7a20e15b853d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0efb12ad4f6f7cdc98d9fa7a00a0ba9ea61be2e3692fc1f23957ae047074a3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efb12ad4f6f7cdc98d9fa7a00a0ba9ea61be2e3692fc1f23957ae047074a3e4->enter($__internal_0efb12ad4f6f7cdc98d9fa7a00a0ba9ea61be2e3692fc1f23957ae047074a3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cdcd478e12d8838a8b9475dc53f7d849db2dc552302df9afe7a20e15b853d31->leave($__internal_5cdcd478e12d8838a8b9475dc53f7d849db2dc552302df9afe7a20e15b853d31_prof);

        
        $__internal_0efb12ad4f6f7cdc98d9fa7a00a0ba9ea61be2e3692fc1f23957ae047074a3e4->leave($__internal_0efb12ad4f6f7cdc98d9fa7a00a0ba9ea61be2e3692fc1f23957ae047074a3e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e855c20fe0e4131c44df9373549711595c87e247c50d1c19371f1523aab07f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e855c20fe0e4131c44df9373549711595c87e247c50d1c19371f1523aab07f4->enter($__internal_3e855c20fe0e4131c44df9373549711595c87e247c50d1c19371f1523aab07f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_359dcf47f52f7a5c7ad0351fa08c75a47c02b38cd1150483d67cf0919cf58b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359dcf47f52f7a5c7ad0351fa08c75a47c02b38cd1150483d67cf0919cf58b27->enter($__internal_359dcf47f52f7a5c7ad0351fa08c75a47c02b38cd1150483d67cf0919cf58b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_359dcf47f52f7a5c7ad0351fa08c75a47c02b38cd1150483d67cf0919cf58b27->leave($__internal_359dcf47f52f7a5c7ad0351fa08c75a47c02b38cd1150483d67cf0919cf58b27_prof);

        
        $__internal_3e855c20fe0e4131c44df9373549711595c87e247c50d1c19371f1523aab07f4->leave($__internal_3e855c20fe0e4131c44df9373549711595c87e247c50d1c19371f1523aab07f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_48b1a06933029d31e5dc2eb0885b270ee329a3a4413a62726ad773b1f9701a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b1a06933029d31e5dc2eb0885b270ee329a3a4413a62726ad773b1f9701a88->enter($__internal_48b1a06933029d31e5dc2eb0885b270ee329a3a4413a62726ad773b1f9701a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fb3af5ca1bc881ff2725095e73af03536342735b5c1abd917baec358d9f3117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb3af5ca1bc881ff2725095e73af03536342735b5c1abd917baec358d9f3117->enter($__internal_9fb3af5ca1bc881ff2725095e73af03536342735b5c1abd917baec358d9f3117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9fb3af5ca1bc881ff2725095e73af03536342735b5c1abd917baec358d9f3117->leave($__internal_9fb3af5ca1bc881ff2725095e73af03536342735b5c1abd917baec358d9f3117_prof);

        
        $__internal_48b1a06933029d31e5dc2eb0885b270ee329a3a4413a62726ad773b1f9701a88->leave($__internal_48b1a06933029d31e5dc2eb0885b270ee329a3a4413a62726ad773b1f9701a88_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
