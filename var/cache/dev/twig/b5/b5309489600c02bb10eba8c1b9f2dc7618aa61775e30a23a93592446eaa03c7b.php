<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4435c26c5ad442f6647d40f10bf898fd2e165dfe07225907353682c46cd9b342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47588e2abc92f2b1dfe299bf7a6f02ea04124588d0e3013b773a3c00ae78a9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47588e2abc92f2b1dfe299bf7a6f02ea04124588d0e3013b773a3c00ae78a9b1->enter($__internal_47588e2abc92f2b1dfe299bf7a6f02ea04124588d0e3013b773a3c00ae78a9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_53f5b1c7b24fb3b862a80859380161904c661c1e230af64255b3ca7614285ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f5b1c7b24fb3b862a80859380161904c661c1e230af64255b3ca7614285ea9->enter($__internal_53f5b1c7b24fb3b862a80859380161904c661c1e230af64255b3ca7614285ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47588e2abc92f2b1dfe299bf7a6f02ea04124588d0e3013b773a3c00ae78a9b1->leave($__internal_47588e2abc92f2b1dfe299bf7a6f02ea04124588d0e3013b773a3c00ae78a9b1_prof);

        
        $__internal_53f5b1c7b24fb3b862a80859380161904c661c1e230af64255b3ca7614285ea9->leave($__internal_53f5b1c7b24fb3b862a80859380161904c661c1e230af64255b3ca7614285ea9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45a8454d38079613ea65c483887a31546b861210452d2857331987e4465a5cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a8454d38079613ea65c483887a31546b861210452d2857331987e4465a5cd7->enter($__internal_45a8454d38079613ea65c483887a31546b861210452d2857331987e4465a5cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_922ea5f46c7ddfc4765f199a1c2af5aefdff9fe04d694d6b7a4b068460f69fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922ea5f46c7ddfc4765f199a1c2af5aefdff9fe04d694d6b7a4b068460f69fa9->enter($__internal_922ea5f46c7ddfc4765f199a1c2af5aefdff9fe04d694d6b7a4b068460f69fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_922ea5f46c7ddfc4765f199a1c2af5aefdff9fe04d694d6b7a4b068460f69fa9->leave($__internal_922ea5f46c7ddfc4765f199a1c2af5aefdff9fe04d694d6b7a4b068460f69fa9_prof);

        
        $__internal_45a8454d38079613ea65c483887a31546b861210452d2857331987e4465a5cd7->leave($__internal_45a8454d38079613ea65c483887a31546b861210452d2857331987e4465a5cd7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
