<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_d4966bb9b61336b0ee6aaea2169677c8523ad9144c745bbb49521c5fc8b595fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_9220901de2926771aae58a1dc6f506bda5547fabbd2367a1c488da5a3f71b3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9220901de2926771aae58a1dc6f506bda5547fabbd2367a1c488da5a3f71b3a8->enter($__internal_9220901de2926771aae58a1dc6f506bda5547fabbd2367a1c488da5a3f71b3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9220901de2926771aae58a1dc6f506bda5547fabbd2367a1c488da5a3f71b3a8->leave($__internal_9220901de2926771aae58a1dc6f506bda5547fabbd2367a1c488da5a3f71b3a8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_252fa6d52f38fcbf2bd1a3e44ac78426eecb3b3c3f4838c43422bf4b72aa9f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252fa6d52f38fcbf2bd1a3e44ac78426eecb3b3c3f4838c43422bf4b72aa9f30->enter($__internal_252fa6d52f38fcbf2bd1a3e44ac78426eecb3b3c3f4838c43422bf4b72aa9f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_252fa6d52f38fcbf2bd1a3e44ac78426eecb3b3c3f4838c43422bf4b72aa9f30->leave($__internal_252fa6d52f38fcbf2bd1a3e44ac78426eecb3b3c3f4838c43422bf4b72aa9f30_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
