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
        $__internal_4b083f3f9314a9f5ca159d0286569d47edfe18affa2364669b18f140e37708d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b083f3f9314a9f5ca159d0286569d47edfe18affa2364669b18f140e37708d9->enter($__internal_4b083f3f9314a9f5ca159d0286569d47edfe18affa2364669b18f140e37708d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:setway.html.twig"));

        $__internal_1f80dfd39b0aab909c0eae02630989897912adcaba48cbf96226aaac2662719f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f80dfd39b0aab909c0eae02630989897912adcaba48cbf96226aaac2662719f->enter($__internal_1f80dfd39b0aab909c0eae02630989897912adcaba48cbf96226aaac2662719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:setway.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b083f3f9314a9f5ca159d0286569d47edfe18affa2364669b18f140e37708d9->leave($__internal_4b083f3f9314a9f5ca159d0286569d47edfe18affa2364669b18f140e37708d9_prof);

        
        $__internal_1f80dfd39b0aab909c0eae02630989897912adcaba48cbf96226aaac2662719f->leave($__internal_1f80dfd39b0aab909c0eae02630989897912adcaba48cbf96226aaac2662719f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8fbb45a7627f942ae45c423a8f08301ca35d0de8a8018a4b862217176799370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fbb45a7627f942ae45c423a8f08301ca35d0de8a8018a4b862217176799370->enter($__internal_b8fbb45a7627f942ae45c423a8f08301ca35d0de8a8018a4b862217176799370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e52f87660034c66ce40e5767a231277486631f75472162aece03d3733a1ec221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52f87660034c66ce40e5767a231277486631f75472162aece03d3733a1ec221->enter($__internal_e52f87660034c66ce40e5767a231277486631f75472162aece03d3733a1ec221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e52f87660034c66ce40e5767a231277486631f75472162aece03d3733a1ec221->leave($__internal_e52f87660034c66ce40e5767a231277486631f75472162aece03d3733a1ec221_prof);

        
        $__internal_b8fbb45a7627f942ae45c423a8f08301ca35d0de8a8018a4b862217176799370->leave($__internal_b8fbb45a7627f942ae45c423a8f08301ca35d0de8a8018a4b862217176799370_prof);

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
