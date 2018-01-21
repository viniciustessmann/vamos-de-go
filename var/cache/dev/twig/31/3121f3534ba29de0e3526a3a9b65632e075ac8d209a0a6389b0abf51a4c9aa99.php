<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a94ddf572061094465a1f0168d076674451ba607d3720a788f1a11c36ab0f11a extends Twig_Template
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
        $__internal_b53924bf79e7ce701a229fe61026755d7f2200fa446489ee815a79a86c291446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53924bf79e7ce701a229fe61026755d7f2200fa446489ee815a79a86c291446->enter($__internal_b53924bf79e7ce701a229fe61026755d7f2200fa446489ee815a79a86c291446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f933bd4db4341e93f81a13e22c24df14bb251bb46659107fb52c39c556fe0ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f933bd4db4341e93f81a13e22c24df14bb251bb46659107fb52c39c556fe0ea6->enter($__internal_f933bd4db4341e93f81a13e22c24df14bb251bb46659107fb52c39c556fe0ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b53924bf79e7ce701a229fe61026755d7f2200fa446489ee815a79a86c291446->leave($__internal_b53924bf79e7ce701a229fe61026755d7f2200fa446489ee815a79a86c291446_prof);

        
        $__internal_f933bd4db4341e93f81a13e22c24df14bb251bb46659107fb52c39c556fe0ea6->leave($__internal_f933bd4db4341e93f81a13e22c24df14bb251bb46659107fb52c39c556fe0ea6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
