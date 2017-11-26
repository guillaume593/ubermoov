<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_165325c5597e7f301930d26f91fc2e1b60f479610edab1018f7698accf9030cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_57445e5c521a59817ceb396b44b195f9872b396b522a4c31ca5980efaf4985ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57445e5c521a59817ceb396b44b195f9872b396b522a4c31ca5980efaf4985ab->enter($__internal_57445e5c521a59817ceb396b44b195f9872b396b522a4c31ca5980efaf4985ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_8bb2e1f7e0b4952e092aeaaa7377f080115c558bf8a4c61c958acbe447795f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb2e1f7e0b4952e092aeaaa7377f080115c558bf8a4c61c958acbe447795f2c->enter($__internal_8bb2e1f7e0b4952e092aeaaa7377f080115c558bf8a4c61c958acbe447795f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57445e5c521a59817ceb396b44b195f9872b396b522a4c31ca5980efaf4985ab->leave($__internal_57445e5c521a59817ceb396b44b195f9872b396b522a4c31ca5980efaf4985ab_prof);

        
        $__internal_8bb2e1f7e0b4952e092aeaaa7377f080115c558bf8a4c61c958acbe447795f2c->leave($__internal_8bb2e1f7e0b4952e092aeaaa7377f080115c558bf8a4c61c958acbe447795f2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02f2087614c006319d148fbd41e8bc8143f425110fff4c502d15575c270f3515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f2087614c006319d148fbd41e8bc8143f425110fff4c502d15575c270f3515->enter($__internal_02f2087614c006319d148fbd41e8bc8143f425110fff4c502d15575c270f3515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d057b302e9a4c071e86c0b60fac978b4b81edf4fe3ae7e71ee1a07af2abce0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d057b302e9a4c071e86c0b60fac978b4b81edf4fe3ae7e71ee1a07af2abce0af->enter($__internal_d057b302e9a4c071e86c0b60fac978b4b81edf4fe3ae7e71ee1a07af2abce0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d057b302e9a4c071e86c0b60fac978b4b81edf4fe3ae7e71ee1a07af2abce0af->leave($__internal_d057b302e9a4c071e86c0b60fac978b4b81edf4fe3ae7e71ee1a07af2abce0af_prof);

        
        $__internal_02f2087614c006319d148fbd41e8bc8143f425110fff4c502d15575c270f3515->leave($__internal_02f2087614c006319d148fbd41e8bc8143f425110fff4c502d15575c270f3515_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
