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
        $__internal_3ee1b24c44aeff283ca44d2a83e7a7aec55d8bba9849e13d51489669ba192326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee1b24c44aeff283ca44d2a83e7a7aec55d8bba9849e13d51489669ba192326->enter($__internal_3ee1b24c44aeff283ca44d2a83e7a7aec55d8bba9849e13d51489669ba192326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_75662d0e83de276038f383a6de13286dab1c541b368e1db5816f0e3e37e046a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75662d0e83de276038f383a6de13286dab1c541b368e1db5816f0e3e37e046a5->enter($__internal_75662d0e83de276038f383a6de13286dab1c541b368e1db5816f0e3e37e046a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee1b24c44aeff283ca44d2a83e7a7aec55d8bba9849e13d51489669ba192326->leave($__internal_3ee1b24c44aeff283ca44d2a83e7a7aec55d8bba9849e13d51489669ba192326_prof);

        
        $__internal_75662d0e83de276038f383a6de13286dab1c541b368e1db5816f0e3e37e046a5->leave($__internal_75662d0e83de276038f383a6de13286dab1c541b368e1db5816f0e3e37e046a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c28ecbd16ba1f6bccdcfc15a2ebbae17c9906491507fdd5cf9672aae24d4a179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28ecbd16ba1f6bccdcfc15a2ebbae17c9906491507fdd5cf9672aae24d4a179->enter($__internal_c28ecbd16ba1f6bccdcfc15a2ebbae17c9906491507fdd5cf9672aae24d4a179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_21cbba07e5427981acb99fbfd5ab676ed8f40cce549eeec1da7a978f51d5dd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cbba07e5427981acb99fbfd5ab676ed8f40cce549eeec1da7a978f51d5dd90->enter($__internal_21cbba07e5427981acb99fbfd5ab676ed8f40cce549eeec1da7a978f51d5dd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_21cbba07e5427981acb99fbfd5ab676ed8f40cce549eeec1da7a978f51d5dd90->leave($__internal_21cbba07e5427981acb99fbfd5ab676ed8f40cce549eeec1da7a978f51d5dd90_prof);

        
        $__internal_c28ecbd16ba1f6bccdcfc15a2ebbae17c9906491507fdd5cf9672aae24d4a179->leave($__internal_c28ecbd16ba1f6bccdcfc15a2ebbae17c9906491507fdd5cf9672aae24d4a179_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b4eba40f0625e41b9208fdadae4b75cf94efba66d34aea4000309e76e68719c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4eba40f0625e41b9208fdadae4b75cf94efba66d34aea4000309e76e68719c->enter($__internal_0b4eba40f0625e41b9208fdadae4b75cf94efba66d34aea4000309e76e68719c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f81c8a6d355863b7f0cf26328fe7fc1b9106e593f8d7eed39efab840bacedf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f81c8a6d355863b7f0cf26328fe7fc1b9106e593f8d7eed39efab840bacedf7->enter($__internal_8f81c8a6d355863b7f0cf26328fe7fc1b9106e593f8d7eed39efab840bacedf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8f81c8a6d355863b7f0cf26328fe7fc1b9106e593f8d7eed39efab840bacedf7->leave($__internal_8f81c8a6d355863b7f0cf26328fe7fc1b9106e593f8d7eed39efab840bacedf7_prof);

        
        $__internal_0b4eba40f0625e41b9208fdadae4b75cf94efba66d34aea4000309e76e68719c->leave($__internal_0b4eba40f0625e41b9208fdadae4b75cf94efba66d34aea4000309e76e68719c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6343759516b6ca846686ed5adf109ad467e794311bd6650d2bb39d25679795c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6343759516b6ca846686ed5adf109ad467e794311bd6650d2bb39d25679795c->enter($__internal_c6343759516b6ca846686ed5adf109ad467e794311bd6650d2bb39d25679795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00b6ba3ff48e919d6487cfb64de30a4626ab8745ea2b5cc61b70178355639450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b6ba3ff48e919d6487cfb64de30a4626ab8745ea2b5cc61b70178355639450->enter($__internal_00b6ba3ff48e919d6487cfb64de30a4626ab8745ea2b5cc61b70178355639450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_00b6ba3ff48e919d6487cfb64de30a4626ab8745ea2b5cc61b70178355639450->leave($__internal_00b6ba3ff48e919d6487cfb64de30a4626ab8745ea2b5cc61b70178355639450_prof);

        
        $__internal_c6343759516b6ca846686ed5adf109ad467e794311bd6650d2bb39d25679795c->leave($__internal_c6343759516b6ca846686ed5adf109ad467e794311bd6650d2bb39d25679795c_prof);

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
