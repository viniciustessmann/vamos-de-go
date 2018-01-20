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
        $__internal_03ba15b4f9791a66d416a25a5376a7775378f09bc84c4525063ce1771526d105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ba15b4f9791a66d416a25a5376a7775378f09bc84c4525063ce1771526d105->enter($__internal_03ba15b4f9791a66d416a25a5376a7775378f09bc84c4525063ce1771526d105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Driver:new.html.twig"));

        $__internal_66ccac840cccc8f1ea48b765ccb31f45a258aab95d0d0d25ec1d87fb1ce2e510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ccac840cccc8f1ea48b765ccb31f45a258aab95d0d0d25ec1d87fb1ce2e510->enter($__internal_66ccac840cccc8f1ea48b765ccb31f45a258aab95d0d0d25ec1d87fb1ce2e510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Driver:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03ba15b4f9791a66d416a25a5376a7775378f09bc84c4525063ce1771526d105->leave($__internal_03ba15b4f9791a66d416a25a5376a7775378f09bc84c4525063ce1771526d105_prof);

        
        $__internal_66ccac840cccc8f1ea48b765ccb31f45a258aab95d0d0d25ec1d87fb1ce2e510->leave($__internal_66ccac840cccc8f1ea48b765ccb31f45a258aab95d0d0d25ec1d87fb1ce2e510_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a21e953d2ed5560a6219785407eebbaa1559488b508cfd74c16f6482d94f9bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21e953d2ed5560a6219785407eebbaa1559488b508cfd74c16f6482d94f9bd5->enter($__internal_a21e953d2ed5560a6219785407eebbaa1559488b508cfd74c16f6482d94f9bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ee8d88557bee4eb6f21fc045bfd3b53130c9780edaac65907bc741a0564835a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8d88557bee4eb6f21fc045bfd3b53130c9780edaac65907bc741a0564835a7->enter($__internal_ee8d88557bee4eb6f21fc045bfd3b53130c9780edaac65907bc741a0564835a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ee8d88557bee4eb6f21fc045bfd3b53130c9780edaac65907bc741a0564835a7->leave($__internal_ee8d88557bee4eb6f21fc045bfd3b53130c9780edaac65907bc741a0564835a7_prof);

        
        $__internal_a21e953d2ed5560a6219785407eebbaa1559488b508cfd74c16f6482d94f9bd5->leave($__internal_a21e953d2ed5560a6219785407eebbaa1559488b508cfd74c16f6482d94f9bd5_prof);

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
