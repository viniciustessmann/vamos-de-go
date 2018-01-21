<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a891ce73b21bdcec22ae7ba4cbaa376b2d06329818c6888d3a34cbb913ee070e extends Twig_Template
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
        $__internal_aaf7feb5c1ce3f11499e4e42a9db8fce85f1aa4d2e0714f9b34a2faf636726e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf7feb5c1ce3f11499e4e42a9db8fce85f1aa4d2e0714f9b34a2faf636726e3->enter($__internal_aaf7feb5c1ce3f11499e4e42a9db8fce85f1aa4d2e0714f9b34a2faf636726e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_33953866077a14b07e0784541a8bd25b02c0f9cc27766b438d6046d4ce760a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33953866077a14b07e0784541a8bd25b02c0f9cc27766b438d6046d4ce760a8a->enter($__internal_33953866077a14b07e0784541a8bd25b02c0f9cc27766b438d6046d4ce760a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aaf7feb5c1ce3f11499e4e42a9db8fce85f1aa4d2e0714f9b34a2faf636726e3->leave($__internal_aaf7feb5c1ce3f11499e4e42a9db8fce85f1aa4d2e0714f9b34a2faf636726e3_prof);

        
        $__internal_33953866077a14b07e0784541a8bd25b02c0f9cc27766b438d6046d4ce760a8a->leave($__internal_33953866077a14b07e0784541a8bd25b02c0f9cc27766b438d6046d4ce760a8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
