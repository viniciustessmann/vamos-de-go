<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f2f9c011689156ee26f1f083fd6f2bd9a2e3b54117a80be12dbc19966054319f extends Twig_Template
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
        $__internal_944e16a83304a931fc5c3e999a0edbe6c784b71bc2a22a15a296ce9be16d827c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944e16a83304a931fc5c3e999a0edbe6c784b71bc2a22a15a296ce9be16d827c->enter($__internal_944e16a83304a931fc5c3e999a0edbe6c784b71bc2a22a15a296ce9be16d827c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_da1c3f6f6a29547aab9cefa83e7d32919121d585f06cfffe99fd2dc14caecd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1c3f6f6a29547aab9cefa83e7d32919121d585f06cfffe99fd2dc14caecd20->enter($__internal_da1c3f6f6a29547aab9cefa83e7d32919121d585f06cfffe99fd2dc14caecd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_944e16a83304a931fc5c3e999a0edbe6c784b71bc2a22a15a296ce9be16d827c->leave($__internal_944e16a83304a931fc5c3e999a0edbe6c784b71bc2a22a15a296ce9be16d827c_prof);

        
        $__internal_da1c3f6f6a29547aab9cefa83e7d32919121d585f06cfffe99fd2dc14caecd20->leave($__internal_da1c3f6f6a29547aab9cefa83e7d32919121d585f06cfffe99fd2dc14caecd20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
