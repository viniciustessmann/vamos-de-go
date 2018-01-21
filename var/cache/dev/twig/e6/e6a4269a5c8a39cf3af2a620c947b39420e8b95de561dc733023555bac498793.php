<?php

/* AdminBundle:Client:setway.html.twig */
class __TwigTemplate_1215a0ebb1d5bead3125b37fdd9e24a1e23a6831cc47b9ec3c8f888327258d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Client:setway.html.twig", 1);
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
        $__internal_ce4844a1af20e1144c053773d8cda6eb81de239316df0d808daba0984cfad0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4844a1af20e1144c053773d8cda6eb81de239316df0d808daba0984cfad0f5->enter($__internal_ce4844a1af20e1144c053773d8cda6eb81de239316df0d808daba0984cfad0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:setway.html.twig"));

        $__internal_3385ab7573ea5af0627b9038beddc6d4b2d177dbdfe9a5daa53ea1728bb7bdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3385ab7573ea5af0627b9038beddc6d4b2d177dbdfe9a5daa53ea1728bb7bdd2->enter($__internal_3385ab7573ea5af0627b9038beddc6d4b2d177dbdfe9a5daa53ea1728bb7bdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:setway.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce4844a1af20e1144c053773d8cda6eb81de239316df0d808daba0984cfad0f5->leave($__internal_ce4844a1af20e1144c053773d8cda6eb81de239316df0d808daba0984cfad0f5_prof);

        
        $__internal_3385ab7573ea5af0627b9038beddc6d4b2d177dbdfe9a5daa53ea1728bb7bdd2->leave($__internal_3385ab7573ea5af0627b9038beddc6d4b2d177dbdfe9a5daa53ea1728bb7bdd2_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c677c726baff044eb20c6c4b9233f555efacd81d55588b816bb73a93ab48a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c677c726baff044eb20c6c4b9233f555efacd81d55588b816bb73a93ab48a7f->enter($__internal_3c677c726baff044eb20c6c4b9233f555efacd81d55588b816bb73a93ab48a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_808ebf317f0a4d6d76841b874899f7bbed8c57d9137eab1f46272310e745f570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808ebf317f0a4d6d76841b874899f7bbed8c57d9137eab1f46272310e745f570->enter($__internal_808ebf317f0a4d6d76841b874899f7bbed8c57d9137eab1f46272310e745f570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_808ebf317f0a4d6d76841b874899f7bbed8c57d9137eab1f46272310e745f570->leave($__internal_808ebf317f0a4d6d76841b874899f7bbed8c57d9137eab1f46272310e745f570_prof);

        
        $__internal_3c677c726baff044eb20c6c4b9233f555efacd81d55588b816bb73a93ab48a7f->leave($__internal_3c677c726baff044eb20c6c4b9233f555efacd81d55588b816bb73a93ab48a7f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Client:setway.html.twig";
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

{% endblock %}", "AdminBundle:Client:setway.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Client/setway.html.twig");
    }
}
