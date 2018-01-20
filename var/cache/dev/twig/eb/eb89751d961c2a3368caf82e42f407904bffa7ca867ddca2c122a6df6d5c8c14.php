<?php

/* AdminBundle:Point:new.html.twig */
class __TwigTemplate_fae71ac766dd368f623f36b3ce797745c32e7c6c2ede1b0ec90ae4404dd51adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Point:new.html.twig", 1);
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
        $__internal_49d3dfc47da9901d6ce75128eddbc39527264b75e6370f0d6f3b0bed5ae70261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d3dfc47da9901d6ce75128eddbc39527264b75e6370f0d6f3b0bed5ae70261->enter($__internal_49d3dfc47da9901d6ce75128eddbc39527264b75e6370f0d6f3b0bed5ae70261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Point:new.html.twig"));

        $__internal_061cca89896b77579be205f36bde2aba4c609df74dcf1d7936e43e3be2f9cfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061cca89896b77579be205f36bde2aba4c609df74dcf1d7936e43e3be2f9cfd7->enter($__internal_061cca89896b77579be205f36bde2aba4c609df74dcf1d7936e43e3be2f9cfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Point:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d3dfc47da9901d6ce75128eddbc39527264b75e6370f0d6f3b0bed5ae70261->leave($__internal_49d3dfc47da9901d6ce75128eddbc39527264b75e6370f0d6f3b0bed5ae70261_prof);

        
        $__internal_061cca89896b77579be205f36bde2aba4c609df74dcf1d7936e43e3be2f9cfd7->leave($__internal_061cca89896b77579be205f36bde2aba4c609df74dcf1d7936e43e3be2f9cfd7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_60e4db9ec72f32116b04e0e7542ea6c82bcf0978e078baabe39940b7ff6578d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e4db9ec72f32116b04e0e7542ea6c82bcf0978e078baabe39940b7ff6578d8->enter($__internal_60e4db9ec72f32116b04e0e7542ea6c82bcf0978e078baabe39940b7ff6578d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c4ef0909a982a1a088643d9977843310366e95f99215ac653d78c52d073dfe83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ef0909a982a1a088643d9977843310366e95f99215ac653d78c52d073dfe83->enter($__internal_c4ef0909a982a1a088643d9977843310366e95f99215ac653d78c52d073dfe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-md-6\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Cadastro de ponto</h3>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_point_index");
        echo "\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

";
        
        $__internal_c4ef0909a982a1a088643d9977843310366e95f99215ac653d78c52d073dfe83->leave($__internal_c4ef0909a982a1a088643d9977843310366e95f99215ac653d78c52d073dfe83_prof);

        
        $__internal_60e4db9ec72f32116b04e0e7542ea6c82bcf0978e078baabe39940b7ff6578d8->leave($__internal_60e4db9ec72f32116b04e0e7542ea6c82bcf0978e078baabe39940b7ff6578d8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Point:new.html.twig";
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
                <h3 class=\"box-title\">Cadastro de ponto</h3>
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
            <a type=\"button\" href=\"{{ path('go_admin_point_index') }}\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

{% endblock %}", "AdminBundle:Point:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Point/new.html.twig");
    }
}
