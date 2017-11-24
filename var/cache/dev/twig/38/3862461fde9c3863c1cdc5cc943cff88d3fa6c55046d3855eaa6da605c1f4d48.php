<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0ad66ec85df8dac03b67662e4e310a9601664c795bbb0bfe9640e965ecda9e64 extends Twig_Template
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
        $__internal_b8a6e04a76101a350b4582a318b0604aaf7bdf49aa34a0d989fcb500b37db9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a6e04a76101a350b4582a318b0604aaf7bdf49aa34a0d989fcb500b37db9b1->enter($__internal_b8a6e04a76101a350b4582a318b0604aaf7bdf49aa34a0d989fcb500b37db9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b8a6e04a76101a350b4582a318b0604aaf7bdf49aa34a0d989fcb500b37db9b1->leave($__internal_b8a6e04a76101a350b4582a318b0604aaf7bdf49aa34a0d989fcb500b37db9b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
