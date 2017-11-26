<?php

/* ::base.html.twig */
class __TwigTemplate_d1cc6814588d76c375fb957a09588a9685df0c45e4c2d84ea08dda1b4ab09116 extends Twig_Template
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
        $__internal_4b8f610bb4f7d36b7f01888ef464038448669f3234b06e510e8a7f0d8df8cd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8f610bb4f7d36b7f01888ef464038448669f3234b06e510e8a7f0d8df8cd2a->enter($__internal_4b8f610bb4f7d36b7f01888ef464038448669f3234b06e510e8a7f0d8df8cd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bdd74f80a09746d9b7548a46cd71c7ea3a98066d4690ecf90baa57ddcda97a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd74f80a09746d9b7548a46cd71c7ea3a98066d4690ecf90baa57ddcda97a03->enter($__internal_bdd74f80a09746d9b7548a46cd71c7ea3a98066d4690ecf90baa57ddcda97a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4b8f610bb4f7d36b7f01888ef464038448669f3234b06e510e8a7f0d8df8cd2a->leave($__internal_4b8f610bb4f7d36b7f01888ef464038448669f3234b06e510e8a7f0d8df8cd2a_prof);

        
        $__internal_bdd74f80a09746d9b7548a46cd71c7ea3a98066d4690ecf90baa57ddcda97a03->leave($__internal_bdd74f80a09746d9b7548a46cd71c7ea3a98066d4690ecf90baa57ddcda97a03_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81282671a68f698dc576ce9ca85615c6f53e0ffe3ffe06eafd353bae8ea20b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81282671a68f698dc576ce9ca85615c6f53e0ffe3ffe06eafd353bae8ea20b7d->enter($__internal_81282671a68f698dc576ce9ca85615c6f53e0ffe3ffe06eafd353bae8ea20b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d3af2c0f8c88f5919e9c74447f6e5ea3eba28989b0d3b4a81525da91eac814b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3af2c0f8c88f5919e9c74447f6e5ea3eba28989b0d3b4a81525da91eac814b7->enter($__internal_d3af2c0f8c88f5919e9c74447f6e5ea3eba28989b0d3b4a81525da91eac814b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3af2c0f8c88f5919e9c74447f6e5ea3eba28989b0d3b4a81525da91eac814b7->leave($__internal_d3af2c0f8c88f5919e9c74447f6e5ea3eba28989b0d3b4a81525da91eac814b7_prof);

        
        $__internal_81282671a68f698dc576ce9ca85615c6f53e0ffe3ffe06eafd353bae8ea20b7d->leave($__internal_81282671a68f698dc576ce9ca85615c6f53e0ffe3ffe06eafd353bae8ea20b7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3bfab9d16ea86d83d162be7ab68a79c07dea6f52d9e0765db47beef254a0168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bfab9d16ea86d83d162be7ab68a79c07dea6f52d9e0765db47beef254a0168->enter($__internal_c3bfab9d16ea86d83d162be7ab68a79c07dea6f52d9e0765db47beef254a0168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b06141b79371cc656fb04ff08df067c874dc33450ad1c59ae034456498c2a059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06141b79371cc656fb04ff08df067c874dc33450ad1c59ae034456498c2a059->enter($__internal_b06141b79371cc656fb04ff08df067c874dc33450ad1c59ae034456498c2a059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b06141b79371cc656fb04ff08df067c874dc33450ad1c59ae034456498c2a059->leave($__internal_b06141b79371cc656fb04ff08df067c874dc33450ad1c59ae034456498c2a059_prof);

        
        $__internal_c3bfab9d16ea86d83d162be7ab68a79c07dea6f52d9e0765db47beef254a0168->leave($__internal_c3bfab9d16ea86d83d162be7ab68a79c07dea6f52d9e0765db47beef254a0168_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f68f332004e0b4b0dc82507d7b513838db751b2259fba48628a5da15a5dd2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f68f332004e0b4b0dc82507d7b513838db751b2259fba48628a5da15a5dd2ed->enter($__internal_0f68f332004e0b4b0dc82507d7b513838db751b2259fba48628a5da15a5dd2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a7397ae8d28eff859059fcfb7799edb62bc4f913d4460c65fd534c96b6b22a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7397ae8d28eff859059fcfb7799edb62bc4f913d4460c65fd534c96b6b22a29->enter($__internal_a7397ae8d28eff859059fcfb7799edb62bc4f913d4460c65fd534c96b6b22a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a7397ae8d28eff859059fcfb7799edb62bc4f913d4460c65fd534c96b6b22a29->leave($__internal_a7397ae8d28eff859059fcfb7799edb62bc4f913d4460c65fd534c96b6b22a29_prof);

        
        $__internal_0f68f332004e0b4b0dc82507d7b513838db751b2259fba48628a5da15a5dd2ed->leave($__internal_0f68f332004e0b4b0dc82507d7b513838db751b2259fba48628a5da15a5dd2ed_prof);

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
        return array (  96 => 12,  79 => 11,  62 => 6,  50 => 13,  47 => 12,  45 => 11,  37 => 7,  35 => 6,  28 => 1,);
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
