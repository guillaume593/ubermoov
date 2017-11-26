<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_0037bc074a374b38f15854b8a5092d8964e17a933751b7d45b41ab3e481a9bdc extends Twig_Template
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
        $__internal_cf75a422cf7c6ac095b997ef7c0a84f8b13be85dab1a24f9f4177d349e3415e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf75a422cf7c6ac095b997ef7c0a84f8b13be85dab1a24f9f4177d349e3415e9->enter($__internal_cf75a422cf7c6ac095b997ef7c0a84f8b13be85dab1a24f9f4177d349e3415e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c65c5fbc94bf561988486f7616d50182cd9a917e35bc084e25111481a0bdf441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65c5fbc94bf561988486f7616d50182cd9a917e35bc084e25111481a0bdf441->enter($__internal_c65c5fbc94bf561988486f7616d50182cd9a917e35bc084e25111481a0bdf441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cf75a422cf7c6ac095b997ef7c0a84f8b13be85dab1a24f9f4177d349e3415e9->leave($__internal_cf75a422cf7c6ac095b997ef7c0a84f8b13be85dab1a24f9f4177d349e3415e9_prof);

        
        $__internal_c65c5fbc94bf561988486f7616d50182cd9a917e35bc084e25111481a0bdf441->leave($__internal_c65c5fbc94bf561988486f7616d50182cd9a917e35bc084e25111481a0bdf441_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
