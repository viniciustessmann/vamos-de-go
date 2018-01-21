<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_db4d79cc3ddcf9c6c95be40a256700b0ee57a8f198f323781cff380181c0e40a extends Twig_Template
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
        $__internal_d83bad3c1fe45ea52205a5d85b4752685f04be6aa5e894ecb7e659b228b7ef8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83bad3c1fe45ea52205a5d85b4752685f04be6aa5e894ecb7e659b228b7ef8f->enter($__internal_d83bad3c1fe45ea52205a5d85b4752685f04be6aa5e894ecb7e659b228b7ef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_954e5e2f2ccfdd225bd5df475cc311621686e7520c3b4f2f1a3195f039c3763f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954e5e2f2ccfdd225bd5df475cc311621686e7520c3b4f2f1a3195f039c3763f->enter($__internal_954e5e2f2ccfdd225bd5df475cc311621686e7520c3b4f2f1a3195f039c3763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d83bad3c1fe45ea52205a5d85b4752685f04be6aa5e894ecb7e659b228b7ef8f->leave($__internal_d83bad3c1fe45ea52205a5d85b4752685f04be6aa5e894ecb7e659b228b7ef8f_prof);

        
        $__internal_954e5e2f2ccfdd225bd5df475cc311621686e7520c3b4f2f1a3195f039c3763f->leave($__internal_954e5e2f2ccfdd225bd5df475cc311621686e7520c3b4f2f1a3195f039c3763f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
