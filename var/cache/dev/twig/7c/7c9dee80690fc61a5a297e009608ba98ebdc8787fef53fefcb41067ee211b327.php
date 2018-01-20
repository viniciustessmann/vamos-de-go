<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3ebb5e611b593439854b6e5e9dd647b3dae7f61840325f5ab3b530a746ec3445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8333fbd893613cfad297653bb99d0cab4a8355a54c9a15281dfb5e4c85e22bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8333fbd893613cfad297653bb99d0cab4a8355a54c9a15281dfb5e4c85e22bf->enter($__internal_f8333fbd893613cfad297653bb99d0cab4a8355a54c9a15281dfb5e4c85e22bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_573d6d7f53654dc3b913c6a297aef3113dfab15bdf509a52c765ac2960930be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573d6d7f53654dc3b913c6a297aef3113dfab15bdf509a52c765ac2960930be9->enter($__internal_573d6d7f53654dc3b913c6a297aef3113dfab15bdf509a52c765ac2960930be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8333fbd893613cfad297653bb99d0cab4a8355a54c9a15281dfb5e4c85e22bf->leave($__internal_f8333fbd893613cfad297653bb99d0cab4a8355a54c9a15281dfb5e4c85e22bf_prof);

        
        $__internal_573d6d7f53654dc3b913c6a297aef3113dfab15bdf509a52c765ac2960930be9->leave($__internal_573d6d7f53654dc3b913c6a297aef3113dfab15bdf509a52c765ac2960930be9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_878e10426cef8849382c78dd0b152fc8f325ceae9384e8b72f3324939b2ee833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878e10426cef8849382c78dd0b152fc8f325ceae9384e8b72f3324939b2ee833->enter($__internal_878e10426cef8849382c78dd0b152fc8f325ceae9384e8b72f3324939b2ee833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa0a4c7b685e4800c79bcd3892e26acdb5b3dfd1de79f0115e02afa4218aaea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0a4c7b685e4800c79bcd3892e26acdb5b3dfd1de79f0115e02afa4218aaea4->enter($__internal_fa0a4c7b685e4800c79bcd3892e26acdb5b3dfd1de79f0115e02afa4218aaea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fa0a4c7b685e4800c79bcd3892e26acdb5b3dfd1de79f0115e02afa4218aaea4->leave($__internal_fa0a4c7b685e4800c79bcd3892e26acdb5b3dfd1de79f0115e02afa4218aaea4_prof);

        
        $__internal_878e10426cef8849382c78dd0b152fc8f325ceae9384e8b72f3324939b2ee833->leave($__internal_878e10426cef8849382c78dd0b152fc8f325ceae9384e8b72f3324939b2ee833_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_757e96a770e5987247fb85849eb2112047f73e9260d2fc95ed0153a1f8f99fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757e96a770e5987247fb85849eb2112047f73e9260d2fc95ed0153a1f8f99fd8->enter($__internal_757e96a770e5987247fb85849eb2112047f73e9260d2fc95ed0153a1f8f99fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5cab4708090126fc342b7b2bea22d7c8c13962b863f26c42da73030ae3f7c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cab4708090126fc342b7b2bea22d7c8c13962b863f26c42da73030ae3f7c06->enter($__internal_c5cab4708090126fc342b7b2bea22d7c8c13962b863f26c42da73030ae3f7c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c5cab4708090126fc342b7b2bea22d7c8c13962b863f26c42da73030ae3f7c06->leave($__internal_c5cab4708090126fc342b7b2bea22d7c8c13962b863f26c42da73030ae3f7c06_prof);

        
        $__internal_757e96a770e5987247fb85849eb2112047f73e9260d2fc95ed0153a1f8f99fd8->leave($__internal_757e96a770e5987247fb85849eb2112047f73e9260d2fc95ed0153a1f8f99fd8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe314b4437990ad7fcb7cc50f2565e62b800645b7f26cb1187203628ea4c9c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe314b4437990ad7fcb7cc50f2565e62b800645b7f26cb1187203628ea4c9c85->enter($__internal_fe314b4437990ad7fcb7cc50f2565e62b800645b7f26cb1187203628ea4c9c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5eb67492ead9eeefdfff96f254c91936f98541fdf9b322832230a72f4b3a6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5eb67492ead9eeefdfff96f254c91936f98541fdf9b322832230a72f4b3a6e1->enter($__internal_a5eb67492ead9eeefdfff96f254c91936f98541fdf9b322832230a72f4b3a6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_a5eb67492ead9eeefdfff96f254c91936f98541fdf9b322832230a72f4b3a6e1->leave($__internal_a5eb67492ead9eeefdfff96f254c91936f98541fdf9b322832230a72f4b3a6e1_prof);

        
        $__internal_fe314b4437990ad7fcb7cc50f2565e62b800645b7f26cb1187203628ea4c9c85->leave($__internal_fe314b4437990ad7fcb7cc50f2565e62b800645b7f26cb1187203628ea4c9c85_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
