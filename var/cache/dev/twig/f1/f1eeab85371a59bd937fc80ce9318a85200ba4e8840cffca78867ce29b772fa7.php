<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_de5eebfc923f0496c279dc4c4576f7d9b5aea49a6d3ea547435bcf2f829edc8c extends Twig_Template
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
        $__internal_ec5acf4b9f80ff50227aba6d73c92c7b92e24f4f8fdb4520e015992b4e02adbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5acf4b9f80ff50227aba6d73c92c7b92e24f4f8fdb4520e015992b4e02adbb->enter($__internal_ec5acf4b9f80ff50227aba6d73c92c7b92e24f4f8fdb4520e015992b4e02adbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ec5acf4b9f80ff50227aba6d73c92c7b92e24f4f8fdb4520e015992b4e02adbb->leave($__internal_ec5acf4b9f80ff50227aba6d73c92c7b92e24f4f8fdb4520e015992b4e02adbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
