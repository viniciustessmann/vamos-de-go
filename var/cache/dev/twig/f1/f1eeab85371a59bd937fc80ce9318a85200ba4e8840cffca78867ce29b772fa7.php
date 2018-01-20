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
        $__internal_cd3603adff9dd1201530ab581d4d3c2ebec9b194bb5d0cd8532ac5651382fc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3603adff9dd1201530ab581d4d3c2ebec9b194bb5d0cd8532ac5651382fc81->enter($__internal_cd3603adff9dd1201530ab581d4d3c2ebec9b194bb5d0cd8532ac5651382fc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_db6596c7656c9b3040ade8716e2e755c9f665ef9cc7e026b431ff07c0c3cf79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6596c7656c9b3040ade8716e2e755c9f665ef9cc7e026b431ff07c0c3cf79b->enter($__internal_db6596c7656c9b3040ade8716e2e755c9f665ef9cc7e026b431ff07c0c3cf79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cd3603adff9dd1201530ab581d4d3c2ebec9b194bb5d0cd8532ac5651382fc81->leave($__internal_cd3603adff9dd1201530ab581d4d3c2ebec9b194bb5d0cd8532ac5651382fc81_prof);

        
        $__internal_db6596c7656c9b3040ade8716e2e755c9f665ef9cc7e026b431ff07c0c3cf79b->leave($__internal_db6596c7656c9b3040ade8716e2e755c9f665ef9cc7e026b431ff07c0c3cf79b_prof);

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
