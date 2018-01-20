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
        $__internal_ebd5d831ce94369a51607305a5d763a4572b21b830d9a0b24461a11e1435d101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd5d831ce94369a51607305a5d763a4572b21b830d9a0b24461a11e1435d101->enter($__internal_ebd5d831ce94369a51607305a5d763a4572b21b830d9a0b24461a11e1435d101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5bc5ae26886693937dd1c6e91209c006901d05458afb49dec7d75f30ad34cb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc5ae26886693937dd1c6e91209c006901d05458afb49dec7d75f30ad34cb41->enter($__internal_5bc5ae26886693937dd1c6e91209c006901d05458afb49dec7d75f30ad34cb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ebd5d831ce94369a51607305a5d763a4572b21b830d9a0b24461a11e1435d101->leave($__internal_ebd5d831ce94369a51607305a5d763a4572b21b830d9a0b24461a11e1435d101_prof);

        
        $__internal_5bc5ae26886693937dd1c6e91209c006901d05458afb49dec7d75f30ad34cb41->leave($__internal_5bc5ae26886693937dd1c6e91209c006901d05458afb49dec7d75f30ad34cb41_prof);

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
