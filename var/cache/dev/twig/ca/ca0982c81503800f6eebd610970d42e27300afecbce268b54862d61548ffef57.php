<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7a2f9e32ab1c9c304ef9d5904a9450503e020b334340f1fccd1f998ec0e7bdcf extends Twig_Template
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
        $__internal_aa3410befe8362d1d5652991a501458f05bca5a1c6082e2c022aab341e3391d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3410befe8362d1d5652991a501458f05bca5a1c6082e2c022aab341e3391d7->enter($__internal_aa3410befe8362d1d5652991a501458f05bca5a1c6082e2c022aab341e3391d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_315387ad9701c62f2ad92835342df638c71d6dab1be5e2780a2da7bd4e9da021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315387ad9701c62f2ad92835342df638c71d6dab1be5e2780a2da7bd4e9da021->enter($__internal_315387ad9701c62f2ad92835342df638c71d6dab1be5e2780a2da7bd4e9da021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_aa3410befe8362d1d5652991a501458f05bca5a1c6082e2c022aab341e3391d7->leave($__internal_aa3410befe8362d1d5652991a501458f05bca5a1c6082e2c022aab341e3391d7_prof);

        
        $__internal_315387ad9701c62f2ad92835342df638c71d6dab1be5e2780a2da7bd4e9da021->leave($__internal_315387ad9701c62f2ad92835342df638c71d6dab1be5e2780a2da7bd4e9da021_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
