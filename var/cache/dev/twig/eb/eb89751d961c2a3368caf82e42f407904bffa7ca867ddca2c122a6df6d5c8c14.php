<?php

/* AdminBundle:Point:new.html.twig */
class __TwigTemplate_fae71ac766dd368f623f36b3ce797745c32e7c6c2ede1b0ec90ae4404dd51adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Point:new.html.twig", 1);
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
        $__internal_c663130d10560e3f269efe0ee9a2ce4bb53d73607f9f8bd2efdd9e8e59d870ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c663130d10560e3f269efe0ee9a2ce4bb53d73607f9f8bd2efdd9e8e59d870ca->enter($__internal_c663130d10560e3f269efe0ee9a2ce4bb53d73607f9f8bd2efdd9e8e59d870ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Point:new.html.twig"));

        $__internal_6052c5e8922277cf3144453384807d6239d9729aab7f412a47c6b535e1ec62f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6052c5e8922277cf3144453384807d6239d9729aab7f412a47c6b535e1ec62f0->enter($__internal_6052c5e8922277cf3144453384807d6239d9729aab7f412a47c6b535e1ec62f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Point:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c663130d10560e3f269efe0ee9a2ce4bb53d73607f9f8bd2efdd9e8e59d870ca->leave($__internal_c663130d10560e3f269efe0ee9a2ce4bb53d73607f9f8bd2efdd9e8e59d870ca_prof);

        
        $__internal_6052c5e8922277cf3144453384807d6239d9729aab7f412a47c6b535e1ec62f0->leave($__internal_6052c5e8922277cf3144453384807d6239d9729aab7f412a47c6b535e1ec62f0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_defa1ad0470efa8272f173e98280558c622e919beb877e57d4657a86cf526651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_defa1ad0470efa8272f173e98280558c622e919beb877e57d4657a86cf526651->enter($__internal_defa1ad0470efa8272f173e98280558c622e919beb877e57d4657a86cf526651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c7882c7ca4db2e3eaf323a161d8e75846cff0e3abc493f422afe80f58c60ea92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7882c7ca4db2e3eaf323a161d8e75846cff0e3abc493f422afe80f58c60ea92->enter($__internal_c7882c7ca4db2e3eaf323a161d8e75846cff0e3abc493f422afe80f58c60ea92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-md-6\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Cadastro de ponto</h3>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_point_index");
        echo "\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

";
        
        $__internal_c7882c7ca4db2e3eaf323a161d8e75846cff0e3abc493f422afe80f58c60ea92->leave($__internal_c7882c7ca4db2e3eaf323a161d8e75846cff0e3abc493f422afe80f58c60ea92_prof);

        
        $__internal_defa1ad0470efa8272f173e98280558c622e919beb877e57d4657a86cf526651->leave($__internal_defa1ad0470efa8272f173e98280558c622e919beb877e57d4657a86cf526651_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Point:new.html.twig";
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
                <h3 class=\"box-title\">Cadastro de ponto</h3>
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
            <a type=\"button\" href=\"{{ path('go_admin_point_index') }}\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

{% endblock %}", "AdminBundle:Point:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Point/new.html.twig");
    }
}
