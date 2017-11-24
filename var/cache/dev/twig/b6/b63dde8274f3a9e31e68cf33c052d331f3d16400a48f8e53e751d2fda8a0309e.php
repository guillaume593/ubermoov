<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1775f1b7697b74a644e8ccfb91673b2ba5024328548096c61f1b4d9222e27cbb extends Twig_Template
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
        $__internal_24fff03b752720123e28655d4981ab591f84966706be6f34c152377b68113c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fff03b752720123e28655d4981ab591f84966706be6f34c152377b68113c86->enter($__internal_24fff03b752720123e28655d4981ab591f84966706be6f34c152377b68113c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_24fff03b752720123e28655d4981ab591f84966706be6f34c152377b68113c86->leave($__internal_24fff03b752720123e28655d4981ab591f84966706be6f34c152377b68113c86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
