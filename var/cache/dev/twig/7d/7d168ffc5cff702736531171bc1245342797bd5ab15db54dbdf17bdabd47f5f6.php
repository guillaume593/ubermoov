<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f658a4749dba885c7b8915b36e89f0999ecb223068029b467707d0a9e78db9e2 extends Twig_Template
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
        $__internal_c522b71a1fc2a962f6a492572372437f7d788c359b3cb8a9b285b8fa7e1f35d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c522b71a1fc2a962f6a492572372437f7d788c359b3cb8a9b285b8fa7e1f35d8->enter($__internal_c522b71a1fc2a962f6a492572372437f7d788c359b3cb8a9b285b8fa7e1f35d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ad9746dcdd49dae153f7f2757b23613a8138c6573b5ad10ca487fe0edf6175b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9746dcdd49dae153f7f2757b23613a8138c6573b5ad10ca487fe0edf6175b7->enter($__internal_ad9746dcdd49dae153f7f2757b23613a8138c6573b5ad10ca487fe0edf6175b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c522b71a1fc2a962f6a492572372437f7d788c359b3cb8a9b285b8fa7e1f35d8->leave($__internal_c522b71a1fc2a962f6a492572372437f7d788c359b3cb8a9b285b8fa7e1f35d8_prof);

        
        $__internal_ad9746dcdd49dae153f7f2757b23613a8138c6573b5ad10ca487fe0edf6175b7->leave($__internal_ad9746dcdd49dae153f7f2757b23613a8138c6573b5ad10ca487fe0edf6175b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
