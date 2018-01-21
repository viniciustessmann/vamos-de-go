<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7e9b1942ccd6a8c62003e9eedc99de9ca02b73ffaabe0eabf2022313c76be3f6 extends Twig_Template
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
        $__internal_89e3d69fe8894e2f264c9755a9523b7691fbc365eedb8d57c4491a62ebf7092f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e3d69fe8894e2f264c9755a9523b7691fbc365eedb8d57c4491a62ebf7092f->enter($__internal_89e3d69fe8894e2f264c9755a9523b7691fbc365eedb8d57c4491a62ebf7092f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_11c26228b3568d9f9864d544ebe898031b859900391c74783d20e40eedf93da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c26228b3568d9f9864d544ebe898031b859900391c74783d20e40eedf93da3->enter($__internal_11c26228b3568d9f9864d544ebe898031b859900391c74783d20e40eedf93da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_89e3d69fe8894e2f264c9755a9523b7691fbc365eedb8d57c4491a62ebf7092f->leave($__internal_89e3d69fe8894e2f264c9755a9523b7691fbc365eedb8d57c4491a62ebf7092f_prof);

        
        $__internal_11c26228b3568d9f9864d544ebe898031b859900391c74783d20e40eedf93da3->leave($__internal_11c26228b3568d9f9864d544ebe898031b859900391c74783d20e40eedf93da3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
