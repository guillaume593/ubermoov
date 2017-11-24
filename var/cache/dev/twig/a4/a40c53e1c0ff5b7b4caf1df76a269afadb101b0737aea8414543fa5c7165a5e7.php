<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7e42f271798bc95b58ed12b55ec7367c1bafdb7142b9b50063ec55c1a1ee47be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77334b453ae22858287dd226c237dfd35f38ea297230664a07c58b20dcaeab5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77334b453ae22858287dd226c237dfd35f38ea297230664a07c58b20dcaeab5b->enter($__internal_77334b453ae22858287dd226c237dfd35f38ea297230664a07c58b20dcaeab5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "


  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t\t\t\t<h1>Inscription</h1>
<div>

<form name=\"fos_user_registration_form\" method=\"post\" action=\"/register/\" class=\"fos_user_registration_register\">
 <div id=\"fos_user_registration_form\">
<div><label for=\"fos_user_registration_form_nom\" class=\"required\">Nom</label><input type=\"text\" id=\"fos_user_registration_form_nom\" name=\"fos_user_registration_form[nom]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_prenom\" class=\"required\">Prenom</label><input type=\"text\" id=\"fos_user_registration_form_prenom\" name=\"fos_user_registration_form[prenom]\" required=\"required\" /></div><input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\" value=\"Gughyfk1Dyy1YWaSWE8rH3YtanJDEosDibUIMzDUqcs\" /></div>
 <div><label for=\"fos_user_registration_form_email\" class=\"required\">Adresse e-mail</label><input type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_username\" class=\"required\">Nom d&#039;utilisateur</label><input type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"180\" pattern=\".{2,}\" /></div><div><label for=\"fos_user_registration_form_plainPassword_first\" class=\"required\">Mot de passe</label><input type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_plainPassword_second\" class=\"required\">Répéter le mot de passe</label><input type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" /></div>
    <div>
        <input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        
        $__internal_77334b453ae22858287dd226c237dfd35f38ea297230664a07c58b20dcaeab5b->leave($__internal_77334b453ae22858287dd226c237dfd35f38ea297230664a07c58b20dcaeab5b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_40d084b464cc55e7c7afc99824eae3c9a74a4320fc3da4edbc94e7f7fd2faf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d084b464cc55e7c7afc99824eae3c9a74a4320fc3da4edbc94e7f7fd2faf8d->enter($__internal_40d084b464cc55e7c7afc99824eae3c9a74a4320fc3da4edbc94e7f7fd2faf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_40d084b464cc55e7c7afc99824eae3c9a74a4320fc3da4edbc94e7f7fd2faf8d->leave($__internal_40d084b464cc55e7c7afc99824eae3c9a74a4320fc3da4edbc94e7f7fd2faf8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  45 => 16,  32 => 6,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}


  <title>{% block title %}Inscription{% endblock %}</title>

\t\t\t\t\t<h1>Inscription</h1>
<div>

<form name=\"fos_user_registration_form\" method=\"post\" action=\"/register/\" class=\"fos_user_registration_register\">
 <div id=\"fos_user_registration_form\">
<div><label for=\"fos_user_registration_form_nom\" class=\"required\">Nom</label><input type=\"text\" id=\"fos_user_registration_form_nom\" name=\"fos_user_registration_form[nom]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_prenom\" class=\"required\">Prenom</label><input type=\"text\" id=\"fos_user_registration_form_prenom\" name=\"fos_user_registration_form[prenom]\" required=\"required\" /></div><input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\" value=\"Gughyfk1Dyy1YWaSWE8rH3YtanJDEosDibUIMzDUqcs\" /></div>
 <div><label for=\"fos_user_registration_form_email\" class=\"required\">Adresse e-mail</label><input type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_username\" class=\"required\">Nom d&#039;utilisateur</label><input type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"180\" pattern=\".{2,}\" /></div><div><label for=\"fos_user_registration_form_plainPassword_first\" class=\"required\">Mot de passe</label><input type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" /></div><div><label for=\"fos_user_registration_form_plainPassword_second\" class=\"required\">Répéter le mot de passe</label><input type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" /></div>
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
", "FOSUserBundle:Registration:register_content.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
