<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b9e0f88262fdeea3ab309e1ca62c5ebdba5ebc93290df6f90452a5b369bda0ed extends Twig_Template
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
        $__internal_ffad57f9fcf16189bce6dea5dc2092385790f7a2a90cf272fbc63607f878f6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffad57f9fcf16189bce6dea5dc2092385790f7a2a90cf272fbc63607f878f6eb->enter($__internal_ffad57f9fcf16189bce6dea5dc2092385790f7a2a90cf272fbc63607f878f6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffad57f9fcf16189bce6dea5dc2092385790f7a2a90cf272fbc63607f878f6eb->leave($__internal_ffad57f9fcf16189bce6dea5dc2092385790f7a2a90cf272fbc63607f878f6eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd41949d45805b9f06b7e0d8630199d8d01d990e260d0f776e8513da53d110c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd41949d45805b9f06b7e0d8630199d8d01d990e260d0f776e8513da53d110c8->enter($__internal_fd41949d45805b9f06b7e0d8630199d8d01d990e260d0f776e8513da53d110c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fd41949d45805b9f06b7e0d8630199d8d01d990e260d0f776e8513da53d110c8->leave($__internal_fd41949d45805b9f06b7e0d8630199d8d01d990e260d0f776e8513da53d110c8_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
