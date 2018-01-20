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
        $__internal_7f602f43bcdff6e28843099fe973a3c9afad910e245a8677fc0c49e246970691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f602f43bcdff6e28843099fe973a3c9afad910e245a8677fc0c49e246970691->enter($__internal_7f602f43bcdff6e28843099fe973a3c9afad910e245a8677fc0c49e246970691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_520997b0ffa4aaec0462f79d94639901fe094f10f40574f32c1961c4edcbbf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520997b0ffa4aaec0462f79d94639901fe094f10f40574f32c1961c4edcbbf21->enter($__internal_520997b0ffa4aaec0462f79d94639901fe094f10f40574f32c1961c4edcbbf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f602f43bcdff6e28843099fe973a3c9afad910e245a8677fc0c49e246970691->leave($__internal_7f602f43bcdff6e28843099fe973a3c9afad910e245a8677fc0c49e246970691_prof);

        
        $__internal_520997b0ffa4aaec0462f79d94639901fe094f10f40574f32c1961c4edcbbf21->leave($__internal_520997b0ffa4aaec0462f79d94639901fe094f10f40574f32c1961c4edcbbf21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebc04a1788038227189992578f4aad1b148f26721fea6d08e4ec910fe4a976d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc04a1788038227189992578f4aad1b148f26721fea6d08e4ec910fe4a976d5->enter($__internal_ebc04a1788038227189992578f4aad1b148f26721fea6d08e4ec910fe4a976d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3d82f609a47fa82c82d9da851c5643279251d2830a88b234cdfb015029aa1ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d82f609a47fa82c82d9da851c5643279251d2830a88b234cdfb015029aa1ca9->enter($__internal_3d82f609a47fa82c82d9da851c5643279251d2830a88b234cdfb015029aa1ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3d82f609a47fa82c82d9da851c5643279251d2830a88b234cdfb015029aa1ca9->leave($__internal_3d82f609a47fa82c82d9da851c5643279251d2830a88b234cdfb015029aa1ca9_prof);

        
        $__internal_ebc04a1788038227189992578f4aad1b148f26721fea6d08e4ec910fe4a976d5->leave($__internal_ebc04a1788038227189992578f4aad1b148f26721fea6d08e4ec910fe4a976d5_prof);

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
