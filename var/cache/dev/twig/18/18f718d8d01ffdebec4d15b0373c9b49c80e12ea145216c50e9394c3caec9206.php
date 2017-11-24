<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_96920d639d09d9ed069c087a30ce58cf97ea38c386cd31fce4b28090be155141 extends Twig_Template
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
        $__internal_f0ca007eb0db1cedbfad6a17f982347a1015bb169e9adb9fd162b956e39e6439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ca007eb0db1cedbfad6a17f982347a1015bb169e9adb9fd162b956e39e6439->enter($__internal_f0ca007eb0db1cedbfad6a17f982347a1015bb169e9adb9fd162b956e39e6439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f0ca007eb0db1cedbfad6a17f982347a1015bb169e9adb9fd162b956e39e6439->leave($__internal_f0ca007eb0db1cedbfad6a17f982347a1015bb169e9adb9fd162b956e39e6439_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_709ce445dbbe118210e2ff526aea6cd52f97c92f443eb06663660fa2c2d2ed80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709ce445dbbe118210e2ff526aea6cd52f97c92f443eb06663660fa2c2d2ed80->enter($__internal_709ce445dbbe118210e2ff526aea6cd52f97c92f443eb06663660fa2c2d2ed80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_709ce445dbbe118210e2ff526aea6cd52f97c92f443eb06663660fa2c2d2ed80->leave($__internal_709ce445dbbe118210e2ff526aea6cd52f97c92f443eb06663660fa2c2d2ed80_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7cbdcecae2110a526837a459d0ec5943a6e2e5c1b63cd6e3bb294c7a9042919f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbdcecae2110a526837a459d0ec5943a6e2e5c1b63cd6e3bb294c7a9042919f->enter($__internal_7cbdcecae2110a526837a459d0ec5943a6e2e5c1b63cd6e3bb294c7a9042919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_7cbdcecae2110a526837a459d0ec5943a6e2e5c1b63cd6e3bb294c7a9042919f->leave($__internal_7cbdcecae2110a526837a459d0ec5943a6e2e5c1b63cd6e3bb294c7a9042919f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b4e4a41b9bb7df874525f2af4abb948768715faa9dbc2006e08f5b756aa1dfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e4a41b9bb7df874525f2af4abb948768715faa9dbc2006e08f5b756aa1dfa5->enter($__internal_b4e4a41b9bb7df874525f2af4abb948768715faa9dbc2006e08f5b756aa1dfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b4e4a41b9bb7df874525f2af4abb948768715faa9dbc2006e08f5b756aa1dfa5->leave($__internal_b4e4a41b9bb7df874525f2af4abb948768715faa9dbc2006e08f5b756aa1dfa5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
