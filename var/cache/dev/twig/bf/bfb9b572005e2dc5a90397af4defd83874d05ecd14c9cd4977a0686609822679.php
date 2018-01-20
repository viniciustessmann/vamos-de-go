<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_94ec0e08f30034c40618df362b87fbd3a1388870808ea85cc3a501d4c68ff3f1 extends Twig_Template
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
        $__internal_245ea84cf0778cc4d945c4ef95506fbd5bf0f4fe9b82e46c09c46c9217b4f921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245ea84cf0778cc4d945c4ef95506fbd5bf0f4fe9b82e46c09c46c9217b4f921->enter($__internal_245ea84cf0778cc4d945c4ef95506fbd5bf0f4fe9b82e46c09c46c9217b4f921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_15cbdc07e5afe7fc0b81d0c3ea39df4a59901e8951b4eaa01c9558d64a11ad4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cbdc07e5afe7fc0b81d0c3ea39df4a59901e8951b4eaa01c9558d64a11ad4c->enter($__internal_15cbdc07e5afe7fc0b81d0c3ea39df4a59901e8951b4eaa01c9558d64a11ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_245ea84cf0778cc4d945c4ef95506fbd5bf0f4fe9b82e46c09c46c9217b4f921->leave($__internal_245ea84cf0778cc4d945c4ef95506fbd5bf0f4fe9b82e46c09c46c9217b4f921_prof);

        
        $__internal_15cbdc07e5afe7fc0b81d0c3ea39df4a59901e8951b4eaa01c9558d64a11ad4c->leave($__internal_15cbdc07e5afe7fc0b81d0c3ea39df4a59901e8951b4eaa01c9558d64a11ad4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
