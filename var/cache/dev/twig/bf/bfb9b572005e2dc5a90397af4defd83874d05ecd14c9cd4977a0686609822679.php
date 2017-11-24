<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_94ec0e08f30034c40618df362b87fbd3a1388870808ea85cc3a501d4c68ff3f1 extends Twig_Template
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
        $__internal_115f39e46f3df44cccc21f4beac490dfe7f8202b8ac547e1ecf0a0bcda634af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115f39e46f3df44cccc21f4beac490dfe7f8202b8ac547e1ecf0a0bcda634af7->enter($__internal_115f39e46f3df44cccc21f4beac490dfe7f8202b8ac547e1ecf0a0bcda634af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_115f39e46f3df44cccc21f4beac490dfe7f8202b8ac547e1ecf0a0bcda634af7->leave($__internal_115f39e46f3df44cccc21f4beac490dfe7f8202b8ac547e1ecf0a0bcda634af7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
