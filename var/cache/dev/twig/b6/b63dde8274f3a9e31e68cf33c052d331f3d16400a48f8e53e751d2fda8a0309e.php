<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1775f1b7697b74a644e8ccfb91673b2ba5024328548096c61f1b4d9222e27cbb extends Twig_Template
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
        $__internal_37af1fcb27e69dfa524592cd10406d3cf87e2da0c997f45278a8702851cbf243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37af1fcb27e69dfa524592cd10406d3cf87e2da0c997f45278a8702851cbf243->enter($__internal_37af1fcb27e69dfa524592cd10406d3cf87e2da0c997f45278a8702851cbf243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1770af728394b1fe656d3404615a218718fa60245bc3879fa357c42b58ad0aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1770af728394b1fe656d3404615a218718fa60245bc3879fa357c42b58ad0aa7->enter($__internal_1770af728394b1fe656d3404615a218718fa60245bc3879fa357c42b58ad0aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_37af1fcb27e69dfa524592cd10406d3cf87e2da0c997f45278a8702851cbf243->leave($__internal_37af1fcb27e69dfa524592cd10406d3cf87e2da0c997f45278a8702851cbf243_prof);

        
        $__internal_1770af728394b1fe656d3404615a218718fa60245bc3879fa357c42b58ad0aa7->leave($__internal_1770af728394b1fe656d3404615a218718fa60245bc3879fa357c42b58ad0aa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
