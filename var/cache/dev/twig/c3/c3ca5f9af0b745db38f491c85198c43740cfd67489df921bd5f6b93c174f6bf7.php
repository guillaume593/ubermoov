<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_20ce79da4a4228bf57db06a7d5be95aee6cfb8c6362120cadfeedc46c45ddd89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1cb276d9110b81fa5a90e30b48f7b0d0f122b7684ec300b464a23e61750c573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1cb276d9110b81fa5a90e30b48f7b0d0f122b7684ec300b464a23e61750c573->enter($__internal_b1cb276d9110b81fa5a90e30b48f7b0d0f122b7684ec300b464a23e61750c573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d1db7e1c26c7263a18c9c1e7cbac9fab4a2c5888be9cb0144fed803d6e734b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1db7e1c26c7263a18c9c1e7cbac9fab4a2c5888be9cb0144fed803d6e734b36->enter($__internal_d1db7e1c26c7263a18c9c1e7cbac9fab4a2c5888be9cb0144fed803d6e734b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b1cb276d9110b81fa5a90e30b48f7b0d0f122b7684ec300b464a23e61750c573->leave($__internal_b1cb276d9110b81fa5a90e30b48f7b0d0f122b7684ec300b464a23e61750c573_prof);

        
        $__internal_d1db7e1c26c7263a18c9c1e7cbac9fab4a2c5888be9cb0144fed803d6e734b36->leave($__internal_d1db7e1c26c7263a18c9c1e7cbac9fab4a2c5888be9cb0144fed803d6e734b36_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1149308557516cd9e4cb70f06067dd2525e862817a5725a03717253f82dbd557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1149308557516cd9e4cb70f06067dd2525e862817a5725a03717253f82dbd557->enter($__internal_1149308557516cd9e4cb70f06067dd2525e862817a5725a03717253f82dbd557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4bf3a2ba90d8a49fd0baed0827a3b5ffd31c2dd85ffd1b292bcef5683ef7569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bf3a2ba90d8a49fd0baed0827a3b5ffd31c2dd85ffd1b292bcef5683ef7569->enter($__internal_b4bf3a2ba90d8a49fd0baed0827a3b5ffd31c2dd85ffd1b292bcef5683ef7569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b4bf3a2ba90d8a49fd0baed0827a3b5ffd31c2dd85ffd1b292bcef5683ef7569->leave($__internal_b4bf3a2ba90d8a49fd0baed0827a3b5ffd31c2dd85ffd1b292bcef5683ef7569_prof);

        
        $__internal_1149308557516cd9e4cb70f06067dd2525e862817a5725a03717253f82dbd557->leave($__internal_1149308557516cd9e4cb70f06067dd2525e862817a5725a03717253f82dbd557_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
