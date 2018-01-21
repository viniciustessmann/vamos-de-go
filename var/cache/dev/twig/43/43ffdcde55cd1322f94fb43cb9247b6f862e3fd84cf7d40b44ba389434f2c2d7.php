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
        $__internal_439b7406dc937f1dd9d9c99e6762ae983bab5b7a9f726cd7c064b17d856f8831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439b7406dc937f1dd9d9c99e6762ae983bab5b7a9f726cd7c064b17d856f8831->enter($__internal_439b7406dc937f1dd9d9c99e6762ae983bab5b7a9f726cd7c064b17d856f8831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c01da3dd7d80542a7b5d21d826854b7f88e08a0af7e94b023b1486e32db8e4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01da3dd7d80542a7b5d21d826854b7f88e08a0af7e94b023b1486e32db8e4d6->enter($__internal_c01da3dd7d80542a7b5d21d826854b7f88e08a0af7e94b023b1486e32db8e4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_439b7406dc937f1dd9d9c99e6762ae983bab5b7a9f726cd7c064b17d856f8831->leave($__internal_439b7406dc937f1dd9d9c99e6762ae983bab5b7a9f726cd7c064b17d856f8831_prof);

        
        $__internal_c01da3dd7d80542a7b5d21d826854b7f88e08a0af7e94b023b1486e32db8e4d6->leave($__internal_c01da3dd7d80542a7b5d21d826854b7f88e08a0af7e94b023b1486e32db8e4d6_prof);

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
