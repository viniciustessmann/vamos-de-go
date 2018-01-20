<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e199fe7d8380fae8dab3b1bb051565ffb7ea4654aece47c15dbc2a5d2b150488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d5aad7f1d1968c67174e1da417bfb36584083e9dcb85f1759aa9f022a706fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5aad7f1d1968c67174e1da417bfb36584083e9dcb85f1759aa9f022a706fd8->enter($__internal_9d5aad7f1d1968c67174e1da417bfb36584083e9dcb85f1759aa9f022a706fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_c7d848822d68d2cf67647f3afafeaaf763cff9c799aac18393e2dd749c6165e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d848822d68d2cf67647f3afafeaaf763cff9c799aac18393e2dd749c6165e8->enter($__internal_c7d848822d68d2cf67647f3afafeaaf763cff9c799aac18393e2dd749c6165e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9d5aad7f1d1968c67174e1da417bfb36584083e9dcb85f1759aa9f022a706fd8->leave($__internal_9d5aad7f1d1968c67174e1da417bfb36584083e9dcb85f1759aa9f022a706fd8_prof);

        
        $__internal_c7d848822d68d2cf67647f3afafeaaf763cff9c799aac18393e2dd749c6165e8->leave($__internal_c7d848822d68d2cf67647f3afafeaaf763cff9c799aac18393e2dd749c6165e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
