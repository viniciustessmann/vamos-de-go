<?php

/* AdminBundle:Way:detail.html.twig */
class __TwigTemplate_4ca3e53a841438724e3d9c0077f34399a0310a7f04066fcb4a01db8d80673ca1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["way"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                        <strong><i class=\"fa fa-book margin-r-5\"></i> Valor</strong>
                        <p class=\"text-muted\">
                            R\$ ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["way"] ?? null), "value", array()), "html", null, true);
        echo "
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Minimo de passageiros</strong>
                        <p class=\"text-muted\">
                            ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["way"] ?? null), "min", array()), "html", null, true);
        echo " pessoas
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Saida</strong>
                        <p class=\"text-muted\">
                            ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["way"] ?? null), "start", array()), "h:m:s"), "html", null, true);
        echo " 
                        </p>
                        <hr>

                        <strong><i class=\"fa fa-book margin-r-5\"></i> Chegada</strong>
                        <p class=\"text-muted\">
                             ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["way"] ?? null), "end", array()), "h:m:s"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["way"] ?? null), "points", array()));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["way"] ?? null), "passengers", array()));
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
        return array (  173 => 90,  166 => 88,  162 => 86,  158 => 85,  155 => 84,  151 => 83,  146 => 80,  133 => 68,  124 => 65,  120 => 64,  116 => 63,  113 => 62,  109 => 61,  87 => 42,  78 => 36,  69 => 30,  60 => 24,  51 => 18,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:Way:detail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Way/detail.html.twig");
    }
}
