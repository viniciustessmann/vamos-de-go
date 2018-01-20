<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_09ba010d9b94ccbdd841c0f87f9585758cf160ccd3172cc2cedc9fb493407944 extends Twig_Template
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
        $__internal_c080c67c96a1261c77dc0f2ea4871f5c77f05ad3923a17d9bb41d9eb088c1a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c080c67c96a1261c77dc0f2ea4871f5c77f05ad3923a17d9bb41d9eb088c1a39->enter($__internal_c080c67c96a1261c77dc0f2ea4871f5c77f05ad3923a17d9bb41d9eb088c1a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_1191d22006d2b98806400fe91d378f9183ff7aee254905e1c28925422d9e0180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1191d22006d2b98806400fe91d378f9183ff7aee254905e1c28925422d9e0180->enter($__internal_1191d22006d2b98806400fe91d378f9183ff7aee254905e1c28925422d9e0180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c080c67c96a1261c77dc0f2ea4871f5c77f05ad3923a17d9bb41d9eb088c1a39->leave($__internal_c080c67c96a1261c77dc0f2ea4871f5c77f05ad3923a17d9bb41d9eb088c1a39_prof);

        
        $__internal_1191d22006d2b98806400fe91d378f9183ff7aee254905e1c28925422d9e0180->leave($__internal_1191d22006d2b98806400fe91d378f9183ff7aee254905e1c28925422d9e0180_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
