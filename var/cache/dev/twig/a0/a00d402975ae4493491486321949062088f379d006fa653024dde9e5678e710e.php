<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3f46ef2cb784de5d3fb91b24855c1540b96337af89bc0042c2f4e847a9b5eec1 extends Twig_Template
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
        $__internal_b22720e01a2e596ad44ac40c99ca8204d2fa3dda2688e63efdf3e326aac99188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22720e01a2e596ad44ac40c99ca8204d2fa3dda2688e63efdf3e326aac99188->enter($__internal_b22720e01a2e596ad44ac40c99ca8204d2fa3dda2688e63efdf3e326aac99188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_412016bbd5be427627fd1976143f091fa6b6ec0a7bd9e4068a38add4ebfca3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412016bbd5be427627fd1976143f091fa6b6ec0a7bd9e4068a38add4ebfca3ea->enter($__internal_412016bbd5be427627fd1976143f091fa6b6ec0a7bd9e4068a38add4ebfca3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b22720e01a2e596ad44ac40c99ca8204d2fa3dda2688e63efdf3e326aac99188->leave($__internal_b22720e01a2e596ad44ac40c99ca8204d2fa3dda2688e63efdf3e326aac99188_prof);

        
        $__internal_412016bbd5be427627fd1976143f091fa6b6ec0a7bd9e4068a38add4ebfca3ea->leave($__internal_412016bbd5be427627fd1976143f091fa6b6ec0a7bd9e4068a38add4ebfca3ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
