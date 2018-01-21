<?php

/* AdminBundle:Client:new.html.twig */
class __TwigTemplate_f063b8dc0a2f3a7b7f81fddf5136b0ea8859e298c7a22f2cbcccecfe1c164675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Client:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AdminBundle/Resources/views/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de89496a292d7335b80b66e9a3207455fd631f43c429bd06ef0dc4a38e19b5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de89496a292d7335b80b66e9a3207455fd631f43c429bd06ef0dc4a38e19b5ec->enter($__internal_de89496a292d7335b80b66e9a3207455fd631f43c429bd06ef0dc4a38e19b5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:new.html.twig"));

        $__internal_24d58532c7d75d6792ecbec99964a80d0b1fb9306b386128b59465df8c993607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d58532c7d75d6792ecbec99964a80d0b1fb9306b386128b59465df8c993607->enter($__internal_24d58532c7d75d6792ecbec99964a80d0b1fb9306b386128b59465df8c993607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de89496a292d7335b80b66e9a3207455fd631f43c429bd06ef0dc4a38e19b5ec->leave($__internal_de89496a292d7335b80b66e9a3207455fd631f43c429bd06ef0dc4a38e19b5ec_prof);

        
        $__internal_24d58532c7d75d6792ecbec99964a80d0b1fb9306b386128b59465df8c993607->leave($__internal_24d58532c7d75d6792ecbec99964a80d0b1fb9306b386128b59465df8c993607_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3e7084568aaac1eef7517ff2f5cbbbddfda5e3f90719ac1e39ad7eb134b7f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e7084568aaac1eef7517ff2f5cbbbddfda5e3f90719ac1e39ad7eb134b7f2a->enter($__internal_d3e7084568aaac1eef7517ff2f5cbbbddfda5e3f90719ac1e39ad7eb134b7f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3c948d7b381d8f7fc41399be03378d2d51ea2c10158609acd835ed64145ee6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c948d7b381d8f7fc41399be03378d2d51ea2c10158609acd835ed64145ee6b0->enter($__internal_3c948d7b381d8f7fc41399be03378d2d51ea2c10158609acd835ed64145ee6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-md-6\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Cadastro de motorista</h3>
            </div>

            <div class=\"box-body\">
                <div class=\"form-group\">

                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"btn-group\">
            <a type=\"button\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_driver_index");
        echo "\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

";
        
        $__internal_3c948d7b381d8f7fc41399be03378d2d51ea2c10158609acd835ed64145ee6b0->leave($__internal_3c948d7b381d8f7fc41399be03378d2d51ea2c10158609acd835ed64145ee6b0_prof);

        
        $__internal_d3e7084568aaac1eef7517ff2f5cbbbddfda5e3f90719ac1e39ad7eb134b7f2a->leave($__internal_d3e7084568aaac1eef7517ff2f5cbbbddfda5e3f90719ac1e39ad7eb134b7f2a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AdminBundle/Resources/views/base.html.twig' %}
{% block content %}
    <div class=\"col-md-6\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Cadastro de motorista</h3>
            </div>

            <div class=\"box-body\">
                <div class=\"form-group\">

                    {{ form_start(form) }}
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"btn-group\">
            <a type=\"button\" href=\"{{ path('go_admin_driver_index') }}\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

{% endblock %}", "AdminBundle:Client:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Client/new.html.twig");
    }
}
