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
        $__internal_1ec02cb02f36dcc9b665d3cddebd35a71b6298273d1cea538e52aa470b2ed864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec02cb02f36dcc9b665d3cddebd35a71b6298273d1cea538e52aa470b2ed864->enter($__internal_1ec02cb02f36dcc9b665d3cddebd35a71b6298273d1cea538e52aa470b2ed864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c0531211c84be1c9c03c2f7c3232eccdae944b72131b6ddd9f27f16eb8903466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0531211c84be1c9c03c2f7c3232eccdae944b72131b6ddd9f27f16eb8903466->enter($__internal_c0531211c84be1c9c03c2f7c3232eccdae944b72131b6ddd9f27f16eb8903466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1ec02cb02f36dcc9b665d3cddebd35a71b6298273d1cea538e52aa470b2ed864->leave($__internal_1ec02cb02f36dcc9b665d3cddebd35a71b6298273d1cea538e52aa470b2ed864_prof);

        
        $__internal_c0531211c84be1c9c03c2f7c3232eccdae944b72131b6ddd9f27f16eb8903466->leave($__internal_c0531211c84be1c9c03c2f7c3232eccdae944b72131b6ddd9f27f16eb8903466_prof);

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
