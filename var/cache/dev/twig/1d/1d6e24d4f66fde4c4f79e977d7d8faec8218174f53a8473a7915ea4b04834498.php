<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3890b02ed0f3123065eff24fc36f1894948dbb56c3279970757d596f176e975b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b5e330c184e153c7fbe187de1d1e32b583e4a0a1d0434c74c650c96deaaabcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5e330c184e153c7fbe187de1d1e32b583e4a0a1d0434c74c650c96deaaabcf->enter($__internal_8b5e330c184e153c7fbe187de1d1e32b583e4a0a1d0434c74c650c96deaaabcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_06d0bdb08edcbdf93c9694600fe84d75cb2609f728cce52c1ff333efc0dc5772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d0bdb08edcbdf93c9694600fe84d75cb2609f728cce52c1ff333efc0dc5772->enter($__internal_06d0bdb08edcbdf93c9694600fe84d75cb2609f728cce52c1ff333efc0dc5772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5e330c184e153c7fbe187de1d1e32b583e4a0a1d0434c74c650c96deaaabcf->leave($__internal_8b5e330c184e153c7fbe187de1d1e32b583e4a0a1d0434c74c650c96deaaabcf_prof);

        
        $__internal_06d0bdb08edcbdf93c9694600fe84d75cb2609f728cce52c1ff333efc0dc5772->leave($__internal_06d0bdb08edcbdf93c9694600fe84d75cb2609f728cce52c1ff333efc0dc5772_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67b690cab26b0fb3c4b9c2cacef9b0689ccef0a877dbee3ab4609b38bbd6d58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b690cab26b0fb3c4b9c2cacef9b0689ccef0a877dbee3ab4609b38bbd6d58e->enter($__internal_67b690cab26b0fb3c4b9c2cacef9b0689ccef0a877dbee3ab4609b38bbd6d58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d897dceb993f558686a716f28740916652ee42359337f4bb4bcb728765cb43f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d897dceb993f558686a716f28740916652ee42359337f4bb4bcb728765cb43f8->enter($__internal_d897dceb993f558686a716f28740916652ee42359337f4bb4bcb728765cb43f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d897dceb993f558686a716f28740916652ee42359337f4bb4bcb728765cb43f8->leave($__internal_d897dceb993f558686a716f28740916652ee42359337f4bb4bcb728765cb43f8_prof);

        
        $__internal_67b690cab26b0fb3c4b9c2cacef9b0689ccef0a877dbee3ab4609b38bbd6d58e->leave($__internal_67b690cab26b0fb3c4b9c2cacef9b0689ccef0a877dbee3ab4609b38bbd6d58e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d85927ed0edc6febffcebd780d300079ab4f625ba09cf15dd97982fc55be83cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85927ed0edc6febffcebd780d300079ab4f625ba09cf15dd97982fc55be83cd->enter($__internal_d85927ed0edc6febffcebd780d300079ab4f625ba09cf15dd97982fc55be83cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e6b00e49348cb841b32ffaddeb0aed41a72bb7a4fe2c28092ea7f8227f64ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6b00e49348cb841b32ffaddeb0aed41a72bb7a4fe2c28092ea7f8227f64ef0->enter($__internal_7e6b00e49348cb841b32ffaddeb0aed41a72bb7a4fe2c28092ea7f8227f64ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_7e6b00e49348cb841b32ffaddeb0aed41a72bb7a4fe2c28092ea7f8227f64ef0->leave($__internal_7e6b00e49348cb841b32ffaddeb0aed41a72bb7a4fe2c28092ea7f8227f64ef0_prof);

        
        $__internal_d85927ed0edc6febffcebd780d300079ab4f625ba09cf15dd97982fc55be83cd->leave($__internal_d85927ed0edc6febffcebd780d300079ab4f625ba09cf15dd97982fc55be83cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
