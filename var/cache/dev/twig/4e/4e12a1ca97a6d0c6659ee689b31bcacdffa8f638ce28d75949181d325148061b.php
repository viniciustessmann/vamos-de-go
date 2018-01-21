<?php

/* AdminBundle:Newsletter:index.html.twig */
class __TwigTemplate_89c88a0de5f0ac6677088a0e349a0c75b313fb39b7c7deba0776f409b4679017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Newsletter:index.html.twig", 1);
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
        $__internal_06c557df8cdd8277bdbd8a2e8319ab21d1e195a78fa369b509d4262cedba676e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c557df8cdd8277bdbd8a2e8319ab21d1e195a78fa369b509d4262cedba676e->enter($__internal_06c557df8cdd8277bdbd8a2e8319ab21d1e195a78fa369b509d4262cedba676e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Newsletter:index.html.twig"));

        $__internal_4225ca15802446b1cc9fe06ac8d4507ca00e78760bb1688d9cd104209662f064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4225ca15802446b1cc9fe06ac8d4507ca00e78760bb1688d9cd104209662f064->enter($__internal_4225ca15802446b1cc9fe06ac8d4507ca00e78760bb1688d9cd104209662f064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Newsletter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06c557df8cdd8277bdbd8a2e8319ab21d1e195a78fa369b509d4262cedba676e->leave($__internal_06c557df8cdd8277bdbd8a2e8319ab21d1e195a78fa369b509d4262cedba676e_prof);

        
        $__internal_4225ca15802446b1cc9fe06ac8d4507ca00e78760bb1688d9cd104209662f064->leave($__internal_4225ca15802446b1cc9fe06ac8d4507ca00e78760bb1688d9cd104209662f064_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6e7c7c3607de92a56c7a2d9c28391d117556ea498e16550e8d2a2346bb252ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7c7c3607de92a56c7a2d9c28391d117556ea498e16550e8d2a2346bb252ffa->enter($__internal_6e7c7c3607de92a56c7a2d9c28391d117556ea498e16550e8d2a2346bb252ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9205379708460a74ea7c614a45eb016fc1959dd2db0b7b7adf16e277cf1c2220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9205379708460a74ea7c614a45eb016fc1959dd2db0b7b7adf16e277cf1c2220->enter($__internal_9205379708460a74ea7c614a45eb016fc1959dd2db0b7b7adf16e277cf1c2220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <section class=\"content-header\">
        <h1>
            Newsletter cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_newsletter_new");
        echo "\" class=\"btn btn-success btn-sm\">
                            Cadastrar newsletter
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Newsletter cadastrados</h3>
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
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Data</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newsletters"]) || array_key_exists("newsletters", $context) ? $context["newsletters"] : (function () { throw new Twig_Error_Runtime('Variable "newsletters" does not exist.', 44, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 45
            echo "                                    <tr>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["newsletter"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["newsletter"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["newsletter"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["newsletter"], "phone", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["newsletter"], "created", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_newsletter_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["newsletter"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_newsletter_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["newsletter"], "id", array()))), "html", null, true);
            echo "\"
                                                class=\"btn btn-danger btn-flat\" title=\"Apagar\">
                                                <i class=\"fa fa-trash-o fa-lg\"></i>
                                            </a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
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
        
        $__internal_9205379708460a74ea7c614a45eb016fc1959dd2db0b7b7adf16e277cf1c2220->leave($__internal_9205379708460a74ea7c614a45eb016fc1959dd2db0b7b7adf16e277cf1c2220_prof);

        
        $__internal_6e7c7c3607de92a56c7a2d9c28391d117556ea498e16550e8d2a2346bb252ffa->leave($__internal_6e7c7c3607de92a56c7a2d9c28391d117556ea498e16550e8d2a2346bb252ffa_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Newsletter:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 65,  131 => 57,  123 => 52,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  102 => 46,  99 => 45,  95 => 44,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AdminBundle/Resources/views/base.html.twig' %}
{% block content %}

    <section class=\"content-header\">
        <h1>
            Newsletter cadastrados
        </h1>
    </section>

    <section class=\"content\">
        <div class=\"box-body\">
            <div class=\"media-body\">
                <div class=\"clearfix\">
                    <p class=\"pull-left\">
                        <a href=\"{{ path('go_admin_newsletter_new') }}\" class=\"btn btn-success btn-sm\">
                            Cadastrar newsletter
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"box box-primary\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Newsletter cadastrados</h3>
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
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Data</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for newsletter in newsletters %}
                                    <tr>
                                        <td>{{ newsletter.id }}</td>
                                        <td>{{ newsletter.name }}</td>
                                        <td>{{ newsletter.email }}</td>
                                        <td>{{ newsletter.phone }}</td>
                                        <td>{{ newsletter.created|date('d/m/Y') }}</td>
                                        <td>
                                            <a href=\"{{ path('go_admin_newsletter_edit', {'id': newsletter.id}) }}\"
                                                class=\"btn btn-info btn-flat\" title=\"Editar\">
                                                <i class=\"fa fa-edit fa-lg\"></i>
                                            </a>

                                            <a href=\"{{ path('go_admin_newsletter_delete', {'id': newsletter.id}) }}\"
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

{% endblock %}", "AdminBundle:Newsletter:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Newsletter/index.html.twig");
    }
}
