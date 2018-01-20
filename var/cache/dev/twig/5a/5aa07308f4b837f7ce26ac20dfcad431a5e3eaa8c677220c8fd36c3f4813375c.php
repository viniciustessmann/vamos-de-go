<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_591561af5d79d9a60fcb919fbed996c7d0eb72f761b072e98334428d98ba562d extends Twig_Template
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
        $__internal_e3fba39991d3705829e3821dec5db152231678b398b40d3fbfa24ba403556ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fba39991d3705829e3821dec5db152231678b398b40d3fbfa24ba403556ada->enter($__internal_e3fba39991d3705829e3821dec5db152231678b398b40d3fbfa24ba403556ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8ac4c5559a6eb46f7d423bc5b81249d4c7822e25b083ef8feb1521585c632b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac4c5559a6eb46f7d423bc5b81249d4c7822e25b083ef8feb1521585c632b33->enter($__internal_8ac4c5559a6eb46f7d423bc5b81249d4c7822e25b083ef8feb1521585c632b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e3fba39991d3705829e3821dec5db152231678b398b40d3fbfa24ba403556ada->leave($__internal_e3fba39991d3705829e3821dec5db152231678b398b40d3fbfa24ba403556ada_prof);

        
        $__internal_8ac4c5559a6eb46f7d423bc5b81249d4c7822e25b083ef8feb1521585c632b33->leave($__internal_8ac4c5559a6eb46f7d423bc5b81249d4c7822e25b083ef8feb1521585c632b33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
