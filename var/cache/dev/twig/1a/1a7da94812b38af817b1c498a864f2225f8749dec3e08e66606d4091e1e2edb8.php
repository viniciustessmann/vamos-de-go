<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26f495c44b35a139efbf6ace157ae33a8817e571b7a4041e50398ffa44d66e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1fdca67ba96cedb92ff4b1d9bad2bfc3a5d5441eca97f91e5e0600dc44923760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdca67ba96cedb92ff4b1d9bad2bfc3a5d5441eca97f91e5e0600dc44923760->enter($__internal_1fdca67ba96cedb92ff4b1d9bad2bfc3a5d5441eca97f91e5e0600dc44923760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_93de938c10d67d743c2a2a10ec8b73a8a3ef328fd561fafcebe12ed594f6ab5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93de938c10d67d743c2a2a10ec8b73a8a3ef328fd561fafcebe12ed594f6ab5f->enter($__internal_93de938c10d67d743c2a2a10ec8b73a8a3ef328fd561fafcebe12ed594f6ab5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fdca67ba96cedb92ff4b1d9bad2bfc3a5d5441eca97f91e5e0600dc44923760->leave($__internal_1fdca67ba96cedb92ff4b1d9bad2bfc3a5d5441eca97f91e5e0600dc44923760_prof);

        
        $__internal_93de938c10d67d743c2a2a10ec8b73a8a3ef328fd561fafcebe12ed594f6ab5f->leave($__internal_93de938c10d67d743c2a2a10ec8b73a8a3ef328fd561fafcebe12ed594f6ab5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_105eb3923d2c54b8336ef405fbdc4dd1d1553fb7cd8f8846f860bd0457ec51fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105eb3923d2c54b8336ef405fbdc4dd1d1553fb7cd8f8846f860bd0457ec51fa->enter($__internal_105eb3923d2c54b8336ef405fbdc4dd1d1553fb7cd8f8846f860bd0457ec51fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5c670e78f0faef81a21f7e8dd9809781c576a095947a477770b8b13b184627fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c670e78f0faef81a21f7e8dd9809781c576a095947a477770b8b13b184627fe->enter($__internal_5c670e78f0faef81a21f7e8dd9809781c576a095947a477770b8b13b184627fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c670e78f0faef81a21f7e8dd9809781c576a095947a477770b8b13b184627fe->leave($__internal_5c670e78f0faef81a21f7e8dd9809781c576a095947a477770b8b13b184627fe_prof);

        
        $__internal_105eb3923d2c54b8336ef405fbdc4dd1d1553fb7cd8f8846f860bd0457ec51fa->leave($__internal_105eb3923d2c54b8336ef405fbdc4dd1d1553fb7cd8f8846f860bd0457ec51fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_768040f3f4cc75cccc43439a2d902031cef9f7a6948db62df032a7effb41f3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768040f3f4cc75cccc43439a2d902031cef9f7a6948db62df032a7effb41f3e3->enter($__internal_768040f3f4cc75cccc43439a2d902031cef9f7a6948db62df032a7effb41f3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4360a9f13e8f6bf46f04f77921bc67b8a6fe7b2f99ec2189544f5d08063f9b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4360a9f13e8f6bf46f04f77921bc67b8a6fe7b2f99ec2189544f5d08063f9b79->enter($__internal_4360a9f13e8f6bf46f04f77921bc67b8a6fe7b2f99ec2189544f5d08063f9b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4360a9f13e8f6bf46f04f77921bc67b8a6fe7b2f99ec2189544f5d08063f9b79->leave($__internal_4360a9f13e8f6bf46f04f77921bc67b8a6fe7b2f99ec2189544f5d08063f9b79_prof);

        
        $__internal_768040f3f4cc75cccc43439a2d902031cef9f7a6948db62df032a7effb41f3e3->leave($__internal_768040f3f4cc75cccc43439a2d902031cef9f7a6948db62df032a7effb41f3e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6d3868c5f9aaceb0a1b048a838d669695314e3e9eb20e04c6453714bf5a0a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d3868c5f9aaceb0a1b048a838d669695314e3e9eb20e04c6453714bf5a0a2e->enter($__internal_b6d3868c5f9aaceb0a1b048a838d669695314e3e9eb20e04c6453714bf5a0a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f38c8d407dc1a570b7b5123e5bcad59dac925cef2940e1f717146ace0123896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f38c8d407dc1a570b7b5123e5bcad59dac925cef2940e1f717146ace0123896->enter($__internal_4f38c8d407dc1a570b7b5123e5bcad59dac925cef2940e1f717146ace0123896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4f38c8d407dc1a570b7b5123e5bcad59dac925cef2940e1f717146ace0123896->leave($__internal_4f38c8d407dc1a570b7b5123e5bcad59dac925cef2940e1f717146ace0123896_prof);

        
        $__internal_b6d3868c5f9aaceb0a1b048a838d669695314e3e9eb20e04c6453714bf5a0a2e->leave($__internal_b6d3868c5f9aaceb0a1b048a838d669695314e3e9eb20e04c6453714bf5a0a2e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
