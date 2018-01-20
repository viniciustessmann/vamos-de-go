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
        $__internal_efdcc52df01bebedccf9e3e474aeecfb972b75021f3424375dc21a8d8f6646c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdcc52df01bebedccf9e3e474aeecfb972b75021f3424375dc21a8d8f6646c8->enter($__internal_efdcc52df01bebedccf9e3e474aeecfb972b75021f3424375dc21a8d8f6646c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:index.html.twig"));

        $__internal_a82c34395f5af8b7d1e3c1c0035c6c9e1363c62ebb486736b07f0ef6f1a53e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82c34395f5af8b7d1e3c1c0035c6c9e1363c62ebb486736b07f0ef6f1a53e69->enter($__internal_a82c34395f5af8b7d1e3c1c0035c6c9e1363c62ebb486736b07f0ef6f1a53e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efdcc52df01bebedccf9e3e474aeecfb972b75021f3424375dc21a8d8f6646c8->leave($__internal_efdcc52df01bebedccf9e3e474aeecfb972b75021f3424375dc21a8d8f6646c8_prof);

        
        $__internal_a82c34395f5af8b7d1e3c1c0035c6c9e1363c62ebb486736b07f0ef6f1a53e69->leave($__internal_a82c34395f5af8b7d1e3c1c0035c6c9e1363c62ebb486736b07f0ef6f1a53e69_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d9dfce0864803e8212d3f336754d83cc5cadbabaa238bf339d0bcbd001cf7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9dfce0864803e8212d3f336754d83cc5cadbabaa238bf339d0bcbd001cf7b9->enter($__internal_2d9dfce0864803e8212d3f336754d83cc5cadbabaa238bf339d0bcbd001cf7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_44e820bd613be73aad31967ef920bf1c31a41528199911d2baef0ee55aadf5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e820bd613be73aad31967ef920bf1c31a41528199911d2baef0ee55aadf5e1->enter($__internal_44e820bd613be73aad31967ef920bf1c31a41528199911d2baef0ee55aadf5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_44e820bd613be73aad31967ef920bf1c31a41528199911d2baef0ee55aadf5e1->leave($__internal_44e820bd613be73aad31967ef920bf1c31a41528199911d2baef0ee55aadf5e1_prof);

        
        $__internal_2d9dfce0864803e8212d3f336754d83cc5cadbabaa238bf339d0bcbd001cf7b9->leave($__internal_2d9dfce0864803e8212d3f336754d83cc5cadbabaa238bf339d0bcbd001cf7b9_prof);

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
