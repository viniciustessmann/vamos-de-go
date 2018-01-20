<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7d1bf57e1821558c4dfa792c6724462f469e9a1f6ef39c9881deb6f134a62137 extends Twig_Template
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
        $__internal_f5b59ff64470e27b6d4187cd72114144ca957e02ca6c3ccedd92818f8bc79a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b59ff64470e27b6d4187cd72114144ca957e02ca6c3ccedd92818f8bc79a35->enter($__internal_f5b59ff64470e27b6d4187cd72114144ca957e02ca6c3ccedd92818f8bc79a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ae8c6ac059dcc5654e591b3f35739ea009e39498e21ed609c8ad57ceef9e98ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8c6ac059dcc5654e591b3f35739ea009e39498e21ed609c8ad57ceef9e98ce->enter($__internal_ae8c6ac059dcc5654e591b3f35739ea009e39498e21ed609c8ad57ceef9e98ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f5b59ff64470e27b6d4187cd72114144ca957e02ca6c3ccedd92818f8bc79a35->leave($__internal_f5b59ff64470e27b6d4187cd72114144ca957e02ca6c3ccedd92818f8bc79a35_prof);

        
        $__internal_ae8c6ac059dcc5654e591b3f35739ea009e39498e21ed609c8ad57ceef9e98ce->leave($__internal_ae8c6ac059dcc5654e591b3f35739ea009e39498e21ed609c8ad57ceef9e98ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
