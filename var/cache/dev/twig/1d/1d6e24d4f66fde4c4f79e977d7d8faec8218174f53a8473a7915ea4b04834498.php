<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3890b02ed0f3123065eff24fc36f1894948dbb56c3279970757d596f176e975b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af0c5fd2146a0726882435c97186d28e5342a6b0ae4d2ed64d9fc265bba10d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0c5fd2146a0726882435c97186d28e5342a6b0ae4d2ed64d9fc265bba10d04->enter($__internal_af0c5fd2146a0726882435c97186d28e5342a6b0ae4d2ed64d9fc265bba10d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_eaa58c33310afb8381d1e783d5909a956021f7f615b99d0965277a13b28deab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa58c33310afb8381d1e783d5909a956021f7f615b99d0965277a13b28deab4->enter($__internal_eaa58c33310afb8381d1e783d5909a956021f7f615b99d0965277a13b28deab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af0c5fd2146a0726882435c97186d28e5342a6b0ae4d2ed64d9fc265bba10d04->leave($__internal_af0c5fd2146a0726882435c97186d28e5342a6b0ae4d2ed64d9fc265bba10d04_prof);

        
        $__internal_eaa58c33310afb8381d1e783d5909a956021f7f615b99d0965277a13b28deab4->leave($__internal_eaa58c33310afb8381d1e783d5909a956021f7f615b99d0965277a13b28deab4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76039c2c3c80c427bb001e0cec916dda53f38f4564b377db2eec91296c2b4706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76039c2c3c80c427bb001e0cec916dda53f38f4564b377db2eec91296c2b4706->enter($__internal_76039c2c3c80c427bb001e0cec916dda53f38f4564b377db2eec91296c2b4706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95dae86a51a998d8b53a0b921fa35e8ddd89ff482fce7173f1ad04c4eaa91415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dae86a51a998d8b53a0b921fa35e8ddd89ff482fce7173f1ad04c4eaa91415->enter($__internal_95dae86a51a998d8b53a0b921fa35e8ddd89ff482fce7173f1ad04c4eaa91415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_95dae86a51a998d8b53a0b921fa35e8ddd89ff482fce7173f1ad04c4eaa91415->leave($__internal_95dae86a51a998d8b53a0b921fa35e8ddd89ff482fce7173f1ad04c4eaa91415_prof);

        
        $__internal_76039c2c3c80c427bb001e0cec916dda53f38f4564b377db2eec91296c2b4706->leave($__internal_76039c2c3c80c427bb001e0cec916dda53f38f4564b377db2eec91296c2b4706_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d86b400e9b183dc1acfa3681ccc7bde89499393e4cea35293cff73b2a084b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d86b400e9b183dc1acfa3681ccc7bde89499393e4cea35293cff73b2a084b92->enter($__internal_2d86b400e9b183dc1acfa3681ccc7bde89499393e4cea35293cff73b2a084b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6820082135ccd76705f0a21323b218c4b9e08804b51bf791aaeffe04800202e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6820082135ccd76705f0a21323b218c4b9e08804b51bf791aaeffe04800202e->enter($__internal_f6820082135ccd76705f0a21323b218c4b9e08804b51bf791aaeffe04800202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_f6820082135ccd76705f0a21323b218c4b9e08804b51bf791aaeffe04800202e->leave($__internal_f6820082135ccd76705f0a21323b218c4b9e08804b51bf791aaeffe04800202e_prof);

        
        $__internal_2d86b400e9b183dc1acfa3681ccc7bde89499393e4cea35293cff73b2a084b92->leave($__internal_2d86b400e9b183dc1acfa3681ccc7bde89499393e4cea35293cff73b2a084b92_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
