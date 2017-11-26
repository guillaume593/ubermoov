<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f5c0a64ef4e382f70688aa209ad6b7bd5fe7fec52d68efed06518c18cfd3d7b7 extends Twig_Template
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
        $__internal_c68b8924cd48bec2ea91c7f32500f5dc6fe4f2d48142f7de5c5800d575cc20f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68b8924cd48bec2ea91c7f32500f5dc6fe4f2d48142f7de5c5800d575cc20f7->enter($__internal_c68b8924cd48bec2ea91c7f32500f5dc6fe4f2d48142f7de5c5800d575cc20f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_010f508ee7255ec15860241de0b42696035c5fef88b1980e24fd5a486e450128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010f508ee7255ec15860241de0b42696035c5fef88b1980e24fd5a486e450128->enter($__internal_010f508ee7255ec15860241de0b42696035c5fef88b1980e24fd5a486e450128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68b8924cd48bec2ea91c7f32500f5dc6fe4f2d48142f7de5c5800d575cc20f7->leave($__internal_c68b8924cd48bec2ea91c7f32500f5dc6fe4f2d48142f7de5c5800d575cc20f7_prof);

        
        $__internal_010f508ee7255ec15860241de0b42696035c5fef88b1980e24fd5a486e450128->leave($__internal_010f508ee7255ec15860241de0b42696035c5fef88b1980e24fd5a486e450128_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2532edb71aef064a77cdcca5d7078f8e8e51199bc2eb70ac2607d8dbfc6d8c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2532edb71aef064a77cdcca5d7078f8e8e51199bc2eb70ac2607d8dbfc6d8c5e->enter($__internal_2532edb71aef064a77cdcca5d7078f8e8e51199bc2eb70ac2607d8dbfc6d8c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4348f0539514d7a89c65832110eadbeea2dd6c14f8b28702c528bf7598171155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4348f0539514d7a89c65832110eadbeea2dd6c14f8b28702c528bf7598171155->enter($__internal_4348f0539514d7a89c65832110eadbeea2dd6c14f8b28702c528bf7598171155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4348f0539514d7a89c65832110eadbeea2dd6c14f8b28702c528bf7598171155->leave($__internal_4348f0539514d7a89c65832110eadbeea2dd6c14f8b28702c528bf7598171155_prof);

        
        $__internal_2532edb71aef064a77cdcca5d7078f8e8e51199bc2eb70ac2607d8dbfc6d8c5e->leave($__internal_2532edb71aef064a77cdcca5d7078f8e8e51199bc2eb70ac2607d8dbfc6d8c5e_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
