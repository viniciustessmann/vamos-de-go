<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_31251581335495ce79dacf0704e844f5381d465a76287b602947c59f1b4810ae extends Twig_Template
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
        $__internal_340c4a8ddc070ccaac32807525c5de8d61d674d1ca2f0e80ee2bcefb20811365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340c4a8ddc070ccaac32807525c5de8d61d674d1ca2f0e80ee2bcefb20811365->enter($__internal_340c4a8ddc070ccaac32807525c5de8d61d674d1ca2f0e80ee2bcefb20811365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0472333e9ddfb7245720c7499e5365ecfc31d6d56130fe0059fbe8a82262c8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0472333e9ddfb7245720c7499e5365ecfc31d6d56130fe0059fbe8a82262c8fc->enter($__internal_0472333e9ddfb7245720c7499e5365ecfc31d6d56130fe0059fbe8a82262c8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_340c4a8ddc070ccaac32807525c5de8d61d674d1ca2f0e80ee2bcefb20811365->leave($__internal_340c4a8ddc070ccaac32807525c5de8d61d674d1ca2f0e80ee2bcefb20811365_prof);

        
        $__internal_0472333e9ddfb7245720c7499e5365ecfc31d6d56130fe0059fbe8a82262c8fc->leave($__internal_0472333e9ddfb7245720c7499e5365ecfc31d6d56130fe0059fbe8a82262c8fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
