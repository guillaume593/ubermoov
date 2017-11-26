<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_ec81ac6d9caf79ce177a249010fed5a449fd9f40f4d59e5d4934c85dc51777da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_e5a14d97228d08b0a490eaf85e4e846380778c995beecdf4bf20979ce90a37aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a14d97228d08b0a490eaf85e4e846380778c995beecdf4bf20979ce90a37aa->enter($__internal_e5a14d97228d08b0a490eaf85e4e846380778c995beecdf4bf20979ce90a37aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7252e55f5bef84ad7b0a810f025e2dd66d4a7b9b0895782fb8a56e7b0eddd745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7252e55f5bef84ad7b0a810f025e2dd66d4a7b9b0895782fb8a56e7b0eddd745->enter($__internal_7252e55f5bef84ad7b0a810f025e2dd66d4a7b9b0895782fb8a56e7b0eddd745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a14d97228d08b0a490eaf85e4e846380778c995beecdf4bf20979ce90a37aa->leave($__internal_e5a14d97228d08b0a490eaf85e4e846380778c995beecdf4bf20979ce90a37aa_prof);

        
        $__internal_7252e55f5bef84ad7b0a810f025e2dd66d4a7b9b0895782fb8a56e7b0eddd745->leave($__internal_7252e55f5bef84ad7b0a810f025e2dd66d4a7b9b0895782fb8a56e7b0eddd745_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8924c6502088013385b42a977cc5d0a9c82a5aa729285423307d8dbc63381ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8924c6502088013385b42a977cc5d0a9c82a5aa729285423307d8dbc63381ee2->enter($__internal_8924c6502088013385b42a977cc5d0a9c82a5aa729285423307d8dbc63381ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60ec386f6d56c3a20381d091591995f47610d088678324d26479bf9f1151713e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ec386f6d56c3a20381d091591995f47610d088678324d26479bf9f1151713e->enter($__internal_60ec386f6d56c3a20381d091591995f47610d088678324d26479bf9f1151713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_60ec386f6d56c3a20381d091591995f47610d088678324d26479bf9f1151713e->leave($__internal_60ec386f6d56c3a20381d091591995f47610d088678324d26479bf9f1151713e_prof);

        
        $__internal_8924c6502088013385b42a977cc5d0a9c82a5aa729285423307d8dbc63381ee2->leave($__internal_8924c6502088013385b42a977cc5d0a9c82a5aa729285423307d8dbc63381ee2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
