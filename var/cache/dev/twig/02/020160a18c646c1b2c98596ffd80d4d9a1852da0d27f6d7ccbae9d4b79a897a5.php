<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f769d7707006f305791ff50d54df4388d66a00e6e2faf50741b205ec3a5cff5f extends Twig_Template
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
        $__internal_e7d34209b82032267b2882c50011ee3967d4fa81f70f13facaa3a2ad65d96eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d34209b82032267b2882c50011ee3967d4fa81f70f13facaa3a2ad65d96eac->enter($__internal_e7d34209b82032267b2882c50011ee3967d4fa81f70f13facaa3a2ad65d96eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_984291a327fe3bfa00d6bb0d97a570a56f488cc0e52147395b7fde61b15875ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984291a327fe3bfa00d6bb0d97a570a56f488cc0e52147395b7fde61b15875ea->enter($__internal_984291a327fe3bfa00d6bb0d97a570a56f488cc0e52147395b7fde61b15875ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e7d34209b82032267b2882c50011ee3967d4fa81f70f13facaa3a2ad65d96eac->leave($__internal_e7d34209b82032267b2882c50011ee3967d4fa81f70f13facaa3a2ad65d96eac_prof);

        
        $__internal_984291a327fe3bfa00d6bb0d97a570a56f488cc0e52147395b7fde61b15875ea->leave($__internal_984291a327fe3bfa00d6bb0d97a570a56f488cc0e52147395b7fde61b15875ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
