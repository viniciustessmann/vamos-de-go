<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_814450ffded21bdfd297602b0742eadfb86d44d69a3377a128d3e58c16d7bb4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42ca9b5809f847f0671147a3b3f1d51a4b77a780c2a007be49ff44393361d1ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ca9b5809f847f0671147a3b3f1d51a4b77a780c2a007be49ff44393361d1ad->enter($__internal_42ca9b5809f847f0671147a3b3f1d51a4b77a780c2a007be49ff44393361d1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dcef6f330a54bc6f9b2786fe69c4518c02b2ef418882fe2995022e09c1e2bd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcef6f330a54bc6f9b2786fe69c4518c02b2ef418882fe2995022e09c1e2bd05->enter($__internal_dcef6f330a54bc6f9b2786fe69c4518c02b2ef418882fe2995022e09c1e2bd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_42ca9b5809f847f0671147a3b3f1d51a4b77a780c2a007be49ff44393361d1ad->leave($__internal_42ca9b5809f847f0671147a3b3f1d51a4b77a780c2a007be49ff44393361d1ad_prof);

        
        $__internal_dcef6f330a54bc6f9b2786fe69c4518c02b2ef418882fe2995022e09c1e2bd05->leave($__internal_dcef6f330a54bc6f9b2786fe69c4518c02b2ef418882fe2995022e09c1e2bd05_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c70e141e1b34db60061786271fbfefa21ebd3ff2f29a47cb20b72805dce8c8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70e141e1b34db60061786271fbfefa21ebd3ff2f29a47cb20b72805dce8c8d8->enter($__internal_c70e141e1b34db60061786271fbfefa21ebd3ff2f29a47cb20b72805dce8c8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f952dc0c5b60915d46f33c72e1b39bdadaf3092d41842e75720a7315bbc3412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f952dc0c5b60915d46f33c72e1b39bdadaf3092d41842e75720a7315bbc3412->enter($__internal_9f952dc0c5b60915d46f33c72e1b39bdadaf3092d41842e75720a7315bbc3412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9f952dc0c5b60915d46f33c72e1b39bdadaf3092d41842e75720a7315bbc3412->leave($__internal_9f952dc0c5b60915d46f33c72e1b39bdadaf3092d41842e75720a7315bbc3412_prof);

        
        $__internal_c70e141e1b34db60061786271fbfefa21ebd3ff2f29a47cb20b72805dce8c8d8->leave($__internal_c70e141e1b34db60061786271fbfefa21ebd3ff2f29a47cb20b72805dce8c8d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/vamos-de-go/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
