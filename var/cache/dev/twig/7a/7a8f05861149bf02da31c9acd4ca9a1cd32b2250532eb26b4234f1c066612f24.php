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
        $__internal_b27cf75a0e4e215c9bfa664f991b0b031c584a7c5b133cf1f26711410a676949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27cf75a0e4e215c9bfa664f991b0b031c584a7c5b133cf1f26711410a676949->enter($__internal_b27cf75a0e4e215c9bfa664f991b0b031c584a7c5b133cf1f26711410a676949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:new.html.twig"));

        $__internal_5be2eacaf0dbb8e60d024a4454a58d50f72ac990accfc3b45f0e645f9d6bdca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be2eacaf0dbb8e60d024a4454a58d50f72ac990accfc3b45f0e645f9d6bdca0->enter($__internal_5be2eacaf0dbb8e60d024a4454a58d50f72ac990accfc3b45f0e645f9d6bdca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27cf75a0e4e215c9bfa664f991b0b031c584a7c5b133cf1f26711410a676949->leave($__internal_b27cf75a0e4e215c9bfa664f991b0b031c584a7c5b133cf1f26711410a676949_prof);

        
        $__internal_5be2eacaf0dbb8e60d024a4454a58d50f72ac990accfc3b45f0e645f9d6bdca0->leave($__internal_5be2eacaf0dbb8e60d024a4454a58d50f72ac990accfc3b45f0e645f9d6bdca0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ca7be0c640da389dba06ee44bfdd4799014fc814fbe9c8475ce86551b14b19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca7be0c640da389dba06ee44bfdd4799014fc814fbe9c8475ce86551b14b19d->enter($__internal_3ca7be0c640da389dba06ee44bfdd4799014fc814fbe9c8475ce86551b14b19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f315fe61b766996f1f23445d9e88a08bdeafa6e5b40f28d5e1de376723ee4fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f315fe61b766996f1f23445d9e88a08bdeafa6e5b40f28d5e1de376723ee4fdb->enter($__internal_f315fe61b766996f1f23445d9e88a08bdeafa6e5b40f28d5e1de376723ee4fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f315fe61b766996f1f23445d9e88a08bdeafa6e5b40f28d5e1de376723ee4fdb->leave($__internal_f315fe61b766996f1f23445d9e88a08bdeafa6e5b40f28d5e1de376723ee4fdb_prof);

        
        $__internal_3ca7be0c640da389dba06ee44bfdd4799014fc814fbe9c8475ce86551b14b19d->leave($__internal_3ca7be0c640da389dba06ee44bfdd4799014fc814fbe9c8475ce86551b14b19d_prof);

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
