<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7ffaab278f5f043d44e75bf688741e12b096590d23067a81497d362d3666309c extends Twig_Template
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
        $__internal_25c90e08a85a838ce0ba1da37edd83460f335b76a6d593a4daecab71d913d4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c90e08a85a838ce0ba1da37edd83460f335b76a6d593a4daecab71d913d4cc->enter($__internal_25c90e08a85a838ce0ba1da37edd83460f335b76a6d593a4daecab71d913d4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5c46d44ea08ebb431f01b56a6dd08d3f6cec3b259c31c5a8a0675507a48278c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c46d44ea08ebb431f01b56a6dd08d3f6cec3b259c31c5a8a0675507a48278c6->enter($__internal_5c46d44ea08ebb431f01b56a6dd08d3f6cec3b259c31c5a8a0675507a48278c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_25c90e08a85a838ce0ba1da37edd83460f335b76a6d593a4daecab71d913d4cc->leave($__internal_25c90e08a85a838ce0ba1da37edd83460f335b76a6d593a4daecab71d913d4cc_prof);

        
        $__internal_5c46d44ea08ebb431f01b56a6dd08d3f6cec3b259c31c5a8a0675507a48278c6->leave($__internal_5c46d44ea08ebb431f01b56a6dd08d3f6cec3b259c31c5a8a0675507a48278c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
