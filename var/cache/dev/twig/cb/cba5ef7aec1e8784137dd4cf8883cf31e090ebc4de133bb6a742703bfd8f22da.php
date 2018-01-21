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
        $__internal_07aeaed4b047a8619dea7d4cfb269d99607f1e6247809dcbad0d33b68669edf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07aeaed4b047a8619dea7d4cfb269d99607f1e6247809dcbad0d33b68669edf5->enter($__internal_07aeaed4b047a8619dea7d4cfb269d99607f1e6247809dcbad0d33b68669edf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Newsletter:new.html.twig"));

        $__internal_5887371de90abdacf0a70da2bf082a1da3be28eea4d762e3affd0cc1117aef0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5887371de90abdacf0a70da2bf082a1da3be28eea4d762e3affd0cc1117aef0d->enter($__internal_5887371de90abdacf0a70da2bf082a1da3be28eea4d762e3affd0cc1117aef0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Newsletter:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07aeaed4b047a8619dea7d4cfb269d99607f1e6247809dcbad0d33b68669edf5->leave($__internal_07aeaed4b047a8619dea7d4cfb269d99607f1e6247809dcbad0d33b68669edf5_prof);

        
        $__internal_5887371de90abdacf0a70da2bf082a1da3be28eea4d762e3affd0cc1117aef0d->leave($__internal_5887371de90abdacf0a70da2bf082a1da3be28eea4d762e3affd0cc1117aef0d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d4a11ae1e3d88a60c8d0a947dc383cd45d12aa4f44a5b7aafa31bc8a6ec10160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a11ae1e3d88a60c8d0a947dc383cd45d12aa4f44a5b7aafa31bc8a6ec10160->enter($__internal_d4a11ae1e3d88a60c8d0a947dc383cd45d12aa4f44a5b7aafa31bc8a6ec10160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a59ed817ed5eb49b61e40749209637e5ff3b3f5c28a23c5c9e2b731b0411f0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59ed817ed5eb49b61e40749209637e5ff3b3f5c28a23c5c9e2b731b0411f0b1->enter($__internal_a59ed817ed5eb49b61e40749209637e5ff3b3f5c28a23c5c9e2b731b0411f0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a59ed817ed5eb49b61e40749209637e5ff3b3f5c28a23c5c9e2b731b0411f0b1->leave($__internal_a59ed817ed5eb49b61e40749209637e5ff3b3f5c28a23c5c9e2b731b0411f0b1_prof);

        
        $__internal_d4a11ae1e3d88a60c8d0a947dc383cd45d12aa4f44a5b7aafa31bc8a6ec10160->leave($__internal_d4a11ae1e3d88a60c8d0a947dc383cd45d12aa4f44a5b7aafa31bc8a6ec10160_prof);

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
