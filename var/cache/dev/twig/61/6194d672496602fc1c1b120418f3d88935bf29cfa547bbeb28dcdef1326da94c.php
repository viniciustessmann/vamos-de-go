<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_897f734d14668632d9f47bf06aca335c67ede2ee63bd6de7f9f674e7644bbad8 extends Twig_Template
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
        $__internal_70d04ed354bbfb0709e4afe87f6abf78f5bec0fcb442470e7dcca5ea3ff2b306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d04ed354bbfb0709e4afe87f6abf78f5bec0fcb442470e7dcca5ea3ff2b306->enter($__internal_70d04ed354bbfb0709e4afe87f6abf78f5bec0fcb442470e7dcca5ea3ff2b306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_475ee97699e22d4714ee13165aed001379c6a00234d24ccb226d303a332f752f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475ee97699e22d4714ee13165aed001379c6a00234d24ccb226d303a332f752f->enter($__internal_475ee97699e22d4714ee13165aed001379c6a00234d24ccb226d303a332f752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_70d04ed354bbfb0709e4afe87f6abf78f5bec0fcb442470e7dcca5ea3ff2b306->leave($__internal_70d04ed354bbfb0709e4afe87f6abf78f5bec0fcb442470e7dcca5ea3ff2b306_prof);

        
        $__internal_475ee97699e22d4714ee13165aed001379c6a00234d24ccb226d303a332f752f->leave($__internal_475ee97699e22d4714ee13165aed001379c6a00234d24ccb226d303a332f752f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
