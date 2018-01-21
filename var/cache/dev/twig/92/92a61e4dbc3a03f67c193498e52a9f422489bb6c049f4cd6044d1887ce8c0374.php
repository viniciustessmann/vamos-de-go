<?php

/* AdminBundle:Driver:new.html.twig */
class __TwigTemplate_b23adf45178ea92994637aeca19bcbd167c2eb1e968ec722b17d47d136345801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Driver:new.html.twig", 1);
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
        $__internal_468dd72e0d988b32954239533bb16b5b77e36213b69a3216b524987c946de707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468dd72e0d988b32954239533bb16b5b77e36213b69a3216b524987c946de707->enter($__internal_468dd72e0d988b32954239533bb16b5b77e36213b69a3216b524987c946de707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Driver:new.html.twig"));

        $__internal_5946023d6d010fbdefd52d275c455131d70af6f11f521bb494d2f0116ec53a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5946023d6d010fbdefd52d275c455131d70af6f11f521bb494d2f0116ec53a3e->enter($__internal_5946023d6d010fbdefd52d275c455131d70af6f11f521bb494d2f0116ec53a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Driver:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468dd72e0d988b32954239533bb16b5b77e36213b69a3216b524987c946de707->leave($__internal_468dd72e0d988b32954239533bb16b5b77e36213b69a3216b524987c946de707_prof);

        
        $__internal_5946023d6d010fbdefd52d275c455131d70af6f11f521bb494d2f0116ec53a3e->leave($__internal_5946023d6d010fbdefd52d275c455131d70af6f11f521bb494d2f0116ec53a3e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_06fc84176885e5b8bd19aee63c09d6c46d3f3eeb12b54a63617686d3e5d1a5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fc84176885e5b8bd19aee63c09d6c46d3f3eeb12b54a63617686d3e5d1a5f2->enter($__internal_06fc84176885e5b8bd19aee63c09d6c46d3f3eeb12b54a63617686d3e5d1a5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd13ab7e45d4d97fc76093ad232e25405ff11119443d669389d7f9fac7f51257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd13ab7e45d4d97fc76093ad232e25405ff11119443d669389d7f9fac7f51257->enter($__internal_dd13ab7e45d4d97fc76093ad232e25405ff11119443d669389d7f9fac7f51257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_dd13ab7e45d4d97fc76093ad232e25405ff11119443d669389d7f9fac7f51257->leave($__internal_dd13ab7e45d4d97fc76093ad232e25405ff11119443d669389d7f9fac7f51257_prof);

        
        $__internal_06fc84176885e5b8bd19aee63c09d6c46d3f3eeb12b54a63617686d3e5d1a5f2->leave($__internal_06fc84176885e5b8bd19aee63c09d6c46d3f3eeb12b54a63617686d3e5d1a5f2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Driver:new.html.twig";
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

{% endblock %}", "AdminBundle:Driver:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Driver/new.html.twig");
    }
}
