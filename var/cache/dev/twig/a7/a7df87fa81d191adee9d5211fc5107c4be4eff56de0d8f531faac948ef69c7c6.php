<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_686ca38c197d499328a1bdfbe93b77d51c288a58def569894981863b7b396ea4 extends Twig_Template
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
        $__internal_ed1b7ca9a1dfdef7c545f575e9234b18f1b4ce7a2258a8a55b32a5fdfc90c4b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1b7ca9a1dfdef7c545f575e9234b18f1b4ce7a2258a8a55b32a5fdfc90c4b5->enter($__internal_ed1b7ca9a1dfdef7c545f575e9234b18f1b4ce7a2258a8a55b32a5fdfc90c4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e0fd4182ff84f138fd19a6e76d35289f1eb2910d2f712bcd884696cb13e69ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fd4182ff84f138fd19a6e76d35289f1eb2910d2f712bcd884696cb13e69ef0->enter($__internal_e0fd4182ff84f138fd19a6e76d35289f1eb2910d2f712bcd884696cb13e69ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ed1b7ca9a1dfdef7c545f575e9234b18f1b4ce7a2258a8a55b32a5fdfc90c4b5->leave($__internal_ed1b7ca9a1dfdef7c545f575e9234b18f1b4ce7a2258a8a55b32a5fdfc90c4b5_prof);

        
        $__internal_e0fd4182ff84f138fd19a6e76d35289f1eb2910d2f712bcd884696cb13e69ef0->leave($__internal_e0fd4182ff84f138fd19a6e76d35289f1eb2910d2f712bcd884696cb13e69ef0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
