<?php

/* AdminBundle:Point:index.html.twig */
class __TwigTemplate_6c6add81e17c748754672614ae47830d2ede67b340f85e8a455684db842f44f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Point:index.html.twig", 1);
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
        $__internal_66c9cf6043f319f9ef1c3a180cdf3be91d5d760c12ad1c5bb4d56461c874814a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c9cf6043f319f9ef1c3a180cdf3be91d5d760c12ad1c5bb4d56461c874814a->enter($__internal_66c9cf6043f319f9ef1c3a180cdf3be91d5d760c12ad1c5bb4d56461c874814a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Point:index.html.twig"));

        $__internal_c20c48c23192f160ba074e1f989c75374b286c61aa4bf349c23c8fefcdc65272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20c48c23192f160ba074e1f989c75374b286c61aa4bf349c23c8fefcdc65272->enter($__internal_c20c48c23192f160ba074e1f989c75374b286c61aa4bf349c23c8fefcdc65272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Point:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c9cf6043f319f9ef1c3a180cdf3be91d5d760c12ad1c5bb4d56461c874814a->leave($__internal_66c9cf6043f319f9ef1c3a180cdf3be91d5d760c12ad1c5bb4d56461c874814a_prof);

        
        $__internal_c20c48c23192f160ba074e1f989c75374b286c61aa4bf349c23c8fefcdc65272->leave($__internal_c20c48c23192f160ba074e1f989c75374b286c61aa4bf349c23c8fefcdc65272_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3af6c34435a50315bcbed2b62a3fd13c10615ee0e1df111d7c4cc0493c0d80b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af6c34435a50315bcbed2b62a3fd13c10615ee0e1df111d7c4cc0493c0d80b5->enter($__internal_3af6c34435a50315bcbed2b62a3fd13c10615ee0e1df111d7c4cc0493c0d80b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f26cf0091a714acee1fc63e56831c89267fc9d99e31b37c7be12ff91840b01f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26cf0091a714acee1fc63e56831c89267fc9d99e31b37c7be12ff91840b01f8->enter($__internal_f26cf0091a714acee1fc63e56831c89267fc9d99e31b37c7be12ff91840b01f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <section class=\"content-header\">
        <h1>
            Pontos cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_point_new");
        echo "\" class=\"btn btn-success btn-sm\">
                            Cadastrar ponto
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Pontos cadastrados</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new Twig_Error_Runtime('Variable "points" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 42
            echo "                                    <tr>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_point_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_point_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-danger btn-flat\" title=\"Apagar\">
                                                <i class=\"fa fa-trash-o fa-lg\"></i>
                                            </a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_f26cf0091a714acee1fc63e56831c89267fc9d99e31b37c7be12ff91840b01f8->leave($__internal_f26cf0091a714acee1fc63e56831c89267fc9d99e31b37c7be12ff91840b01f8_prof);

        
        $__internal_3af6c34435a50315bcbed2b62a3fd13c10615ee0e1df111d7c4cc0493c0d80b5->leave($__internal_3af6c34435a50315bcbed2b62a3fd13c10615ee0e1df111d7c4cc0493c0d80b5_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Point:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  116 => 51,  108 => 46,  103 => 44,  99 => 43,  96 => 42,  92 => 41,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AdminBundle/Resources/views/base.html.twig' %}
{% block content %}

    <section class=\"content-header\">
        <h1>
            Pontos cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"{{ path('go_admin_point_new') }}\" class=\"btn btn-success btn-sm\">
                            Cadastrar ponto
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Pontos cadastrados</h3>
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
                                {% for point in points %}
                                    <tr>
                                        <td>{{ point.id }}</td>
                                        <td>{{ point.name }}</td>
                                        <td>
                                            <a href=\"{{ path('go_admin_point_edit', {'id': point.id}) }}\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"{{ path('go_admin_point_delete', {'id': point.id}) }}\"
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

{% endblock %}", "AdminBundle:Point:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Point/index.html.twig");
    }
}
