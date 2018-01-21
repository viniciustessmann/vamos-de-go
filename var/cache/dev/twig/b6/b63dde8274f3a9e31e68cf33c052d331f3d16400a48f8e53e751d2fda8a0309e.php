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
        $__internal_d1a07de633d8d1fc00ea4fdfbd8f425b5df566a1463ab745019fb7afb696e174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a07de633d8d1fc00ea4fdfbd8f425b5df566a1463ab745019fb7afb696e174->enter($__internal_d1a07de633d8d1fc00ea4fdfbd8f425b5df566a1463ab745019fb7afb696e174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ae5bf382e7e807a95572b54d86027b8e0ad2a82359a18d9c26da5509b578000d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5bf382e7e807a95572b54d86027b8e0ad2a82359a18d9c26da5509b578000d->enter($__internal_ae5bf382e7e807a95572b54d86027b8e0ad2a82359a18d9c26da5509b578000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d1a07de633d8d1fc00ea4fdfbd8f425b5df566a1463ab745019fb7afb696e174->leave($__internal_d1a07de633d8d1fc00ea4fdfbd8f425b5df566a1463ab745019fb7afb696e174_prof);

        
        $__internal_ae5bf382e7e807a95572b54d86027b8e0ad2a82359a18d9c26da5509b578000d->leave($__internal_ae5bf382e7e807a95572b54d86027b8e0ad2a82359a18d9c26da5509b578000d_prof);

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
