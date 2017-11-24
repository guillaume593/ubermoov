<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_eed4bfec509fcf954725e20d23c796a10040338356795f1ee39a6cb89ada78e7 extends Twig_Template
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
        $__internal_7be73e97b1b1ad17cf6c5c4659f231d87a4d4465ef531581d3b51ca67da189ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be73e97b1b1ad17cf6c5c4659f231d87a4d4465ef531581d3b51ca67da189ec->enter($__internal_7be73e97b1b1ad17cf6c5c4659f231d87a4d4465ef531581d3b51ca67da189ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7be73e97b1b1ad17cf6c5c4659f231d87a4d4465ef531581d3b51ca67da189ec->leave($__internal_7be73e97b1b1ad17cf6c5c4659f231d87a4d4465ef531581d3b51ca67da189ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
