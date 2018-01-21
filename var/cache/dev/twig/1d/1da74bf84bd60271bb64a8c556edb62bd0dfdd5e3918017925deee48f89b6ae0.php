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
        $__internal_ac43be18ebf2566fc7bdf88d585d727b4aeb9bd99e3e30fd7a9eff800fac9bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac43be18ebf2566fc7bdf88d585d727b4aeb9bd99e3e30fd7a9eff800fac9bc7->enter($__internal_ac43be18ebf2566fc7bdf88d585d727b4aeb9bd99e3e30fd7a9eff800fac9bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Neighborhood:new.html.twig"));

        $__internal_8a9929ef850c17612c0f2a8a687640e21d087d539c0f2ef26b37f6dc56b9c181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9929ef850c17612c0f2a8a687640e21d087d539c0f2ef26b37f6dc56b9c181->enter($__internal_8a9929ef850c17612c0f2a8a687640e21d087d539c0f2ef26b37f6dc56b9c181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Neighborhood:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac43be18ebf2566fc7bdf88d585d727b4aeb9bd99e3e30fd7a9eff800fac9bc7->leave($__internal_ac43be18ebf2566fc7bdf88d585d727b4aeb9bd99e3e30fd7a9eff800fac9bc7_prof);

        
        $__internal_8a9929ef850c17612c0f2a8a687640e21d087d539c0f2ef26b37f6dc56b9c181->leave($__internal_8a9929ef850c17612c0f2a8a687640e21d087d539c0f2ef26b37f6dc56b9c181_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_42a1f85f9d50b10525630843de61d71459df6d646481150bc1a10523d76193d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a1f85f9d50b10525630843de61d71459df6d646481150bc1a10523d76193d2->enter($__internal_42a1f85f9d50b10525630843de61d71459df6d646481150bc1a10523d76193d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5257671fb334ee13587f3234e16a4c3b3656511d329a04e1dba68b2cca9181ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5257671fb334ee13587f3234e16a4c3b3656511d329a04e1dba68b2cca9181ce->enter($__internal_5257671fb334ee13587f3234e16a4c3b3656511d329a04e1dba68b2cca9181ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_5257671fb334ee13587f3234e16a4c3b3656511d329a04e1dba68b2cca9181ce->leave($__internal_5257671fb334ee13587f3234e16a4c3b3656511d329a04e1dba68b2cca9181ce_prof);

        
        $__internal_42a1f85f9d50b10525630843de61d71459df6d646481150bc1a10523d76193d2->leave($__internal_42a1f85f9d50b10525630843de61d71459df6d646481150bc1a10523d76193d2_prof);

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
