<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_080059821fa3c1ee6130399336d16ead56e955e6cd6b8b96616cb56ae4fa640f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ef331aa9a2c62b2b12a4c171b755b22d1acb8d6902a059faafbe86d2367e35e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef331aa9a2c62b2b12a4c171b755b22d1acb8d6902a059faafbe86d2367e35e0->enter($__internal_ef331aa9a2c62b2b12a4c171b755b22d1acb8d6902a059faafbe86d2367e35e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_abf77c693a6180c302889bb13ad1641fc4518d657c83d8424c8e21b78047bfc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf77c693a6180c302889bb13ad1641fc4518d657c83d8424c8e21b78047bfc2->enter($__internal_abf77c693a6180c302889bb13ad1641fc4518d657c83d8424c8e21b78047bfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef331aa9a2c62b2b12a4c171b755b22d1acb8d6902a059faafbe86d2367e35e0->leave($__internal_ef331aa9a2c62b2b12a4c171b755b22d1acb8d6902a059faafbe86d2367e35e0_prof);

        
        $__internal_abf77c693a6180c302889bb13ad1641fc4518d657c83d8424c8e21b78047bfc2->leave($__internal_abf77c693a6180c302889bb13ad1641fc4518d657c83d8424c8e21b78047bfc2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9019fa60ce2e6ab9f45a53578e8a0915a387b9b3d80a8602514db9258bf6edb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9019fa60ce2e6ab9f45a53578e8a0915a387b9b3d80a8602514db9258bf6edb0->enter($__internal_9019fa60ce2e6ab9f45a53578e8a0915a387b9b3d80a8602514db9258bf6edb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3ae2a90286b028fba27f5fe2dcf5e0f01ac2472945b68fcda0f6292e5162554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ae2a90286b028fba27f5fe2dcf5e0f01ac2472945b68fcda0f6292e5162554->enter($__internal_c3ae2a90286b028fba27f5fe2dcf5e0f01ac2472945b68fcda0f6292e5162554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c3ae2a90286b028fba27f5fe2dcf5e0f01ac2472945b68fcda0f6292e5162554->leave($__internal_c3ae2a90286b028fba27f5fe2dcf5e0f01ac2472945b68fcda0f6292e5162554_prof);

        
        $__internal_9019fa60ce2e6ab9f45a53578e8a0915a387b9b3d80a8602514db9258bf6edb0->leave($__internal_9019fa60ce2e6ab9f45a53578e8a0915a387b9b3d80a8602514db9258bf6edb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
