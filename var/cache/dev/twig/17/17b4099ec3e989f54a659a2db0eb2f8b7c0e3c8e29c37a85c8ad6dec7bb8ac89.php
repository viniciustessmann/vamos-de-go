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
        $__internal_977966dc5f706c3e0b12b1c0ef4834f105296e6c33c48b66baec9790c1e73a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977966dc5f706c3e0b12b1c0ef4834f105296e6c33c48b66baec9790c1e73a36->enter($__internal_977966dc5f706c3e0b12b1c0ef4834f105296e6c33c48b66baec9790c1e73a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5031c475b1fc8ab9be9e7f15cef2c341203c20b4f5a9cc42ff8a4b82f397075a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5031c475b1fc8ab9be9e7f15cef2c341203c20b4f5a9cc42ff8a4b82f397075a->enter($__internal_5031c475b1fc8ab9be9e7f15cef2c341203c20b4f5a9cc42ff8a4b82f397075a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_977966dc5f706c3e0b12b1c0ef4834f105296e6c33c48b66baec9790c1e73a36->leave($__internal_977966dc5f706c3e0b12b1c0ef4834f105296e6c33c48b66baec9790c1e73a36_prof);

        
        $__internal_5031c475b1fc8ab9be9e7f15cef2c341203c20b4f5a9cc42ff8a4b82f397075a->leave($__internal_5031c475b1fc8ab9be9e7f15cef2c341203c20b4f5a9cc42ff8a4b82f397075a_prof);

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
