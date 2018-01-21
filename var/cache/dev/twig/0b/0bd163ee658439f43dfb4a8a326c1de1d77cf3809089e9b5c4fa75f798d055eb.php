<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_21eb7fc8d76fcf185e1f9900c9b2a0aee36061087f5fb0f0e2f0b8b411c7fcef extends Twig_Template
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
        $__internal_1d5b481f7fdf6e2475579369d445ecaaabb68e6bae0561a6015a20831eef1257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5b481f7fdf6e2475579369d445ecaaabb68e6bae0561a6015a20831eef1257->enter($__internal_1d5b481f7fdf6e2475579369d445ecaaabb68e6bae0561a6015a20831eef1257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fabed685a721e5b37b54a7fd4349fd240e740d6add45badbc4442510cbe3952d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabed685a721e5b37b54a7fd4349fd240e740d6add45badbc4442510cbe3952d->enter($__internal_fabed685a721e5b37b54a7fd4349fd240e740d6add45badbc4442510cbe3952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1d5b481f7fdf6e2475579369d445ecaaabb68e6bae0561a6015a20831eef1257->leave($__internal_1d5b481f7fdf6e2475579369d445ecaaabb68e6bae0561a6015a20831eef1257_prof);

        
        $__internal_fabed685a721e5b37b54a7fd4349fd240e740d6add45badbc4442510cbe3952d->leave($__internal_fabed685a721e5b37b54a7fd4349fd240e740d6add45badbc4442510cbe3952d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
