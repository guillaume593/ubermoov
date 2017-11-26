<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_897bd2602135823543e818ed284f6b1da3f51b5ef253e44969bd687de36e7587 extends Twig_Template
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
        $__internal_b863f2fd441c4ab727b4dce733d1b31780052847b2daea654dccea2e19c5113e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b863f2fd441c4ab727b4dce733d1b31780052847b2daea654dccea2e19c5113e->enter($__internal_b863f2fd441c4ab727b4dce733d1b31780052847b2daea654dccea2e19c5113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_81656639b6d0d5768b1de2a42a1700803372fa970924aab840a7a0f0a8be31e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81656639b6d0d5768b1de2a42a1700803372fa970924aab840a7a0f0a8be31e9->enter($__internal_81656639b6d0d5768b1de2a42a1700803372fa970924aab840a7a0f0a8be31e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_b863f2fd441c4ab727b4dce733d1b31780052847b2daea654dccea2e19c5113e->leave($__internal_b863f2fd441c4ab727b4dce733d1b31780052847b2daea654dccea2e19c5113e_prof);

        
        $__internal_81656639b6d0d5768b1de2a42a1700803372fa970924aab840a7a0f0a8be31e9->leave($__internal_81656639b6d0d5768b1de2a42a1700803372fa970924aab840a7a0f0a8be31e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
