<?php

/* AdminBundle:Way:detail.html.twig */
class __TwigTemplate_917c08b7b47807328a4df1fe70c655e6ed992c2b33d7508f319cf411c97cfa72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AdminBundle/Resources/views/base.html.twig", "AdminBundle:Way:detail.html.twig", 1);
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
        $__internal_b98ffd459ae50b20888315357d77a391699effa87393750f7f7b74c753f81598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98ffd459ae50b20888315357d77a391699effa87393750f7f7b74c753f81598->enter($__internal_b98ffd459ae50b20888315357d77a391699effa87393750f7f7b74c753f81598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:detail.html.twig"));

        $__internal_1d6cd2ee99c3ce06a6b892f25f75f08ca719e9a2db4b42ceb58dcc565b086c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6cd2ee99c3ce06a6b892f25f75f08ca719e9a2db4b42ceb58dcc565b086c5c->enter($__internal_1d6cd2ee99c3ce06a6b892f25f75f08ca719e9a2db4b42ceb58dcc565b086c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Way:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b98ffd459ae50b20888315357d77a391699effa87393750f7f7b74c753f81598->leave($__internal_b98ffd459ae50b20888315357d77a391699effa87393750f7f7b74c753f81598_prof);

        
        $__internal_1d6cd2ee99c3ce06a6b892f25f75f08ca719e9a2db4b42ceb58dcc565b086c5c->leave($__internal_1d6cd2ee99c3ce06a6b892f25f75f08ca719e9a2db4b42ceb58dcc565b086c5c_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ce78b2f9b79e7a1633fdc535f0e3ddaa0fd1cc0fb30a8ee1f2a070ff85df2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce78b2f9b79e7a1633fdc535f0e3ddaa0fd1cc0fb30a8ee1f2a070ff85df2ab->enter($__internal_6ce78b2f9b79e7a1633fdc535f0e3ddaa0fd1cc0fb30a8ee1f2a070ff85df2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c1aec48b4f0e5cb52a927a4aead3ff56d04335ff952918c527ab517c0ea137be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1aec48b4f0e5cb52a927a4aead3ff56d04335ff952918c527ab517c0ea137be->enter($__internal_c1aec48b4f0e5cb52a927a4aead3ff56d04335ff952918c527ab517c0ea137be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div class=\"col-md-6\">
        <div class=\"btn-group\">
            <a type=\"button\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_way_index");
        echo "\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

    <div class=\"col-md-12\">
        
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["way"]) || array_key_exists("way", $context) ? $context["way"] : (function () { throw new Twig_Error_Runtime('Variable "way" does not exist.', 18, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                        <strong><i class=\"fa fa-book margin-r-5\"></i> Valor</strong>
                        <p class=\"text-muted\">
                            R\$ ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["way"]) || array_key_exists("way", $context) ? $context["way"] : (function () { throw new Twig_Error_Runtime('Variable "way" does not exist.', 24, $this->getSourceContext()); })()), "value", array()), "html", null, true);
        echo "
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Minimo de passageiros</strong>
                        <p class=\"text-muted\">
                            ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["way"]) || array_key_exists("way", $context) ? $context["way"] : (function () { throw new Twig_Error_Runtime('Variable "way" does not exist.', 30, $this->getSourceContext()); })()), "min", array()), "html", null, true);
        echo " pessoas
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Saida</strong>
                        <p class=\"text-muted\">
                            ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["way"]) || array_key_exists("way", $context) ? $context["way"] : (function () { throw new Twig_Error_Runtime('Variable "way" does not exist.', 36, $this->getSourceContext()); })()), "start", array()), "h:m:s"), "html", null, true);
        echo " 
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Chegada</strong>
                        <p class=\"text-muted\">
                             ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["way"]) || array_key_exists("way", $context) ? $context["way"] : (function () { throw new Twig_Error_Runtime('Variable "way" does not exist.', 42, $this->getSourceContext()); })()), "end", array()), "h:m:s"), "html", null, true);
        echo " 
                        </p>
                        <hr>
                        
                    </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <table role=\"grid\" class=\"table table-bordered table-striped dataTable\" id=\"dtable\">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["way"]) || array_key_exists("way", $context) ? $context["way"] : (function () { throw new Twig_Error_Runtime('Variable "way" does not exist.', 61, $this->getSourceContext()); })()), "points", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 62
            echo "                    <tr>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "address", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>
        </div>
    </div>
        <div class=\"row\">
        <div class=\"col-sm-12\">
            <table role=\"grid\" class=\"table table-bordered table-striped dataTable\" id=\"dtable\">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    ";
        // line 80
        echo "                </tr>
                </thead>
                <tbody>
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["way"]) || array_key_exists("way", $context) ? $context["way"] : (function () { throw new Twig_Error_Runtime('Variable "way" does not exist.', 83, $this->getSourceContext()); })()), "passengers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 84
            echo "                    <tr>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["point"], "name", array()), "html", null, true);
            echo "</td>
                        ";
            // line 88
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_c1aec48b4f0e5cb52a927a4aead3ff56d04335ff952918c527ab517c0ea137be->leave($__internal_c1aec48b4f0e5cb52a927a4aead3ff56d04335ff952918c527ab517c0ea137be_prof);

        
        $__internal_6ce78b2f9b79e7a1633fdc535f0e3ddaa0fd1cc0fb30a8ee1f2a070ff85df2ab->leave($__internal_6ce78b2f9b79e7a1633fdc535f0e3ddaa0fd1cc0fb30a8ee1f2a070ff85df2ab_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Way:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 90,  184 => 88,  180 => 86,  176 => 85,  173 => 84,  169 => 83,  164 => 80,  151 => 68,  142 => 65,  138 => 64,  134 => 63,  131 => 62,  127 => 61,  105 => 42,  96 => 36,  87 => 30,  78 => 24,  69 => 18,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AdminBundle/Resources/views/base.html.twig' %}
{% block content %}

    <div class=\"col-md-6\">
        <div class=\"btn-group\">
            <a type=\"button\" href=\"{{ path('go_admin_way_index') }}\" class=\"btn btn-default btn-flat\">
                <i class=\"fa fa-arrow-left\"></i> Listagem
            </a>
        </div>
    </div>

    <div class=\"col-md-12\">
        
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">{{way.name}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                        <strong><i class=\"fa fa-book margin-r-5\"></i> Valor</strong>
                        <p class=\"text-muted\">
                            R\$ {{way.value}}
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Minimo de passageiros</strong>
                        <p class=\"text-muted\">
                            {{way.min}} pessoas
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Saida</strong>
                        <p class=\"text-muted\">
                            {{ way.start|date('h:m:s') }} 
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Chegada</strong>
                        <p class=\"text-muted\">
                             {{ way.end|date('h:m:s') }} 
                        </p>
                        <hr>
                        
                    </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <table role=\"grid\" class=\"table table-bordered table-striped dataTable\" id=\"dtable\">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                </tr>
                </thead>
                <tbody>
                {% for point in way.points %}
                    <tr>
                        <td>{{ point.id }}</td>
                        <td>{{ point.name }}</td>
                        <td>{{ point.address }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
        <div class=\"row\">
        <div class=\"col-sm-12\">
            <table role=\"grid\" class=\"table table-bordered table-striped dataTable\" id=\"dtable\">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    {# <th>Endereço</th> #}
                </tr>
                </thead>
                <tbody>
                {% for point in way.passengers %}
                    <tr>
                        <td>{{ point.id }}</td>
                        <td>{{ point.name }}</td>
                        {# <td>{{ point.address }}</td> #}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>



{% endblock %}", "AdminBundle:Way:detail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Way/detail.html.twig");
    }
}
