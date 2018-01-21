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
        $__internal_eb5c395c2f96fffaeaaafd9f57721da16141be73d1d2785ab3fe4513b9c288e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5c395c2f96fffaeaaafd9f57721da16141be73d1d2785ab3fe4513b9c288e3->enter($__internal_eb5c395c2f96fffaeaaafd9f57721da16141be73d1d2785ab3fe4513b9c288e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:new.html.twig"));

        $__internal_fc761dd9a4748b2674ad37ae5c4402f1b91d034f542026f33b8559bac20dec03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc761dd9a4748b2674ad37ae5c4402f1b91d034f542026f33b8559bac20dec03->enter($__internal_fc761dd9a4748b2674ad37ae5c4402f1b91d034f542026f33b8559bac20dec03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb5c395c2f96fffaeaaafd9f57721da16141be73d1d2785ab3fe4513b9c288e3->leave($__internal_eb5c395c2f96fffaeaaafd9f57721da16141be73d1d2785ab3fe4513b9c288e3_prof);

        
        $__internal_fc761dd9a4748b2674ad37ae5c4402f1b91d034f542026f33b8559bac20dec03->leave($__internal_fc761dd9a4748b2674ad37ae5c4402f1b91d034f542026f33b8559bac20dec03_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_762d006cf4ac979bdceb401bf9d1d1559816557aee220e8b6f50e49d8fe8ecd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762d006cf4ac979bdceb401bf9d1d1559816557aee220e8b6f50e49d8fe8ecd6->enter($__internal_762d006cf4ac979bdceb401bf9d1d1559816557aee220e8b6f50e49d8fe8ecd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fafd8ce444753125878a90be03081ecb4e37e0287e17fbac5cde5940b8b02102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafd8ce444753125878a90be03081ecb4e37e0287e17fbac5cde5940b8b02102->enter($__internal_fafd8ce444753125878a90be03081ecb4e37e0287e17fbac5cde5940b8b02102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fafd8ce444753125878a90be03081ecb4e37e0287e17fbac5cde5940b8b02102->leave($__internal_fafd8ce444753125878a90be03081ecb4e37e0287e17fbac5cde5940b8b02102_prof);

        
        $__internal_762d006cf4ac979bdceb401bf9d1d1559816557aee220e8b6f50e49d8fe8ecd6->leave($__internal_762d006cf4ac979bdceb401bf9d1d1559816557aee220e8b6f50e49d8fe8ecd6_prof);

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
