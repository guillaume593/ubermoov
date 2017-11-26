<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_37bc4ab4f5e09c72bcbe3625ceaa89ce12934a05cce7d91e45029ff59af8ab81 extends Twig_Template
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
        $__internal_fd566b279314cb9d4741cb3d70f2911c2e825bb0e7ae02a7515aaf83ae0e99af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd566b279314cb9d4741cb3d70f2911c2e825bb0e7ae02a7515aaf83ae0e99af->enter($__internal_fd566b279314cb9d4741cb3d70f2911c2e825bb0e7ae02a7515aaf83ae0e99af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_4eba1b6c9721f47de65bb411e46fd3de33d4b5d1fe8735992847aa9df877355b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eba1b6c9721f47de65bb411e46fd3de33d4b5d1fe8735992847aa9df877355b->enter($__internal_4eba1b6c9721f47de65bb411e46fd3de33d4b5d1fe8735992847aa9df877355b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd566b279314cb9d4741cb3d70f2911c2e825bb0e7ae02a7515aaf83ae0e99af->leave($__internal_fd566b279314cb9d4741cb3d70f2911c2e825bb0e7ae02a7515aaf83ae0e99af_prof);

        
        $__internal_4eba1b6c9721f47de65bb411e46fd3de33d4b5d1fe8735992847aa9df877355b->leave($__internal_4eba1b6c9721f47de65bb411e46fd3de33d4b5d1fe8735992847aa9df877355b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca4664e29e71db1db4b0fe4fae2dbcb43b37c8647ef388bdea8c46c973b52028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4664e29e71db1db4b0fe4fae2dbcb43b37c8647ef388bdea8c46c973b52028->enter($__internal_ca4664e29e71db1db4b0fe4fae2dbcb43b37c8647ef388bdea8c46c973b52028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6002b2bdb85cd26cf6f4a0fed4baa204bd7e28c19d62cb3bbbfe93c7d93f7c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6002b2bdb85cd26cf6f4a0fed4baa204bd7e28c19d62cb3bbbfe93c7d93f7c0f->enter($__internal_6002b2bdb85cd26cf6f4a0fed4baa204bd7e28c19d62cb3bbbfe93c7d93f7c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_6002b2bdb85cd26cf6f4a0fed4baa204bd7e28c19d62cb3bbbfe93c7d93f7c0f->leave($__internal_6002b2bdb85cd26cf6f4a0fed4baa204bd7e28c19d62cb3bbbfe93c7d93f7c0f_prof);

        
        $__internal_ca4664e29e71db1db4b0fe4fae2dbcb43b37c8647ef388bdea8c46c973b52028->leave($__internal_ca4664e29e71db1db4b0fe4fae2dbcb43b37c8647ef388bdea8c46c973b52028_prof);

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
        return array (  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
