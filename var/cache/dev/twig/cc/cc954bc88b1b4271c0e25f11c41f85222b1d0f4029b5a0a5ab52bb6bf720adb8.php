<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7ddc50e0dcde7d135e1d04c6d2df7951a4ec14168e2b7ad711f7f4bdf8f4c09a extends Twig_Template
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
        $__internal_90ad06bb2572a49d93f2338b32f472d28e42a9b9aced12683245e27dfd7c41ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ad06bb2572a49d93f2338b32f472d28e42a9b9aced12683245e27dfd7c41ad->enter($__internal_90ad06bb2572a49d93f2338b32f472d28e42a9b9aced12683245e27dfd7c41ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c7f698320f65c1d7027d7a713b460267b03bbec3167461d3514e1f008d3a881b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f698320f65c1d7027d7a713b460267b03bbec3167461d3514e1f008d3a881b->enter($__internal_c7f698320f65c1d7027d7a713b460267b03bbec3167461d3514e1f008d3a881b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_90ad06bb2572a49d93f2338b32f472d28e42a9b9aced12683245e27dfd7c41ad->leave($__internal_90ad06bb2572a49d93f2338b32f472d28e42a9b9aced12683245e27dfd7c41ad_prof);

        
        $__internal_c7f698320f65c1d7027d7a713b460267b03bbec3167461d3514e1f008d3a881b->leave($__internal_c7f698320f65c1d7027d7a713b460267b03bbec3167461d3514e1f008d3a881b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
