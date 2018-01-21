<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_85d69819cc127fa26729db27cc4c94c4d4b9d5bd52248e5e0a1f9c9c3cfcb6b2 extends Twig_Template
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
        $__internal_4b9d22b275628941f109061402b209bd4e2b06303802cfc4dc15733ba3290859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9d22b275628941f109061402b209bd4e2b06303802cfc4dc15733ba3290859->enter($__internal_4b9d22b275628941f109061402b209bd4e2b06303802cfc4dc15733ba3290859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_b3bdfd40dd4beab9f46ba69e678918596a744e5a9327ce3c827ef3b210e57c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bdfd40dd4beab9f46ba69e678918596a744e5a9327ce3c827ef3b210e57c56->enter($__internal_b3bdfd40dd4beab9f46ba69e678918596a744e5a9327ce3c827ef3b210e57c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_4b9d22b275628941f109061402b209bd4e2b06303802cfc4dc15733ba3290859->leave($__internal_4b9d22b275628941f109061402b209bd4e2b06303802cfc4dc15733ba3290859_prof);

        
        $__internal_b3bdfd40dd4beab9f46ba69e678918596a744e5a9327ce3c827ef3b210e57c56->leave($__internal_b3bdfd40dd4beab9f46ba69e678918596a744e5a9327ce3c827ef3b210e57c56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
