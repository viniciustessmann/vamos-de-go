<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_629dc6ffd10862de890dfa739fe03456a2e56320b32c48bdb276fd9fe004a727 extends Twig_Template
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
        $__internal_d4a8360498bbf46d251b683c61c595908baa4d1b489afb9e0f72f01062913b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a8360498bbf46d251b683c61c595908baa4d1b489afb9e0f72f01062913b89->enter($__internal_d4a8360498bbf46d251b683c61c595908baa4d1b489afb9e0f72f01062913b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b42cce1170f0727198cd8e19e1ec965a7657fa6a4da511b051952be7021d5bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42cce1170f0727198cd8e19e1ec965a7657fa6a4da511b051952be7021d5bc2->enter($__internal_b42cce1170f0727198cd8e19e1ec965a7657fa6a4da511b051952be7021d5bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d4a8360498bbf46d251b683c61c595908baa4d1b489afb9e0f72f01062913b89->leave($__internal_d4a8360498bbf46d251b683c61c595908baa4d1b489afb9e0f72f01062913b89_prof);

        
        $__internal_b42cce1170f0727198cd8e19e1ec965a7657fa6a4da511b051952be7021d5bc2->leave($__internal_b42cce1170f0727198cd8e19e1ec965a7657fa6a4da511b051952be7021d5bc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
