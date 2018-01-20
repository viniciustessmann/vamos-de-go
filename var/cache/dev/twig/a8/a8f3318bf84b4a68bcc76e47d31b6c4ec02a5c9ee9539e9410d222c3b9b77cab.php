<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f2f9c011689156ee26f1f083fd6f2bd9a2e3b54117a80be12dbc19966054319f extends Twig_Template
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
        $__internal_ccdf458bcd8000b8f6a706d1252f9107b1dd887c82a0a1008f1ac90d34699018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccdf458bcd8000b8f6a706d1252f9107b1dd887c82a0a1008f1ac90d34699018->enter($__internal_ccdf458bcd8000b8f6a706d1252f9107b1dd887c82a0a1008f1ac90d34699018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_37c75c1a0e385606d3dd6309652552e3fc8677bfcf6067b41a9b8187b50aef82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c75c1a0e385606d3dd6309652552e3fc8677bfcf6067b41a9b8187b50aef82->enter($__internal_37c75c1a0e385606d3dd6309652552e3fc8677bfcf6067b41a9b8187b50aef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ccdf458bcd8000b8f6a706d1252f9107b1dd887c82a0a1008f1ac90d34699018->leave($__internal_ccdf458bcd8000b8f6a706d1252f9107b1dd887c82a0a1008f1ac90d34699018_prof);

        
        $__internal_37c75c1a0e385606d3dd6309652552e3fc8677bfcf6067b41a9b8187b50aef82->leave($__internal_37c75c1a0e385606d3dd6309652552e3fc8677bfcf6067b41a9b8187b50aef82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
