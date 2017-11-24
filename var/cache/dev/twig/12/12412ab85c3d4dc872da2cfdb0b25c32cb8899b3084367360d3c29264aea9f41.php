<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_31251581335495ce79dacf0704e844f5381d465a76287b602947c59f1b4810ae extends Twig_Template
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
        $__internal_3afcfd3450109bcb8216012fee0c7f04b2290830db46b08eecbb2d60a68f9a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afcfd3450109bcb8216012fee0c7f04b2290830db46b08eecbb2d60a68f9a6a->enter($__internal_3afcfd3450109bcb8216012fee0c7f04b2290830db46b08eecbb2d60a68f9a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3afcfd3450109bcb8216012fee0c7f04b2290830db46b08eecbb2d60a68f9a6a->leave($__internal_3afcfd3450109bcb8216012fee0c7f04b2290830db46b08eecbb2d60a68f9a6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
