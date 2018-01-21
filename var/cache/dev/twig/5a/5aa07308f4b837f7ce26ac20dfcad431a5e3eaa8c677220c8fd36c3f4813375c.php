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
        $__internal_3cc31cbcd0d856169dbb31120efa403f4c53623ce8fd4234a008e89b4eff55b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc31cbcd0d856169dbb31120efa403f4c53623ce8fd4234a008e89b4eff55b9->enter($__internal_3cc31cbcd0d856169dbb31120efa403f4c53623ce8fd4234a008e89b4eff55b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e71caa730baed0b29f04d4cbc2e6f43b662551dd616d7d984daccd76d0953deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71caa730baed0b29f04d4cbc2e6f43b662551dd616d7d984daccd76d0953deb->enter($__internal_e71caa730baed0b29f04d4cbc2e6f43b662551dd616d7d984daccd76d0953deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3cc31cbcd0d856169dbb31120efa403f4c53623ce8fd4234a008e89b4eff55b9->leave($__internal_3cc31cbcd0d856169dbb31120efa403f4c53623ce8fd4234a008e89b4eff55b9_prof);

        
        $__internal_e71caa730baed0b29f04d4cbc2e6f43b662551dd616d7d984daccd76d0953deb->leave($__internal_e71caa730baed0b29f04d4cbc2e6f43b662551dd616d7d984daccd76d0953deb_prof);

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
