<?php

/* SiteBundle:Default:try.html.twig */
class __TwigTemplate_1e42a7492c14f9a5829a7a55d5c174af305c5d5221f9d81ac727bc6706d60e20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SiteBundle/Resources/views/base.html.twig", "SiteBundle:Default:try.html.twig", 1);
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
<article id=\"post-141\" class=\"post-141 page type-page status-publish hentry\">

\t  <header class=\"entry-header\">
 <h1 class=\"entry-title single-title\" itemprop=\"headline\">Experimente Agora</h1> <div class=\"colored-line-left\"></div>
 <div class=\"clearfix\"></div>
  </header><!-- .entry-header -->
\t
\t<div class=\"entry-content content-page 
\t\" itemprop=\"text\">
\t\t<h4 style=\"text-align: center;\">Experimente nosso serviço por uma semana, de segunda a sábado, por R\$49,90</h4>
<h3><img class=\" wp-image-142 aligncenter\" src=\"http://vamosdego.com/wp-content/uploads/2018/01/Sem-título-1-300x225.png\" alt=\"\" width=\"756\" height=\"567\" srcset=\"http://vamosdego.com/wp-content/uploads/2018/01/Sem-título-1-300x225.png 300w, http://vamosdego.com/wp-content/uploads/2018/01/Sem-título-1-768x576.png 768w, http://vamosdego.com/wp-content/uploads/2018/01/Sem-título-1-1024x768.png 1024w, http://vamosdego.com/wp-content/uploads/2018/01/Sem-título-1.png 1200w\" sizes=\"(max-width: 756px) 100vw, 756px\"></h3>
<h4></h4>
<p><code></code></p><code>
<div align=\"center\"><!-- INICIO FORMULARIO BOTAO PAGSEGURO --><p></p>
<form action=\"https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add\" method=\"post\" onsubmit=\"PagSeguroLightbox(this); return false;\">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO --><br>
<input type=\"hidden\" name=\"itemCode\" value=\"B9379E0BAFAFA3F2246F4F9AFB0542A3\"><br>
<input type=\"hidden\" name=\"iot\" value=\"button\"><br>
<input type=\"image\" src=\"https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-comprar-azul.gif\" name=\"submit\" alt=\"Pague com PagSeguro - é rápido, grátis e seguro!\"><br>
</form>
<p><script type=\"text/javascript\" src=\"https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js\"></script><br>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->&gt;
</p></div>
</code><p><code></code></p>
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
        return "SiteBundle:Default:try.html.twig";
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
        return new Twig_Source("", "SiteBundle:Default:try.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/src/SiteBundle/Resources/views/Default/try.html.twig");
    }
}
