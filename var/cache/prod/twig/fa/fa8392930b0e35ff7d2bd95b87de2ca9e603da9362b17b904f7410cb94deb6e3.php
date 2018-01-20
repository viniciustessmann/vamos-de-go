<?php

/* AdminBundle:Newsletter:index.html.twig */
class __TwigTemplate_21a07e5ebf246d93facf47d8c55bc0328189bdb1cc6e19730c56a0cf7afca708 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["newsletters"] ?? null));
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
        return array (  127 => 65,  113 => 57,  105 => 52,  100 => 50,  96 => 49,  92 => 48,  88 => 47,  84 => 46,  81 => 45,  77 => 44,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:Newsletter:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/Newsletter/index.html.twig");
    }
}
