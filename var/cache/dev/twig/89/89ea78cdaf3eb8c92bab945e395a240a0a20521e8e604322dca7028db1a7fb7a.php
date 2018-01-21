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
        $__internal_c81ab9609f0077e20c03f27d14f2ea2a2f48e28f295aa708b5e84d3f497684e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81ab9609f0077e20c03f27d14f2ea2a2f48e28f295aa708b5e84d3f497684e8->enter($__internal_c81ab9609f0077e20c03f27d14f2ea2a2f48e28f295aa708b5e84d3f497684e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c018d1275c73b11af7395a364d0f75985c8a57d74d6e58ab5cb79de2a9739bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c018d1275c73b11af7395a364d0f75985c8a57d74d6e58ab5cb79de2a9739bf2->enter($__internal_c018d1275c73b11af7395a364d0f75985c8a57d74d6e58ab5cb79de2a9739bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c81ab9609f0077e20c03f27d14f2ea2a2f48e28f295aa708b5e84d3f497684e8->leave($__internal_c81ab9609f0077e20c03f27d14f2ea2a2f48e28f295aa708b5e84d3f497684e8_prof);

        
        $__internal_c018d1275c73b11af7395a364d0f75985c8a57d74d6e58ab5cb79de2a9739bf2->leave($__internal_c018d1275c73b11af7395a364d0f75985c8a57d74d6e58ab5cb79de2a9739bf2_prof);

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
