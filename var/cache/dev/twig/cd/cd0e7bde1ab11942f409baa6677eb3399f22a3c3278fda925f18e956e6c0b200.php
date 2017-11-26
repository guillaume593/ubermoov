<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7f8d310e85de60d970743882a0fa4261b5759597707ec2cf8334ccff76bda124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6d292efd8da3f092f22e67a84e10cf73e1b264aaf463c30575f1cf4a7c34bf23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d292efd8da3f092f22e67a84e10cf73e1b264aaf463c30575f1cf4a7c34bf23->enter($__internal_6d292efd8da3f092f22e67a84e10cf73e1b264aaf463c30575f1cf4a7c34bf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_8963736c18c8fcd5ad3c60e5b1a97901c79954a7a490e73e46e142b7369328f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8963736c18c8fcd5ad3c60e5b1a97901c79954a7a490e73e46e142b7369328f1->enter($__internal_8963736c18c8fcd5ad3c60e5b1a97901c79954a7a490e73e46e142b7369328f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d292efd8da3f092f22e67a84e10cf73e1b264aaf463c30575f1cf4a7c34bf23->leave($__internal_6d292efd8da3f092f22e67a84e10cf73e1b264aaf463c30575f1cf4a7c34bf23_prof);

        
        $__internal_8963736c18c8fcd5ad3c60e5b1a97901c79954a7a490e73e46e142b7369328f1->leave($__internal_8963736c18c8fcd5ad3c60e5b1a97901c79954a7a490e73e46e142b7369328f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54816a6d62da2aaa08dcc9cd3d02f7cde3027f33c8357397ab1ad2a29d420b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54816a6d62da2aaa08dcc9cd3d02f7cde3027f33c8357397ab1ad2a29d420b59->enter($__internal_54816a6d62da2aaa08dcc9cd3d02f7cde3027f33c8357397ab1ad2a29d420b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a2b20d5818ea8db92dea026f11ab065c07416a6720824b71886ae5e5d652d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2b20d5818ea8db92dea026f11ab065c07416a6720824b71886ae5e5d652d35->enter($__internal_9a2b20d5818ea8db92dea026f11ab065c07416a6720824b71886ae5e5d652d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_9a2b20d5818ea8db92dea026f11ab065c07416a6720824b71886ae5e5d652d35->leave($__internal_9a2b20d5818ea8db92dea026f11ab065c07416a6720824b71886ae5e5d652d35_prof);

        
        $__internal_54816a6d62da2aaa08dcc9cd3d02f7cde3027f33c8357397ab1ad2a29d420b59->leave($__internal_54816a6d62da2aaa08dcc9cd3d02f7cde3027f33c8357397ab1ad2a29d420b59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}

{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
