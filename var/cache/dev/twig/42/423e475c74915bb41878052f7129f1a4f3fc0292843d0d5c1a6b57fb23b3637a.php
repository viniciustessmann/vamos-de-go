<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_814450ffded21bdfd297602b0742eadfb86d44d69a3377a128d3e58c16d7bb4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a482f8960414ca7884ff0dd131aea8c56ce161b9572ddf155af30d6271f28de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a482f8960414ca7884ff0dd131aea8c56ce161b9572ddf155af30d6271f28de->enter($__internal_7a482f8960414ca7884ff0dd131aea8c56ce161b9572ddf155af30d6271f28de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8152925390d87eccef622e823b97c580bb96736db8f4c2a22231c49581fba5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8152925390d87eccef622e823b97c580bb96736db8f4c2a22231c49581fba5ae->enter($__internal_8152925390d87eccef622e823b97c580bb96736db8f4c2a22231c49581fba5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7a482f8960414ca7884ff0dd131aea8c56ce161b9572ddf155af30d6271f28de->leave($__internal_7a482f8960414ca7884ff0dd131aea8c56ce161b9572ddf155af30d6271f28de_prof);

        
        $__internal_8152925390d87eccef622e823b97c580bb96736db8f4c2a22231c49581fba5ae->leave($__internal_8152925390d87eccef622e823b97c580bb96736db8f4c2a22231c49581fba5ae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2dde182cc35ba34a95b40ddd4c7d645021e574323c5b1be7b6a4129c1095761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dde182cc35ba34a95b40ddd4c7d645021e574323c5b1be7b6a4129c1095761->enter($__internal_b2dde182cc35ba34a95b40ddd4c7d645021e574323c5b1be7b6a4129c1095761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2dc72bfeb9f7edb4125e513d3b85347ac357e9c6edf157b275de9c58711ad300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc72bfeb9f7edb4125e513d3b85347ac357e9c6edf157b275de9c58711ad300->enter($__internal_2dc72bfeb9f7edb4125e513d3b85347ac357e9c6edf157b275de9c58711ad300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2dc72bfeb9f7edb4125e513d3b85347ac357e9c6edf157b275de9c58711ad300->leave($__internal_2dc72bfeb9f7edb4125e513d3b85347ac357e9c6edf157b275de9c58711ad300_prof);

        
        $__internal_b2dde182cc35ba34a95b40ddd4c7d645021e574323c5b1be7b6a4129c1095761->leave($__internal_b2dde182cc35ba34a95b40ddd4c7d645021e574323c5b1be7b6a4129c1095761_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
