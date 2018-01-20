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
        $__internal_8dcc9302b3c795572c3beeaf719e117c1e57b54a991f0fce726da8e4c4430b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcc9302b3c795572c3beeaf719e117c1e57b54a991f0fce726da8e4c4430b85->enter($__internal_8dcc9302b3c795572c3beeaf719e117c1e57b54a991f0fce726da8e4c4430b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a9c220c2cecc82b69f06a460a0f514c6b028c0e9d8b02e37cf82467be7edb825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c220c2cecc82b69f06a460a0f514c6b028c0e9d8b02e37cf82467be7edb825->enter($__internal_a9c220c2cecc82b69f06a460a0f514c6b028c0e9d8b02e37cf82467be7edb825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dcc9302b3c795572c3beeaf719e117c1e57b54a991f0fce726da8e4c4430b85->leave($__internal_8dcc9302b3c795572c3beeaf719e117c1e57b54a991f0fce726da8e4c4430b85_prof);

        
        $__internal_a9c220c2cecc82b69f06a460a0f514c6b028c0e9d8b02e37cf82467be7edb825->leave($__internal_a9c220c2cecc82b69f06a460a0f514c6b028c0e9d8b02e37cf82467be7edb825_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68619d9bb432311ce7a759b122fb1c3dd89695f33881a23fc60a04ca071e1db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68619d9bb432311ce7a759b122fb1c3dd89695f33881a23fc60a04ca071e1db2->enter($__internal_68619d9bb432311ce7a759b122fb1c3dd89695f33881a23fc60a04ca071e1db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76057edc4191a6f4c4bd4e66939183d77731defe19e02148551f1c451ad3af5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76057edc4191a6f4c4bd4e66939183d77731defe19e02148551f1c451ad3af5e->enter($__internal_76057edc4191a6f4c4bd4e66939183d77731defe19e02148551f1c451ad3af5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_76057edc4191a6f4c4bd4e66939183d77731defe19e02148551f1c451ad3af5e->leave($__internal_76057edc4191a6f4c4bd4e66939183d77731defe19e02148551f1c451ad3af5e_prof);

        
        $__internal_68619d9bb432311ce7a759b122fb1c3dd89695f33881a23fc60a04ca071e1db2->leave($__internal_68619d9bb432311ce7a759b122fb1c3dd89695f33881a23fc60a04ca071e1db2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e673cb133deb33afab0c1a030f3df14e5d641737e7825f73cbfa703faf178ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e673cb133deb33afab0c1a030f3df14e5d641737e7825f73cbfa703faf178ea->enter($__internal_6e673cb133deb33afab0c1a030f3df14e5d641737e7825f73cbfa703faf178ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2acc4158e9227ea2aa26b0b6f2ad68f1e7e3a0277f9daeb4720cea55030650fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acc4158e9227ea2aa26b0b6f2ad68f1e7e3a0277f9daeb4720cea55030650fa->enter($__internal_2acc4158e9227ea2aa26b0b6f2ad68f1e7e3a0277f9daeb4720cea55030650fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2acc4158e9227ea2aa26b0b6f2ad68f1e7e3a0277f9daeb4720cea55030650fa->leave($__internal_2acc4158e9227ea2aa26b0b6f2ad68f1e7e3a0277f9daeb4720cea55030650fa_prof);

        
        $__internal_6e673cb133deb33afab0c1a030f3df14e5d641737e7825f73cbfa703faf178ea->leave($__internal_6e673cb133deb33afab0c1a030f3df14e5d641737e7825f73cbfa703faf178ea_prof);

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
