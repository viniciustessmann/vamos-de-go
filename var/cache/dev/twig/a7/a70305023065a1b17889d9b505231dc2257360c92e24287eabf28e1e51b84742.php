<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7794ab6b3538a9909aeb3dec065c99388729d7eb4faf788b0ee08380c9e15e35 extends Twig_Template
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
        $__internal_994b75b49a77089811bc26fab70cff15071123b22d8dd1c53978a9fc937d7fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994b75b49a77089811bc26fab70cff15071123b22d8dd1c53978a9fc937d7fa2->enter($__internal_994b75b49a77089811bc26fab70cff15071123b22d8dd1c53978a9fc937d7fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d3de87f659e266da92174b0bf5f5a8526a4c8d91f56b90097d0331def45a390a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3de87f659e266da92174b0bf5f5a8526a4c8d91f56b90097d0331def45a390a->enter($__internal_d3de87f659e266da92174b0bf5f5a8526a4c8d91f56b90097d0331def45a390a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_994b75b49a77089811bc26fab70cff15071123b22d8dd1c53978a9fc937d7fa2->leave($__internal_994b75b49a77089811bc26fab70cff15071123b22d8dd1c53978a9fc937d7fa2_prof);

        
        $__internal_d3de87f659e266da92174b0bf5f5a8526a4c8d91f56b90097d0331def45a390a->leave($__internal_d3de87f659e266da92174b0bf5f5a8526a4c8d91f56b90097d0331def45a390a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
