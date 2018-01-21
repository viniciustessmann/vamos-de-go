<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5e332a9d93b63a36feb4799f115f9b6337a603f49fc96141b805564f9b81706b extends Twig_Template
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
        $__internal_5258059abdd320eaaea2f10433afd849fd4144fa4da3c8945fb102cffb196cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5258059abdd320eaaea2f10433afd849fd4144fa4da3c8945fb102cffb196cab->enter($__internal_5258059abdd320eaaea2f10433afd849fd4144fa4da3c8945fb102cffb196cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_542284cc8380a0675fcacb3d20cf9f76b3854ee4efa8faff8b0eb997800561bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542284cc8380a0675fcacb3d20cf9f76b3854ee4efa8faff8b0eb997800561bf->enter($__internal_542284cc8380a0675fcacb3d20cf9f76b3854ee4efa8faff8b0eb997800561bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5258059abdd320eaaea2f10433afd849fd4144fa4da3c8945fb102cffb196cab->leave($__internal_5258059abdd320eaaea2f10433afd849fd4144fa4da3c8945fb102cffb196cab_prof);

        
        $__internal_542284cc8380a0675fcacb3d20cf9f76b3854ee4efa8faff8b0eb997800561bf->leave($__internal_542284cc8380a0675fcacb3d20cf9f76b3854ee4efa8faff8b0eb997800561bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
