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
        $__internal_00cb63b63dbe4220d4e1371493c1bdeedab2a995550ff8ecbb0e9ae52f93debf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00cb63b63dbe4220d4e1371493c1bdeedab2a995550ff8ecbb0e9ae52f93debf->enter($__internal_00cb63b63dbe4220d4e1371493c1bdeedab2a995550ff8ecbb0e9ae52f93debf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7a11f28a62ba568b2ca933b4f78d175484a136aae56a7f5a9b52d1e162690e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a11f28a62ba568b2ca933b4f78d175484a136aae56a7f5a9b52d1e162690e51->enter($__internal_7a11f28a62ba568b2ca933b4f78d175484a136aae56a7f5a9b52d1e162690e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_00cb63b63dbe4220d4e1371493c1bdeedab2a995550ff8ecbb0e9ae52f93debf->leave($__internal_00cb63b63dbe4220d4e1371493c1bdeedab2a995550ff8ecbb0e9ae52f93debf_prof);

        
        $__internal_7a11f28a62ba568b2ca933b4f78d175484a136aae56a7f5a9b52d1e162690e51->leave($__internal_7a11f28a62ba568b2ca933b4f78d175484a136aae56a7f5a9b52d1e162690e51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9846223c2a054189b8e8f263d42cfb8fde5ef5e9fd1fee90d0e08cc7df6933c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9846223c2a054189b8e8f263d42cfb8fde5ef5e9fd1fee90d0e08cc7df6933c->enter($__internal_b9846223c2a054189b8e8f263d42cfb8fde5ef5e9fd1fee90d0e08cc7df6933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04edd93fff08b88ce5965dd194551def7423e0d52385ff6431dd3142305f01c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04edd93fff08b88ce5965dd194551def7423e0d52385ff6431dd3142305f01c5->enter($__internal_04edd93fff08b88ce5965dd194551def7423e0d52385ff6431dd3142305f01c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_04edd93fff08b88ce5965dd194551def7423e0d52385ff6431dd3142305f01c5->leave($__internal_04edd93fff08b88ce5965dd194551def7423e0d52385ff6431dd3142305f01c5_prof);

        
        $__internal_b9846223c2a054189b8e8f263d42cfb8fde5ef5e9fd1fee90d0e08cc7df6933c->leave($__internal_b9846223c2a054189b8e8f263d42cfb8fde5ef5e9fd1fee90d0e08cc7df6933c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8fca36e75e8de3a7989a1dcf83c78d1983a643fe6774f133db987b88758c21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fca36e75e8de3a7989a1dcf83c78d1983a643fe6774f133db987b88758c21a->enter($__internal_f8fca36e75e8de3a7989a1dcf83c78d1983a643fe6774f133db987b88758c21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cbdb22f31421ac0bdedf0e199fedd07b2ab1372b46efcfd2c9b4a45ffa1d2e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdb22f31421ac0bdedf0e199fedd07b2ab1372b46efcfd2c9b4a45ffa1d2e4e->enter($__internal_cbdb22f31421ac0bdedf0e199fedd07b2ab1372b46efcfd2c9b4a45ffa1d2e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cbdb22f31421ac0bdedf0e199fedd07b2ab1372b46efcfd2c9b4a45ffa1d2e4e->leave($__internal_cbdb22f31421ac0bdedf0e199fedd07b2ab1372b46efcfd2c9b4a45ffa1d2e4e_prof);

        
        $__internal_f8fca36e75e8de3a7989a1dcf83c78d1983a643fe6774f133db987b88758c21a->leave($__internal_f8fca36e75e8de3a7989a1dcf83c78d1983a643fe6774f133db987b88758c21a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_45518b6320d1e790ddc788ccfcabf68765c489a6196aec4ed60f780f449f5d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45518b6320d1e790ddc788ccfcabf68765c489a6196aec4ed60f780f449f5d8a->enter($__internal_45518b6320d1e790ddc788ccfcabf68765c489a6196aec4ed60f780f449f5d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0e396cb3ef51c88112fd73483fa2b86f3ee276e95c774f121b2869cf3f428c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e396cb3ef51c88112fd73483fa2b86f3ee276e95c774f121b2869cf3f428c1->enter($__internal_a0e396cb3ef51c88112fd73483fa2b86f3ee276e95c774f121b2869cf3f428c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a0e396cb3ef51c88112fd73483fa2b86f3ee276e95c774f121b2869cf3f428c1->leave($__internal_a0e396cb3ef51c88112fd73483fa2b86f3ee276e95c774f121b2869cf3f428c1_prof);

        
        $__internal_45518b6320d1e790ddc788ccfcabf68765c489a6196aec4ed60f780f449f5d8a->leave($__internal_45518b6320d1e790ddc788ccfcabf68765c489a6196aec4ed60f780f449f5d8a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e2c36857abfe2103eaf2c5c3a17f9868deaae8714b1486cd807548c409ce409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2c36857abfe2103eaf2c5c3a17f9868deaae8714b1486cd807548c409ce409->enter($__internal_7e2c36857abfe2103eaf2c5c3a17f9868deaae8714b1486cd807548c409ce409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7d98fb3adefc3d86362987f1313ed96cef0b1a6043b9aa7a36cc7af12f8bcef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d98fb3adefc3d86362987f1313ed96cef0b1a6043b9aa7a36cc7af12f8bcef1->enter($__internal_7d98fb3adefc3d86362987f1313ed96cef0b1a6043b9aa7a36cc7af12f8bcef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d98fb3adefc3d86362987f1313ed96cef0b1a6043b9aa7a36cc7af12f8bcef1->leave($__internal_7d98fb3adefc3d86362987f1313ed96cef0b1a6043b9aa7a36cc7af12f8bcef1_prof);

        
        $__internal_7e2c36857abfe2103eaf2c5c3a17f9868deaae8714b1486cd807548c409ce409->leave($__internal_7e2c36857abfe2103eaf2c5c3a17f9868deaae8714b1486cd807548c409ce409_prof);

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
