<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7ddc50e0dcde7d135e1d04c6d2df7951a4ec14168e2b7ad711f7f4bdf8f4c09a extends Twig_Template
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
        $__internal_55c3459fd827ccfd2b38e7b2169ee4bfe07094197ce5f933d503308adf47ca8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c3459fd827ccfd2b38e7b2169ee4bfe07094197ce5f933d503308adf47ca8c->enter($__internal_55c3459fd827ccfd2b38e7b2169ee4bfe07094197ce5f933d503308adf47ca8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_55c3459fd827ccfd2b38e7b2169ee4bfe07094197ce5f933d503308adf47ca8c->leave($__internal_55c3459fd827ccfd2b38e7b2169ee4bfe07094197ce5f933d503308adf47ca8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
