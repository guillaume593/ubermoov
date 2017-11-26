<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_a4b971e303d7497b48569dc0e1eaa504fefbf2ac594f13d57fb55dd53175ead3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c11ba26677fd3529eb632c57f400ed67d632f50c9d735a19da6e9caf32987c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11ba26677fd3529eb632c57f400ed67d632f50c9d735a19da6e9caf32987c77->enter($__internal_c11ba26677fd3529eb632c57f400ed67d632f50c9d735a19da6e9caf32987c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_3f1178e01bf78ad8a4c7d0787fc56d611d5d0de9e4dfa2b7179384956515eda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1178e01bf78ad8a4c7d0787fc56d611d5d0de9e4dfa2b7179384956515eda6->enter($__internal_3f1178e01bf78ad8a4c7d0787fc56d611d5d0de9e4dfa2b7179384956515eda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>

</div>
";
        
        $__internal_c11ba26677fd3529eb632c57f400ed67d632f50c9d735a19da6e9caf32987c77->leave($__internal_c11ba26677fd3529eb632c57f400ed67d632f50c9d735a19da6e9caf32987c77_prof);

        
        $__internal_3f1178e01bf78ad8a4c7d0787fc56d611d5d0de9e4dfa2b7179384956515eda6->leave($__internal_3f1178e01bf78ad8a4c7d0787fc56d611d5d0de9e4dfa2b7179384956515eda6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>

</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
