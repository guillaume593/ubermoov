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
        $__internal_7b27140b059f6b72b9fdea8926219123178900384a377f1ec7654b15522fa5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b27140b059f6b72b9fdea8926219123178900384a377f1ec7654b15522fa5ca->enter($__internal_7b27140b059f6b72b9fdea8926219123178900384a377f1ec7654b15522fa5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7b27140b059f6b72b9fdea8926219123178900384a377f1ec7654b15522fa5ca->leave($__internal_7b27140b059f6b72b9fdea8926219123178900384a377f1ec7654b15522fa5ca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c9c8efef207568a84159d073015b99ad4dff4ec9e7b33bf6892b9ad387e9a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9c8efef207568a84159d073015b99ad4dff4ec9e7b33bf6892b9ad387e9a15->enter($__internal_5c9c8efef207568a84159d073015b99ad4dff4ec9e7b33bf6892b9ad387e9a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5c9c8efef207568a84159d073015b99ad4dff4ec9e7b33bf6892b9ad387e9a15->leave($__internal_5c9c8efef207568a84159d073015b99ad4dff4ec9e7b33bf6892b9ad387e9a15_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
