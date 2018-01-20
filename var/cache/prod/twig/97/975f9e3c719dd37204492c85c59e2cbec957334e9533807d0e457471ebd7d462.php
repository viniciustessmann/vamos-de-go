<?php

/* SiteBundle:Default:partner.html.twig */
class __TwigTemplate_2126f2d1d8bb9616c1df665c95b8814e952e614e1a32406aa601be883dc7d18a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SiteBundle:Default:partner.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/SiteBundle/Resources/views/Default/partner.html.twig");
    }
}
