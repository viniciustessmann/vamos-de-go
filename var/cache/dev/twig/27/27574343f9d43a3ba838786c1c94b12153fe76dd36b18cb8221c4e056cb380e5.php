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
        $__internal_568bb7c7f26df97de40dbbe5eccc43b25a1be2d9a66cb65c7d481b7bc011fe5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568bb7c7f26df97de40dbbe5eccc43b25a1be2d9a66cb65c7d481b7bc011fe5e->enter($__internal_568bb7c7f26df97de40dbbe5eccc43b25a1be2d9a66cb65c7d481b7bc011fe5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_900ba9cee02e58aabe307862cd84a145b9427706d0fc2857892525e18657d318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900ba9cee02e58aabe307862cd84a145b9427706d0fc2857892525e18657d318->enter($__internal_900ba9cee02e58aabe307862cd84a145b9427706d0fc2857892525e18657d318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_568bb7c7f26df97de40dbbe5eccc43b25a1be2d9a66cb65c7d481b7bc011fe5e->leave($__internal_568bb7c7f26df97de40dbbe5eccc43b25a1be2d9a66cb65c7d481b7bc011fe5e_prof);

        
        $__internal_900ba9cee02e58aabe307862cd84a145b9427706d0fc2857892525e18657d318->leave($__internal_900ba9cee02e58aabe307862cd84a145b9427706d0fc2857892525e18657d318_prof);

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
