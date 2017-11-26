<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7e375484741ce657bb47c8198df67eb2cd3163f849de2d8c5a298e3b6daf8d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f310670a119f253082393956d8a12b4a2728093bafb9d878d9aae61007ef85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f310670a119f253082393956d8a12b4a2728093bafb9d878d9aae61007ef85b->enter($__internal_9f310670a119f253082393956d8a12b4a2728093bafb9d878d9aae61007ef85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_a81db14a2c24fd21b3f57e7f07a925551d2f21c3acea0745f275f3e7fc36c562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81db14a2c24fd21b3f57e7f07a925551d2f21c3acea0745f275f3e7fc36c562->enter($__internal_a81db14a2c24fd21b3f57e7f07a925551d2f21c3acea0745f275f3e7fc36c562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f310670a119f253082393956d8a12b4a2728093bafb9d878d9aae61007ef85b->leave($__internal_9f310670a119f253082393956d8a12b4a2728093bafb9d878d9aae61007ef85b_prof);

        
        $__internal_a81db14a2c24fd21b3f57e7f07a925551d2f21c3acea0745f275f3e7fc36c562->leave($__internal_a81db14a2c24fd21b3f57e7f07a925551d2f21c3acea0745f275f3e7fc36c562_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5530198d701f5c6dcdcde2398e0a7689148ac078ebe8894021ea3f90ef205b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5530198d701f5c6dcdcde2398e0a7689148ac078ebe8894021ea3f90ef205b98->enter($__internal_5530198d701f5c6dcdcde2398e0a7689148ac078ebe8894021ea3f90ef205b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79d250857582df10236aa16075157849aac38a64d18d11ef0caaaba04e78d88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d250857582df10236aa16075157849aac38a64d18d11ef0caaaba04e78d88a->enter($__internal_79d250857582df10236aa16075157849aac38a64d18d11ef0caaaba04e78d88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "

";
        
        $__internal_79d250857582df10236aa16075157849aac38a64d18d11ef0caaaba04e78d88a->leave($__internal_79d250857582df10236aa16075157849aac38a64d18d11ef0caaaba04e78d88a_prof);

        
        $__internal_5530198d701f5c6dcdcde2398e0a7689148ac078ebe8894021ea3f90ef205b98->leave($__internal_5530198d701f5c6dcdcde2398e0a7689148ac078ebe8894021ea3f90ef205b98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}

{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
