<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_dc4035ae13ed5a3fcbd3db678811079b7791c25bbe7bc52298a36cf7158d9e67 extends Twig_Template
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
        $__internal_150a16bc7390130192529f15f734ba49dfb47e61215f01ab7959c4d78d1744eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150a16bc7390130192529f15f734ba49dfb47e61215f01ab7959c4d78d1744eb->enter($__internal_150a16bc7390130192529f15f734ba49dfb47e61215f01ab7959c4d78d1744eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_150a16bc7390130192529f15f734ba49dfb47e61215f01ab7959c4d78d1744eb->leave($__internal_150a16bc7390130192529f15f734ba49dfb47e61215f01ab7959c4d78d1744eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
