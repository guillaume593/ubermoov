<?php

/* ::base.html.twig */
class __TwigTemplate_3fd168f409d284f520be2cb47767e8ea636947f29b1ceade5ceabd08b6aef5ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6063c0dc2466435ee0f409659ae6e7c1b61dcc9cfd0aae133a74211611f30bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6063c0dc2466435ee0f409659ae6e7c1b61dcc9cfd0aae133a74211611f30bf2->enter($__internal_6063c0dc2466435ee0f409659ae6e7c1b61dcc9cfd0aae133a74211611f30bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_6063c0dc2466435ee0f409659ae6e7c1b61dcc9cfd0aae133a74211611f30bf2->leave($__internal_6063c0dc2466435ee0f409659ae6e7c1b61dcc9cfd0aae133a74211611f30bf2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47046447463ebd221d7cd7e700c2da4328165600701d4c4eb45e2a3bc236d11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47046447463ebd221d7cd7e700c2da4328165600701d4c4eb45e2a3bc236d11e->enter($__internal_47046447463ebd221d7cd7e700c2da4328165600701d4c4eb45e2a3bc236d11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47046447463ebd221d7cd7e700c2da4328165600701d4c4eb45e2a3bc236d11e->leave($__internal_47046447463ebd221d7cd7e700c2da4328165600701d4c4eb45e2a3bc236d11e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fdb464a20869038fc55f6a665a6cbd3775016f8d13c7d9fbb47da0dcdf9a227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdb464a20869038fc55f6a665a6cbd3775016f8d13c7d9fbb47da0dcdf9a227->enter($__internal_9fdb464a20869038fc55f6a665a6cbd3775016f8d13c7d9fbb47da0dcdf9a227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9fdb464a20869038fc55f6a665a6cbd3775016f8d13c7d9fbb47da0dcdf9a227->leave($__internal_9fdb464a20869038fc55f6a665a6cbd3775016f8d13c7d9fbb47da0dcdf9a227_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef3248105f2720bc1561a7376430db16faca5ba7524595657239b263193fb946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3248105f2720bc1561a7376430db16faca5ba7524595657239b263193fb946->enter($__internal_ef3248105f2720bc1561a7376430db16faca5ba7524595657239b263193fb946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef3248105f2720bc1561a7376430db16faca5ba7524595657239b263193fb946->leave($__internal_ef3248105f2720bc1561a7376430db16faca5ba7524595657239b263193fb946_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  67 => 11,  56 => 6,  47 => 13,  44 => 12,  42 => 11,  34 => 7,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/views/base.html.twig");
    }
}
