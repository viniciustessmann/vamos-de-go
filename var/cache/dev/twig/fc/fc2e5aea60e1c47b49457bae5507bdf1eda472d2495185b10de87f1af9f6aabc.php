<?php

/* AdminBundle:Driver:index.html.twig */
class __TwigTemplate_4aab8a1837eafc02b076adca836f053b6002866100b853ed52bdd925e3795100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Driver:index.html.twig", 1);
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
        $__internal_35589726a3a2dceeee215ee8543318f788218f24b4a7239516b87ddd25f5a43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35589726a3a2dceeee215ee8543318f788218f24b4a7239516b87ddd25f5a43a->enter($__internal_35589726a3a2dceeee215ee8543318f788218f24b4a7239516b87ddd25f5a43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Driver:index.html.twig"));

        $__internal_becb972cdcfa162ce078454d532333a2b7e849f786b71e51218824d7638eeb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becb972cdcfa162ce078454d532333a2b7e849f786b71e51218824d7638eeb3a->enter($__internal_becb972cdcfa162ce078454d532333a2b7e849f786b71e51218824d7638eeb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Driver:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35589726a3a2dceeee215ee8543318f788218f24b4a7239516b87ddd25f5a43a->leave($__internal_35589726a3a2dceeee215ee8543318f788218f24b4a7239516b87ddd25f5a43a_prof);

        
        $__internal_becb972cdcfa162ce078454d532333a2b7e849f786b71e51218824d7638eeb3a->leave($__internal_becb972cdcfa162ce078454d532333a2b7e849f786b71e51218824d7638eeb3a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_30ad57808fda2ea317d31cf3d9126c46a1e0d5a5f0e92661e8e40bcaf7fb468a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ad57808fda2ea317d31cf3d9126c46a1e0d5a5f0e92661e8e40bcaf7fb468a->enter($__internal_30ad57808fda2ea317d31cf3d9126c46a1e0d5a5f0e92661e8e40bcaf7fb468a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f628713dec002b5e1d24041e2ea52d6f6199f27aed2309f6ff6d81722c7f6a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f628713dec002b5e1d24041e2ea52d6f6199f27aed2309f6ff6d81722c7f6a10->enter($__internal_f628713dec002b5e1d24041e2ea52d6f6199f27aed2309f6ff6d81722c7f6a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <section class=\"content-header\">
        <h1>
            Motoristas cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_driver_new");
        echo "\" class=\"btn btn-success btn-sm\">
                            Cadastrar motorista
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Motoristas cadastrados</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["drivers"]) || array_key_exists("drivers", $context) ? $context["drivers"] : (function () { throw new Twig_Error_Runtime('Variable "drivers" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 42
            echo "                                    <tr>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["driver"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["driver"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_driver_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["driver"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_driver_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["driver"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-danger btn-flat\" title=\"Apagar\">
                                                <i class=\"fa fa-trash-o fa-lg\"></i>
                                            </a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['driver'], $context['_parent'], $context['loop']);
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
        
        $__internal_f628713dec002b5e1d24041e2ea52d6f6199f27aed2309f6ff6d81722c7f6a10->leave($__internal_f628713dec002b5e1d24041e2ea52d6f6199f27aed2309f6ff6d81722c7f6a10_prof);

        
        $__internal_30ad57808fda2ea317d31cf3d9126c46a1e0d5a5f0e92661e8e40bcaf7fb468a->leave($__internal_30ad57808fda2ea317d31cf3d9126c46a1e0d5a5f0e92661e8e40bcaf7fb468a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Driver:index.html.twig";
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
            Motoristas cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"{{ path('go_admin_driver_new') }}\" class=\"btn btn-success btn-sm\">
                            Cadastrar motorista
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Motoristas cadastrados</h3>
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
                                {% for driver in drivers %}
                                    <tr>
                                        <td>{{ driver.id }}</td>
                                        <td>{{ driver.name }}</td>
                                        <td>
                                            <a href=\"{{ path('go_admin_driver_edit', {'id': driver.id}) }}\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"{{ path('go_admin_driver_delete', {'id': driver.id}) }}\"
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

{% endblock %}", "AdminBundle:Driver:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Driver/index.html.twig");
    }
}
