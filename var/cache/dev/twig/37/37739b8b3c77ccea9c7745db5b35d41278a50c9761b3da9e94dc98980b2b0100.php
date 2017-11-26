<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_d23404907a3ad43a24055bac75f10b702e28e768c8d72bfcd2ae1a551d10f24d extends Twig_Template
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
        $__internal_fd3c04a4419f922ea661e5387f46534c368a13b92bb2bdbd0097d2cb77618ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3c04a4419f922ea661e5387f46534c368a13b92bb2bdbd0097d2cb77618ba1->enter($__internal_fd3c04a4419f922ea661e5387f46534c368a13b92bb2bdbd0097d2cb77618ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_e82b78f22c24268ede0a63b5fc784ecd0299e5701736b3254f930076ae45c3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82b78f22c24268ede0a63b5fc784ecd0299e5701736b3254f930076ae45c3fd->enter($__internal_e82b78f22c24268ede0a63b5fc784ecd0299e5701736b3254f930076ae45c3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_fd3c04a4419f922ea661e5387f46534c368a13b92bb2bdbd0097d2cb77618ba1->leave($__internal_fd3c04a4419f922ea661e5387f46534c368a13b92bb2bdbd0097d2cb77618ba1_prof);

        
        $__internal_e82b78f22c24268ede0a63b5fc784ecd0299e5701736b3254f930076ae45c3fd->leave($__internal_e82b78f22c24268ede0a63b5fc784ecd0299e5701736b3254f930076ae45c3fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
