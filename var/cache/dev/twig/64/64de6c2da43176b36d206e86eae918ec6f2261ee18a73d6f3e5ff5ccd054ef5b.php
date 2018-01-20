<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_07e290e6b11d29a3b107da97ff30d943b83e204473aa6d24db7b40b9dade07e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f2b4432230fa8acd2a5393b8a8b3c9b057dfb6657c9a60435b68216dc25fa58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2b4432230fa8acd2a5393b8a8b3c9b057dfb6657c9a60435b68216dc25fa58->enter($__internal_9f2b4432230fa8acd2a5393b8a8b3c9b057dfb6657c9a60435b68216dc25fa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1d09c0c96dff64ac37e1838ae6b1b17b0e561ad60d9a94b5083ccb00b38673b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d09c0c96dff64ac37e1838ae6b1b17b0e561ad60d9a94b5083ccb00b38673b3->enter($__internal_1d09c0c96dff64ac37e1838ae6b1b17b0e561ad60d9a94b5083ccb00b38673b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2b4432230fa8acd2a5393b8a8b3c9b057dfb6657c9a60435b68216dc25fa58->leave($__internal_9f2b4432230fa8acd2a5393b8a8b3c9b057dfb6657c9a60435b68216dc25fa58_prof);

        
        $__internal_1d09c0c96dff64ac37e1838ae6b1b17b0e561ad60d9a94b5083ccb00b38673b3->leave($__internal_1d09c0c96dff64ac37e1838ae6b1b17b0e561ad60d9a94b5083ccb00b38673b3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b769aa868163060a2358ec195cf0284cadcc6520c656b1b95af551442ea007c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b769aa868163060a2358ec195cf0284cadcc6520c656b1b95af551442ea007c1->enter($__internal_b769aa868163060a2358ec195cf0284cadcc6520c656b1b95af551442ea007c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a8dc3f3e41e3a555d1f0e4d56e09738ffbd9a68d2537694448c4869e14111f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dc3f3e41e3a555d1f0e4d56e09738ffbd9a68d2537694448c4869e14111f93->enter($__internal_a8dc3f3e41e3a555d1f0e4d56e09738ffbd9a68d2537694448c4869e14111f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a8dc3f3e41e3a555d1f0e4d56e09738ffbd9a68d2537694448c4869e14111f93->leave($__internal_a8dc3f3e41e3a555d1f0e4d56e09738ffbd9a68d2537694448c4869e14111f93_prof);

        
        $__internal_b769aa868163060a2358ec195cf0284cadcc6520c656b1b95af551442ea007c1->leave($__internal_b769aa868163060a2358ec195cf0284cadcc6520c656b1b95af551442ea007c1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f569a1179926001fdeb2a63b00762689391a89ec4f7fea7543c513c99ee8e365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f569a1179926001fdeb2a63b00762689391a89ec4f7fea7543c513c99ee8e365->enter($__internal_f569a1179926001fdeb2a63b00762689391a89ec4f7fea7543c513c99ee8e365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e15cb46fd242a5e752ca9dd7f6c22ddb369b61b89dc1e9371236feed13a861c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15cb46fd242a5e752ca9dd7f6c22ddb369b61b89dc1e9371236feed13a861c0->enter($__internal_e15cb46fd242a5e752ca9dd7f6c22ddb369b61b89dc1e9371236feed13a861c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e15cb46fd242a5e752ca9dd7f6c22ddb369b61b89dc1e9371236feed13a861c0->leave($__internal_e15cb46fd242a5e752ca9dd7f6c22ddb369b61b89dc1e9371236feed13a861c0_prof);

        
        $__internal_f569a1179926001fdeb2a63b00762689391a89ec4f7fea7543c513c99ee8e365->leave($__internal_f569a1179926001fdeb2a63b00762689391a89ec4f7fea7543c513c99ee8e365_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
