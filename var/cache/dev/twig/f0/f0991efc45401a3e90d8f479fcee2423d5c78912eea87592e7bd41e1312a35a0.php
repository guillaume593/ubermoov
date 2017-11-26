<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_efee0228ce2a16a81c194144851d90b36726a5ca07988ad37245dbff0f593dc9 extends Twig_Template
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
        $__internal_a87d3dd0816744e16565d65871a54be43caec11e56f90537d3c53b0c6b0bd31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87d3dd0816744e16565d65871a54be43caec11e56f90537d3c53b0c6b0bd31e->enter($__internal_a87d3dd0816744e16565d65871a54be43caec11e56f90537d3c53b0c6b0bd31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a669e5be181ffd465a8139f61ceba27f09389b586df40a08bd158ef7d6e2ffec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a669e5be181ffd465a8139f61ceba27f09389b586df40a08bd158ef7d6e2ffec->enter($__internal_a669e5be181ffd465a8139f61ceba27f09389b586df40a08bd158ef7d6e2ffec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a87d3dd0816744e16565d65871a54be43caec11e56f90537d3c53b0c6b0bd31e->leave($__internal_a87d3dd0816744e16565d65871a54be43caec11e56f90537d3c53b0c6b0bd31e_prof);

        
        $__internal_a669e5be181ffd465a8139f61ceba27f09389b586df40a08bd158ef7d6e2ffec->leave($__internal_a669e5be181ffd465a8139f61ceba27f09389b586df40a08bd158ef7d6e2ffec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
