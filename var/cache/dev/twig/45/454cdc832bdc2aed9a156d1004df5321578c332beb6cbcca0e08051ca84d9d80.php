<?php

/* SiteBundle:Default:partner.html.twig */
class __TwigTemplate_68abf3917ed54489b0c411238a7beb287fd126a880e6de4e617abe407fb49b17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SiteBundle/Resources/views/base.html.twig", "SiteBundle:Default:partner.html.twig", 1);
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
        $__internal_3c3b6ba5f4333c4226bf93ce7ddc001b85f48c365ba13c76238de9709e6a5141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3b6ba5f4333c4226bf93ce7ddc001b85f48c365ba13c76238de9709e6a5141->enter($__internal_3c3b6ba5f4333c4226bf93ce7ddc001b85f48c365ba13c76238de9709e6a5141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:partner.html.twig"));

        $__internal_5c3c03296bc11436279691f95ac34ba262daef2079de325c207f62fd88a0f3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3c03296bc11436279691f95ac34ba262daef2079de325c207f62fd88a0f3e8->enter($__internal_5c3c03296bc11436279691f95ac34ba262daef2079de325c207f62fd88a0f3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:partner.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c3b6ba5f4333c4226bf93ce7ddc001b85f48c365ba13c76238de9709e6a5141->leave($__internal_3c3b6ba5f4333c4226bf93ce7ddc001b85f48c365ba13c76238de9709e6a5141_prof);

        
        $__internal_5c3c03296bc11436279691f95ac34ba262daef2079de325c207f62fd88a0f3e8->leave($__internal_5c3c03296bc11436279691f95ac34ba262daef2079de325c207f62fd88a0f3e8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5588b3ff210d3bf633e92ea9454c34e385ff3c20f909ee3b64373c90602c38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5588b3ff210d3bf633e92ea9454c34e385ff3c20f909ee3b64373c90602c38c->enter($__internal_c5588b3ff210d3bf633e92ea9454c34e385ff3c20f909ee3b64373c90602c38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1849e5168965739acb60c406f9027bf07ad8f01a8992904af8d6653bf9ecaf0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1849e5168965739acb60c406f9027bf07ad8f01a8992904af8d6653bf9ecaf0a->enter($__internal_1849e5168965739acb60c406f9027bf07ad8f01a8992904af8d6653bf9ecaf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"container\">
\t
\t\t
\t\t<div id=\"primary\" class=\"content-area 
\t\tcol-md-12\">
\t\t\t<main itemscope=\"\" itemtype=\"http://schema.org/WebPageElement\" itemprop=\"mainContentOfPage\" id=\"main\" class=\"site-main\" role=\"main\">

\t\t\t
\t\t\t\t
<article id=\"post-132\" class=\"post-132 page type-page status-publish hentry\">

\t  <header class=\"entry-header\">
 <h1 class=\"entry-title single-title\" itemprop=\"headline\">Seja Parceiro</h1> <div class=\"colored-line-left\"></div>
 <div class=\"clearfix\"></div>
  </header><!-- .entry-header -->
\t
\t<div class=\"entry-content content-page 
\t\" itemprop=\"text\">
\t\t<p style=\"text-align: center;\"><code><iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSeemL3AA3azw3lecV_nSLwrsk1_V8R5u-QPGfizpb9zlgCtRg/viewform?embedded=true\" width=\"1024\" height=\"1400\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\">Carregando…</iframe></code></p>
\t\t\t</div><!-- .entry-content -->

\t<footer class=\"entry-footer\">
\t\t\t</footer><!-- .fentry-footer -->
</article><!-- #post-## -->

\t\t\t\t
\t\t\t
\t\t\t</main><!-- #main -->
\t\t</div><!-- #primary -->
\t\t
\t\t\t\t
\t</div>
";
        
        $__internal_1849e5168965739acb60c406f9027bf07ad8f01a8992904af8d6653bf9ecaf0a->leave($__internal_1849e5168965739acb60c406f9027bf07ad8f01a8992904af8d6653bf9ecaf0a_prof);

        
        $__internal_c5588b3ff210d3bf633e92ea9454c34e385ff3c20f909ee3b64373c90602c38c->leave($__internal_c5588b3ff210d3bf633e92ea9454c34e385ff3c20f909ee3b64373c90602c38c_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:partner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SiteBundle/Resources/views/base.html.twig' %}
{% block content %}
<div class=\"container\">
\t
\t\t
\t\t<div id=\"primary\" class=\"content-area 
\t\tcol-md-12\">
\t\t\t<main itemscope=\"\" itemtype=\"http://schema.org/WebPageElement\" itemprop=\"mainContentOfPage\" id=\"main\" class=\"site-main\" role=\"main\">

\t\t\t
\t\t\t\t
<article id=\"post-132\" class=\"post-132 page type-page status-publish hentry\">

\t  <header class=\"entry-header\">
 <h1 class=\"entry-title single-title\" itemprop=\"headline\">Seja Parceiro</h1> <div class=\"colored-line-left\"></div>
 <div class=\"clearfix\"></div>
  </header><!-- .entry-header -->
\t
\t<div class=\"entry-content content-page 
\t\" itemprop=\"text\">
\t\t<p style=\"text-align: center;\"><code><iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSeemL3AA3azw3lecV_nSLwrsk1_V8R5u-QPGfizpb9zlgCtRg/viewform?embedded=true\" width=\"1024\" height=\"1400\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\">Carregando…</iframe></code></p>
\t\t\t</div><!-- .entry-content -->

\t<footer class=\"entry-footer\">
\t\t\t</footer><!-- .fentry-footer -->
</article><!-- #post-## -->

\t\t\t\t
\t\t\t
\t\t\t</main><!-- #main -->
\t\t</div><!-- #primary -->
\t\t
\t\t\t\t
\t</div>
{% endblock %} 


", "SiteBundle:Default:partner.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/SiteBundle/Resources/views/Default/partner.html.twig");
    }
}
