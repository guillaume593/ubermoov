<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3e12fd9d133be0784f08478c5c531a6f28b91bc74086ab897d7c9e99fe51ffb8 extends Twig_Template
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
        $__internal_ff9086f3614146d1182178319261d81b723bd79d523de53d3eb56078c19f9761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9086f3614146d1182178319261d81b723bd79d523de53d3eb56078c19f9761->enter($__internal_ff9086f3614146d1182178319261d81b723bd79d523de53d3eb56078c19f9761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_9d073f53ead4c9ec4efa52a8e94785f2e7c4134ab0a11c0137ea3650b9e54cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d073f53ead4c9ec4efa52a8e94785f2e7c4134ab0a11c0137ea3650b9e54cab->enter($__internal_9d073f53ead4c9ec4efa52a8e94785f2e7c4134ab0a11c0137ea3650b9e54cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff9086f3614146d1182178319261d81b723bd79d523de53d3eb56078c19f9761->leave($__internal_ff9086f3614146d1182178319261d81b723bd79d523de53d3eb56078c19f9761_prof);

        
        $__internal_9d073f53ead4c9ec4efa52a8e94785f2e7c4134ab0a11c0137ea3650b9e54cab->leave($__internal_9d073f53ead4c9ec4efa52a8e94785f2e7c4134ab0a11c0137ea3650b9e54cab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abcba12210bccc0b6e9d5100bbab985f1e437af29a5f493de2b29f48ed81f96a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abcba12210bccc0b6e9d5100bbab985f1e437af29a5f493de2b29f48ed81f96a->enter($__internal_abcba12210bccc0b6e9d5100bbab985f1e437af29a5f493de2b29f48ed81f96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8002f50bdb812df879c4a339ac074d371598841ec884cf562da6be59d7e82d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8002f50bdb812df879c4a339ac074d371598841ec884cf562da6be59d7e82d86->enter($__internal_8002f50bdb812df879c4a339ac074d371598841ec884cf562da6be59d7e82d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8002f50bdb812df879c4a339ac074d371598841ec884cf562da6be59d7e82d86->leave($__internal_8002f50bdb812df879c4a339ac074d371598841ec884cf562da6be59d7e82d86_prof);

        
        $__internal_abcba12210bccc0b6e9d5100bbab985f1e437af29a5f493de2b29f48ed81f96a->leave($__internal_abcba12210bccc0b6e9d5100bbab985f1e437af29a5f493de2b29f48ed81f96a_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
