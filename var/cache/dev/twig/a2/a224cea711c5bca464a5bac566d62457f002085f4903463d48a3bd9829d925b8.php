<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2e01ee2f7230824fab0adfb8c3ee31abf29be91e265460a967bda083e338ece2 extends Twig_Template
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
        $__internal_5326876771d150a8a984907ceb7edad27fa5d6838be1ff7f563d5757fb9924a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5326876771d150a8a984907ceb7edad27fa5d6838be1ff7f563d5757fb9924a5->enter($__internal_5326876771d150a8a984907ceb7edad27fa5d6838be1ff7f563d5757fb9924a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a2d8b17cddeb71ec77422c7750ff3d155a0c17962ed6f7e97c31f2cb67f64e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d8b17cddeb71ec77422c7750ff3d155a0c17962ed6f7e97c31f2cb67f64e6c->enter($__internal_a2d8b17cddeb71ec77422c7750ff3d155a0c17962ed6f7e97c31f2cb67f64e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_5326876771d150a8a984907ceb7edad27fa5d6838be1ff7f563d5757fb9924a5->leave($__internal_5326876771d150a8a984907ceb7edad27fa5d6838be1ff7f563d5757fb9924a5_prof);

        
        $__internal_a2d8b17cddeb71ec77422c7750ff3d155a0c17962ed6f7e97c31f2cb67f64e6c->leave($__internal_a2d8b17cddeb71ec77422c7750ff3d155a0c17962ed6f7e97c31f2cb67f64e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
