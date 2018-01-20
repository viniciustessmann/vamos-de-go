<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_43e8081a598b296233b8cb8549b74a9f27239e05b33a0ced3048b6a9f6db0ded extends Twig_Template
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
        $__internal_d48722ed60778d3d6ee18d04852fcd3b761c8f9020f37a7c5e0d9803fdb42e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48722ed60778d3d6ee18d04852fcd3b761c8f9020f37a7c5e0d9803fdb42e98->enter($__internal_d48722ed60778d3d6ee18d04852fcd3b761c8f9020f37a7c5e0d9803fdb42e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f2408e27671255061af97ca802fd30c2570e0c688311bf68f0ffec19e838f3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2408e27671255061af97ca802fd30c2570e0c688311bf68f0ffec19e838f3cb->enter($__internal_f2408e27671255061af97ca802fd30c2570e0c688311bf68f0ffec19e838f3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d48722ed60778d3d6ee18d04852fcd3b761c8f9020f37a7c5e0d9803fdb42e98->leave($__internal_d48722ed60778d3d6ee18d04852fcd3b761c8f9020f37a7c5e0d9803fdb42e98_prof);

        
        $__internal_f2408e27671255061af97ca802fd30c2570e0c688311bf68f0ffec19e838f3cb->leave($__internal_f2408e27671255061af97ca802fd30c2570e0c688311bf68f0ffec19e838f3cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
