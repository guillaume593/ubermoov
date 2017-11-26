<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bdd27fe6967b57f4b5caf66e82776400cbfb621f7ed0f472c2d06ddb335a7a48 extends Twig_Template
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
        $__internal_b96d3136175be60f2b3c90f876c2b3293a6b795f0cc0de125d2572a04d47cbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96d3136175be60f2b3c90f876c2b3293a6b795f0cc0de125d2572a04d47cbbf->enter($__internal_b96d3136175be60f2b3c90f876c2b3293a6b795f0cc0de125d2572a04d47cbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_f5d6699e55b1febb8b372148c0dd930d423c8ad3cdb8f0dbbfecf8245c48e569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d6699e55b1febb8b372148c0dd930d423c8ad3cdb8f0dbbfecf8245c48e569->enter($__internal_f5d6699e55b1febb8b372148c0dd930d423c8ad3cdb8f0dbbfecf8245c48e569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b96d3136175be60f2b3c90f876c2b3293a6b795f0cc0de125d2572a04d47cbbf->leave($__internal_b96d3136175be60f2b3c90f876c2b3293a6b795f0cc0de125d2572a04d47cbbf_prof);

        
        $__internal_f5d6699e55b1febb8b372148c0dd930d423c8ad3cdb8f0dbbfecf8245c48e569->leave($__internal_f5d6699e55b1febb8b372148c0dd930d423c8ad3cdb8f0dbbfecf8245c48e569_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
