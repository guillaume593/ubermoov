<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a03fdeb941f103cdd2ff69d9b5422a0c1bf2bce04108e4246d85c72fa8b61f27 extends Twig_Template
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
        $__internal_40608d6ddad932a35f973e230ec680c0455c728a15b606ca41f57ede829b09aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40608d6ddad932a35f973e230ec680c0455c728a15b606ca41f57ede829b09aa->enter($__internal_40608d6ddad932a35f973e230ec680c0455c728a15b606ca41f57ede829b09aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_40608d6ddad932a35f973e230ec680c0455c728a15b606ca41f57ede829b09aa->leave($__internal_40608d6ddad932a35f973e230ec680c0455c728a15b606ca41f57ede829b09aa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c99bd8e353edda8942a82bb5f604828773c51d8eac2e4c5aa5efd58e96416cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99bd8e353edda8942a82bb5f604828773c51d8eac2e4c5aa5efd58e96416cf5->enter($__internal_c99bd8e353edda8942a82bb5f604828773c51d8eac2e4c5aa5efd58e96416cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_c99bd8e353edda8942a82bb5f604828773c51d8eac2e4c5aa5efd58e96416cf5->leave($__internal_c99bd8e353edda8942a82bb5f604828773c51d8eac2e4c5aa5efd58e96416cf5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4aac4e7c6b1eefd1281b5d232d79c67b24aa7eccde084d257555ebd3f1057c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aac4e7c6b1eefd1281b5d232d79c67b24aa7eccde084d257555ebd3f1057c71->enter($__internal_4aac4e7c6b1eefd1281b5d232d79c67b24aa7eccde084d257555ebd3f1057c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_4aac4e7c6b1eefd1281b5d232d79c67b24aa7eccde084d257555ebd3f1057c71->leave($__internal_4aac4e7c6b1eefd1281b5d232d79c67b24aa7eccde084d257555ebd3f1057c71_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1b6fef4ddc8aad896067e3e7ab32d722e3f861a649aaef4090299ca1d99f5944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6fef4ddc8aad896067e3e7ab32d722e3f861a649aaef4090299ca1d99f5944->enter($__internal_1b6fef4ddc8aad896067e3e7ab32d722e3f861a649aaef4090299ca1d99f5944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1b6fef4ddc8aad896067e3e7ab32d722e3f861a649aaef4090299ca1d99f5944->leave($__internal_1b6fef4ddc8aad896067e3e7ab32d722e3f861a649aaef4090299ca1d99f5944_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
