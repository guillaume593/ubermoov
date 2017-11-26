<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0ccce4e0611a854e178788a5c398bd3ae804742ee491e30b3936f81e91a03b67 extends Twig_Template
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
        $__internal_f0ee2a0d687179414c14fc7aa33d9877a4e24830ff099f86ce64ab7195f9bdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ee2a0d687179414c14fc7aa33d9877a4e24830ff099f86ce64ab7195f9bdf2->enter($__internal_f0ee2a0d687179414c14fc7aa33d9877a4e24830ff099f86ce64ab7195f9bdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e60b44c1d30aea942ede554fc3814b0d25880eb3c0c4384c49d9480adb527c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60b44c1d30aea942ede554fc3814b0d25880eb3c0c4384c49d9480adb527c67->enter($__internal_e60b44c1d30aea942ede554fc3814b0d25880eb3c0c4384c49d9480adb527c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f0ee2a0d687179414c14fc7aa33d9877a4e24830ff099f86ce64ab7195f9bdf2->leave($__internal_f0ee2a0d687179414c14fc7aa33d9877a4e24830ff099f86ce64ab7195f9bdf2_prof);

        
        $__internal_e60b44c1d30aea942ede554fc3814b0d25880eb3c0c4384c49d9480adb527c67->leave($__internal_e60b44c1d30aea942ede554fc3814b0d25880eb3c0c4384c49d9480adb527c67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
