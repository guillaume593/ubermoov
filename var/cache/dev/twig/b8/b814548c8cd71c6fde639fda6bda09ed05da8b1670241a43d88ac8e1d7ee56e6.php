<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_45f3c87570d51a6331d86687eb1656f7f9598beecdc947d103260193ba65a620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_d066d64f016befaf97f827b0b4a016227a3cb56fd6ff0808feee33c747e635ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d066d64f016befaf97f827b0b4a016227a3cb56fd6ff0808feee33c747e635ae->enter($__internal_d066d64f016befaf97f827b0b4a016227a3cb56fd6ff0808feee33c747e635ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d066d64f016befaf97f827b0b4a016227a3cb56fd6ff0808feee33c747e635ae->leave($__internal_d066d64f016befaf97f827b0b4a016227a3cb56fd6ff0808feee33c747e635ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c39156489f382ee0414e41160f84832979ff94c591665f68f6c81a2c9672a6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39156489f382ee0414e41160f84832979ff94c591665f68f6c81a2c9672a6bb->enter($__internal_c39156489f382ee0414e41160f84832979ff94c591665f68f6c81a2c9672a6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "

";
        
        $__internal_c39156489f382ee0414e41160f84832979ff94c591665f68f6c81a2c9672a6bb->leave($__internal_c39156489f382ee0414e41160f84832979ff94c591665f68f6c81a2c9672a6bb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}

{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
