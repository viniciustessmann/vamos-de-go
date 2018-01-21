<?php

/* @AdminBundle/Resources/views/base.html.twig */
class __TwigTemplate_e945b720c932bb317a8f4bdbf236dddf6bad48ad16ea0df76408a60f5fb18ee4 extends Twig_Template
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
        $__internal_65269707cc7d215a92f74018ef05586f0e3fd8876b19ec3513a4c2ba39b7015e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65269707cc7d215a92f74018ef05586f0e3fd8876b19ec3513a4c2ba39b7015e->enter($__internal_65269707cc7d215a92f74018ef05586f0e3fd8876b19ec3513a4c2ba39b7015e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminBundle/Resources/views/base.html.twig"));

        $__internal_9fc87c3310e45a945289df4837cc4430a27fe00972c96233ef575d41a1c1ce43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc87c3310e45a945289df4837cc4430a27fe00972c96233ef575d41a1c1ce43->enter($__internal_9fc87c3310e45a945289df4837cc4430a27fe00972c96233ef575d41a1c1ce43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminBundle/Resources/views/base.html.twig"));

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
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->getSourceContext()); })()), "user", array()))) {
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
        
        $__internal_65269707cc7d215a92f74018ef05586f0e3fd8876b19ec3513a4c2ba39b7015e->leave($__internal_65269707cc7d215a92f74018ef05586f0e3fd8876b19ec3513a4c2ba39b7015e_prof);

        
        $__internal_9fc87c3310e45a945289df4837cc4430a27fe00972c96233ef575d41a1c1ce43->leave($__internal_9fc87c3310e45a945289df4837cc4430a27fe00972c96233ef575d41a1c1ce43_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1acd918fb73a5226101b01084b8e6af8dd2fd7c43769c9a3f13935e310d78f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1acd918fb73a5226101b01084b8e6af8dd2fd7c43769c9a3f13935e310d78f4->enter($__internal_f1acd918fb73a5226101b01084b8e6af8dd2fd7c43769c9a3f13935e310d78f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1da50d4da95c999c75422489beff1886e1cc13a2cdadc0645a79611114f4bdf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da50d4da95c999c75422489beff1886e1cc13a2cdadc0645a79611114f4bdf2->enter($__internal_1da50d4da95c999c75422489beff1886e1cc13a2cdadc0645a79611114f4bdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "42ac8a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/42ac8a0__all-skins.min_1.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/42ac8a0_AdminLTE.min_2.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/42ac8a0_font-awesome.min_3.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/42ac8a0_ionicons_4.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/42ac8a0_dataTables.bootstrap.min_5.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/42ac8a0_bootstrap-datetimepicker_6.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
            // asset "42ac8a0_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/42ac8a0_fixes_7.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "42ac8a0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_42ac8a0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/42ac8a0.css");
            // line 21
            echo "
        <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    ";
        
        $__internal_1da50d4da95c999c75422489beff1886e1cc13a2cdadc0645a79611114f4bdf2->leave($__internal_1da50d4da95c999c75422489beff1886e1cc13a2cdadc0645a79611114f4bdf2_prof);

        
        $__internal_f1acd918fb73a5226101b01084b8e6af8dd2fd7c43769c9a3f13935e310d78f4->leave($__internal_f1acd918fb73a5226101b01084b8e6af8dd2fd7c43769c9a3f13935e310d78f4_prof);

    }

    // line 261
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fbc7bf3737a7db241c78406e8bf28e157f2d8f6722632a24ef09a1ffec2380b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbc7bf3737a7db241c78406e8bf28e157f2d8f6722632a24ef09a1ffec2380b->enter($__internal_9fbc7bf3737a7db241c78406e8bf28e157f2d8f6722632a24ef09a1ffec2380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2aa83fe57126f093164593c8e4e4dca487195d48508bdefcc0136deeeb2328ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa83fe57126f093164593c8e4e4dca487195d48508bdefcc0136deeeb2328ec->enter($__internal_2aa83fe57126f093164593c8e4e4dca487195d48508bdefcc0136deeeb2328ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 262
        echo "
                ";
        // line 263
        $this->displayBlock('content', $context, $blocks);
        // line 265
        echo "
            ";
        
        $__internal_2aa83fe57126f093164593c8e4e4dca487195d48508bdefcc0136deeeb2328ec->leave($__internal_2aa83fe57126f093164593c8e4e4dca487195d48508bdefcc0136deeeb2328ec_prof);

        
        $__internal_9fbc7bf3737a7db241c78406e8bf28e157f2d8f6722632a24ef09a1ffec2380b->leave($__internal_9fbc7bf3737a7db241c78406e8bf28e157f2d8f6722632a24ef09a1ffec2380b_prof);

    }

    // line 263
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf52a5c58c7804584fc6bcc91ec73c0d14035a7dc014e3e545a8efe902091834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf52a5c58c7804584fc6bcc91ec73c0d14035a7dc014e3e545a8efe902091834->enter($__internal_cf52a5c58c7804584fc6bcc91ec73c0d14035a7dc014e3e545a8efe902091834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bef300cbab1df907e15b5db5563cf499be1909aef012af3f0474e1eb528025da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef300cbab1df907e15b5db5563cf499be1909aef012af3f0474e1eb528025da->enter($__internal_bef300cbab1df907e15b5db5563cf499be1909aef012af3f0474e1eb528025da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 264
        echo "                ";
        
        $__internal_bef300cbab1df907e15b5db5563cf499be1909aef012af3f0474e1eb528025da->leave($__internal_bef300cbab1df907e15b5db5563cf499be1909aef012af3f0474e1eb528025da_prof);

        
        $__internal_cf52a5c58c7804584fc6bcc91ec73c0d14035a7dc014e3e545a8efe902091834->leave($__internal_cf52a5c58c7804584fc6bcc91ec73c0d14035a7dc014e3e545a8efe902091834_prof);

    }

    // line 281
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd23fab982fc2589a9c40887f0a47f78a3f94bb3121681d88999f39ca93eda71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd23fab982fc2589a9c40887f0a47f78a3f94bb3121681d88999f39ca93eda71->enter($__internal_dd23fab982fc2589a9c40887f0a47f78a3f94bb3121681d88999f39ca93eda71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9da2278701ed479dbb8eb9bb443605c01eeffe51078330036bd6ecd67ff6bd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da2278701ed479dbb8eb9bb443605c01eeffe51078330036bd6ecd67ff6bd46->enter($__internal_9da2278701ed479dbb8eb9bb443605c01eeffe51078330036bd6ecd67ff6bd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 282
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c31e484_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_jquery_1.js");
            // line 292
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_fastclick_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_adminlte.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_jquery.dataTables.min_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_dataTables.bootstrap.min_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_maskphone_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_get-cities-select_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_bootstrap.min_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "c31e484_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484_datatables_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "c31e484"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c31e484") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c31e484.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 292, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 294
        echo "

";
        
        $__internal_9da2278701ed479dbb8eb9bb443605c01eeffe51078330036bd6ecd67ff6bd46->leave($__internal_9da2278701ed479dbb8eb9bb443605c01eeffe51078330036bd6ecd67ff6bd46_prof);

        
        $__internal_dd23fab982fc2589a9c40887f0a47f78a3f94bb3121681d88999f39ca93eda71->leave($__internal_dd23fab982fc2589a9c40887f0a47f78a3f94bb3121681d88999f39ca93eda71_prof);

    }

    public function getTemplateName()
    {
        return "@AdminBundle/Resources/views/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 294,  492 => 292,  487 => 282,  478 => 281,  468 => 264,  459 => 263,  448 => 265,  446 => 263,  443 => 262,  434 => 261,  424 => 24,  418 => 22,  415 => 21,  408 => 22,  405 => 21,  399 => 22,  396 => 21,  390 => 22,  387 => 21,  381 => 22,  378 => 21,  372 => 22,  369 => 21,  363 => 22,  360 => 21,  354 => 22,  351 => 21,  346 => 13,  337 => 12,  324 => 297,  322 => 281,  305 => 266,  303 => 261,  298 => 258,  282 => 237,  275 => 233,  256 => 217,  249 => 213,  230 => 197,  223 => 193,  204 => 177,  197 => 173,  178 => 157,  171 => 153,  152 => 137,  145 => 133,  125 => 115,  122 => 111,  112 => 103,  108 => 98,  106 => 97,  104 => 94,  102 => 93,  100 => 90,  96 => 87,  89 => 79,  85 => 73,  79 => 62,  76 => 60,  72 => 51,  70 => 50,  55 => 37,  44 => 25,  42 => 12,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Área Administrativa</title>
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

    {% block stylesheets %}
        {% stylesheets
        '@AdminBundle/Resources/public/css/skins/_all-skins.min.css'
        '@AdminBundle/Resources/public/css/AdminLTE.min.css'
        '@AdminBundle/Resources/public/css/font-awesome.min.css'
        '@AdminBundle/Resources/public/css/ionicons.css'
        '@AdminBundle/Resources/public/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css'
        '@AdminBundle/Resources/public/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css'        
        '@AdminBundle/Resources/public/css/possible/fixes.css' %}

        <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>
        {% endstylesheets %}
    {% endblock %}

</head>
<body class=\"hold-transition skin-black sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <a href=\"\" class=\"logo\">
            <span class=\"logo-mini\"><b>EF</b></span>
            <span class=\"logo-lg\">
                {# {% image '@SiteBundle/Resources/public/images/logo.png' %}
                <img src=\"{{ asset_url }}\" class=\"possible-main-logo\" alt=\"Eletricista do Futuro\"/>
                {% endimage %} #}
                <span>Admin</span>
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
                    {% if app.user is not null %}
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                {# {% if app.user.avatarName is null %}
                                    {% image '@SiteBundle/Resources/public/images/default-avatar.png' %}
                                    <img src=\"{{ asset_url }}\" class=\"user-image\" alt=\"User Image\"/>
                                    {% endimage %}
                                {% else %}
                                    <img src=\"{{ vich_uploader_asset(app.user, 'avatarFile') }}\" class=\"user-image\" alt=\"User Image\">
                                {% endif %} #}

                                {# <span class=\"hidden-xs\">Olá, {{ app.user.name }}</span> #}
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header\">
                                    {# {% if app.user.avatarName is null %}
                                        {% image '@SiteBundle/Resources/public/images/default-avatar.png' %}
                                        <img src=\"{{ asset_url }}\" alt=\"User Image\" class=\"img-circle\"/>
                                        {% endimage %}
                                    {% else %}
                                        <img src=\"{{ vich_uploader_asset(app.user, 'avatarFile') }}\" class=\"img-circle\" alt=\"User Image\">
                                    {% endif %} #}

                                    <p>
                                        {# {{ app.user.name }}
                                        <small>
                                            Membro desde {{ app.user.created|localizeddate('short', 'none', 'pt_BR') }}
                                        </small> #}
                                    </p>
                                </li>
                                <li class=\"user-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 text-center\">
                                            {# <a href=\"{{ path('possible_admin_users_change_password', {'id': app.user.id}) }}\" class=\"btn btn-default btn-flat\">
                                                Senha
                                            </a> #}
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            {# {% if user_management.isAdmin(app.user) %} #}
                                                {# <a href=\"{{ path('possible_admin_administrators_edit', {'id': app.user.id}) }}\" class=\"btn btn-default btn-flat\">
                                                    Editar
                                                </a> #}
                                            {# {% else %} #}
                                                {# <a href=\"{{ path('possible_admin_editors_edit', {'id': app.user.id}) }}\" class=\"btn btn-default btn-flat\">
                                                    Editar
                                                </a> #}
                                            {# {% endif %} #}
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            {# <a href=\"{{ path('possible_fos_user_security_logout') }}\" class=\"btn btn-default btn-flat\">
                                                Sair
                                            </a> #}
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                            </ul>
                        </li>
                    {% endif %}
                    <li>
                        {# <a href=\"{{ path('possible_fos_user_security_logout') }}\">
                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> Sair
                        </a> #}
                    </li>
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
                            <a href=\"{{ path('go_admin_neighborhood_index') }}\">
                                <i class=\"fa fa-circle-o\"></i>Listar bairros
                            </a>
                        </li>
                        <li><a href=\"{{ path('go_admin_neighborhood_new') }}\">
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
                            <a href=\"{{ path('go_admin_point_index') }}\">
                                <i class=\"fa fa-circle-o\"></i>Listar pontos
                            </a>
                        </li>
                        <li><a href=\"{{ path('go_admin_point_new') }}\">
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
                            <a href=\"{{ path('go_admin_way_index') }}\">
                                <i class=\"fa fa-circle-o\"></i>Listar rotas
                            </a>
                        </li>
                        <li><a href=\"{{ path('go_admin_way_new') }}\">
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
                            <a href=\"{{ path('go_admin_newsletter_index') }}\">
                                <i class=\"fa fa-circle-o\"></i>Listar newsletter
                            </a>
                        </li>
                        <li><a href=\"{{ path('go_admin_newsletter_new') }}\">
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
                            <a href=\"{{ path('go_admin_driver_index') }}\">
                                <i class=\"fa fa-circle-o\"></i>Listar motoristas
                            </a>
                        </li>
                        <li><a href=\"{{ path('go_admin_driver_new') }}\">
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
                            <a href=\"{{ path('go_admin_client_index') }}\">
                                <i class=\"fa fa-circle-o\"></i>Listar clientes
                            </a>
                        </li>
                        <li><a href=\"{{ path('go_admin_client_new') }}\">
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
            {# {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }} alert-dismissible\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                        <h4><i class=\"icon fa fa-check\"></i> {{ message }}</h4>
                    </div>
                {% endfor %}
            {% endfor %} #}

            

            {% block body %}

                {% block content %}
                {% endblock %}

            {% endblock %} 
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

{% block javascripts %}
    {% javascripts
    '@AdminBundle/Resources/public/plugins/jquery/jquery.js'
    '@AdminBundle/Resources/public/js/fastclick.js'
    '@AdminBundle/Resources/public/js/adminlte.min.js'
    '@AdminBundle/Resources/public/plugins/datatables.net/js/jquery.dataTables.min.js'
    '@AdminBundle/Resources/public/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js'
    '@AdminBundle/Resources/public/js/possible/maskphone.js'
    '@AdminBundle/Resources/public/js/possible/get-cities-select.js'
    '@AdminBundle/Resources/public/js/bootstrap.min.js'
    '@AdminBundle/Resources/public/js/possible/datatables.js'  %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}


{% endblock %}

</body>
</html>
", "@AdminBundle/Resources/views/base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/AdminBundle/Resources/views/base.html.twig");
    }
}
