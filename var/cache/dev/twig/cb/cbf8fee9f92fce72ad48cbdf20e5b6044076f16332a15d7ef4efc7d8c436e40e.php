<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_14b38ea226d8b5c153f54771b315075c4b92fea164e2312e584414a71154f61a extends Twig_Template
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
        $__internal_13777d30f22eb998edf0592b9c1cbb1f2d519aa6f0a326b7f568c3958d3c7554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13777d30f22eb998edf0592b9c1cbb1f2d519aa6f0a326b7f568c3958d3c7554->enter($__internal_13777d30f22eb998edf0592b9c1cbb1f2d519aa6f0a326b7f568c3958d3c7554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_a93d04d22106b90a15a5104a4e7e1746865de04d228d071ae93bf2a6da417465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93d04d22106b90a15a5104a4e7e1746865de04d228d071ae93bf2a6da417465->enter($__internal_a93d04d22106b90a15a5104a4e7e1746865de04d228d071ae93bf2a6da417465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_13777d30f22eb998edf0592b9c1cbb1f2d519aa6f0a326b7f568c3958d3c7554->leave($__internal_13777d30f22eb998edf0592b9c1cbb1f2d519aa6f0a326b7f568c3958d3c7554_prof);

        
        $__internal_a93d04d22106b90a15a5104a4e7e1746865de04d228d071ae93bf2a6da417465->leave($__internal_a93d04d22106b90a15a5104a4e7e1746865de04d228d071ae93bf2a6da417465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
