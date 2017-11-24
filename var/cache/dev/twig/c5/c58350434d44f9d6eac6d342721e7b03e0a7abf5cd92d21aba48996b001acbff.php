<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6cc086118bc9f11688a91037616e3f780484f21c017d169591be7a0d8f5ff950 extends Twig_Template
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
        $__internal_e47022c80aa0156b44a9955f7f65fa92f0d9a914d20190f0f66fd658b91f664a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47022c80aa0156b44a9955f7f65fa92f0d9a914d20190f0f66fd658b91f664a->enter($__internal_e47022c80aa0156b44a9955f7f65fa92f0d9a914d20190f0f66fd658b91f664a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e47022c80aa0156b44a9955f7f65fa92f0d9a914d20190f0f66fd658b91f664a->leave($__internal_e47022c80aa0156b44a9955f7f65fa92f0d9a914d20190f0f66fd658b91f664a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6010ce02adde239c0a282c6b85771641820402f8ce9b452df14000f87941cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6010ce02adde239c0a282c6b85771641820402f8ce9b452df14000f87941cd8->enter($__internal_d6010ce02adde239c0a282c6b85771641820402f8ce9b452df14000f87941cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d6010ce02adde239c0a282c6b85771641820402f8ce9b452df14000f87941cd8->leave($__internal_d6010ce02adde239c0a282c6b85771641820402f8ce9b452df14000f87941cd8_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
