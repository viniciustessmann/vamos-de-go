<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e707399f8dfb36ba5ec421360d98055b0d4ac128a06b7b638f5529e1245117f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_01781aa4a1c051c851376663f06c86e79facfa67e7687438a05afaf6b0b3d00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01781aa4a1c051c851376663f06c86e79facfa67e7687438a05afaf6b0b3d00a->enter($__internal_01781aa4a1c051c851376663f06c86e79facfa67e7687438a05afaf6b0b3d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9b11e67f1bb7e586f7615d3b70594b0b1d8ae84d80b5b90deaf44c2cefb2504f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b11e67f1bb7e586f7615d3b70594b0b1d8ae84d80b5b90deaf44c2cefb2504f->enter($__internal_9b11e67f1bb7e586f7615d3b70594b0b1d8ae84d80b5b90deaf44c2cefb2504f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01781aa4a1c051c851376663f06c86e79facfa67e7687438a05afaf6b0b3d00a->leave($__internal_01781aa4a1c051c851376663f06c86e79facfa67e7687438a05afaf6b0b3d00a_prof);

        
        $__internal_9b11e67f1bb7e586f7615d3b70594b0b1d8ae84d80b5b90deaf44c2cefb2504f->leave($__internal_9b11e67f1bb7e586f7615d3b70594b0b1d8ae84d80b5b90deaf44c2cefb2504f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_190f61856ab660625c2daab31fe1a9a0c0b9753ae015a5f59ba55a37470bb42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190f61856ab660625c2daab31fe1a9a0c0b9753ae015a5f59ba55a37470bb42d->enter($__internal_190f61856ab660625c2daab31fe1a9a0c0b9753ae015a5f59ba55a37470bb42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_90b951d54ca83cb90fddc7c5a4d699d9b75bf47353d440596f81b4cc5ca4d5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b951d54ca83cb90fddc7c5a4d699d9b75bf47353d440596f81b4cc5ca4d5af->enter($__internal_90b951d54ca83cb90fddc7c5a4d699d9b75bf47353d440596f81b4cc5ca4d5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_90b951d54ca83cb90fddc7c5a4d699d9b75bf47353d440596f81b4cc5ca4d5af->leave($__internal_90b951d54ca83cb90fddc7c5a4d699d9b75bf47353d440596f81b4cc5ca4d5af_prof);

        
        $__internal_190f61856ab660625c2daab31fe1a9a0c0b9753ae015a5f59ba55a37470bb42d->leave($__internal_190f61856ab660625c2daab31fe1a9a0c0b9753ae015a5f59ba55a37470bb42d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_41f0b1a4ae32c1aa15cfb93bdbb83a7a2a40dc0fb3c2413c078bb9fa16e531e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f0b1a4ae32c1aa15cfb93bdbb83a7a2a40dc0fb3c2413c078bb9fa16e531e2->enter($__internal_41f0b1a4ae32c1aa15cfb93bdbb83a7a2a40dc0fb3c2413c078bb9fa16e531e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1d7f2aa27026367c885579ed8f56bcdb4dd43b07cb18bd8f0eb6dfbfa840afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d7f2aa27026367c885579ed8f56bcdb4dd43b07cb18bd8f0eb6dfbfa840afb->enter($__internal_f1d7f2aa27026367c885579ed8f56bcdb4dd43b07cb18bd8f0eb6dfbfa840afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f1d7f2aa27026367c885579ed8f56bcdb4dd43b07cb18bd8f0eb6dfbfa840afb->leave($__internal_f1d7f2aa27026367c885579ed8f56bcdb4dd43b07cb18bd8f0eb6dfbfa840afb_prof);

        
        $__internal_41f0b1a4ae32c1aa15cfb93bdbb83a7a2a40dc0fb3c2413c078bb9fa16e531e2->leave($__internal_41f0b1a4ae32c1aa15cfb93bdbb83a7a2a40dc0fb3c2413c078bb9fa16e531e2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffd940fdad5973be056d07341abb1dd8dd9d681abe629aca991bb4f3b53c3872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd940fdad5973be056d07341abb1dd8dd9d681abe629aca991bb4f3b53c3872->enter($__internal_ffd940fdad5973be056d07341abb1dd8dd9d681abe629aca991bb4f3b53c3872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b72505f85f75e2dbdc582174d072a567006bc54743f9b32914b14b2301fb671d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72505f85f75e2dbdc582174d072a567006bc54743f9b32914b14b2301fb671d->enter($__internal_b72505f85f75e2dbdc582174d072a567006bc54743f9b32914b14b2301fb671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b72505f85f75e2dbdc582174d072a567006bc54743f9b32914b14b2301fb671d->leave($__internal_b72505f85f75e2dbdc582174d072a567006bc54743f9b32914b14b2301fb671d_prof);

        
        $__internal_ffd940fdad5973be056d07341abb1dd8dd9d681abe629aca991bb4f3b53c3872->leave($__internal_ffd940fdad5973be056d07341abb1dd8dd9d681abe629aca991bb4f3b53c3872_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
