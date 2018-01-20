<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_2e6cdf4cbe1a855e1cd16015ca396d8b210950376184080bd5424dd1a9b4bc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Área Administrativa</title>
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
</head>
<body class=\"hold-transition skin-black sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <a href=\"\" class=\"logo\">
            <span class=\"logo-mini\"><b>EF</b></span>
            <span class=\"logo-lg\">
                ";
        // line 37
        echo "                <span>Admin</span>
            </span>
        </a>
        <nav class=\"navbar navbar-static-top\">
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown notifications-menu\"></li>
                    ";
        // line 50
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()))) {
            // line 51
            echo "                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                ";
            // line 60
            echo "
                                ";
            // line 62
            echo "                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header\">
                                    ";
            // line 73
            echo "
                                    <p>
                                        ";
            // line 79
            echo "                                    </p>
                                </li>
                                <li class=\"user-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 text-center\">
                                            ";
            // line 87
            echo "                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            ";
            // line 90
            echo "                                                ";
            // line 93
            echo "                                            ";
            // line 94
            echo "                                                ";
            // line 97
            echo "                                            ";
            // line 98
            echo "                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            ";
            // line 103
            echo "                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                            </ul>
                        </li>
                    ";
        }
        // line 111
        echo "                    <li>
                        ";
        // line 115
        echo "                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
            <ul class=\"sidebar-menu tree\" data-widget=\"tree\">

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-tasks\"></i><span>Bairros</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li>
                            <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_neighborhood_index");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Listar bairros
                            </a>
                        </li>
                        <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_neighborhood_new");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Cadastrar bairro
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-tasks\"></i><span>Pontos</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li>
                            <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_point_index");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Listar pontos
                            </a>
                        </li>
                        <li><a href=\"";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_point_new");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Cadastrar ponto
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-tasks\"></i><span>Rotas</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li>
                            <a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_way_index");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Listar rotas
                            </a>
                        </li>
                        <li><a href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_way_new");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Cadastrar rota
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-tasks\"></i><span>Newsletter</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li>
                            <a href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_newsletter_index");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Listar newsletter
                            </a>
                        </li>
                        <li><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_newsletter_new");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Cadastrar newsletter
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-tasks\"></i><span>Motoristas</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li>
                            <a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_driver_index");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Listar motoristas
                            </a>
                        </li>
                        <li><a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_driver_new");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Cadastrar motorista
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-tasks\"></i><span>Clientes</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li>
                            <a href=\"";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_client_index");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Listar clientes
                            </a>
                        </li>
                        <li><a href=\"";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_admin_client_new");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i>Cadastrar cliente
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </section>
    </aside>

    <div class=\"content-wrapper\">
        <section class=\"content\">
            ";
        // line 258
        echo "
            

            ";
        // line 261
        $this->displayBlock('body', $context, $blocks);
        // line 266
        echo " 
        </section>
    </div>

    <footer class=\"main-footer\">
        <strong>
        </strong>
    </footer>

</div>

<script>
    var CKEDITOR_BASEPATH = '/assets/ckeditor/';
</script>

";
        // line 281
        $this->displayBlock('javascripts', $context, $blocks);
        // line 297
        echo "
</body>
</html>
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "42ac8a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/42ac8a0__all-skins.min_1.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/42ac8a0_AdminLTE.min_2.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/42ac8a0_font-awesome.min_3.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/42ac8a0_ionicons_4.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/42ac8a0_dataTables.bootstrap.min_5.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/42ac8a0_bootstrap-datetimepicker_6.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/42ac8a0_fixes_7.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "42ac8a0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/42ac8a0.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    ";
    }

    // line 261
    public function block_body($context, array $blocks = array())
    {
        // line 262
        echo "
                ";
        // line 263
        $this->displayBlock('content', $context, $blocks);
        // line 265
        echo "
            ";
    }

    // line 263
    public function block_content($context, array $blocks = array())
    {
        // line 264
        echo "                ";
    }

    // line 281
    public function block_javascripts($context, array $blocks = array())
    {
        // line 282
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c31e484_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_jquery_1.js");
            // line 292
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_fastclick_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_adminlte.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_jquery.dataTables.min_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_dataTables.bootstrap.min_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_maskphone_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_get-cities-select_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_bootstrap.min_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484_datatables_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "c31e484"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/c31e484.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 294
        echo "

";
    }

    public function getTemplateName()
    {
        return "AdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 294,  438 => 292,  433 => 282,  430 => 281,  426 => 264,  423 => 263,  418 => 265,  416 => 263,  413 => 262,  410 => 261,  406 => 24,  400 => 22,  397 => 21,  390 => 22,  387 => 21,  381 => 22,  378 => 21,  372 => 22,  369 => 21,  363 => 22,  360 => 21,  354 => 22,  351 => 21,  345 => 22,  342 => 21,  336 => 22,  333 => 21,  328 => 13,  325 => 12,  318 => 297,  316 => 281,  299 => 266,  297 => 261,  292 => 258,  276 => 237,  269 => 233,  250 => 217,  243 => 213,  224 => 197,  217 => 193,  198 => 177,  191 => 173,  172 => 157,  165 => 153,  146 => 137,  139 => 133,  119 => 115,  116 => 111,  106 => 103,  102 => 98,  100 => 97,  98 => 94,  96 => 93,  94 => 90,  90 => 87,  83 => 79,  79 => 73,  73 => 62,  70 => 60,  66 => 51,  64 => 50,  49 => 37,  38 => 25,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/base.html.twig");
    }
}
