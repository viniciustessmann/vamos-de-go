<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_48e619ad8c9a862bea765b8e8d5d6d5ff1d677c9dcf315f4856e8a8dd534cea8 extends Twig_Template
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
        $__internal_0e52d61913d0b3a921c9aeab95621c1ce6dd0b44480fe243ce6069e3f92dd6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e52d61913d0b3a921c9aeab95621c1ce6dd0b44480fe243ce6069e3f92dd6da->enter($__internal_0e52d61913d0b3a921c9aeab95621c1ce6dd0b44480fe243ce6069e3f92dd6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_86c1e84ebebad91d2db411efc402adc48ec6c0489d025f40815130b15351f286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c1e84ebebad91d2db411efc402adc48ec6c0489d025f40815130b15351f286->enter($__internal_86c1e84ebebad91d2db411efc402adc48ec6c0489d025f40815130b15351f286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0e52d61913d0b3a921c9aeab95621c1ce6dd0b44480fe243ce6069e3f92dd6da->leave($__internal_0e52d61913d0b3a921c9aeab95621c1ce6dd0b44480fe243ce6069e3f92dd6da_prof);

        
        $__internal_86c1e84ebebad91d2db411efc402adc48ec6c0489d025f40815130b15351f286->leave($__internal_86c1e84ebebad91d2db411efc402adc48ec6c0489d025f40815130b15351f286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
