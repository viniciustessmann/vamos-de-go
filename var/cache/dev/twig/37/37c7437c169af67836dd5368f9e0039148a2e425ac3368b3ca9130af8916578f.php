<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ab3d9f5ce3f1c7be5b1aae65b358844c8a8143dd8814b945b3f7e006372fd609 extends Twig_Template
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
        $__internal_47d59e149852c8a0c231cb2a3b0b2a990da9512d92f9ad5eb0b309a5390f79c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d59e149852c8a0c231cb2a3b0b2a990da9512d92f9ad5eb0b309a5390f79c1->enter($__internal_47d59e149852c8a0c231cb2a3b0b2a990da9512d92f9ad5eb0b309a5390f79c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6487e42581915ca6b295c1f12de795a3e3e7b00fa79018da72d049f7d6bcddb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6487e42581915ca6b295c1f12de795a3e3e7b00fa79018da72d049f7d6bcddb2->enter($__internal_6487e42581915ca6b295c1f12de795a3e3e7b00fa79018da72d049f7d6bcddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_47d59e149852c8a0c231cb2a3b0b2a990da9512d92f9ad5eb0b309a5390f79c1->leave($__internal_47d59e149852c8a0c231cb2a3b0b2a990da9512d92f9ad5eb0b309a5390f79c1_prof);

        
        $__internal_6487e42581915ca6b295c1f12de795a3e3e7b00fa79018da72d049f7d6bcddb2->leave($__internal_6487e42581915ca6b295c1f12de795a3e3e7b00fa79018da72d049f7d6bcddb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
