<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f29f211cc7dfaf2e8c7fb9d1d04989865ed51f7870f5970322f4a470e873725c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_281800436e623fd2ed224a7dd3f21b8e67628fa25a34b2f65c884686e336cfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281800436e623fd2ed224a7dd3f21b8e67628fa25a34b2f65c884686e336cfbc->enter($__internal_281800436e623fd2ed224a7dd3f21b8e67628fa25a34b2f65c884686e336cfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281800436e623fd2ed224a7dd3f21b8e67628fa25a34b2f65c884686e336cfbc->leave($__internal_281800436e623fd2ed224a7dd3f21b8e67628fa25a34b2f65c884686e336cfbc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8dce6ec3ac8ccd350acae3e94c25f5800d0a71af7f95cdb9512b8fd0a3f6d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dce6ec3ac8ccd350acae3e94c25f5800d0a71af7f95cdb9512b8fd0a3f6d8c->enter($__internal_e8dce6ec3ac8ccd350acae3e94c25f5800d0a71af7f95cdb9512b8fd0a3f6d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e8dce6ec3ac8ccd350acae3e94c25f5800d0a71af7f95cdb9512b8fd0a3f6d8c->leave($__internal_e8dce6ec3ac8ccd350acae3e94c25f5800d0a71af7f95cdb9512b8fd0a3f6d8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
