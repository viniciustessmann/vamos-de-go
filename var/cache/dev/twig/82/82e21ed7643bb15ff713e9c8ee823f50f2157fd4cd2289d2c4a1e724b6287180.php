<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_49bc978b0ec4f37f8b28232ccf78b95f45f3b0594ba497cbcbc5aea35b80bc53 extends Twig_Template
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
        $__internal_a5e64547742e4c3f966c83607b88949f1effeec1c6d1e990fcecd5b78e896014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e64547742e4c3f966c83607b88949f1effeec1c6d1e990fcecd5b78e896014->enter($__internal_a5e64547742e4c3f966c83607b88949f1effeec1c6d1e990fcecd5b78e896014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5baa055d0d94bd233b94ac28dae9c6e2a4cc6bd108824926d43e7b0e8fffee69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baa055d0d94bd233b94ac28dae9c6e2a4cc6bd108824926d43e7b0e8fffee69->enter($__internal_5baa055d0d94bd233b94ac28dae9c6e2a4cc6bd108824926d43e7b0e8fffee69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a5e64547742e4c3f966c83607b88949f1effeec1c6d1e990fcecd5b78e896014->leave($__internal_a5e64547742e4c3f966c83607b88949f1effeec1c6d1e990fcecd5b78e896014_prof);

        
        $__internal_5baa055d0d94bd233b94ac28dae9c6e2a4cc6bd108824926d43e7b0e8fffee69->leave($__internal_5baa055d0d94bd233b94ac28dae9c6e2a4cc6bd108824926d43e7b0e8fffee69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
