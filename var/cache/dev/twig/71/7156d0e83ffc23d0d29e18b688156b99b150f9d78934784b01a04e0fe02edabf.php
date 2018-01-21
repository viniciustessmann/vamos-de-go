<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_712f328197005d2fc126b00895afa58ceb3b41ce4f415694d6bbf5365e14bf41 extends Twig_Template
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
        $__internal_1b3901fb3df4231ee0f38ed3f8a4cd696142591370a75c49fc1289c1fb621918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3901fb3df4231ee0f38ed3f8a4cd696142591370a75c49fc1289c1fb621918->enter($__internal_1b3901fb3df4231ee0f38ed3f8a4cd696142591370a75c49fc1289c1fb621918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_a4cf010f97c1e93ad3b3d475ffed1ee549f84e5308c9bf627ded00cd3174a2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cf010f97c1e93ad3b3d475ffed1ee549f84e5308c9bf627ded00cd3174a2b9->enter($__internal_a4cf010f97c1e93ad3b3d475ffed1ee549f84e5308c9bf627ded00cd3174a2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_1b3901fb3df4231ee0f38ed3f8a4cd696142591370a75c49fc1289c1fb621918->leave($__internal_1b3901fb3df4231ee0f38ed3f8a4cd696142591370a75c49fc1289c1fb621918_prof);

        
        $__internal_a4cf010f97c1e93ad3b3d475ffed1ee549f84e5308c9bf627ded00cd3174a2b9->leave($__internal_a4cf010f97c1e93ad3b3d475ffed1ee549f84e5308c9bf627ded00cd3174a2b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
