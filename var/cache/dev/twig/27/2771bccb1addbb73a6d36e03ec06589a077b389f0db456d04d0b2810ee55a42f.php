<?php

/* ::base.html.twig */
class __TwigTemplate_0cd00cd357561f8448e72f7f8d457a11abeca367d0c4ba100efbb1ef1edcf94a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a28475c9bcf7204f05056dea964154a590934a1a308f0f2c429ff101fe4e12ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28475c9bcf7204f05056dea964154a590934a1a308f0f2c429ff101fe4e12ef->enter($__internal_a28475c9bcf7204f05056dea964154a590934a1a308f0f2c429ff101fe4e12ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_42c2570ac02f3827d11ed96707cdafc7a49ae56f54aec9f33aa440e95b62c326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c2570ac02f3827d11ed96707cdafc7a49ae56f54aec9f33aa440e95b62c326->enter($__internal_42c2570ac02f3827d11ed96707cdafc7a49ae56f54aec9f33aa440e95b62c326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a28475c9bcf7204f05056dea964154a590934a1a308f0f2c429ff101fe4e12ef->leave($__internal_a28475c9bcf7204f05056dea964154a590934a1a308f0f2c429ff101fe4e12ef_prof);

        
        $__internal_42c2570ac02f3827d11ed96707cdafc7a49ae56f54aec9f33aa440e95b62c326->leave($__internal_42c2570ac02f3827d11ed96707cdafc7a49ae56f54aec9f33aa440e95b62c326_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_775831973ca42f1425ed4252c1d9abf4d8035e4bab55d69273886dd42c988db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775831973ca42f1425ed4252c1d9abf4d8035e4bab55d69273886dd42c988db4->enter($__internal_775831973ca42f1425ed4252c1d9abf4d8035e4bab55d69273886dd42c988db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d85ac007c6ad1ddde7f341fb6ce729f3799fd75f078dfb9af8b25fb4b65f7ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85ac007c6ad1ddde7f341fb6ce729f3799fd75f078dfb9af8b25fb4b65f7ef2->enter($__internal_d85ac007c6ad1ddde7f341fb6ce729f3799fd75f078dfb9af8b25fb4b65f7ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d85ac007c6ad1ddde7f341fb6ce729f3799fd75f078dfb9af8b25fb4b65f7ef2->leave($__internal_d85ac007c6ad1ddde7f341fb6ce729f3799fd75f078dfb9af8b25fb4b65f7ef2_prof);

        
        $__internal_775831973ca42f1425ed4252c1d9abf4d8035e4bab55d69273886dd42c988db4->leave($__internal_775831973ca42f1425ed4252c1d9abf4d8035e4bab55d69273886dd42c988db4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_876b8021eb7ff7d12ebf9a03115296edc42bae9e0448624c69b1092f823d42e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876b8021eb7ff7d12ebf9a03115296edc42bae9e0448624c69b1092f823d42e9->enter($__internal_876b8021eb7ff7d12ebf9a03115296edc42bae9e0448624c69b1092f823d42e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_afe8aa59c84a62dc91a16a1781a7ad0a99b0c6c2edc8e4fc6f22dcfc47c07f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe8aa59c84a62dc91a16a1781a7ad0a99b0c6c2edc8e4fc6f22dcfc47c07f9f->enter($__internal_afe8aa59c84a62dc91a16a1781a7ad0a99b0c6c2edc8e4fc6f22dcfc47c07f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_afe8aa59c84a62dc91a16a1781a7ad0a99b0c6c2edc8e4fc6f22dcfc47c07f9f->leave($__internal_afe8aa59c84a62dc91a16a1781a7ad0a99b0c6c2edc8e4fc6f22dcfc47c07f9f_prof);

        
        $__internal_876b8021eb7ff7d12ebf9a03115296edc42bae9e0448624c69b1092f823d42e9->leave($__internal_876b8021eb7ff7d12ebf9a03115296edc42bae9e0448624c69b1092f823d42e9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8841862b37257662c639f12052d88f4863ed84ab5da9105482208eef4dfcce88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8841862b37257662c639f12052d88f4863ed84ab5da9105482208eef4dfcce88->enter($__internal_8841862b37257662c639f12052d88f4863ed84ab5da9105482208eef4dfcce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d28c2932ede062749f1a81d09ed1a114a158e1bc16ae630492812c8937cb58f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28c2932ede062749f1a81d09ed1a114a158e1bc16ae630492812c8937cb58f2->enter($__internal_d28c2932ede062749f1a81d09ed1a114a158e1bc16ae630492812c8937cb58f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d28c2932ede062749f1a81d09ed1a114a158e1bc16ae630492812c8937cb58f2->leave($__internal_d28c2932ede062749f1a81d09ed1a114a158e1bc16ae630492812c8937cb58f2_prof);

        
        $__internal_8841862b37257662c639f12052d88f4863ed84ab5da9105482208eef4dfcce88->leave($__internal_8841862b37257662c639f12052d88f4863ed84ab5da9105482208eef4dfcce88_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f128b8a6b75f1cdb207a659019145b69c47e2034bccfe5531eb15be6ab3ab98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f128b8a6b75f1cdb207a659019145b69c47e2034bccfe5531eb15be6ab3ab98->enter($__internal_6f128b8a6b75f1cdb207a659019145b69c47e2034bccfe5531eb15be6ab3ab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da201117a28c9a56106706a15c47ed5e39f4dae94a1579c66373ab6db87d999e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da201117a28c9a56106706a15c47ed5e39f4dae94a1579c66373ab6db87d999e->enter($__internal_da201117a28c9a56106706a15c47ed5e39f4dae94a1579c66373ab6db87d999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da201117a28c9a56106706a15c47ed5e39f4dae94a1579c66373ab6db87d999e->leave($__internal_da201117a28c9a56106706a15c47ed5e39f4dae94a1579c66373ab6db87d999e_prof);

        
        $__internal_6f128b8a6b75f1cdb207a659019145b69c47e2034bccfe5531eb15be6ab3ab98->leave($__internal_6f128b8a6b75f1cdb207a659019145b69c47e2034bccfe5531eb15be6ab3ab98_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/app/Resources/views/base.html.twig");
    }
}
