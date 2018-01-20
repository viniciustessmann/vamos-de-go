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
        $__internal_25e502c98eec4a2690a3d49267d5f69ef02bc254c5e46b44034c78bad6d4dd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e502c98eec4a2690a3d49267d5f69ef02bc254c5e46b44034c78bad6d4dd15->enter($__internal_25e502c98eec4a2690a3d49267d5f69ef02bc254c5e46b44034c78bad6d4dd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_eb9a662a7ee2dd5282beb9f82b5253f6aa9afc76c24fc165b4a04af26e041923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9a662a7ee2dd5282beb9f82b5253f6aa9afc76c24fc165b4a04af26e041923->enter($__internal_eb9a662a7ee2dd5282beb9f82b5253f6aa9afc76c24fc165b4a04af26e041923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_25e502c98eec4a2690a3d49267d5f69ef02bc254c5e46b44034c78bad6d4dd15->leave($__internal_25e502c98eec4a2690a3d49267d5f69ef02bc254c5e46b44034c78bad6d4dd15_prof);

        
        $__internal_eb9a662a7ee2dd5282beb9f82b5253f6aa9afc76c24fc165b4a04af26e041923->leave($__internal_eb9a662a7ee2dd5282beb9f82b5253f6aa9afc76c24fc165b4a04af26e041923_prof);

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
