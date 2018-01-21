<?php

/* AdminBundle:Client:index.html.twig */
class __TwigTemplate_f426d9def8ee7e0806011656d41a528d30211d31822220e2730530c62ce27eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Client:index.html.twig", 1);
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
        $__internal_18dfce5830e622a43d88ba5504e4f287aeafea849f313a106a8957e951dc8767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18dfce5830e622a43d88ba5504e4f287aeafea849f313a106a8957e951dc8767->enter($__internal_18dfce5830e622a43d88ba5504e4f287aeafea849f313a106a8957e951dc8767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:index.html.twig"));

        $__internal_2aa4a6360d380f3a814d6376ab16e6427a0521a6612f7f1fc3f61d43cc5e8a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa4a6360d380f3a814d6376ab16e6427a0521a6612f7f1fc3f61d43cc5e8a23->enter($__internal_2aa4a6360d380f3a814d6376ab16e6427a0521a6612f7f1fc3f61d43cc5e8a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18dfce5830e622a43d88ba5504e4f287aeafea849f313a106a8957e951dc8767->leave($__internal_18dfce5830e622a43d88ba5504e4f287aeafea849f313a106a8957e951dc8767_prof);

        
        $__internal_2aa4a6360d380f3a814d6376ab16e6427a0521a6612f7f1fc3f61d43cc5e8a23->leave($__internal_2aa4a6360d380f3a814d6376ab16e6427a0521a6612f7f1fc3f61d43cc5e8a23_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_98ac71e0e316d64c497388e1564ca28dec44132030354959c6ec6cf278d420da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ac71e0e316d64c497388e1564ca28dec44132030354959c6ec6cf278d420da->enter($__internal_98ac71e0e316d64c497388e1564ca28dec44132030354959c6ec6cf278d420da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5da4abf9aa0079b662e914a0b98441c9901501bd666dc01be056407033a73377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da4abf9aa0079b662e914a0b98441c9901501bd666dc01be056407033a73377->enter($__internal_5da4abf9aa0079b662e914a0b98441c9901501bd666dc01be056407033a73377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <section class=\"content-header\">
        <h1>
            Clientes cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_client_new");
        echo "\" class=\"btn btn-success btn-sm\">
                            Cadastrar cliente
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Clientes cadastrados</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table role=\"grid\" class=\"table table-bordered table-striped dataTable\" id=\"dtable\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 42
            echo "                                    <tr>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_client_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-danger btn-flat\" title=\"Apagar\">
                                                <i class=\"fa fa-trash-o fa-lg\"></i>
                                            </a>

                                            

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_5da4abf9aa0079b662e914a0b98441c9901501bd666dc01be056407033a73377->leave($__internal_5da4abf9aa0079b662e914a0b98441c9901501bd666dc01be056407033a73377_prof);

        
        $__internal_98ac71e0e316d64c497388e1564ca28dec44132030354959c6ec6cf278d420da->leave($__internal_98ac71e0e316d64c497388e1564ca28dec44132030354959c6ec6cf278d420da_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 61,  116 => 51,  108 => 46,  103 => 44,  99 => 43,  96 => 42,  92 => 41,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AdminBundle/Resources/views/base.html.twig' %}
{% block content %}

    <section class=\"content-header\">
        <h1>
            Clientes cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"{{ path('go_admin_client_new') }}\" class=\"btn btn-success btn-sm\">
                            Cadastrar cliente
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Clientes cadastrados</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table role=\"grid\" class=\"table table-bordered table-striped dataTable\" id=\"dtable\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for client in clients %}
                                    <tr>
                                        <td>{{ client.id }}</td>
                                        <td>{{ client.name }}</td>
                                        <td>
                                            <a href=\"{{ path('go_admin_client_edit', {'id': client.id}) }}\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"{{ path('go_admin_client_delete', {'id': client.id}) }}\"
                                                class=\"btn btn-danger btn-flat\" title=\"Apagar\">
                                                <i class=\"fa fa-trash-o fa-lg\"></i>
                                            </a>

                                            

                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "AdminBundle:Client:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Client/index.html.twig");
    }
}
