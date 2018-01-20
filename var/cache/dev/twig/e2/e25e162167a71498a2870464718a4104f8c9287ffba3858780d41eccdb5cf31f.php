<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bb2481be606f5e5c7d0b02d4cc939a3d7955e9568962ad8c58bc5c2c508710ca extends Twig_Template
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
        $__internal_2dcf93f111be02aad3047184d17efcd5d635de8208526ca8ede571d1bcd5c753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcf93f111be02aad3047184d17efcd5d635de8208526ca8ede571d1bcd5c753->enter($__internal_2dcf93f111be02aad3047184d17efcd5d635de8208526ca8ede571d1bcd5c753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ee6682b185ea9eb30a2103ad3007b3aad25c3f2b1bca22460dbf14d17fc8defe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6682b185ea9eb30a2103ad3007b3aad25c3f2b1bca22460dbf14d17fc8defe->enter($__internal_ee6682b185ea9eb30a2103ad3007b3aad25c3f2b1bca22460dbf14d17fc8defe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2dcf93f111be02aad3047184d17efcd5d635de8208526ca8ede571d1bcd5c753->leave($__internal_2dcf93f111be02aad3047184d17efcd5d635de8208526ca8ede571d1bcd5c753_prof);

        
        $__internal_ee6682b185ea9eb30a2103ad3007b3aad25c3f2b1bca22460dbf14d17fc8defe->leave($__internal_ee6682b185ea9eb30a2103ad3007b3aad25c3f2b1bca22460dbf14d17fc8defe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
