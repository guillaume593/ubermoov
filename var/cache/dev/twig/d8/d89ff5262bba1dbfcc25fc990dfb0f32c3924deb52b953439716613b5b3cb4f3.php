<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5b716fbd7214ebd150b6f3105ebfda7bd744ad8af1d17a6ec01a2bee37d77c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_a93e951cfb8032b9c9376ee531c626d1609cec0a8e804f2bdd09cfc5b23b9ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93e951cfb8032b9c9376ee531c626d1609cec0a8e804f2bdd09cfc5b23b9ad9->enter($__internal_a93e951cfb8032b9c9376ee531c626d1609cec0a8e804f2bdd09cfc5b23b9ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a93e951cfb8032b9c9376ee531c626d1609cec0a8e804f2bdd09cfc5b23b9ad9->leave($__internal_a93e951cfb8032b9c9376ee531c626d1609cec0a8e804f2bdd09cfc5b23b9ad9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6d4a069fd7f85a23a2e1d41956977da435cbd5cdeb2badc6228d806752c6a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d4a069fd7f85a23a2e1d41956977da435cbd5cdeb2badc6228d806752c6a0f->enter($__internal_b6d4a069fd7f85a23a2e1d41956977da435cbd5cdeb2badc6228d806752c6a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b6d4a069fd7f85a23a2e1d41956977da435cbd5cdeb2badc6228d806752c6a0f->leave($__internal_b6d4a069fd7f85a23a2e1d41956977da435cbd5cdeb2badc6228d806752c6a0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
