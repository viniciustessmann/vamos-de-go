<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ecbbffce36f0dbc8c0ccf0d271859e846dd305a07c3b13ddfcf536c136300559 extends Twig_Template
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
        $__internal_30e696e529d76e8a3573726894ffabd1bbf7f010249504f8f48892b4803df694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e696e529d76e8a3573726894ffabd1bbf7f010249504f8f48892b4803df694->enter($__internal_30e696e529d76e8a3573726894ffabd1bbf7f010249504f8f48892b4803df694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_9afcaf2d373b414819557f2dca3cd4ef55d397e77ab3373ee5e871407ac923df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afcaf2d373b414819557f2dca3cd4ef55d397e77ab3373ee5e871407ac923df->enter($__internal_9afcaf2d373b414819557f2dca3cd4ef55d397e77ab3373ee5e871407ac923df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_30e696e529d76e8a3573726894ffabd1bbf7f010249504f8f48892b4803df694->leave($__internal_30e696e529d76e8a3573726894ffabd1bbf7f010249504f8f48892b4803df694_prof);

        
        $__internal_9afcaf2d373b414819557f2dca3cd4ef55d397e77ab3373ee5e871407ac923df->leave($__internal_9afcaf2d373b414819557f2dca3cd4ef55d397e77ab3373ee5e871407ac923df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
