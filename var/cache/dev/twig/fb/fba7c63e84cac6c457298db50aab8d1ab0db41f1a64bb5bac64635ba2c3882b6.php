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
        $__internal_ee37284bf210f8cbe93c39c99329a4ee04cf5f9d9ef36b399ecb805565769e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee37284bf210f8cbe93c39c99329a4ee04cf5f9d9ef36b399ecb805565769e77->enter($__internal_ee37284bf210f8cbe93c39c99329a4ee04cf5f9d9ef36b399ecb805565769e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_28bb1967cd75d859a8ed01d986bc6c9a77db14c51358d3d020eb8adea780cedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bb1967cd75d859a8ed01d986bc6c9a77db14c51358d3d020eb8adea780cedb->enter($__internal_28bb1967cd75d859a8ed01d986bc6c9a77db14c51358d3d020eb8adea780cedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_ee37284bf210f8cbe93c39c99329a4ee04cf5f9d9ef36b399ecb805565769e77->leave($__internal_ee37284bf210f8cbe93c39c99329a4ee04cf5f9d9ef36b399ecb805565769e77_prof);

        
        $__internal_28bb1967cd75d859a8ed01d986bc6c9a77db14c51358d3d020eb8adea780cedb->leave($__internal_28bb1967cd75d859a8ed01d986bc6c9a77db14c51358d3d020eb8adea780cedb_prof);

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
