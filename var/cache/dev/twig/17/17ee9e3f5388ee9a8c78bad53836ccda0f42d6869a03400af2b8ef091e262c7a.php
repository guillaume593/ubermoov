<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_88481a0c6d27671ff40ed197b4ad22643058d857e79f8c061dff0a850b4f94c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8b068cedf49868fcbc2004dadc882573270c3543ffa8603d8c0294bd95728331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b068cedf49868fcbc2004dadc882573270c3543ffa8603d8c0294bd95728331->enter($__internal_8b068cedf49868fcbc2004dadc882573270c3543ffa8603d8c0294bd95728331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b068cedf49868fcbc2004dadc882573270c3543ffa8603d8c0294bd95728331->leave($__internal_8b068cedf49868fcbc2004dadc882573270c3543ffa8603d8c0294bd95728331_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6eb835c731cfe794499565aacc57285d2f560dff60a189355a03926904aca3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb835c731cfe794499565aacc57285d2f560dff60a189355a03926904aca3e3->enter($__internal_6eb835c731cfe794499565aacc57285d2f560dff60a189355a03926904aca3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_6eb835c731cfe794499565aacc57285d2f560dff60a189355a03926904aca3e3->leave($__internal_6eb835c731cfe794499565aacc57285d2f560dff60a189355a03926904aca3e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}

{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
