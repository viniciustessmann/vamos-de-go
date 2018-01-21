<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_db4c7d5d1f375ba4e68b3a8a15f21c41f4207e51f4615bbcb8a961c4b9fc6a3b extends Twig_Template
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
        $__internal_45e8aa8ffd0798e1b5166aed1f582e47e816608d6f275c7fd66e2c319dd36365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e8aa8ffd0798e1b5166aed1f582e47e816608d6f275c7fd66e2c319dd36365->enter($__internal_45e8aa8ffd0798e1b5166aed1f582e47e816608d6f275c7fd66e2c319dd36365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a1187b2a27a01d240d9d302f3a4f164c3dfea63b517f133fc654a76e6344ce1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1187b2a27a01d240d9d302f3a4f164c3dfea63b517f133fc654a76e6344ce1a->enter($__internal_a1187b2a27a01d240d9d302f3a4f164c3dfea63b517f133fc654a76e6344ce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_45e8aa8ffd0798e1b5166aed1f582e47e816608d6f275c7fd66e2c319dd36365->leave($__internal_45e8aa8ffd0798e1b5166aed1f582e47e816608d6f275c7fd66e2c319dd36365_prof);

        
        $__internal_a1187b2a27a01d240d9d302f3a4f164c3dfea63b517f133fc654a76e6344ce1a->leave($__internal_a1187b2a27a01d240d9d302f3a4f164c3dfea63b517f133fc654a76e6344ce1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
