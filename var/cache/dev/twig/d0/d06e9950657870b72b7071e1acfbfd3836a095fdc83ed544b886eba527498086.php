<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_afecc157fe452932e2f111f042e7b54cb531306bbcab0c97aeed33e5f6ea01bb extends Twig_Template
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
        $__internal_8b491b336e63ce871e0ba72ddeb99d529a5d11bcea117175ae5282aee097f021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b491b336e63ce871e0ba72ddeb99d529a5d11bcea117175ae5282aee097f021->enter($__internal_8b491b336e63ce871e0ba72ddeb99d529a5d11bcea117175ae5282aee097f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_41bdd5eb76cbc0e627420dea1dcd952cf5d94ada99bdffb73ad16966fa9ae171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bdd5eb76cbc0e627420dea1dcd952cf5d94ada99bdffb73ad16966fa9ae171->enter($__internal_41bdd5eb76cbc0e627420dea1dcd952cf5d94ada99bdffb73ad16966fa9ae171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8b491b336e63ce871e0ba72ddeb99d529a5d11bcea117175ae5282aee097f021->leave($__internal_8b491b336e63ce871e0ba72ddeb99d529a5d11bcea117175ae5282aee097f021_prof);

        
        $__internal_41bdd5eb76cbc0e627420dea1dcd952cf5d94ada99bdffb73ad16966fa9ae171->leave($__internal_41bdd5eb76cbc0e627420dea1dcd952cf5d94ada99bdffb73ad16966fa9ae171_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
