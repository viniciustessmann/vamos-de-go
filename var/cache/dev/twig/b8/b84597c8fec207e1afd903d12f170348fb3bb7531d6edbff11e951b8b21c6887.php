<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7e9b1942ccd6a8c62003e9eedc99de9ca02b73ffaabe0eabf2022313c76be3f6 extends Twig_Template
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
        $__internal_ca672155eff813ea7f2ca12cc324f7ed928b604b5d91a812b532b83ac6768dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca672155eff813ea7f2ca12cc324f7ed928b604b5d91a812b532b83ac6768dcf->enter($__internal_ca672155eff813ea7f2ca12cc324f7ed928b604b5d91a812b532b83ac6768dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1532fdfbd2367f1fbb3aeded840330cf14289e59c295df6435b629f4ad0d4ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1532fdfbd2367f1fbb3aeded840330cf14289e59c295df6435b629f4ad0d4ef8->enter($__internal_1532fdfbd2367f1fbb3aeded840330cf14289e59c295df6435b629f4ad0d4ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ca672155eff813ea7f2ca12cc324f7ed928b604b5d91a812b532b83ac6768dcf->leave($__internal_ca672155eff813ea7f2ca12cc324f7ed928b604b5d91a812b532b83ac6768dcf_prof);

        
        $__internal_1532fdfbd2367f1fbb3aeded840330cf14289e59c295df6435b629f4ad0d4ef8->leave($__internal_1532fdfbd2367f1fbb3aeded840330cf14289e59c295df6435b629f4ad0d4ef8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
