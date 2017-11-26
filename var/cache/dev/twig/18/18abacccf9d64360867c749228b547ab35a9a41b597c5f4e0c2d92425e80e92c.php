<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d6f48840f6ae10b3c1364748dc12dc14d21eb0c07e167b3ea64adaaf2afc90e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_6caec7a621c15b98f238d7e5a766cfe52004700072bdc0c059a943d3e4bddf5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6caec7a621c15b98f238d7e5a766cfe52004700072bdc0c059a943d3e4bddf5c->enter($__internal_6caec7a621c15b98f238d7e5a766cfe52004700072bdc0c059a943d3e4bddf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e4bc51dd872a8ca7559568e5c2756c31f58d77732a6471cdac82e79728d889a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bc51dd872a8ca7559568e5c2756c31f58d77732a6471cdac82e79728d889a3->enter($__internal_e4bc51dd872a8ca7559568e5c2756c31f58d77732a6471cdac82e79728d889a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6caec7a621c15b98f238d7e5a766cfe52004700072bdc0c059a943d3e4bddf5c->leave($__internal_6caec7a621c15b98f238d7e5a766cfe52004700072bdc0c059a943d3e4bddf5c_prof);

        
        $__internal_e4bc51dd872a8ca7559568e5c2756c31f58d77732a6471cdac82e79728d889a3->leave($__internal_e4bc51dd872a8ca7559568e5c2756c31f58d77732a6471cdac82e79728d889a3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ef31d005a51dc26b8be805e72d51acf41251e3eb7e8bdb19a6278a3ec76939c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef31d005a51dc26b8be805e72d51acf41251e3eb7e8bdb19a6278a3ec76939c->enter($__internal_5ef31d005a51dc26b8be805e72d51acf41251e3eb7e8bdb19a6278a3ec76939c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21088981291c65ceef64f9d3cb10cde62248f2561275e529a1c4d3a3bde5ee25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21088981291c65ceef64f9d3cb10cde62248f2561275e529a1c4d3a3bde5ee25->enter($__internal_21088981291c65ceef64f9d3cb10cde62248f2561275e529a1c4d3a3bde5ee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_21088981291c65ceef64f9d3cb10cde62248f2561275e529a1c4d3a3bde5ee25->leave($__internal_21088981291c65ceef64f9d3cb10cde62248f2561275e529a1c4d3a3bde5ee25_prof);

        
        $__internal_5ef31d005a51dc26b8be805e72d51acf41251e3eb7e8bdb19a6278a3ec76939c->leave($__internal_5ef31d005a51dc26b8be805e72d51acf41251e3eb7e8bdb19a6278a3ec76939c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
