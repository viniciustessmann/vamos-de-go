<?php

/* AdminBundle:Neighborhood:new.html.twig */
class __TwigTemplate_d370d2fa9f12da4c57d194ec61394466b6979ce0f1bdb0a8b2eca471d837d870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Neighborhood:new.html.twig", 1);
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
        $__internal_4d6775ba26ac9a2714f242b4704995d1b874d343ae18d146568187e473f01c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6775ba26ac9a2714f242b4704995d1b874d343ae18d146568187e473f01c68->enter($__internal_4d6775ba26ac9a2714f242b4704995d1b874d343ae18d146568187e473f01c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Neighborhood:new.html.twig"));

        $__internal_e2fec9daef2035fb99818d19df0ff11adaae1dce6c47fe606958304fde66ebfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fec9daef2035fb99818d19df0ff11adaae1dce6c47fe606958304fde66ebfc->enter($__internal_e2fec9daef2035fb99818d19df0ff11adaae1dce6c47fe606958304fde66ebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Neighborhood:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d6775ba26ac9a2714f242b4704995d1b874d343ae18d146568187e473f01c68->leave($__internal_4d6775ba26ac9a2714f242b4704995d1b874d343ae18d146568187e473f01c68_prof);

        
        $__internal_e2fec9daef2035fb99818d19df0ff11adaae1dce6c47fe606958304fde66ebfc->leave($__internal_e2fec9daef2035fb99818d19df0ff11adaae1dce6c47fe606958304fde66ebfc_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e69c58fe6ab82db9ffc0cd85c1297ebc0ba2e6a73c4ff51e982c8bfca345ec40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69c58fe6ab82db9ffc0cd85c1297ebc0ba2e6a73c4ff51e982c8bfca345ec40->enter($__internal_e69c58fe6ab82db9ffc0cd85c1297ebc0ba2e6a73c4ff51e982c8bfca345ec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_09b670337aaaae9236731da0b31487a80abde52629778955bf8151b6c575ef65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b670337aaaae9236731da0b31487a80abde52629778955bf8151b6c575ef65->enter($__internal_09b670337aaaae9236731da0b31487a80abde52629778955bf8151b6c575ef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-md-6\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Cadastro de bairro</h3>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_neighborhood_index");
        echo "\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

";
        
        $__internal_09b670337aaaae9236731da0b31487a80abde52629778955bf8151b6c575ef65->leave($__internal_09b670337aaaae9236731da0b31487a80abde52629778955bf8151b6c575ef65_prof);

        
        $__internal_e69c58fe6ab82db9ffc0cd85c1297ebc0ba2e6a73c4ff51e982c8bfca345ec40->leave($__internal_e69c58fe6ab82db9ffc0cd85c1297ebc0ba2e6a73c4ff51e982c8bfca345ec40_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Neighborhood:new.html.twig";
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
                <h3 class=\"box-title\">Cadastro de bairro</h3>
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
            <a type=\"button\" href=\"{{ path('go_admin_neighborhood_index') }}\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

{% endblock %}", "AdminBundle:Neighborhood:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Neighborhood/new.html.twig");
    }
}
