<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a891ce73b21bdcec22ae7ba4cbaa376b2d06329818c6888d3a34cbb913ee070e extends Twig_Template
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
        $__internal_621a739842d24aa66049a5099b8f102e64660838af9ce25cea664ac2a3c7e2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621a739842d24aa66049a5099b8f102e64660838af9ce25cea664ac2a3c7e2ef->enter($__internal_621a739842d24aa66049a5099b8f102e64660838af9ce25cea664ac2a3c7e2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a69877b9ec2eefce730843b557a48bebe2effbab4f873ba9e95316fa0c95a998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69877b9ec2eefce730843b557a48bebe2effbab4f873ba9e95316fa0c95a998->enter($__internal_a69877b9ec2eefce730843b557a48bebe2effbab4f873ba9e95316fa0c95a998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_621a739842d24aa66049a5099b8f102e64660838af9ce25cea664ac2a3c7e2ef->leave($__internal_621a739842d24aa66049a5099b8f102e64660838af9ce25cea664ac2a3c7e2ef_prof);

        
        $__internal_a69877b9ec2eefce730843b557a48bebe2effbab4f873ba9e95316fa0c95a998->leave($__internal_a69877b9ec2eefce730843b557a48bebe2effbab4f873ba9e95316fa0c95a998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
