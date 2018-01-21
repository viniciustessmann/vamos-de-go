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
        $__internal_d027438980a8f7025ff8dc0fee2061767c4fd3fb7e70173749fa471e4871d8c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d027438980a8f7025ff8dc0fee2061767c4fd3fb7e70173749fa471e4871d8c7->enter($__internal_d027438980a8f7025ff8dc0fee2061767c4fd3fb7e70173749fa471e4871d8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_01b84e132c7c1114e8aa5cb30c926a0af146bfa74bbc4b515d970e82e6ced1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b84e132c7c1114e8aa5cb30c926a0af146bfa74bbc4b515d970e82e6ced1ce->enter($__internal_01b84e132c7c1114e8aa5cb30c926a0af146bfa74bbc4b515d970e82e6ced1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d027438980a8f7025ff8dc0fee2061767c4fd3fb7e70173749fa471e4871d8c7->leave($__internal_d027438980a8f7025ff8dc0fee2061767c4fd3fb7e70173749fa471e4871d8c7_prof);

        
        $__internal_01b84e132c7c1114e8aa5cb30c926a0af146bfa74bbc4b515d970e82e6ced1ce->leave($__internal_01b84e132c7c1114e8aa5cb30c926a0af146bfa74bbc4b515d970e82e6ced1ce_prof);

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
