<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_60d515e0e4887f660fd67cff59a28dec135c0d9c5b4036e53c6584820a8b72ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f9a836bf805b7ff37f73c1728e5a65cd8b5dfff72cf72aab35040e3feb2e6ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a836bf805b7ff37f73c1728e5a65cd8b5dfff72cf72aab35040e3feb2e6ccb->enter($__internal_f9a836bf805b7ff37f73c1728e5a65cd8b5dfff72cf72aab35040e3feb2e6ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_1dd8a9b79e451adf6d5288b9682e26fdb952b0a89da97ea42def3a0ff69c6f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd8a9b79e451adf6d5288b9682e26fdb952b0a89da97ea42def3a0ff69c6f1e->enter($__internal_1dd8a9b79e451adf6d5288b9682e26fdb952b0a89da97ea42def3a0ff69c6f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a836bf805b7ff37f73c1728e5a65cd8b5dfff72cf72aab35040e3feb2e6ccb->leave($__internal_f9a836bf805b7ff37f73c1728e5a65cd8b5dfff72cf72aab35040e3feb2e6ccb_prof);

        
        $__internal_1dd8a9b79e451adf6d5288b9682e26fdb952b0a89da97ea42def3a0ff69c6f1e->leave($__internal_1dd8a9b79e451adf6d5288b9682e26fdb952b0a89da97ea42def3a0ff69c6f1e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ca836329c48768782d4dcae1a83d8a49e1c5fda85c6ef8633ddde86e6fd00f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca836329c48768782d4dcae1a83d8a49e1c5fda85c6ef8633ddde86e6fd00f8->enter($__internal_6ca836329c48768782d4dcae1a83d8a49e1c5fda85c6ef8633ddde86e6fd00f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b716f2f262f5021405035769d7bf785adc49e9d27c9cbd350b7fd878bfc21f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b716f2f262f5021405035769d7bf785adc49e9d27c9cbd350b7fd878bfc21f9->enter($__internal_2b716f2f262f5021405035769d7bf785adc49e9d27c9cbd350b7fd878bfc21f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_2b716f2f262f5021405035769d7bf785adc49e9d27c9cbd350b7fd878bfc21f9->leave($__internal_2b716f2f262f5021405035769d7bf785adc49e9d27c9cbd350b7fd878bfc21f9_prof);

        
        $__internal_6ca836329c48768782d4dcae1a83d8a49e1c5fda85c6ef8633ddde86e6fd00f8->leave($__internal_6ca836329c48768782d4dcae1a83d8a49e1c5fda85c6ef8633ddde86e6fd00f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
