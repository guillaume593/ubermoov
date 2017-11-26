<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_991f1d5d0015ac65d34fd1fe76a564ab68cb630811bff12ed9e7df8d4686aa50 extends Twig_Template
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
        $__internal_3b0e0efe54eab6dc1889cd6b9941002987939252d49f0ccd8e338de6528bdd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0e0efe54eab6dc1889cd6b9941002987939252d49f0ccd8e338de6528bdd6e->enter($__internal_3b0e0efe54eab6dc1889cd6b9941002987939252d49f0ccd8e338de6528bdd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_dc08b3b3d27c656eb4355eb056b0f2bc228529bda61777cf7785403ea75e28b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc08b3b3d27c656eb4355eb056b0f2bc228529bda61777cf7785403ea75e28b6->enter($__internal_dc08b3b3d27c656eb4355eb056b0f2bc228529bda61777cf7785403ea75e28b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_3b0e0efe54eab6dc1889cd6b9941002987939252d49f0ccd8e338de6528bdd6e->leave($__internal_3b0e0efe54eab6dc1889cd6b9941002987939252d49f0ccd8e338de6528bdd6e_prof);

        
        $__internal_dc08b3b3d27c656eb4355eb056b0f2bc228529bda61777cf7785403ea75e28b6->leave($__internal_dc08b3b3d27c656eb4355eb056b0f2bc228529bda61777cf7785403ea75e28b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
