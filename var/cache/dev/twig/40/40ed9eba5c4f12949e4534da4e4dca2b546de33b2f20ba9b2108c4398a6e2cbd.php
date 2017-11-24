<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_64878a180a08c31e04d6b4a5f4c526de66a666f57c564e6d83846496624c2022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_bac74480c6fbe7e1bc40468a2f34bed1d6ea8937f3656cc67823c5c6fe69d358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac74480c6fbe7e1bc40468a2f34bed1d6ea8937f3656cc67823c5c6fe69d358->enter($__internal_bac74480c6fbe7e1bc40468a2f34bed1d6ea8937f3656cc67823c5c6fe69d358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac74480c6fbe7e1bc40468a2f34bed1d6ea8937f3656cc67823c5c6fe69d358->leave($__internal_bac74480c6fbe7e1bc40468a2f34bed1d6ea8937f3656cc67823c5c6fe69d358_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01c0cd10f812701197a81b1795cad5747f78a3c610e6b263882c34b188cbe648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c0cd10f812701197a81b1795cad5747f78a3c610e6b263882c34b188cbe648->enter($__internal_01c0cd10f812701197a81b1795cad5747f78a3c610e6b263882c34b188cbe648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "

    ";
        // line 6
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
  
";
        
        $__internal_01c0cd10f812701197a81b1795cad5747f78a3c610e6b263882c34b188cbe648->leave($__internal_01c0cd10f812701197a81b1795cad5747f78a3c610e6b263882c34b188cbe648_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}


    {{ include('@FOSUser/Security/login_content.html.twig') }}
  
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
