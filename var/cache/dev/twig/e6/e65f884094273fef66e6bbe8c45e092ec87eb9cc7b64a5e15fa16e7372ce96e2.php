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
        $__internal_5520ce6bcc928e3f54c9b9d74f0500e1616472e5145ee92c788d1355ad66441c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5520ce6bcc928e3f54c9b9d74f0500e1616472e5145ee92c788d1355ad66441c->enter($__internal_5520ce6bcc928e3f54c9b9d74f0500e1616472e5145ee92c788d1355ad66441c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4b1ef0d6377c611c265b42dda43a5499dadf41eebfc45f67a26b753d3a5bdebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1ef0d6377c611c265b42dda43a5499dadf41eebfc45f67a26b753d3a5bdebd->enter($__internal_4b1ef0d6377c611c265b42dda43a5499dadf41eebfc45f67a26b753d3a5bdebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5520ce6bcc928e3f54c9b9d74f0500e1616472e5145ee92c788d1355ad66441c->leave($__internal_5520ce6bcc928e3f54c9b9d74f0500e1616472e5145ee92c788d1355ad66441c_prof);

        
        $__internal_4b1ef0d6377c611c265b42dda43a5499dadf41eebfc45f67a26b753d3a5bdebd->leave($__internal_4b1ef0d6377c611c265b42dda43a5499dadf41eebfc45f67a26b753d3a5bdebd_prof);

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
