<?php

/* AdminBundle:Newsletter:new.html.twig */
class __TwigTemplate_2c90b2ff90c7c17e041fa17256fd44e60ef72ba1dab83fe6558d09854bead6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Newsletter:new.html.twig", 1);
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
        $__internal_882e9ce2f90c7fe446d41ef27835fc41e57209251869ece0494e723105e6543c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882e9ce2f90c7fe446d41ef27835fc41e57209251869ece0494e723105e6543c->enter($__internal_882e9ce2f90c7fe446d41ef27835fc41e57209251869ece0494e723105e6543c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Newsletter:new.html.twig"));

        $__internal_51d891a50c44a42409982f875bc03fbe264ff33d172c1aaecbd25c81ce1ef664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d891a50c44a42409982f875bc03fbe264ff33d172c1aaecbd25c81ce1ef664->enter($__internal_51d891a50c44a42409982f875bc03fbe264ff33d172c1aaecbd25c81ce1ef664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Newsletter:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882e9ce2f90c7fe446d41ef27835fc41e57209251869ece0494e723105e6543c->leave($__internal_882e9ce2f90c7fe446d41ef27835fc41e57209251869ece0494e723105e6543c_prof);

        
        $__internal_51d891a50c44a42409982f875bc03fbe264ff33d172c1aaecbd25c81ce1ef664->leave($__internal_51d891a50c44a42409982f875bc03fbe264ff33d172c1aaecbd25c81ce1ef664_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffea1425ffef7ee866ca36288bd5f33881afe641b163661e3b7122b2f71215f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffea1425ffef7ee866ca36288bd5f33881afe641b163661e3b7122b2f71215f0->enter($__internal_ffea1425ffef7ee866ca36288bd5f33881afe641b163661e3b7122b2f71215f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_480f0e83f6307d0a4cba0ce95aa1f89dc33475b5ba59dbe6d0067560f980df66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480f0e83f6307d0a4cba0ce95aa1f89dc33475b5ba59dbe6d0067560f980df66->enter($__internal_480f0e83f6307d0a4cba0ce95aa1f89dc33475b5ba59dbe6d0067560f980df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-md-6\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Cadastro de newsletter</h3>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_newsletter_index");
        echo "\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

";
        
        $__internal_480f0e83f6307d0a4cba0ce95aa1f89dc33475b5ba59dbe6d0067560f980df66->leave($__internal_480f0e83f6307d0a4cba0ce95aa1f89dc33475b5ba59dbe6d0067560f980df66_prof);

        
        $__internal_ffea1425ffef7ee866ca36288bd5f33881afe641b163661e3b7122b2f71215f0->leave($__internal_ffea1425ffef7ee866ca36288bd5f33881afe641b163661e3b7122b2f71215f0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Newsletter:new.html.twig";
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
                <h3 class=\"box-title\">Cadastro de newsletter</h3>
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
            <a type=\"button\" href=\"{{ path('go_admin_newsletter_index') }}\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

{% endblock %}", "AdminBundle:Newsletter:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Newsletter/new.html.twig");
    }
}
