<?php

/* AdminBundle:Neighborhood:index.html.twig */
class __TwigTemplate_709716f155b37798c961092256217dd580af58901084d524d01db925d2cb4009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Neighborhood:index.html.twig", 1);
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
        $__internal_ca2ef15476e292cccee52f6e45c590c4e95029845cc0339d09a39e40114b51d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2ef15476e292cccee52f6e45c590c4e95029845cc0339d09a39e40114b51d6->enter($__internal_ca2ef15476e292cccee52f6e45c590c4e95029845cc0339d09a39e40114b51d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Neighborhood:index.html.twig"));

        $__internal_0c17a3ddd138cd6ac0fe4b55301dfb96be2e0cb0158722b26cb5f3ca9aebea1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c17a3ddd138cd6ac0fe4b55301dfb96be2e0cb0158722b26cb5f3ca9aebea1f->enter($__internal_0c17a3ddd138cd6ac0fe4b55301dfb96be2e0cb0158722b26cb5f3ca9aebea1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Neighborhood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2ef15476e292cccee52f6e45c590c4e95029845cc0339d09a39e40114b51d6->leave($__internal_ca2ef15476e292cccee52f6e45c590c4e95029845cc0339d09a39e40114b51d6_prof);

        
        $__internal_0c17a3ddd138cd6ac0fe4b55301dfb96be2e0cb0158722b26cb5f3ca9aebea1f->leave($__internal_0c17a3ddd138cd6ac0fe4b55301dfb96be2e0cb0158722b26cb5f3ca9aebea1f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_147a1acd140a6b3229c3fe03d82043fd87b31ad15f1d34f97e7c84672c34ebc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147a1acd140a6b3229c3fe03d82043fd87b31ad15f1d34f97e7c84672c34ebc0->enter($__internal_147a1acd140a6b3229c3fe03d82043fd87b31ad15f1d34f97e7c84672c34ebc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_40775e646b04669957877af129ae39b788e595e0122a8d8475fbd9e045cbd2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40775e646b04669957877af129ae39b788e595e0122a8d8475fbd9e045cbd2a6->enter($__internal_40775e646b04669957877af129ae39b788e595e0122a8d8475fbd9e045cbd2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <section class=\"content-header\">
        <h1>
            Bairros cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_neighborhood_new");
        echo "\" class=\"btn btn-success btn-sm\">
                            Cadastrar bairro
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Bairros cadastrados</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["neighborhoods"]) || array_key_exists("neighborhoods", $context) ? $context["neighborhoods"] : (function () { throw new Twig_Error_Runtime('Variable "neighborhoods" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["neighborhood"]) {
            // line 42
            echo "                                    <tr>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["neighborhood"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["neighborhood"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_neighborhood_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["neighborhood"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_neighborhood_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["neighborhood"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-danger btn-flat\" title=\"Apagar\">
                                                <i class=\"fa fa-trash-o fa-lg\"></i>
                                            </a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['neighborhood'], $context['_parent'], $context['loop']);
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
        
        $__internal_40775e646b04669957877af129ae39b788e595e0122a8d8475fbd9e045cbd2a6->leave($__internal_40775e646b04669957877af129ae39b788e595e0122a8d8475fbd9e045cbd2a6_prof);

        
        $__internal_147a1acd140a6b3229c3fe03d82043fd87b31ad15f1d34f97e7c84672c34ebc0->leave($__internal_147a1acd140a6b3229c3fe03d82043fd87b31ad15f1d34f97e7c84672c34ebc0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Neighborhood:index.html.twig";
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
            Bairros cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"{{ path('go_admin_neighborhood_new') }}\" class=\"btn btn-success btn-sm\">
                            Cadastrar bairro
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Bairros cadastrados</h3>
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
                                {% for neighborhood in neighborhoods %}
                                    <tr>
                                        <td>{{ neighborhood.id }}</td>
                                        <td>{{ neighborhood.name }}</td>
                                        <td>
                                            <a href=\"{{ path('go_admin_neighborhood_edit', {'id': neighborhood.id}) }}\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"{{ path('go_admin_neighborhood_delete', {'id': neighborhood.id}) }}\"
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

{% endblock %}", "AdminBundle:Neighborhood:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Neighborhood/index.html.twig");
    }
}
