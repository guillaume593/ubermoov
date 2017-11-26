<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0e4ae01a103023d4b4a8594fdeba101e8b2c5e40667f8ac3c3eee489aceba55a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_309ff16645e68c5d9645037b94b7d70dc1d45385508a538aa78fce72d3ccd228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309ff16645e68c5d9645037b94b7d70dc1d45385508a538aa78fce72d3ccd228->enter($__internal_309ff16645e68c5d9645037b94b7d70dc1d45385508a538aa78fce72d3ccd228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_187aa12eb0b645e2a32db0595956d60485e779455485c5f36441c1b5275de563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187aa12eb0b645e2a32db0595956d60485e779455485c5f36441c1b5275de563->enter($__internal_187aa12eb0b645e2a32db0595956d60485e779455485c5f36441c1b5275de563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_309ff16645e68c5d9645037b94b7d70dc1d45385508a538aa78fce72d3ccd228->leave($__internal_309ff16645e68c5d9645037b94b7d70dc1d45385508a538aa78fce72d3ccd228_prof);

        
        $__internal_187aa12eb0b645e2a32db0595956d60485e779455485c5f36441c1b5275de563->leave($__internal_187aa12eb0b645e2a32db0595956d60485e779455485c5f36441c1b5275de563_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d228841506f47c3da201d0e2cb6bae59b2959c28369fa72d4ca3752059546826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d228841506f47c3da201d0e2cb6bae59b2959c28369fa72d4ca3752059546826->enter($__internal_d228841506f47c3da201d0e2cb6bae59b2959c28369fa72d4ca3752059546826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f344ea568fcc7ad196a741ac2d67c9ff94daf718b588c6985e61b1b395787068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f344ea568fcc7ad196a741ac2d67c9ff94daf718b588c6985e61b1b395787068->enter($__internal_f344ea568fcc7ad196a741ac2d67c9ff94daf718b588c6985e61b1b395787068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_f344ea568fcc7ad196a741ac2d67c9ff94daf718b588c6985e61b1b395787068->leave($__internal_f344ea568fcc7ad196a741ac2d67c9ff94daf718b588c6985e61b1b395787068_prof);

        
        $__internal_d228841506f47c3da201d0e2cb6bae59b2959c28369fa72d4ca3752059546826->leave($__internal_d228841506f47c3da201d0e2cb6bae59b2959c28369fa72d4ca3752059546826_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_63a3b663315f1370804a267d79728c02ecd22f178961eed300eb91552d039fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a3b663315f1370804a267d79728c02ecd22f178961eed300eb91552d039fef->enter($__internal_63a3b663315f1370804a267d79728c02ecd22f178961eed300eb91552d039fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7f38999e66d144f64235ee88d0e7431b4f7c0ffcd861142772530e393baf078c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f38999e66d144f64235ee88d0e7431b4f7c0ffcd861142772530e393baf078c->enter($__internal_7f38999e66d144f64235ee88d0e7431b4f7c0ffcd861142772530e393baf078c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_7f38999e66d144f64235ee88d0e7431b4f7c0ffcd861142772530e393baf078c->leave($__internal_7f38999e66d144f64235ee88d0e7431b4f7c0ffcd861142772530e393baf078c_prof);

        
        $__internal_63a3b663315f1370804a267d79728c02ecd22f178961eed300eb91552d039fef->leave($__internal_63a3b663315f1370804a267d79728c02ecd22f178961eed300eb91552d039fef_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3f4ee1a0cd6b6307eeb2b6beceb961b1808571fa65d107d16840341153c5c719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4ee1a0cd6b6307eeb2b6beceb961b1808571fa65d107d16840341153c5c719->enter($__internal_3f4ee1a0cd6b6307eeb2b6beceb961b1808571fa65d107d16840341153c5c719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2a9b0060d5d74d4136df579a8cfaaae9617ebf51f4c72f737c7b99d5532f95ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9b0060d5d74d4136df579a8cfaaae9617ebf51f4c72f737c7b99d5532f95ec->enter($__internal_2a9b0060d5d74d4136df579a8cfaaae9617ebf51f4c72f737c7b99d5532f95ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2a9b0060d5d74d4136df579a8cfaaae9617ebf51f4c72f737c7b99d5532f95ec->leave($__internal_2a9b0060d5d74d4136df579a8cfaaae9617ebf51f4c72f737c7b99d5532f95ec_prof);

        
        $__internal_3f4ee1a0cd6b6307eeb2b6beceb961b1808571fa65d107d16840341153c5c719->leave($__internal_3f4ee1a0cd6b6307eeb2b6beceb961b1808571fa65d107d16840341153c5c719_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
