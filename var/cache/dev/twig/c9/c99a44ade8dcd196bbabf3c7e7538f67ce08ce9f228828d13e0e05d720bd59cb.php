<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7e375484741ce657bb47c8198df67eb2cd3163f849de2d8c5a298e3b6daf8d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_4047299a3894a73a9c0907ae2ee6668f0d104b436336aafbec7eb85efa71331b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4047299a3894a73a9c0907ae2ee6668f0d104b436336aafbec7eb85efa71331b->enter($__internal_4047299a3894a73a9c0907ae2ee6668f0d104b436336aafbec7eb85efa71331b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_b29e1794762aff44dbf8c7906da42831aeef3e274253af6b63eae3c0bec8e8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29e1794762aff44dbf8c7906da42831aeef3e274253af6b63eae3c0bec8e8f1->enter($__internal_b29e1794762aff44dbf8c7906da42831aeef3e274253af6b63eae3c0bec8e8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4047299a3894a73a9c0907ae2ee6668f0d104b436336aafbec7eb85efa71331b->leave($__internal_4047299a3894a73a9c0907ae2ee6668f0d104b436336aafbec7eb85efa71331b_prof);

        
        $__internal_b29e1794762aff44dbf8c7906da42831aeef3e274253af6b63eae3c0bec8e8f1->leave($__internal_b29e1794762aff44dbf8c7906da42831aeef3e274253af6b63eae3c0bec8e8f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18beb7bc05717ebdb31dba1e5d6f71bd29f2893b01a46e486aed51e49aee2f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18beb7bc05717ebdb31dba1e5d6f71bd29f2893b01a46e486aed51e49aee2f52->enter($__internal_18beb7bc05717ebdb31dba1e5d6f71bd29f2893b01a46e486aed51e49aee2f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27e619fecdbb80fd089a3ff2c363d605b739b20a50a2ed29ea7dbe47ffd62304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e619fecdbb80fd089a3ff2c363d605b739b20a50a2ed29ea7dbe47ffd62304->enter($__internal_27e619fecdbb80fd089a3ff2c363d605b739b20a50a2ed29ea7dbe47ffd62304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "

";
        
        $__internal_27e619fecdbb80fd089a3ff2c363d605b739b20a50a2ed29ea7dbe47ffd62304->leave($__internal_27e619fecdbb80fd089a3ff2c363d605b739b20a50a2ed29ea7dbe47ffd62304_prof);

        
        $__internal_18beb7bc05717ebdb31dba1e5d6f71bd29f2893b01a46e486aed51e49aee2f52->leave($__internal_18beb7bc05717ebdb31dba1e5d6f71bd29f2893b01a46e486aed51e49aee2f52_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
