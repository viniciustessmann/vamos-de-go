<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_e2b046c8d24fac6bd2e831d5518e3e09192f2f8cff3c8c77cae8d74fc6e6aa81 extends Twig_Template
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
        $__internal_d90726b4eb19c5c8c21acc364b360c67a7a840783df9cbdd934d966bd40742d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90726b4eb19c5c8c21acc364b360c67a7a840783df9cbdd934d966bd40742d2->enter($__internal_d90726b4eb19c5c8c21acc364b360c67a7a840783df9cbdd934d966bd40742d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d89e784d8ac40fba9f46c0df221384a150476b12bbcdc8283c43b37aa658bc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89e784d8ac40fba9f46c0df221384a150476b12bbcdc8283c43b37aa658bc4d->enter($__internal_d89e784d8ac40fba9f46c0df221384a150476b12bbcdc8283c43b37aa658bc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_d90726b4eb19c5c8c21acc364b360c67a7a840783df9cbdd934d966bd40742d2->leave($__internal_d90726b4eb19c5c8c21acc364b360c67a7a840783df9cbdd934d966bd40742d2_prof);

        
        $__internal_d89e784d8ac40fba9f46c0df221384a150476b12bbcdc8283c43b37aa658bc4d->leave($__internal_d89e784d8ac40fba9f46c0df221384a150476b12bbcdc8283c43b37aa658bc4d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
