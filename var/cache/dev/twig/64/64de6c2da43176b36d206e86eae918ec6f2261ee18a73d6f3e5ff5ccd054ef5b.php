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
        $__internal_e6ce713fbbde360a055461bc1ee7cf4f02099432ff0b05d351354be55964617b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ce713fbbde360a055461bc1ee7cf4f02099432ff0b05d351354be55964617b->enter($__internal_e6ce713fbbde360a055461bc1ee7cf4f02099432ff0b05d351354be55964617b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c86c12ba24d6b24ca798df8d40637b4b3e01a8d28d86ba4e451f84fbb11bb5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86c12ba24d6b24ca798df8d40637b4b3e01a8d28d86ba4e451f84fbb11bb5e7->enter($__internal_c86c12ba24d6b24ca798df8d40637b4b3e01a8d28d86ba4e451f84fbb11bb5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ce713fbbde360a055461bc1ee7cf4f02099432ff0b05d351354be55964617b->leave($__internal_e6ce713fbbde360a055461bc1ee7cf4f02099432ff0b05d351354be55964617b_prof);

        
        $__internal_c86c12ba24d6b24ca798df8d40637b4b3e01a8d28d86ba4e451f84fbb11bb5e7->leave($__internal_c86c12ba24d6b24ca798df8d40637b4b3e01a8d28d86ba4e451f84fbb11bb5e7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_00ce233c99ecef514ad23aba1d447ed8d9ed138eb743e43a6b1ebe4b9e216225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ce233c99ecef514ad23aba1d447ed8d9ed138eb743e43a6b1ebe4b9e216225->enter($__internal_00ce233c99ecef514ad23aba1d447ed8d9ed138eb743e43a6b1ebe4b9e216225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_89c8bc456100b6907363488f6ac632b9c1c9b620ddcec8a1dd1e71cdb173e1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c8bc456100b6907363488f6ac632b9c1c9b620ddcec8a1dd1e71cdb173e1c1->enter($__internal_89c8bc456100b6907363488f6ac632b9c1c9b620ddcec8a1dd1e71cdb173e1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_89c8bc456100b6907363488f6ac632b9c1c9b620ddcec8a1dd1e71cdb173e1c1->leave($__internal_89c8bc456100b6907363488f6ac632b9c1c9b620ddcec8a1dd1e71cdb173e1c1_prof);

        
        $__internal_00ce233c99ecef514ad23aba1d447ed8d9ed138eb743e43a6b1ebe4b9e216225->leave($__internal_00ce233c99ecef514ad23aba1d447ed8d9ed138eb743e43a6b1ebe4b9e216225_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9565298a53d9bf4c08fa9ec26cc52b26541474d71cd347a819724b572ed95db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9565298a53d9bf4c08fa9ec26cc52b26541474d71cd347a819724b572ed95db->enter($__internal_a9565298a53d9bf4c08fa9ec26cc52b26541474d71cd347a819724b572ed95db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_272495e35617764379803b8a49d96f23492ac60954da2c63fd570865c9cb93fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272495e35617764379803b8a49d96f23492ac60954da2c63fd570865c9cb93fa->enter($__internal_272495e35617764379803b8a49d96f23492ac60954da2c63fd570865c9cb93fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_272495e35617764379803b8a49d96f23492ac60954da2c63fd570865c9cb93fa->leave($__internal_272495e35617764379803b8a49d96f23492ac60954da2c63fd570865c9cb93fa_prof);

        
        $__internal_a9565298a53d9bf4c08fa9ec26cc52b26541474d71cd347a819724b572ed95db->leave($__internal_a9565298a53d9bf4c08fa9ec26cc52b26541474d71cd347a819724b572ed95db_prof);

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
