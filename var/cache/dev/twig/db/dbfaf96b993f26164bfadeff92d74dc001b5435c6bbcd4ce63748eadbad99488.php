<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5cececcadcaaa248fda114f9931fb18d147f269dcd12144432d6d9a20625d5fd extends Twig_Template
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
        $__internal_e56b2d09ac38c04cbb65d760414876f174b298fb2914b1f2eb6ad1f47dc74c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56b2d09ac38c04cbb65d760414876f174b298fb2914b1f2eb6ad1f47dc74c93->enter($__internal_e56b2d09ac38c04cbb65d760414876f174b298fb2914b1f2eb6ad1f47dc74c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e56b2d09ac38c04cbb65d760414876f174b298fb2914b1f2eb6ad1f47dc74c93->leave($__internal_e56b2d09ac38c04cbb65d760414876f174b298fb2914b1f2eb6ad1f47dc74c93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
