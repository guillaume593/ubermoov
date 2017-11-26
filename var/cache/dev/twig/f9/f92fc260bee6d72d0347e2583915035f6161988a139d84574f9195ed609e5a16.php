<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_374e8661f7beaf029155131b6d7d787d13ebce78701379505d70946362cd0e27 extends Twig_Template
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
        $__internal_7e9085bd90817be584a6894d8e0f2a0a7f19a6bf87b2f01f633236a1a3653afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9085bd90817be584a6894d8e0f2a0a7f19a6bf87b2f01f633236a1a3653afd->enter($__internal_7e9085bd90817be584a6894d8e0f2a0a7f19a6bf87b2f01f633236a1a3653afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cccad791b6b2fe2491597d5232588f964c372c1fddb86916d512b3a87c253a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccad791b6b2fe2491597d5232588f964c372c1fddb86916d512b3a87c253a72->enter($__internal_cccad791b6b2fe2491597d5232588f964c372c1fddb86916d512b3a87c253a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7e9085bd90817be584a6894d8e0f2a0a7f19a6bf87b2f01f633236a1a3653afd->leave($__internal_7e9085bd90817be584a6894d8e0f2a0a7f19a6bf87b2f01f633236a1a3653afd_prof);

        
        $__internal_cccad791b6b2fe2491597d5232588f964c372c1fddb86916d512b3a87c253a72->leave($__internal_cccad791b6b2fe2491597d5232588f964c372c1fddb86916d512b3a87c253a72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
