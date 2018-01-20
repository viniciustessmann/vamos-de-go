<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f8c8bb2e7e636b4cb0ca2077ce3fc0f2afebed508c946fe50788c34eb35beca2 extends Twig_Template
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
        $__internal_b9c93426a09e51de2386ebd5ff94567588c5419ddbbe2cff024e18675bf09045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c93426a09e51de2386ebd5ff94567588c5419ddbbe2cff024e18675bf09045->enter($__internal_b9c93426a09e51de2386ebd5ff94567588c5419ddbbe2cff024e18675bf09045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5a9486b5bdd0bfd6ae5300ed1bba169202aaff0dafe6dcb91423dc99c5783a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9486b5bdd0bfd6ae5300ed1bba169202aaff0dafe6dcb91423dc99c5783a96->enter($__internal_5a9486b5bdd0bfd6ae5300ed1bba169202aaff0dafe6dcb91423dc99c5783a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b9c93426a09e51de2386ebd5ff94567588c5419ddbbe2cff024e18675bf09045->leave($__internal_b9c93426a09e51de2386ebd5ff94567588c5419ddbbe2cff024e18675bf09045_prof);

        
        $__internal_5a9486b5bdd0bfd6ae5300ed1bba169202aaff0dafe6dcb91423dc99c5783a96->leave($__internal_5a9486b5bdd0bfd6ae5300ed1bba169202aaff0dafe6dcb91423dc99c5783a96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
