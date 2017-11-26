<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b95d5fae99d8232553cc9f6d2cbac89f26e63a85c7335a9ba4e337b9246c66b9 extends Twig_Template
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
        $__internal_e5786824fc4aca8b80bc4b86daf47b315590a78f0c809392dc67b9919973ee2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5786824fc4aca8b80bc4b86daf47b315590a78f0c809392dc67b9919973ee2c->enter($__internal_e5786824fc4aca8b80bc4b86daf47b315590a78f0c809392dc67b9919973ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_3d2ca20a776ae6636f8073ca5cea909597e7ee74a933287054f6c18a039304b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2ca20a776ae6636f8073ca5cea909597e7ee74a933287054f6c18a039304b2->enter($__internal_3d2ca20a776ae6636f8073ca5cea909597e7ee74a933287054f6c18a039304b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e5786824fc4aca8b80bc4b86daf47b315590a78f0c809392dc67b9919973ee2c->leave($__internal_e5786824fc4aca8b80bc4b86daf47b315590a78f0c809392dc67b9919973ee2c_prof);

        
        $__internal_3d2ca20a776ae6636f8073ca5cea909597e7ee74a933287054f6c18a039304b2->leave($__internal_3d2ca20a776ae6636f8073ca5cea909597e7ee74a933287054f6c18a039304b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2bf624e43c8e4f11a47f20c41466e9036196753c49267b8a464879aa2bfd8b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf624e43c8e4f11a47f20c41466e9036196753c49267b8a464879aa2bfd8b15->enter($__internal_2bf624e43c8e4f11a47f20c41466e9036196753c49267b8a464879aa2bfd8b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_36e33c24aa302970e8a867c01e5e923f1f7b6b15bce2e298aa928258b860dcea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e33c24aa302970e8a867c01e5e923f1f7b6b15bce2e298aa928258b860dcea->enter($__internal_36e33c24aa302970e8a867c01e5e923f1f7b6b15bce2e298aa928258b860dcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_36e33c24aa302970e8a867c01e5e923f1f7b6b15bce2e298aa928258b860dcea->leave($__internal_36e33c24aa302970e8a867c01e5e923f1f7b6b15bce2e298aa928258b860dcea_prof);

        
        $__internal_2bf624e43c8e4f11a47f20c41466e9036196753c49267b8a464879aa2bfd8b15->leave($__internal_2bf624e43c8e4f11a47f20c41466e9036196753c49267b8a464879aa2bfd8b15_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9f843b16df162437cf6b67fbfc6f4fea5e1101ce7e9cbeff3c11a650f112b7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f843b16df162437cf6b67fbfc6f4fea5e1101ce7e9cbeff3c11a650f112b7c2->enter($__internal_9f843b16df162437cf6b67fbfc6f4fea5e1101ce7e9cbeff3c11a650f112b7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a8d53ea3c52781cf49bc2c9b66fefd68daf481f4820701c0f0fbf4c6cd3347db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d53ea3c52781cf49bc2c9b66fefd68daf481f4820701c0f0fbf4c6cd3347db->enter($__internal_a8d53ea3c52781cf49bc2c9b66fefd68daf481f4820701c0f0fbf4c6cd3347db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_a8d53ea3c52781cf49bc2c9b66fefd68daf481f4820701c0f0fbf4c6cd3347db->leave($__internal_a8d53ea3c52781cf49bc2c9b66fefd68daf481f4820701c0f0fbf4c6cd3347db_prof);

        
        $__internal_9f843b16df162437cf6b67fbfc6f4fea5e1101ce7e9cbeff3c11a650f112b7c2->leave($__internal_9f843b16df162437cf6b67fbfc6f4fea5e1101ce7e9cbeff3c11a650f112b7c2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c5b9d33cb53fddf5a0a00eb95d60237c0d922755ecaff52006250e64809a144e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b9d33cb53fddf5a0a00eb95d60237c0d922755ecaff52006250e64809a144e->enter($__internal_c5b9d33cb53fddf5a0a00eb95d60237c0d922755ecaff52006250e64809a144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_380f8e73f074f7fef17848cb1c45a0c75834e96a73f5c39613c91d100e60d57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380f8e73f074f7fef17848cb1c45a0c75834e96a73f5c39613c91d100e60d57a->enter($__internal_380f8e73f074f7fef17848cb1c45a0c75834e96a73f5c39613c91d100e60d57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_380f8e73f074f7fef17848cb1c45a0c75834e96a73f5c39613c91d100e60d57a->leave($__internal_380f8e73f074f7fef17848cb1c45a0c75834e96a73f5c39613c91d100e60d57a_prof);

        
        $__internal_c5b9d33cb53fddf5a0a00eb95d60237c0d922755ecaff52006250e64809a144e->leave($__internal_c5b9d33cb53fddf5a0a00eb95d60237c0d922755ecaff52006250e64809a144e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
