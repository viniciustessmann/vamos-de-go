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
        $__internal_06a9532876e8e0566903694f0c204357b4c5a1e4ad4966830237b33517097f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a9532876e8e0566903694f0c204357b4c5a1e4ad4966830237b33517097f0c->enter($__internal_06a9532876e8e0566903694f0c204357b4c5a1e4ad4966830237b33517097f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0e7ed75416da63bc0b20391b84f80a5e6ccfc37013c82ed1e2cf9c8b195ee2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7ed75416da63bc0b20391b84f80a5e6ccfc37013c82ed1e2cf9c8b195ee2f8->enter($__internal_0e7ed75416da63bc0b20391b84f80a5e6ccfc37013c82ed1e2cf9c8b195ee2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_06a9532876e8e0566903694f0c204357b4c5a1e4ad4966830237b33517097f0c->leave($__internal_06a9532876e8e0566903694f0c204357b4c5a1e4ad4966830237b33517097f0c_prof);

        
        $__internal_0e7ed75416da63bc0b20391b84f80a5e6ccfc37013c82ed1e2cf9c8b195ee2f8->leave($__internal_0e7ed75416da63bc0b20391b84f80a5e6ccfc37013c82ed1e2cf9c8b195ee2f8_prof);

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
