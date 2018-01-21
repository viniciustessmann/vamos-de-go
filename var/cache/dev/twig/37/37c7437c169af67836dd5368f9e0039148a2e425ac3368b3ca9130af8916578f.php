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
        $__internal_25463d8ac07be7e74083dab82536ae188aa2893625d411f382a204b806748a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25463d8ac07be7e74083dab82536ae188aa2893625d411f382a204b806748a43->enter($__internal_25463d8ac07be7e74083dab82536ae188aa2893625d411f382a204b806748a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a07ea708e948db2a085ac7c19026b625fcd1ded3cf28b7f822b9921b085db9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07ea708e948db2a085ac7c19026b625fcd1ded3cf28b7f822b9921b085db9ec->enter($__internal_a07ea708e948db2a085ac7c19026b625fcd1ded3cf28b7f822b9921b085db9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_25463d8ac07be7e74083dab82536ae188aa2893625d411f382a204b806748a43->leave($__internal_25463d8ac07be7e74083dab82536ae188aa2893625d411f382a204b806748a43_prof);

        
        $__internal_a07ea708e948db2a085ac7c19026b625fcd1ded3cf28b7f822b9921b085db9ec->leave($__internal_a07ea708e948db2a085ac7c19026b625fcd1ded3cf28b7f822b9921b085db9ec_prof);

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
