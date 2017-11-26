<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_735ee598a18a957406d76c53c0f4ae2c0776c9add2d64ed2e5574c3110d58560 extends Twig_Template
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
        $__internal_b26d53e501d5c11c6eb880ebad3c56397ad3b77fb0cc6412b8a8217d5e77185f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26d53e501d5c11c6eb880ebad3c56397ad3b77fb0cc6412b8a8217d5e77185f->enter($__internal_b26d53e501d5c11c6eb880ebad3c56397ad3b77fb0cc6412b8a8217d5e77185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1dd396b274c185499a9890b3752222720e78967d9bb443329578221589d83470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd396b274c185499a9890b3752222720e78967d9bb443329578221589d83470->enter($__internal_1dd396b274c185499a9890b3752222720e78967d9bb443329578221589d83470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b26d53e501d5c11c6eb880ebad3c56397ad3b77fb0cc6412b8a8217d5e77185f->leave($__internal_b26d53e501d5c11c6eb880ebad3c56397ad3b77fb0cc6412b8a8217d5e77185f_prof);

        
        $__internal_1dd396b274c185499a9890b3752222720e78967d9bb443329578221589d83470->leave($__internal_1dd396b274c185499a9890b3752222720e78967d9bb443329578221589d83470_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a20ee23871631fa13192c10ed988bb3d5a681c708042b81d0b416ab5f8df1a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20ee23871631fa13192c10ed988bb3d5a681c708042b81d0b416ab5f8df1a6b->enter($__internal_a20ee23871631fa13192c10ed988bb3d5a681c708042b81d0b416ab5f8df1a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_73c86c9249922f1b74672ec7e322df6de4953f0580fe2c5322024b2ec2a13ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c86c9249922f1b74672ec7e322df6de4953f0580fe2c5322024b2ec2a13ba1->enter($__internal_73c86c9249922f1b74672ec7e322df6de4953f0580fe2c5322024b2ec2a13ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_73c86c9249922f1b74672ec7e322df6de4953f0580fe2c5322024b2ec2a13ba1->leave($__internal_73c86c9249922f1b74672ec7e322df6de4953f0580fe2c5322024b2ec2a13ba1_prof);

        
        $__internal_a20ee23871631fa13192c10ed988bb3d5a681c708042b81d0b416ab5f8df1a6b->leave($__internal_a20ee23871631fa13192c10ed988bb3d5a681c708042b81d0b416ab5f8df1a6b_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
