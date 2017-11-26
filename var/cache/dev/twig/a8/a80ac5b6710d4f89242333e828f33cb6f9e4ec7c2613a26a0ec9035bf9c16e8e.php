<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2cd779f4b12445e0cbcbb40bf2f206c2684e3578bab1833dd035b55fc6e62025 extends Twig_Template
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
        $__internal_65b7be4e3d471415e312faa985a150b8c2ee540f08a665f6245b7dea5ff9f3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b7be4e3d471415e312faa985a150b8c2ee540f08a665f6245b7dea5ff9f3ed->enter($__internal_65b7be4e3d471415e312faa985a150b8c2ee540f08a665f6245b7dea5ff9f3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_53fbf9012ab1081685557a2ed5cb2b1ebcfaee2c3644ee54c356ddaece435a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53fbf9012ab1081685557a2ed5cb2b1ebcfaee2c3644ee54c356ddaece435a22->enter($__internal_53fbf9012ab1081685557a2ed5cb2b1ebcfaee2c3644ee54c356ddaece435a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_65b7be4e3d471415e312faa985a150b8c2ee540f08a665f6245b7dea5ff9f3ed->leave($__internal_65b7be4e3d471415e312faa985a150b8c2ee540f08a665f6245b7dea5ff9f3ed_prof);

        
        $__internal_53fbf9012ab1081685557a2ed5cb2b1ebcfaee2c3644ee54c356ddaece435a22->leave($__internal_53fbf9012ab1081685557a2ed5cb2b1ebcfaee2c3644ee54c356ddaece435a22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
