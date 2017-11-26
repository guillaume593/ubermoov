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
        $__internal_9ca9bd81152b949d375dc73e884ec8d39a46531c1239b552de42858a821b6630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca9bd81152b949d375dc73e884ec8d39a46531c1239b552de42858a821b6630->enter($__internal_9ca9bd81152b949d375dc73e884ec8d39a46531c1239b552de42858a821b6630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_24f2b51a7b13e1f4ebbfaf026e604d40f297e17c59bc71971fd05cb5bd6271ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f2b51a7b13e1f4ebbfaf026e604d40f297e17c59bc71971fd05cb5bd6271ab->enter($__internal_24f2b51a7b13e1f4ebbfaf026e604d40f297e17c59bc71971fd05cb5bd6271ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9ca9bd81152b949d375dc73e884ec8d39a46531c1239b552de42858a821b6630->leave($__internal_9ca9bd81152b949d375dc73e884ec8d39a46531c1239b552de42858a821b6630_prof);

        
        $__internal_24f2b51a7b13e1f4ebbfaf026e604d40f297e17c59bc71971fd05cb5bd6271ab->leave($__internal_24f2b51a7b13e1f4ebbfaf026e604d40f297e17c59bc71971fd05cb5bd6271ab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_287ff92520ce83e142ea1347ac7164a9e185536f9b13a02810fdc6ab01f99c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287ff92520ce83e142ea1347ac7164a9e185536f9b13a02810fdc6ab01f99c79->enter($__internal_287ff92520ce83e142ea1347ac7164a9e185536f9b13a02810fdc6ab01f99c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83421a0664bdb23bed6f6e59bfcbc9959e234c1595de54b6e318960cd037a1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83421a0664bdb23bed6f6e59bfcbc9959e234c1595de54b6e318960cd037a1c0->enter($__internal_83421a0664bdb23bed6f6e59bfcbc9959e234c1595de54b6e318960cd037a1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83421a0664bdb23bed6f6e59bfcbc9959e234c1595de54b6e318960cd037a1c0->leave($__internal_83421a0664bdb23bed6f6e59bfcbc9959e234c1595de54b6e318960cd037a1c0_prof);

        
        $__internal_287ff92520ce83e142ea1347ac7164a9e185536f9b13a02810fdc6ab01f99c79->leave($__internal_287ff92520ce83e142ea1347ac7164a9e185536f9b13a02810fdc6ab01f99c79_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_16895f203ca82863ccc68b2da58fba431aadfeac54157aab5783d8df196eba83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16895f203ca82863ccc68b2da58fba431aadfeac54157aab5783d8df196eba83->enter($__internal_16895f203ca82863ccc68b2da58fba431aadfeac54157aab5783d8df196eba83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c31ea069502bca5597d51eac3999b4ae234453596c77aec3313aed130b092ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31ea069502bca5597d51eac3999b4ae234453596c77aec3313aed130b092ecd->enter($__internal_c31ea069502bca5597d51eac3999b4ae234453596c77aec3313aed130b092ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c31ea069502bca5597d51eac3999b4ae234453596c77aec3313aed130b092ecd->leave($__internal_c31ea069502bca5597d51eac3999b4ae234453596c77aec3313aed130b092ecd_prof);

        
        $__internal_16895f203ca82863ccc68b2da58fba431aadfeac54157aab5783d8df196eba83->leave($__internal_16895f203ca82863ccc68b2da58fba431aadfeac54157aab5783d8df196eba83_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9eb521d7ecccbe377ba517e21294eda96e2363ec7e5895e0b1507ddff1be0f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb521d7ecccbe377ba517e21294eda96e2363ec7e5895e0b1507ddff1be0f6a->enter($__internal_9eb521d7ecccbe377ba517e21294eda96e2363ec7e5895e0b1507ddff1be0f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bdfb885d429c44fca76f999dd405a23a09b4d900c7ef4f5c91b1db35c97ca481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfb885d429c44fca76f999dd405a23a09b4d900c7ef4f5c91b1db35c97ca481->enter($__internal_bdfb885d429c44fca76f999dd405a23a09b4d900c7ef4f5c91b1db35c97ca481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bdfb885d429c44fca76f999dd405a23a09b4d900c7ef4f5c91b1db35c97ca481->leave($__internal_bdfb885d429c44fca76f999dd405a23a09b4d900c7ef4f5c91b1db35c97ca481_prof);

        
        $__internal_9eb521d7ecccbe377ba517e21294eda96e2363ec7e5895e0b1507ddff1be0f6a->leave($__internal_9eb521d7ecccbe377ba517e21294eda96e2363ec7e5895e0b1507ddff1be0f6a_prof);

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
