<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4bf1f7bf0ec1b541d9fd08d6a84d8afdfcb3270628087a488a52a9d3841cde23 extends Twig_Template
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
        $__internal_e692e74a33e7e7332ffa85fa3e111a03230a2469676b32a013881355ded59555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e692e74a33e7e7332ffa85fa3e111a03230a2469676b32a013881355ded59555->enter($__internal_e692e74a33e7e7332ffa85fa3e111a03230a2469676b32a013881355ded59555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e692e74a33e7e7332ffa85fa3e111a03230a2469676b32a013881355ded59555->leave($__internal_e692e74a33e7e7332ffa85fa3e111a03230a2469676b32a013881355ded59555_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
