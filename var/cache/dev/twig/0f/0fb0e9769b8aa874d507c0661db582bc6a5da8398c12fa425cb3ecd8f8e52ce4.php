<?php

/* SiteBundle:Default:home.html.twig */
class __TwigTemplate_c7588b7440b809604a0b8e0d5eee0b2bb6bba8d12b8d38576038a430f4cc6b73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SiteBundle/Resources/views/base.html.twig", "SiteBundle:Default:home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SiteBundle/Resources/views/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1400a6afd39641123a6874cedb9f2532d2fdbb2244f1457a632c9177e560d6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1400a6afd39641123a6874cedb9f2532d2fdbb2244f1457a632c9177e560d6e9->enter($__internal_1400a6afd39641123a6874cedb9f2532d2fdbb2244f1457a632c9177e560d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:home.html.twig"));

        $__internal_b279d5c491c683f2d11fe2b60d49620fd415e86129e5071a155d55a18f3338fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b279d5c491c683f2d11fe2b60d49620fd415e86129e5071a155d55a18f3338fc->enter($__internal_b279d5c491c683f2d11fe2b60d49620fd415e86129e5071a155d55a18f3338fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1400a6afd39641123a6874cedb9f2532d2fdbb2244f1457a632c9177e560d6e9->leave($__internal_1400a6afd39641123a6874cedb9f2532d2fdbb2244f1457a632c9177e560d6e9_prof);

        
        $__internal_b279d5c491c683f2d11fe2b60d49620fd415e86129e5071a155d55a18f3338fc->leave($__internal_b279d5c491c683f2d11fe2b60d49620fd415e86129e5071a155d55a18f3338fc_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_db4346f51f45f6282c872171a97d3de0d5b01398129b798cfd93313a9bb89666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4346f51f45f6282c872171a97d3de0d5b01398129b798cfd93313a9bb89666->enter($__internal_db4346f51f45f6282c872171a97d3de0d5b01398129b798cfd93313a9bb89666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be9f29b423e006f9300eda847c960a530c503411afeba870ed25190988b26dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9f29b423e006f9300eda847c960a530c503411afeba870ed25190988b26dc2->enter($__internal_be9f29b423e006f9300eda847c960a530c503411afeba870ed25190988b26dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
\t<article id=\"post-77\" class=\"contact-page post-77 page type-page status-publish hentry\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"dark-text strong\">Cadastre-se ;)</h2>

\t\t\t\t<div class=\"pirate_forms_wrap\">

\t\t\t\t\t";
        // line 11
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "status"), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "status"), "method") == 1))) {
            // line 12
            echo "\t\t\t\t\t\t<p style=\"color:green; font-size:28px\">Cadastro realizado com sucesso!</p>
\t\t\t\t\t";
        }
        // line 14
        echo "
\t\t\t\t\t";
        // line 15
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "status"), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "status"), "method") == 2))) {
            // line 16
            echo "\t\t\t\t\t\t<p style=\"color:red; font-size:28px\">Erro ao realizar o cadastro</p>
\t\t\t\t\t";
        }
        // line 18
        echo "
\t\t\t\t\t";
        // line 19
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "status"), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "status"), "method") == 3))) {
            // line 20
            echo "\t\t\t\t\t\t<p style=\"color:red; font-size:28px\">E-mail já cadastrado</p>
\t\t\t\t\t";
        }
        // line 22
        echo "
\t\t\t\t\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "pirate_forms  form_honeypot-on pirate_forms_from_widget-on wordpress-nonce-on pirate-forms-contact-name-on pirate-forms-contact-email-on pirate-forms-contact-subject-on pirate-forms-contact-message-on pirate-forms-contact-submit-on pirate-forms-contact-referrer-on")));
        echo "
\t\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer class=\"entry-footer\">
\t\t\t</footer>
\t\t</div>
\t</article>
\t<hr>

    <div itemprop id=\"content\" class=\"content-wrap\" role=\"main\">
\t<section class=\"brief text-left brief-design-one brief-left\" id=\"story\" role=\"region\" aria-label=\"About\">
\t\t<div class=\"section-overlay-layer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 brief-content-two\">
\t\t\t\t\t\t<div class=\"brief-image-right\">
\t\t\t\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/teste3-3.png"), "html", null, true);
        echo "\" alt=\"Nossa história\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6 content-section brief-content-one\">
\t\t\t\t\t\t<h2 class=\"text-left dark-text\">Nossa história</h2>
\t\t\t\t\t\t<div class=\"colored-line-left\">
                        </div>
\t\t\t\t\t\t<div class=\"brief-content-text\">Nós acreditamos que você mereça um serviço de transporte coletivo de qualidade e preço justo. Por isso, após sofrer por mais de 10 anos com o transporte público, nós resolvemos fundar a Vamos de Go. Com isso, suprimos a falta de qualidade, segurança e conforto no transporte coletivo. 
Nós chegamos para entregar o que você já cansou de pedir para as empresas de transporte público.
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"call-to-action ribbon-wrap\" id=\"ribbon\" role=\"region\" aria-label=\"Ribbon\">
        <div class=\"section-overlay-layer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">\t\t
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<h2 class=\"white-text strong\">Transporte coletivo por demanda</h2>
                        <div class=\"ribbon-subtitle-wrap\">Todos sentados, seguros e com muito conforto
                            <p>A era do aperto vai acabar </p>
                        </div><button onclick=\"window.location='http://bit.ly/2CQYegS'\" class=\"btn btn-primary standard-button\" type=\"button\" data-toggle=\"modal\" data-target=\"#stamp-modal\"><span class=\"screen-reader-text\">Ribbon button label:EXPERIMENTE AGORA POR UMA SEMANA</span>EXPERIMENTE AGORA POR UMA SEMANA</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 ribbon-image-wrap\">
                        <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/teste.png"), "html", null, true);
        echo "\" >
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

";
        
        $__internal_be9f29b423e006f9300eda847c960a530c503411afeba870ed25190988b26dc2->leave($__internal_be9f29b423e006f9300eda847c960a530c503411afeba870ed25190988b26dc2_prof);

        
        $__internal_db4346f51f45f6282c872171a97d3de0d5b01398129b798cfd93313a9bb89666->leave($__internal_db4346f51f45f6282c872171a97d3de0d5b01398129b798cfd93313a9bb89666_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 68,  109 => 40,  90 => 24,  86 => 23,  83 => 22,  79 => 20,  77 => 19,  74 => 18,  70 => 16,  68 => 15,  65 => 14,  61 => 12,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SiteBundle/Resources/views/base.html.twig' %}
{% block content %}

\t<article id=\"post-77\" class=\"contact-page post-77 page type-page status-publish hentry\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"dark-text strong\">Cadastre-se ;)</h2>

\t\t\t\t<div class=\"pirate_forms_wrap\">

\t\t\t\t\t{% if app.request.get('status') and app.request.get('status') == 1 %}
\t\t\t\t\t\t<p style=\"color:green; font-size:28px\">Cadastro realizado com sucesso!</p>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if app.request.get('status') and app.request.get('status') == 2 %}
\t\t\t\t\t\t<p style=\"color:red; font-size:28px\">Erro ao realizar o cadastro</p>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if app.request.get('status') and app.request.get('status') == 3 %}
\t\t\t\t\t\t<p style=\"color:red; font-size:28px\">E-mail já cadastrado</p>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{{ form_start(form, {attr: {class: 'pirate_forms  form_honeypot-on pirate_forms_from_widget-on wordpress-nonce-on pirate-forms-contact-name-on pirate-forms-contact-email-on pirate-forms-contact-subject-on pirate-forms-contact-message-on pirate-forms-contact-submit-on pirate-forms-contact-referrer-on'} }) }}
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer class=\"entry-footer\">
\t\t\t</footer>
\t\t</div>
\t</article>
\t<hr>

    <div itemprop id=\"content\" class=\"content-wrap\" role=\"main\">
\t<section class=\"brief text-left brief-design-one brief-left\" id=\"story\" role=\"region\" aria-label=\"About\">
\t\t<div class=\"section-overlay-layer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 brief-content-two\">
\t\t\t\t\t\t<div class=\"brief-image-right\">
\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/img/teste3-3.png') }}\" alt=\"Nossa história\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6 content-section brief-content-one\">
\t\t\t\t\t\t<h2 class=\"text-left dark-text\">Nossa história</h2>
\t\t\t\t\t\t<div class=\"colored-line-left\">
                        </div>
\t\t\t\t\t\t<div class=\"brief-content-text\">Nós acreditamos que você mereça um serviço de transporte coletivo de qualidade e preço justo. Por isso, após sofrer por mais de 10 anos com o transporte público, nós resolvemos fundar a Vamos de Go. Com isso, suprimos a falta de qualidade, segurança e conforto no transporte coletivo. 
Nós chegamos para entregar o que você já cansou de pedir para as empresas de transporte público.
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"call-to-action ribbon-wrap\" id=\"ribbon\" role=\"region\" aria-label=\"Ribbon\">
        <div class=\"section-overlay-layer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">\t\t
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<h2 class=\"white-text strong\">Transporte coletivo por demanda</h2>
                        <div class=\"ribbon-subtitle-wrap\">Todos sentados, seguros e com muito conforto
                            <p>A era do aperto vai acabar </p>
                        </div><button onclick=\"window.location='http://bit.ly/2CQYegS'\" class=\"btn btn-primary standard-button\" type=\"button\" data-toggle=\"modal\" data-target=\"#stamp-modal\"><span class=\"screen-reader-text\">Ribbon button label:EXPERIMENTE AGORA POR UMA SEMANA</span>EXPERIMENTE AGORA POR UMA SEMANA</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 ribbon-image-wrap\">
                        <img src=\"{{ asset('bundles/img/teste.png') }}\" >
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

{% endblock %} 
", "SiteBundle:Default:home.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/SiteBundle/Resources/views/Default/home.html.twig");
    }
}
