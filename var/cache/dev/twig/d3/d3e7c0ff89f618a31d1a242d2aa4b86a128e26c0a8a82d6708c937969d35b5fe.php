<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0cfaebaa567b9705bda6b78703966b768f2b571aa201f33b909d7c3f36dc6caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4941028d6d30eff71df589c709bfeabace9ee04462e3b0a9171090cae253ad43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4941028d6d30eff71df589c709bfeabace9ee04462e3b0a9171090cae253ad43->enter($__internal_4941028d6d30eff71df589c709bfeabace9ee04462e3b0a9171090cae253ad43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_08739d63ec9396826845ba8d49cff9e232ebc9ca5f36d5edeb82964da357c421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08739d63ec9396826845ba8d49cff9e232ebc9ca5f36d5edeb82964da357c421->enter($__internal_08739d63ec9396826845ba8d49cff9e232ebc9ca5f36d5edeb82964da357c421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4941028d6d30eff71df589c709bfeabace9ee04462e3b0a9171090cae253ad43->leave($__internal_4941028d6d30eff71df589c709bfeabace9ee04462e3b0a9171090cae253ad43_prof);

        
        $__internal_08739d63ec9396826845ba8d49cff9e232ebc9ca5f36d5edeb82964da357c421->leave($__internal_08739d63ec9396826845ba8d49cff9e232ebc9ca5f36d5edeb82964da357c421_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e056daf316c3632f8843bd4f77eb291a0a7c4745efa0583791abdd0fef8ccd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e056daf316c3632f8843bd4f77eb291a0a7c4745efa0583791abdd0fef8ccd6->enter($__internal_5e056daf316c3632f8843bd4f77eb291a0a7c4745efa0583791abdd0fef8ccd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4f14f1b0a189f01b0bf6eccba9b5d2ff8dac3d34438aedb5dd608d9ac010256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f14f1b0a189f01b0bf6eccba9b5d2ff8dac3d34438aedb5dd608d9ac010256->enter($__internal_a4f14f1b0a189f01b0bf6eccba9b5d2ff8dac3d34438aedb5dd608d9ac010256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a4f14f1b0a189f01b0bf6eccba9b5d2ff8dac3d34438aedb5dd608d9ac010256->leave($__internal_a4f14f1b0a189f01b0bf6eccba9b5d2ff8dac3d34438aedb5dd608d9ac010256_prof);

        
        $__internal_5e056daf316c3632f8843bd4f77eb291a0a7c4745efa0583791abdd0fef8ccd6->leave($__internal_5e056daf316c3632f8843bd4f77eb291a0a7c4745efa0583791abdd0fef8ccd6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
