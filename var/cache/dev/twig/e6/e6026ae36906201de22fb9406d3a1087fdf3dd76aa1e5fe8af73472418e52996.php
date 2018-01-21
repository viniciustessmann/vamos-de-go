<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_cac439ca3aa7ef14cda6ed5c97957b05082289e6397575752de25b404bad82ce extends Twig_Template
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
        $__internal_8f298030dc6cfcffc58bfab83b425177b0394fe2f2d6de5a5f78746a8114823b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f298030dc6cfcffc58bfab83b425177b0394fe2f2d6de5a5f78746a8114823b->enter($__internal_8f298030dc6cfcffc58bfab83b425177b0394fe2f2d6de5a5f78746a8114823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_944903607104c6c5e3ded4099eb25106fdcb0144fd0a62bad36da5cbe095c3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944903607104c6c5e3ded4099eb25106fdcb0144fd0a62bad36da5cbe095c3f7->enter($__internal_944903607104c6c5e3ded4099eb25106fdcb0144fd0a62bad36da5cbe095c3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8f298030dc6cfcffc58bfab83b425177b0394fe2f2d6de5a5f78746a8114823b->leave($__internal_8f298030dc6cfcffc58bfab83b425177b0394fe2f2d6de5a5f78746a8114823b_prof);

        
        $__internal_944903607104c6c5e3ded4099eb25106fdcb0144fd0a62bad36da5cbe095c3f7->leave($__internal_944903607104c6c5e3ded4099eb25106fdcb0144fd0a62bad36da5cbe095c3f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
