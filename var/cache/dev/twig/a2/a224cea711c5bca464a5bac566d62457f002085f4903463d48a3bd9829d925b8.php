<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2e01ee2f7230824fab0adfb8c3ee31abf29be91e265460a967bda083e338ece2 extends Twig_Template
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
        $__internal_e79ac6e18f4bfe141ed96bc4959eb102056793ef05a9639e3b4934abc8a4da73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79ac6e18f4bfe141ed96bc4959eb102056793ef05a9639e3b4934abc8a4da73->enter($__internal_e79ac6e18f4bfe141ed96bc4959eb102056793ef05a9639e3b4934abc8a4da73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e9fa6513aa9508ed374a73001c6564a78c7c43a0717f64220c97022163a8b03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fa6513aa9508ed374a73001c6564a78c7c43a0717f64220c97022163a8b03b->enter($__internal_e9fa6513aa9508ed374a73001c6564a78c7c43a0717f64220c97022163a8b03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e79ac6e18f4bfe141ed96bc4959eb102056793ef05a9639e3b4934abc8a4da73->leave($__internal_e79ac6e18f4bfe141ed96bc4959eb102056793ef05a9639e3b4934abc8a4da73_prof);

        
        $__internal_e9fa6513aa9508ed374a73001c6564a78c7c43a0717f64220c97022163a8b03b->leave($__internal_e9fa6513aa9508ed374a73001c6564a78c7c43a0717f64220c97022163a8b03b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
