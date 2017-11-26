<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bbe56eff1723549914ffdfac3155b951b34cda9f83d7136234209cf968340b39 extends Twig_Template
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
        $__internal_bc2e9298b3a22a1e90d5339e618fa7a84875fd996e8ef254b425aeac57a3f430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2e9298b3a22a1e90d5339e618fa7a84875fd996e8ef254b425aeac57a3f430->enter($__internal_bc2e9298b3a22a1e90d5339e618fa7a84875fd996e8ef254b425aeac57a3f430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_83222e2ae13d29060aa95fecff19787afc6c02dd2a2cbecb252d67a292793cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83222e2ae13d29060aa95fecff19787afc6c02dd2a2cbecb252d67a292793cc6->enter($__internal_83222e2ae13d29060aa95fecff19787afc6c02dd2a2cbecb252d67a292793cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_bc2e9298b3a22a1e90d5339e618fa7a84875fd996e8ef254b425aeac57a3f430->leave($__internal_bc2e9298b3a22a1e90d5339e618fa7a84875fd996e8ef254b425aeac57a3f430_prof);

        
        $__internal_83222e2ae13d29060aa95fecff19787afc6c02dd2a2cbecb252d67a292793cc6->leave($__internal_83222e2ae13d29060aa95fecff19787afc6c02dd2a2cbecb252d67a292793cc6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
