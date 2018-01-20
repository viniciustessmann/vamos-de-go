<?php

/* AdminBundle:Way:new.html.twig */
class __TwigTemplate_8528f37b920b45accb20572b57fb6f6614f52621f49e3927356bc5fb3e66f523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Way:new.html.twig", 1);
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
        $__internal_3aec5a1262f44078609b2d5f68e4d17ff11ed010a52c856c5fc057be8678306c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aec5a1262f44078609b2d5f68e4d17ff11ed010a52c856c5fc057be8678306c->enter($__internal_3aec5a1262f44078609b2d5f68e4d17ff11ed010a52c856c5fc057be8678306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:new.html.twig"));

        $__internal_ec46010eca7cbf889f4ca046d9b9325c24de862c3cf637881d2a4c6556261cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec46010eca7cbf889f4ca046d9b9325c24de862c3cf637881d2a4c6556261cbf->enter($__internal_ec46010eca7cbf889f4ca046d9b9325c24de862c3cf637881d2a4c6556261cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aec5a1262f44078609b2d5f68e4d17ff11ed010a52c856c5fc057be8678306c->leave($__internal_3aec5a1262f44078609b2d5f68e4d17ff11ed010a52c856c5fc057be8678306c_prof);

        
        $__internal_ec46010eca7cbf889f4ca046d9b9325c24de862c3cf637881d2a4c6556261cbf->leave($__internal_ec46010eca7cbf889f4ca046d9b9325c24de862c3cf637881d2a4c6556261cbf_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff25efe364d563e69ee30066aea239e9e1b4ddc8d4aea4c9142b925cb3b11cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff25efe364d563e69ee30066aea239e9e1b4ddc8d4aea4c9142b925cb3b11cf3->enter($__internal_ff25efe364d563e69ee30066aea239e9e1b4ddc8d4aea4c9142b925cb3b11cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3c75227eeb7e9757ea81017d495583ff99b59598a3925649f89ee870bb90d8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c75227eeb7e9757ea81017d495583ff99b59598a3925649f89ee870bb90d8d7->enter($__internal_3c75227eeb7e9757ea81017d495583ff99b59598a3925649f89ee870bb90d8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-md-6\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Cadastro de rota</h3>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_way_index");
        echo "\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

";
        
        $__internal_3c75227eeb7e9757ea81017d495583ff99b59598a3925649f89ee870bb90d8d7->leave($__internal_3c75227eeb7e9757ea81017d495583ff99b59598a3925649f89ee870bb90d8d7_prof);

        
        $__internal_ff25efe364d563e69ee30066aea239e9e1b4ddc8d4aea4c9142b925cb3b11cf3->leave($__internal_ff25efe364d563e69ee30066aea239e9e1b4ddc8d4aea4c9142b925cb3b11cf3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Way:new.html.twig";
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
                <h3 class=\"box-title\">Cadastro de rota</h3>
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
            <a type=\"button\" href=\"{{ path('go_admin_way_index') }}\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

{% endblock %}", "AdminBundle:Way:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Way/new.html.twig");
    }
}
