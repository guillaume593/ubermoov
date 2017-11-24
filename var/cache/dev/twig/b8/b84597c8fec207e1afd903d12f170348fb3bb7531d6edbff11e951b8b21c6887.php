<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7e9b1942ccd6a8c62003e9eedc99de9ca02b73ffaabe0eabf2022313c76be3f6 extends Twig_Template
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
        $__internal_27103bbe532485e8964397de3000ff5be6f84c4ecd4d5e3b0cf7f84cbdee6ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27103bbe532485e8964397de3000ff5be6f84c4ecd4d5e3b0cf7f84cbdee6ced->enter($__internal_27103bbe532485e8964397de3000ff5be6f84c4ecd4d5e3b0cf7f84cbdee6ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_27103bbe532485e8964397de3000ff5be6f84c4ecd4d5e3b0cf7f84cbdee6ced->leave($__internal_27103bbe532485e8964397de3000ff5be6f84c4ecd4d5e3b0cf7f84cbdee6ced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
