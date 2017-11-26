<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f64e6d2f9fec4c640b140f08db5ba4e33ba446cf2d49b479ce6b7b28f4095dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_5bd38195512797e7611876e719bdbf72f0ff0b0d9e505ee735e7c5ad84f34d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd38195512797e7611876e719bdbf72f0ff0b0d9e505ee735e7c5ad84f34d22->enter($__internal_5bd38195512797e7611876e719bdbf72f0ff0b0d9e505ee735e7c5ad84f34d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_833beb057c8213fa48560e4bbdca8fa4906ab9a1ffd4c9863d7d80e686e83e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833beb057c8213fa48560e4bbdca8fa4906ab9a1ffd4c9863d7d80e686e83e8f->enter($__internal_833beb057c8213fa48560e4bbdca8fa4906ab9a1ffd4c9863d7d80e686e83e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd38195512797e7611876e719bdbf72f0ff0b0d9e505ee735e7c5ad84f34d22->leave($__internal_5bd38195512797e7611876e719bdbf72f0ff0b0d9e505ee735e7c5ad84f34d22_prof);

        
        $__internal_833beb057c8213fa48560e4bbdca8fa4906ab9a1ffd4c9863d7d80e686e83e8f->leave($__internal_833beb057c8213fa48560e4bbdca8fa4906ab9a1ffd4c9863d7d80e686e83e8f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2817547d4ec5835d1606323056b175919ea43707b98416fc2f9c505a02366c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2817547d4ec5835d1606323056b175919ea43707b98416fc2f9c505a02366c50->enter($__internal_2817547d4ec5835d1606323056b175919ea43707b98416fc2f9c505a02366c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8b6b51d2d9fc5cefb5a5011ac9bbaefb6a76846674c2d2d66af792c53677f4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6b51d2d9fc5cefb5a5011ac9bbaefb6a76846674c2d2d66af792c53677f4ce->enter($__internal_8b6b51d2d9fc5cefb5a5011ac9bbaefb6a76846674c2d2d66af792c53677f4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_8b6b51d2d9fc5cefb5a5011ac9bbaefb6a76846674c2d2d66af792c53677f4ce->leave($__internal_8b6b51d2d9fc5cefb5a5011ac9bbaefb6a76846674c2d2d66af792c53677f4ce_prof);

        
        $__internal_2817547d4ec5835d1606323056b175919ea43707b98416fc2f9c505a02366c50->leave($__internal_2817547d4ec5835d1606323056b175919ea43707b98416fc2f9c505a02366c50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
