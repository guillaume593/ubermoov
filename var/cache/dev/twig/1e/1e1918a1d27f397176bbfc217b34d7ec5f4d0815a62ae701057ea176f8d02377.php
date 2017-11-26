<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bc8c9447fab0be77ee3087aebeaaacf3ebf6a97ccd9e25889ad65d015a90826d extends Twig_Template
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
        $__internal_2084ed523814c6a7bdb5f5cb96f132a3466ae75559df8ab3e9f83c20baf5e87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2084ed523814c6a7bdb5f5cb96f132a3466ae75559df8ab3e9f83c20baf5e87d->enter($__internal_2084ed523814c6a7bdb5f5cb96f132a3466ae75559df8ab3e9f83c20baf5e87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2dfbd4cc50adedecf6ffa870a3b429984c104a18f1fee5d9bb12478b46dd63f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfbd4cc50adedecf6ffa870a3b429984c104a18f1fee5d9bb12478b46dd63f5->enter($__internal_2dfbd4cc50adedecf6ffa870a3b429984c104a18f1fee5d9bb12478b46dd63f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2084ed523814c6a7bdb5f5cb96f132a3466ae75559df8ab3e9f83c20baf5e87d->leave($__internal_2084ed523814c6a7bdb5f5cb96f132a3466ae75559df8ab3e9f83c20baf5e87d_prof);

        
        $__internal_2dfbd4cc50adedecf6ffa870a3b429984c104a18f1fee5d9bb12478b46dd63f5->leave($__internal_2dfbd4cc50adedecf6ffa870a3b429984c104a18f1fee5d9bb12478b46dd63f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
