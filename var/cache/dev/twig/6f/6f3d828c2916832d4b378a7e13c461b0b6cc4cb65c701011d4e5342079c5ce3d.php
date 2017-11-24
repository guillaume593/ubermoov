<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_2f9fd303bc0da48b9fc5f93676792dcdeaed489e5af6f8d4c8bdd941d4ed7d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_151e9edfc73ee0ad3b9f3bcf98407d9c27d922f97063b524b8491ca8ccd677f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151e9edfc73ee0ad3b9f3bcf98407d9c27d922f97063b524b8491ca8ccd677f9->enter($__internal_151e9edfc73ee0ad3b9f3bcf98407d9c27d922f97063b524b8491ca8ccd677f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_151e9edfc73ee0ad3b9f3bcf98407d9c27d922f97063b524b8491ca8ccd677f9->leave($__internal_151e9edfc73ee0ad3b9f3bcf98407d9c27d922f97063b524b8491ca8ccd677f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f93b06108f8187124c34a49ce2656520c86f2c0aaed1304c8ab0a9df84813d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93b06108f8187124c34a49ce2656520c86f2c0aaed1304c8ab0a9df84813d92->enter($__internal_f93b06108f8187124c34a49ce2656520c86f2c0aaed1304c8ab0a9df84813d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f93b06108f8187124c34a49ce2656520c86f2c0aaed1304c8ab0a9df84813d92->leave($__internal_f93b06108f8187124c34a49ce2656520c86f2c0aaed1304c8ab0a9df84813d92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
