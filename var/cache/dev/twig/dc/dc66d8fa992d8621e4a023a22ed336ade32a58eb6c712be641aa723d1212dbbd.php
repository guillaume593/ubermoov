<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8ed5705d6bccf8d5a1f07a4d961f8e0085adc774fd3b0c292afe069bf952f2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2b063a3210c1ad6506216671bc0d0d6f91aa2a86410e3ae189482841a189f851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b063a3210c1ad6506216671bc0d0d6f91aa2a86410e3ae189482841a189f851->enter($__internal_2b063a3210c1ad6506216671bc0d0d6f91aa2a86410e3ae189482841a189f851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b24a910ef6a017f73d25cf6d206cb1ac9c6da6966625d8d6bb8553f75cb792dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24a910ef6a017f73d25cf6d206cb1ac9c6da6966625d8d6bb8553f75cb792dc->enter($__internal_b24a910ef6a017f73d25cf6d206cb1ac9c6da6966625d8d6bb8553f75cb792dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b063a3210c1ad6506216671bc0d0d6f91aa2a86410e3ae189482841a189f851->leave($__internal_2b063a3210c1ad6506216671bc0d0d6f91aa2a86410e3ae189482841a189f851_prof);

        
        $__internal_b24a910ef6a017f73d25cf6d206cb1ac9c6da6966625d8d6bb8553f75cb792dc->leave($__internal_b24a910ef6a017f73d25cf6d206cb1ac9c6da6966625d8d6bb8553f75cb792dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbf78ca146bc1f75024b14f8f9c1f85f6882ee6d6eb750e765a7064ba0e49833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf78ca146bc1f75024b14f8f9c1f85f6882ee6d6eb750e765a7064ba0e49833->enter($__internal_fbf78ca146bc1f75024b14f8f9c1f85f6882ee6d6eb750e765a7064ba0e49833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_506516b36d09630e93fe1d4e2d7dd3fd808c2316010f6059c1ab8dff9eb76884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506516b36d09630e93fe1d4e2d7dd3fd808c2316010f6059c1ab8dff9eb76884->enter($__internal_506516b36d09630e93fe1d4e2d7dd3fd808c2316010f6059c1ab8dff9eb76884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_506516b36d09630e93fe1d4e2d7dd3fd808c2316010f6059c1ab8dff9eb76884->leave($__internal_506516b36d09630e93fe1d4e2d7dd3fd808c2316010f6059c1ab8dff9eb76884_prof);

        
        $__internal_fbf78ca146bc1f75024b14f8f9c1f85f6882ee6d6eb750e765a7064ba0e49833->leave($__internal_fbf78ca146bc1f75024b14f8f9c1f85f6882ee6d6eb750e765a7064ba0e49833_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
