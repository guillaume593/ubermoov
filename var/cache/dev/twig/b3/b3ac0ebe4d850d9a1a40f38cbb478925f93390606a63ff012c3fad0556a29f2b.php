<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_f33faa472826f6edd2227c804ae74e7694c9721b190fa11eb4a49de5c78cd3fe extends Twig_Template
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
        $__internal_0ce927f1f191bbec4a914284ba4a7d68397d06ab6cf88f4ee08d8f95349e9f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce927f1f191bbec4a914284ba4a7d68397d06ab6cf88f4ee08d8f95349e9f1e->enter($__internal_0ce927f1f191bbec4a914284ba4a7d68397d06ab6cf88f4ee08d8f95349e9f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ce927f1f191bbec4a914284ba4a7d68397d06ab6cf88f4ee08d8f95349e9f1e->leave($__internal_0ce927f1f191bbec4a914284ba4a7d68397d06ab6cf88f4ee08d8f95349e9f1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_964c633e9db8df2d03c2015f3a071db0bf5e6168679ef6ed7370beb2e0886190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964c633e9db8df2d03c2015f3a071db0bf5e6168679ef6ed7370beb2e0886190->enter($__internal_964c633e9db8df2d03c2015f3a071db0bf5e6168679ef6ed7370beb2e0886190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_964c633e9db8df2d03c2015f3a071db0bf5e6168679ef6ed7370beb2e0886190->leave($__internal_964c633e9db8df2d03c2015f3a071db0bf5e6168679ef6ed7370beb2e0886190_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
