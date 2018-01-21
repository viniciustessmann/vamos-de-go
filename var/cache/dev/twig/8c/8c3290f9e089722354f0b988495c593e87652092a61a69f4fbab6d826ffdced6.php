<?php

/* AdminBundle:Way:index.html.twig */
class __TwigTemplate_3dae3dfb81f3c7f001e9c7c7ded5cfa563ecfa7642f5667652f9735f4d0ef7c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Way:index.html.twig", 1);
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
        $__internal_7e3d4b60f23c19df7ea04a6b4321c42c711663f69ad88b3999d34eaef24ad67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3d4b60f23c19df7ea04a6b4321c42c711663f69ad88b3999d34eaef24ad67f->enter($__internal_7e3d4b60f23c19df7ea04a6b4321c42c711663f69ad88b3999d34eaef24ad67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:index.html.twig"));

        $__internal_1f676047987796a53986551b6209ce7f225114f01310e9fc9091275abeef4626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f676047987796a53986551b6209ce7f225114f01310e9fc9091275abeef4626->enter($__internal_1f676047987796a53986551b6209ce7f225114f01310e9fc9091275abeef4626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e3d4b60f23c19df7ea04a6b4321c42c711663f69ad88b3999d34eaef24ad67f->leave($__internal_7e3d4b60f23c19df7ea04a6b4321c42c711663f69ad88b3999d34eaef24ad67f_prof);

        
        $__internal_1f676047987796a53986551b6209ce7f225114f01310e9fc9091275abeef4626->leave($__internal_1f676047987796a53986551b6209ce7f225114f01310e9fc9091275abeef4626_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d6a884ae3fb8fa49f3ead6d800085ce4c583a51219cd80479f79ca46735e263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6a884ae3fb8fa49f3ead6d800085ce4c583a51219cd80479f79ca46735e263->enter($__internal_5d6a884ae3fb8fa49f3ead6d800085ce4c583a51219cd80479f79ca46735e263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e37030b1ab7fff9e61eea90da39e989ec91c4e2b01eb9f7c3fa83f7324fe6bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37030b1ab7fff9e61eea90da39e989ec91c4e2b01eb9f7c3fa83f7324fe6bfe->enter($__internal_e37030b1ab7fff9e61eea90da39e989ec91c4e2b01eb9f7c3fa83f7324fe6bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <section class=\"content-header\">
        <h1>
            Rotas cadastradas
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_way_new");
        echo "\" class=\"btn btn-success btn-sm\">
                            Cadastrar rota
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Rotas cadastradas</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["ways"]) || array_key_exists("ways", $context) ? $context["ways"] : (function () { throw new Twig_Error_Runtime('Variable "ways" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["way"]) {
            // line 42
            echo "                                    <tr>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["way"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["way"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>

                                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_way_detail", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["way"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-info btn-flat\" title=\"Detalhes\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_way_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["way"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_way_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["way"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-danger btn-flat\" title=\"Apagar\">
                                                <i class=\"fa fa-trash-o fa-lg\"></i>
                                            </a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['way'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_e37030b1ab7fff9e61eea90da39e989ec91c4e2b01eb9f7c3fa83f7324fe6bfe->leave($__internal_e37030b1ab7fff9e61eea90da39e989ec91c4e2b01eb9f7c3fa83f7324fe6bfe_prof);

        
        $__internal_5d6a884ae3fb8fa49f3ead6d800085ce4c583a51219cd80479f79ca46735e263->leave($__internal_5d6a884ae3fb8fa49f3ead6d800085ce4c583a51219cd80479f79ca46735e263_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Way:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 65,  125 => 57,  117 => 52,  109 => 47,  103 => 44,  99 => 43,  96 => 42,  92 => 41,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AdminBundle/Resources/views/base.html.twig' %}
{% block content %}

    <section class=\"content-header\">
        <h1>
            Rotas cadastradas
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"{{ path('go_admin_way_new') }}\" class=\"btn btn-success btn-sm\">
                            Cadastrar rota
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Rotas cadastradas</h3>
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
                                {% for way in ways %}
                                    <tr>
                                        <td>{{ way.id }}</td>
                                        <td>{{ way.name }}</td>
                                        <td>

                                            <a href=\"{{ path('go_admin_way_detail', {'id': way.id}) }}\"
                                                class=\"btn btn-info btn-flat\" title=\"Detalhes\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"{{ path('go_admin_way_edit', {'id': way.id}) }}\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"{{ path('go_admin_way_delete', {'id': way.id}) }}\"
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

{% endblock %}", "AdminBundle:Way:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Way/index.html.twig");
    }
}
