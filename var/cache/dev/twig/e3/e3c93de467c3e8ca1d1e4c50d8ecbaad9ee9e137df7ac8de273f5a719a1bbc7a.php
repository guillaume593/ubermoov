<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6f411d0c34a1da762176d4649fa877c181df504e14864aadd757393528fe32f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0a59a0414181a5427d32f598460520d6f35fcf749a97c815a0b595c1aa2b62b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a59a0414181a5427d32f598460520d6f35fcf749a97c815a0b595c1aa2b62b4->enter($__internal_0a59a0414181a5427d32f598460520d6f35fcf749a97c815a0b595c1aa2b62b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a59a0414181a5427d32f598460520d6f35fcf749a97c815a0b595c1aa2b62b4->leave($__internal_0a59a0414181a5427d32f598460520d6f35fcf749a97c815a0b595c1aa2b62b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74a47f2ea1bb9c9a497a63151cc7838126f48aa98ed885bd03b5c2105b2d67b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a47f2ea1bb9c9a497a63151cc7838126f48aa98ed885bd03b5c2105b2d67b7->enter($__internal_74a47f2ea1bb9c9a497a63151cc7838126f48aa98ed885bd03b5c2105b2d67b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_74a47f2ea1bb9c9a497a63151cc7838126f48aa98ed885bd03b5c2105b2d67b7->leave($__internal_74a47f2ea1bb9c9a497a63151cc7838126f48aa98ed885bd03b5c2105b2d67b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}

{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
