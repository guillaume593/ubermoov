<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6d4697ff0368fae50514e9498a2cd83c1480a68ff82647f130e8cb499faca5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_108bf56842be3000dd5789d7371d6dbe2dc443727cc828cf47bfde6522d1dfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108bf56842be3000dd5789d7371d6dbe2dc443727cc828cf47bfde6522d1dfea->enter($__internal_108bf56842be3000dd5789d7371d6dbe2dc443727cc828cf47bfde6522d1dfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_108bf56842be3000dd5789d7371d6dbe2dc443727cc828cf47bfde6522d1dfea->leave($__internal_108bf56842be3000dd5789d7371d6dbe2dc443727cc828cf47bfde6522d1dfea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91e8f3710697893ab6985ac491000cf404ff4778322020196d7ef3c2b945f1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e8f3710697893ab6985ac491000cf404ff4778322020196d7ef3c2b945f1d4->enter($__internal_91e8f3710697893ab6985ac491000cf404ff4778322020196d7ef3c2b945f1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_91e8f3710697893ab6985ac491000cf404ff4778322020196d7ef3c2b945f1d4->leave($__internal_91e8f3710697893ab6985ac491000cf404ff4778322020196d7ef3c2b945f1d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
