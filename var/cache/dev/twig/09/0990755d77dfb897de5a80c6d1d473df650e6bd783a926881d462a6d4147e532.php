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
        $__internal_7ef2dbc95e19862ff4840b8696c5a8880ae79ef1e7748e083bfdcc2920bcdd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef2dbc95e19862ff4840b8696c5a8880ae79ef1e7748e083bfdcc2920bcdd76->enter($__internal_7ef2dbc95e19862ff4840b8696c5a8880ae79ef1e7748e083bfdcc2920bcdd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_151dea6b2406b0319ce8269178245665fbb14d0c7c04f12a5a65c9397d7a3690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151dea6b2406b0319ce8269178245665fbb14d0c7c04f12a5a65c9397d7a3690->enter($__internal_151dea6b2406b0319ce8269178245665fbb14d0c7c04f12a5a65c9397d7a3690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_7ef2dbc95e19862ff4840b8696c5a8880ae79ef1e7748e083bfdcc2920bcdd76->leave($__internal_7ef2dbc95e19862ff4840b8696c5a8880ae79ef1e7748e083bfdcc2920bcdd76_prof);

        
        $__internal_151dea6b2406b0319ce8269178245665fbb14d0c7c04f12a5a65c9397d7a3690->leave($__internal_151dea6b2406b0319ce8269178245665fbb14d0c7c04f12a5a65c9397d7a3690_prof);

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
