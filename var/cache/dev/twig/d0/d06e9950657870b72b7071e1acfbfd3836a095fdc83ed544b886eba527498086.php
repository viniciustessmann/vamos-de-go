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
        $__internal_b9991876b732e00cc1ff00e326c535c3ec8302886b639b05b30303ba574d935a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9991876b732e00cc1ff00e326c535c3ec8302886b639b05b30303ba574d935a->enter($__internal_b9991876b732e00cc1ff00e326c535c3ec8302886b639b05b30303ba574d935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7953f910905ea2083e124a109a8398dd8e22e7b8a1fe98b55d557ca21ef8da75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7953f910905ea2083e124a109a8398dd8e22e7b8a1fe98b55d557ca21ef8da75->enter($__internal_7953f910905ea2083e124a109a8398dd8e22e7b8a1fe98b55d557ca21ef8da75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b9991876b732e00cc1ff00e326c535c3ec8302886b639b05b30303ba574d935a->leave($__internal_b9991876b732e00cc1ff00e326c535c3ec8302886b639b05b30303ba574d935a_prof);

        
        $__internal_7953f910905ea2083e124a109a8398dd8e22e7b8a1fe98b55d557ca21ef8da75->leave($__internal_7953f910905ea2083e124a109a8398dd8e22e7b8a1fe98b55d557ca21ef8da75_prof);

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
