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
        $__internal_eb4aec68c65f570f0f411c4c5b1f41bd9262db43f8ec1645c380d99e3179425c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4aec68c65f570f0f411c4c5b1f41bd9262db43f8ec1645c380d99e3179425c->enter($__internal_eb4aec68c65f570f0f411c4c5b1f41bd9262db43f8ec1645c380d99e3179425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d9e1022dcf6357aba4faa26b3baf4ddd1921ece0e8d72f151d42b51a1ae641dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e1022dcf6357aba4faa26b3baf4ddd1921ece0e8d72f151d42b51a1ae641dd->enter($__internal_d9e1022dcf6357aba4faa26b3baf4ddd1921ece0e8d72f151d42b51a1ae641dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb4aec68c65f570f0f411c4c5b1f41bd9262db43f8ec1645c380d99e3179425c->leave($__internal_eb4aec68c65f570f0f411c4c5b1f41bd9262db43f8ec1645c380d99e3179425c_prof);

        
        $__internal_d9e1022dcf6357aba4faa26b3baf4ddd1921ece0e8d72f151d42b51a1ae641dd->leave($__internal_d9e1022dcf6357aba4faa26b3baf4ddd1921ece0e8d72f151d42b51a1ae641dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ddc25765b991b4e11296a811cd6cfbd9672b19c7c07911980325457b66e08e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc25765b991b4e11296a811cd6cfbd9672b19c7c07911980325457b66e08e15->enter($__internal_ddc25765b991b4e11296a811cd6cfbd9672b19c7c07911980325457b66e08e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47a6b2eb3d74f6441cac73546f98153ef263ba9b3b16d60a7c5c89263f8234bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a6b2eb3d74f6441cac73546f98153ef263ba9b3b16d60a7c5c89263f8234bf->enter($__internal_47a6b2eb3d74f6441cac73546f98153ef263ba9b3b16d60a7c5c89263f8234bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_47a6b2eb3d74f6441cac73546f98153ef263ba9b3b16d60a7c5c89263f8234bf->leave($__internal_47a6b2eb3d74f6441cac73546f98153ef263ba9b3b16d60a7c5c89263f8234bf_prof);

        
        $__internal_ddc25765b991b4e11296a811cd6cfbd9672b19c7c07911980325457b66e08e15->leave($__internal_ddc25765b991b4e11296a811cd6cfbd9672b19c7c07911980325457b66e08e15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65c3fd77622dcc216b18f499d13fe2ca8ad3e18f90b216debe2c58a7d5579572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c3fd77622dcc216b18f499d13fe2ca8ad3e18f90b216debe2c58a7d5579572->enter($__internal_65c3fd77622dcc216b18f499d13fe2ca8ad3e18f90b216debe2c58a7d5579572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_314fd7a0223d56225d4608e47614cadebb075f19e1457d9480384d4fe1a706c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314fd7a0223d56225d4608e47614cadebb075f19e1457d9480384d4fe1a706c0->enter($__internal_314fd7a0223d56225d4608e47614cadebb075f19e1457d9480384d4fe1a706c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_314fd7a0223d56225d4608e47614cadebb075f19e1457d9480384d4fe1a706c0->leave($__internal_314fd7a0223d56225d4608e47614cadebb075f19e1457d9480384d4fe1a706c0_prof);

        
        $__internal_65c3fd77622dcc216b18f499d13fe2ca8ad3e18f90b216debe2c58a7d5579572->leave($__internal_65c3fd77622dcc216b18f499d13fe2ca8ad3e18f90b216debe2c58a7d5579572_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_722f89f22f0291798c3011cf95477db6d210b6d1dae1901e9b22f53485cd5ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722f89f22f0291798c3011cf95477db6d210b6d1dae1901e9b22f53485cd5ed0->enter($__internal_722f89f22f0291798c3011cf95477db6d210b6d1dae1901e9b22f53485cd5ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ffb9e163f5f7ad4e9a02406b5a047feaf634be9f4deed5c0f26350a328712750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb9e163f5f7ad4e9a02406b5a047feaf634be9f4deed5c0f26350a328712750->enter($__internal_ffb9e163f5f7ad4e9a02406b5a047feaf634be9f4deed5c0f26350a328712750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ffb9e163f5f7ad4e9a02406b5a047feaf634be9f4deed5c0f26350a328712750->leave($__internal_ffb9e163f5f7ad4e9a02406b5a047feaf634be9f4deed5c0f26350a328712750_prof);

        
        $__internal_722f89f22f0291798c3011cf95477db6d210b6d1dae1901e9b22f53485cd5ed0->leave($__internal_722f89f22f0291798c3011cf95477db6d210b6d1dae1901e9b22f53485cd5ed0_prof);

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
