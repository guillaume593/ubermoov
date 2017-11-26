<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ab3edd3d91558b058de9155d7d9d704a8a4a0b3d54f03274f5e23d3d515bf2ee extends Twig_Template
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
        $__internal_95b71987ab3edd8cf30b9f53230e2dd535e99c1b09ceefbf225849ad0f0ed437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b71987ab3edd8cf30b9f53230e2dd535e99c1b09ceefbf225849ad0f0ed437->enter($__internal_95b71987ab3edd8cf30b9f53230e2dd535e99c1b09ceefbf225849ad0f0ed437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3eb90ada464e1536e69e1568e35de68818de89ee30b9c129544224cb74ae1a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb90ada464e1536e69e1568e35de68818de89ee30b9c129544224cb74ae1a22->enter($__internal_3eb90ada464e1536e69e1568e35de68818de89ee30b9c129544224cb74ae1a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_95b71987ab3edd8cf30b9f53230e2dd535e99c1b09ceefbf225849ad0f0ed437->leave($__internal_95b71987ab3edd8cf30b9f53230e2dd535e99c1b09ceefbf225849ad0f0ed437_prof);

        
        $__internal_3eb90ada464e1536e69e1568e35de68818de89ee30b9c129544224cb74ae1a22->leave($__internal_3eb90ada464e1536e69e1568e35de68818de89ee30b9c129544224cb74ae1a22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
