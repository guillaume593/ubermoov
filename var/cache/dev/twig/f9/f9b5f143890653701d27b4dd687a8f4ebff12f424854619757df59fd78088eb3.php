<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_76de84d71e7bb58ee769e1bdfef47a466b6f6150b919646afa2191877097a790 extends Twig_Template
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
        $__internal_787f3a1e08dfb689198892f0d0f4c1937d6a06e6e04bf093a1ce68e5c60ece58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787f3a1e08dfb689198892f0d0f4c1937d6a06e6e04bf093a1ce68e5c60ece58->enter($__internal_787f3a1e08dfb689198892f0d0f4c1937d6a06e6e04bf093a1ce68e5c60ece58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_06da65071abadfc36e2a501662e46170e8c6523ea251ff644972f9fa549d3bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06da65071abadfc36e2a501662e46170e8c6523ea251ff644972f9fa549d3bf5->enter($__internal_06da65071abadfc36e2a501662e46170e8c6523ea251ff644972f9fa549d3bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_787f3a1e08dfb689198892f0d0f4c1937d6a06e6e04bf093a1ce68e5c60ece58->leave($__internal_787f3a1e08dfb689198892f0d0f4c1937d6a06e6e04bf093a1ce68e5c60ece58_prof);

        
        $__internal_06da65071abadfc36e2a501662e46170e8c6523ea251ff644972f9fa549d3bf5->leave($__internal_06da65071abadfc36e2a501662e46170e8c6523ea251ff644972f9fa549d3bf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
