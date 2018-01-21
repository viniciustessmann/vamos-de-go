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
        $__internal_289ffd34bc44da0d38b748f431a942fe3117842c260036f4887641306530463c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289ffd34bc44da0d38b748f431a942fe3117842c260036f4887641306530463c->enter($__internal_289ffd34bc44da0d38b748f431a942fe3117842c260036f4887641306530463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_14ce4b81b7d300dcc9cbae62ebd6775ed7e5d70407760f4470b0facf38675b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ce4b81b7d300dcc9cbae62ebd6775ed7e5d70407760f4470b0facf38675b42->enter($__internal_14ce4b81b7d300dcc9cbae62ebd6775ed7e5d70407760f4470b0facf38675b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_289ffd34bc44da0d38b748f431a942fe3117842c260036f4887641306530463c->leave($__internal_289ffd34bc44da0d38b748f431a942fe3117842c260036f4887641306530463c_prof);

        
        $__internal_14ce4b81b7d300dcc9cbae62ebd6775ed7e5d70407760f4470b0facf38675b42->leave($__internal_14ce4b81b7d300dcc9cbae62ebd6775ed7e5d70407760f4470b0facf38675b42_prof);

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
