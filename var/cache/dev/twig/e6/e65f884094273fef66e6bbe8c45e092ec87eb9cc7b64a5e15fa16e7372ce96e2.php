<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_da0471859f0c6395a6352b10513457fe0327a2dba5140c7967809b01b33a18a8 extends Twig_Template
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
        $__internal_5d189590afbf3e7af508da81d929f6601a41272d716fdd11c8ca26bc0a875ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d189590afbf3e7af508da81d929f6601a41272d716fdd11c8ca26bc0a875ff9->enter($__internal_5d189590afbf3e7af508da81d929f6601a41272d716fdd11c8ca26bc0a875ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9e77431e2c514f24f6d0728cdf5e88d6f58c0e4455d3b60eaad1fbf13536ee76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e77431e2c514f24f6d0728cdf5e88d6f58c0e4455d3b60eaad1fbf13536ee76->enter($__internal_9e77431e2c514f24f6d0728cdf5e88d6f58c0e4455d3b60eaad1fbf13536ee76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5d189590afbf3e7af508da81d929f6601a41272d716fdd11c8ca26bc0a875ff9->leave($__internal_5d189590afbf3e7af508da81d929f6601a41272d716fdd11c8ca26bc0a875ff9_prof);

        
        $__internal_9e77431e2c514f24f6d0728cdf5e88d6f58c0e4455d3b60eaad1fbf13536ee76->leave($__internal_9e77431e2c514f24f6d0728cdf5e88d6f58c0e4455d3b60eaad1fbf13536ee76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
