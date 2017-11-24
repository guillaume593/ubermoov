<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2e01ee2f7230824fab0adfb8c3ee31abf29be91e265460a967bda083e338ece2 extends Twig_Template
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
        $__internal_2c2c11da5570dea5afa28db26a5ab5d17b078c10a165d862fb08461faf0c4928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2c11da5570dea5afa28db26a5ab5d17b078c10a165d862fb08461faf0c4928->enter($__internal_2c2c11da5570dea5afa28db26a5ab5d17b078c10a165d862fb08461faf0c4928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2c2c11da5570dea5afa28db26a5ab5d17b078c10a165d862fb08461faf0c4928->leave($__internal_2c2c11da5570dea5afa28db26a5ab5d17b078c10a165d862fb08461faf0c4928_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
