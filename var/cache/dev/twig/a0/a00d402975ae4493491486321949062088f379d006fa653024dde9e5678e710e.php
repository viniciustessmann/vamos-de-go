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
        $__internal_734c384a2406f167dca69d8c0c04b8aad8ba5aa099e950b441e90a468cc4355a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734c384a2406f167dca69d8c0c04b8aad8ba5aa099e950b441e90a468cc4355a->enter($__internal_734c384a2406f167dca69d8c0c04b8aad8ba5aa099e950b441e90a468cc4355a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b484b2e6e604ee75d7bb1058fcfcf72f454dfc50f7c67f4b9dba39b5c3ca690d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b484b2e6e604ee75d7bb1058fcfcf72f454dfc50f7c67f4b9dba39b5c3ca690d->enter($__internal_b484b2e6e604ee75d7bb1058fcfcf72f454dfc50f7c67f4b9dba39b5c3ca690d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_734c384a2406f167dca69d8c0c04b8aad8ba5aa099e950b441e90a468cc4355a->leave($__internal_734c384a2406f167dca69d8c0c04b8aad8ba5aa099e950b441e90a468cc4355a_prof);

        
        $__internal_b484b2e6e604ee75d7bb1058fcfcf72f454dfc50f7c67f4b9dba39b5c3ca690d->leave($__internal_b484b2e6e604ee75d7bb1058fcfcf72f454dfc50f7c67f4b9dba39b5c3ca690d_prof);

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
