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
        $__internal_146722be4ff1f8abcf81e82c4764171e8640ac7e29f4ef5dcef5f623f4b2c5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146722be4ff1f8abcf81e82c4764171e8640ac7e29f4ef5dcef5f623f4b2c5e8->enter($__internal_146722be4ff1f8abcf81e82c4764171e8640ac7e29f4ef5dcef5f623f4b2c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5f39dde1009dd276b5dca96fcbebe01d79756687007b4e5b07b08f697f4a5746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f39dde1009dd276b5dca96fcbebe01d79756687007b4e5b07b08f697f4a5746->enter($__internal_5f39dde1009dd276b5dca96fcbebe01d79756687007b4e5b07b08f697f4a5746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_146722be4ff1f8abcf81e82c4764171e8640ac7e29f4ef5dcef5f623f4b2c5e8->leave($__internal_146722be4ff1f8abcf81e82c4764171e8640ac7e29f4ef5dcef5f623f4b2c5e8_prof);

        
        $__internal_5f39dde1009dd276b5dca96fcbebe01d79756687007b4e5b07b08f697f4a5746->leave($__internal_5f39dde1009dd276b5dca96fcbebe01d79756687007b4e5b07b08f697f4a5746_prof);

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
