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
        $__internal_e72e77300f8a59f06072358896bee5f95141a922728e1c3e01a7481304bf516c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72e77300f8a59f06072358896bee5f95141a922728e1c3e01a7481304bf516c->enter($__internal_e72e77300f8a59f06072358896bee5f95141a922728e1c3e01a7481304bf516c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e2406a195c686784ac32c7d72eb49dcd35ee2f42d60087857dd05d5124304a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2406a195c686784ac32c7d72eb49dcd35ee2f42d60087857dd05d5124304a39->enter($__internal_e2406a195c686784ac32c7d72eb49dcd35ee2f42d60087857dd05d5124304a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72e77300f8a59f06072358896bee5f95141a922728e1c3e01a7481304bf516c->leave($__internal_e72e77300f8a59f06072358896bee5f95141a922728e1c3e01a7481304bf516c_prof);

        
        $__internal_e2406a195c686784ac32c7d72eb49dcd35ee2f42d60087857dd05d5124304a39->leave($__internal_e2406a195c686784ac32c7d72eb49dcd35ee2f42d60087857dd05d5124304a39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f17e144e8b40c186f1038fe34ab26a1333c828db0ee7a5ea3c902ac8c22984f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f17e144e8b40c186f1038fe34ab26a1333c828db0ee7a5ea3c902ac8c22984f->enter($__internal_2f17e144e8b40c186f1038fe34ab26a1333c828db0ee7a5ea3c902ac8c22984f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_537983c44cf0e5529616d84d93799c2aced6675e3c3576a7ab0466660b5324ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537983c44cf0e5529616d84d93799c2aced6675e3c3576a7ab0466660b5324ce->enter($__internal_537983c44cf0e5529616d84d93799c2aced6675e3c3576a7ab0466660b5324ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_537983c44cf0e5529616d84d93799c2aced6675e3c3576a7ab0466660b5324ce->leave($__internal_537983c44cf0e5529616d84d93799c2aced6675e3c3576a7ab0466660b5324ce_prof);

        
        $__internal_2f17e144e8b40c186f1038fe34ab26a1333c828db0ee7a5ea3c902ac8c22984f->leave($__internal_2f17e144e8b40c186f1038fe34ab26a1333c828db0ee7a5ea3c902ac8c22984f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_894e1f03f18494ad366ba14e74365c2635046d1606ecebfd3b9e8e5226c3d3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894e1f03f18494ad366ba14e74365c2635046d1606ecebfd3b9e8e5226c3d3fd->enter($__internal_894e1f03f18494ad366ba14e74365c2635046d1606ecebfd3b9e8e5226c3d3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_817b082011ede102e9474c00fb511228300a922d7893fb29efeeab1019888a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817b082011ede102e9474c00fb511228300a922d7893fb29efeeab1019888a23->enter($__internal_817b082011ede102e9474c00fb511228300a922d7893fb29efeeab1019888a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_817b082011ede102e9474c00fb511228300a922d7893fb29efeeab1019888a23->leave($__internal_817b082011ede102e9474c00fb511228300a922d7893fb29efeeab1019888a23_prof);

        
        $__internal_894e1f03f18494ad366ba14e74365c2635046d1606ecebfd3b9e8e5226c3d3fd->leave($__internal_894e1f03f18494ad366ba14e74365c2635046d1606ecebfd3b9e8e5226c3d3fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09a16b32a3576e8b94ff209d4c55c7aaee59d5c95e0dcebeb5fd53e0a8e379e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a16b32a3576e8b94ff209d4c55c7aaee59d5c95e0dcebeb5fd53e0a8e379e1->enter($__internal_09a16b32a3576e8b94ff209d4c55c7aaee59d5c95e0dcebeb5fd53e0a8e379e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_23b7578aa783646262fc1acd77ebcef20561091416ce3d9d73c7af19adf80d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b7578aa783646262fc1acd77ebcef20561091416ce3d9d73c7af19adf80d2a->enter($__internal_23b7578aa783646262fc1acd77ebcef20561091416ce3d9d73c7af19adf80d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_23b7578aa783646262fc1acd77ebcef20561091416ce3d9d73c7af19adf80d2a->leave($__internal_23b7578aa783646262fc1acd77ebcef20561091416ce3d9d73c7af19adf80d2a_prof);

        
        $__internal_09a16b32a3576e8b94ff209d4c55c7aaee59d5c95e0dcebeb5fd53e0a8e379e1->leave($__internal_09a16b32a3576e8b94ff209d4c55c7aaee59d5c95e0dcebeb5fd53e0a8e379e1_prof);

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
