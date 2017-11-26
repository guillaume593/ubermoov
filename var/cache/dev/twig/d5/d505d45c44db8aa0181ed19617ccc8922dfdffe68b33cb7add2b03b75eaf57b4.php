<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a1181f338639efcd099e7f4fc84f9b9ffae2127bc85d7a3ddbf0a9f4b5c96ea1 extends Twig_Template
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
        $__internal_273031d0ac2f5899bd60a122da5b966c78c50c659972b110df90af6d5a1b018a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273031d0ac2f5899bd60a122da5b966c78c50c659972b110df90af6d5a1b018a->enter($__internal_273031d0ac2f5899bd60a122da5b966c78c50c659972b110df90af6d5a1b018a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_b5a50f4643dd3c819c3b22124ed02badf53c19f97a64252cc2d07beebdeb10c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a50f4643dd3c819c3b22124ed02badf53c19f97a64252cc2d07beebdeb10c0->enter($__internal_b5a50f4643dd3c819c3b22124ed02badf53c19f97a64252cc2d07beebdeb10c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_273031d0ac2f5899bd60a122da5b966c78c50c659972b110df90af6d5a1b018a->leave($__internal_273031d0ac2f5899bd60a122da5b966c78c50c659972b110df90af6d5a1b018a_prof);

        
        $__internal_b5a50f4643dd3c819c3b22124ed02badf53c19f97a64252cc2d07beebdeb10c0->leave($__internal_b5a50f4643dd3c819c3b22124ed02badf53c19f97a64252cc2d07beebdeb10c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
