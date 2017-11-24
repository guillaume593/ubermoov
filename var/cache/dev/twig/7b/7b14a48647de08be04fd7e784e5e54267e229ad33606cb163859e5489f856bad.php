<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0789abd0c003df4ede4acc9b7d18ce5aeefd25ede3b45b67082b7cef691e0b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_951b1fac5bd615bee0edd660ed4f56ced609393a5504ff5224e79532bd29d8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951b1fac5bd615bee0edd660ed4f56ced609393a5504ff5224e79532bd29d8a4->enter($__internal_951b1fac5bd615bee0edd660ed4f56ced609393a5504ff5224e79532bd29d8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951b1fac5bd615bee0edd660ed4f56ced609393a5504ff5224e79532bd29d8a4->leave($__internal_951b1fac5bd615bee0edd660ed4f56ced609393a5504ff5224e79532bd29d8a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd9020788bfd768cc67d05ec442bb652b7d9e1aaba88ea5612702a16f91c6f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9020788bfd768cc67d05ec442bb652b7d9e1aaba88ea5612702a16f91c6f94->enter($__internal_cd9020788bfd768cc67d05ec442bb652b7d9e1aaba88ea5612702a16f91c6f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_cd9020788bfd768cc67d05ec442bb652b7d9e1aaba88ea5612702a16f91c6f94->leave($__internal_cd9020788bfd768cc67d05ec442bb652b7d9e1aaba88ea5612702a16f91c6f94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}

{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
