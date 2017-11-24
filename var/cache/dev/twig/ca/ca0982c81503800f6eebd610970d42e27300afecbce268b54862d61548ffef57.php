<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7a2f9e32ab1c9c304ef9d5904a9450503e020b334340f1fccd1f998ec0e7bdcf extends Twig_Template
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
        $__internal_cbff278f0cb31d6c63e522b82f05ea7c4f8e3a02c540a98f1bb089483ed1af72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbff278f0cb31d6c63e522b82f05ea7c4f8e3a02c540a98f1bb089483ed1af72->enter($__internal_cbff278f0cb31d6c63e522b82f05ea7c4f8e3a02c540a98f1bb089483ed1af72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cbff278f0cb31d6c63e522b82f05ea7c4f8e3a02c540a98f1bb089483ed1af72->leave($__internal_cbff278f0cb31d6c63e522b82f05ea7c4f8e3a02c540a98f1bb089483ed1af72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
