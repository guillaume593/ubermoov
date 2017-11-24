<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3f6e393f54a715f7920f32f30c1d108a8044f98d8f0247a867e1b131e945f8c6 extends Twig_Template
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
        $__internal_04306f1675fa6f70d55d71eec4acfed7f7c498b79ec7e2d8740afdfdf8e09b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04306f1675fa6f70d55d71eec4acfed7f7c498b79ec7e2d8740afdfdf8e09b8a->enter($__internal_04306f1675fa6f70d55d71eec4acfed7f7c498b79ec7e2d8740afdfdf8e09b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04306f1675fa6f70d55d71eec4acfed7f7c498b79ec7e2d8740afdfdf8e09b8a->leave($__internal_04306f1675fa6f70d55d71eec4acfed7f7c498b79ec7e2d8740afdfdf8e09b8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_593bacccdd362a408041c0e6698491d26f0a1fe25a0379ebd0add92be2a1cc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593bacccdd362a408041c0e6698491d26f0a1fe25a0379ebd0add92be2a1cc6f->enter($__internal_593bacccdd362a408041c0e6698491d26f0a1fe25a0379ebd0add92be2a1cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_593bacccdd362a408041c0e6698491d26f0a1fe25a0379ebd0add92be2a1cc6f->leave($__internal_593bacccdd362a408041c0e6698491d26f0a1fe25a0379ebd0add92be2a1cc6f_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
