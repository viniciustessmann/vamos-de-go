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
        $__internal_bf1e69e2355402893749b71a3f4b025f4a3f1587eb20f87f2e49ba1d7e6bcb75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1e69e2355402893749b71a3f4b025f4a3f1587eb20f87f2e49ba1d7e6bcb75->enter($__internal_bf1e69e2355402893749b71a3f4b025f4a3f1587eb20f87f2e49ba1d7e6bcb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_64371155be74e80f6ed87ddb57a8347e865fa467949acab78a590e04a6484264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64371155be74e80f6ed87ddb57a8347e865fa467949acab78a590e04a6484264->enter($__internal_64371155be74e80f6ed87ddb57a8347e865fa467949acab78a590e04a6484264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_bf1e69e2355402893749b71a3f4b025f4a3f1587eb20f87f2e49ba1d7e6bcb75->leave($__internal_bf1e69e2355402893749b71a3f4b025f4a3f1587eb20f87f2e49ba1d7e6bcb75_prof);

        
        $__internal_64371155be74e80f6ed87ddb57a8347e865fa467949acab78a590e04a6484264->leave($__internal_64371155be74e80f6ed87ddb57a8347e865fa467949acab78a590e04a6484264_prof);

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
