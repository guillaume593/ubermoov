<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1ade76694b8269757c0b1efa1342cd6b1ead104d754f913f239fc62bc67e4e41 extends Twig_Template
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
        $__internal_2505ddf62a6ab63d67b25fcf569ffa177b0af7d2170dc7fecf380e465599dbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2505ddf62a6ab63d67b25fcf569ffa177b0af7d2170dc7fecf380e465599dbfc->enter($__internal_2505ddf62a6ab63d67b25fcf569ffa177b0af7d2170dc7fecf380e465599dbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2505ddf62a6ab63d67b25fcf569ffa177b0af7d2170dc7fecf380e465599dbfc->leave($__internal_2505ddf62a6ab63d67b25fcf569ffa177b0af7d2170dc7fecf380e465599dbfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
