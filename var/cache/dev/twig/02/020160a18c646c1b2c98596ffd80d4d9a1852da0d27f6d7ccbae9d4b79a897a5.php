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
        $__internal_b6346247d7085cec9ba20c04775c03b3e5787e96958f21b34513ef77d2717020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6346247d7085cec9ba20c04775c03b3e5787e96958f21b34513ef77d2717020->enter($__internal_b6346247d7085cec9ba20c04775c03b3e5787e96958f21b34513ef77d2717020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_31e6dc7fa2cd7a02dd96a3a3358216f3f74279b989e4b4b43e92d28d418410d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e6dc7fa2cd7a02dd96a3a3358216f3f74279b989e4b4b43e92d28d418410d9->enter($__internal_31e6dc7fa2cd7a02dd96a3a3358216f3f74279b989e4b4b43e92d28d418410d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b6346247d7085cec9ba20c04775c03b3e5787e96958f21b34513ef77d2717020->leave($__internal_b6346247d7085cec9ba20c04775c03b3e5787e96958f21b34513ef77d2717020_prof);

        
        $__internal_31e6dc7fa2cd7a02dd96a3a3358216f3f74279b989e4b4b43e92d28d418410d9->leave($__internal_31e6dc7fa2cd7a02dd96a3a3358216f3f74279b989e4b4b43e92d28d418410d9_prof);

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
