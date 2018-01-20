<?php

/* AdminBundle:Driver:index.html.twig */
class __TwigTemplate_b5ca7ba6c6c16d65ab3dc984ba78f3b681b395c9709d49d0ccf4952ebf28dfaa extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["drivers"] ?? null));
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
        return array (  112 => 59,  98 => 51,  90 => 46,  85 => 44,  81 => 43,  78 => 42,  74 => 41,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:Driver:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Driver/index.html.twig");
    }
}
