<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_de5eebfc923f0496c279dc4c4576f7d9b5aea49a6d3ea547435bcf2f829edc8c extends Twig_Template
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
        $__internal_1ece19f68ce2a9d4a8a3b8700a7cf0d15eff9e3c6983eccd2cdfdc5ff986eab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ece19f68ce2a9d4a8a3b8700a7cf0d15eff9e3c6983eccd2cdfdc5ff986eab3->enter($__internal_1ece19f68ce2a9d4a8a3b8700a7cf0d15eff9e3c6983eccd2cdfdc5ff986eab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_73177838a916221f738cfc13e1b6f1dfb46e7b571cfae0f229ba53f558e2863e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73177838a916221f738cfc13e1b6f1dfb46e7b571cfae0f229ba53f558e2863e->enter($__internal_73177838a916221f738cfc13e1b6f1dfb46e7b571cfae0f229ba53f558e2863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1ece19f68ce2a9d4a8a3b8700a7cf0d15eff9e3c6983eccd2cdfdc5ff986eab3->leave($__internal_1ece19f68ce2a9d4a8a3b8700a7cf0d15eff9e3c6983eccd2cdfdc5ff986eab3_prof);

        
        $__internal_73177838a916221f738cfc13e1b6f1dfb46e7b571cfae0f229ba53f558e2863e->leave($__internal_73177838a916221f738cfc13e1b6f1dfb46e7b571cfae0f229ba53f558e2863e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
