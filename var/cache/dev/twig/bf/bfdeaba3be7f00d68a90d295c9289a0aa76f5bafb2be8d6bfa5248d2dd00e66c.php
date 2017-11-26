<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4684d98fc3a5fa6549fe26a8e8979a1e2c94ca66a586bcf966fb15f19bce0ee7 extends Twig_Template
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
        $__internal_26c15269bf7d4dfae26e24b500fc08bb352217263bf89570f8c5714eb9b9e33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c15269bf7d4dfae26e24b500fc08bb352217263bf89570f8c5714eb9b9e33c->enter($__internal_26c15269bf7d4dfae26e24b500fc08bb352217263bf89570f8c5714eb9b9e33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f047749d051469778316a9d18c537a3dcfcd0dda2f39d7535a4a94f9ed137fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f047749d051469778316a9d18c537a3dcfcd0dda2f39d7535a4a94f9ed137fa0->enter($__internal_f047749d051469778316a9d18c537a3dcfcd0dda2f39d7535a4a94f9ed137fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_26c15269bf7d4dfae26e24b500fc08bb352217263bf89570f8c5714eb9b9e33c->leave($__internal_26c15269bf7d4dfae26e24b500fc08bb352217263bf89570f8c5714eb9b9e33c_prof);

        
        $__internal_f047749d051469778316a9d18c537a3dcfcd0dda2f39d7535a4a94f9ed137fa0->leave($__internal_f047749d051469778316a9d18c537a3dcfcd0dda2f39d7535a4a94f9ed137fa0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
