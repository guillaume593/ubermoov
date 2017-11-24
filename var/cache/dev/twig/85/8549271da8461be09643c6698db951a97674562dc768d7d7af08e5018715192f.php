<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_98122060354dcb1d7bc71407e7dcf76a5501d03d5c2fc96d038a17b7cb9061fa extends Twig_Template
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
        $__internal_bc2bf2b5b6d2865a547d97bc3dbe91bfcc71cb8ced9016478b6ac09703f3e989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2bf2b5b6d2865a547d97bc3dbe91bfcc71cb8ced9016478b6ac09703f3e989->enter($__internal_bc2bf2b5b6d2865a547d97bc3dbe91bfcc71cb8ced9016478b6ac09703f3e989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2bf2b5b6d2865a547d97bc3dbe91bfcc71cb8ced9016478b6ac09703f3e989->leave($__internal_bc2bf2b5b6d2865a547d97bc3dbe91bfcc71cb8ced9016478b6ac09703f3e989_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43a9c46e6e0bcf30d03b3aa48f6fb6b51813cbfe455d873442f0680bd243d2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a9c46e6e0bcf30d03b3aa48f6fb6b51813cbfe455d873442f0680bd243d2a4->enter($__internal_43a9c46e6e0bcf30d03b3aa48f6fb6b51813cbfe455d873442f0680bd243d2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_43a9c46e6e0bcf30d03b3aa48f6fb6b51813cbfe455d873442f0680bd243d2a4->leave($__internal_43a9c46e6e0bcf30d03b3aa48f6fb6b51813cbfe455d873442f0680bd243d2a4_prof);

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
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
