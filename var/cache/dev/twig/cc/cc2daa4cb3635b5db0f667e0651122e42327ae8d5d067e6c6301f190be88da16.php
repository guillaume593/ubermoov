<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_11e59437113e67215af62e0dd95a6e170174cc4d5614a4c35413e3d47517b63a extends Twig_Template
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
        $__internal_e5c01752495cc717340c583e2b7d17a9c0f05703212334807f8e341436ddc1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c01752495cc717340c583e2b7d17a9c0f05703212334807f8e341436ddc1dc->enter($__internal_e5c01752495cc717340c583e2b7d17a9c0f05703212334807f8e341436ddc1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7043b0d0def6a4c852a7fd9698f0bb462065d598a89aa7b4d5f685ecc89d9e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7043b0d0def6a4c852a7fd9698f0bb462065d598a89aa7b4d5f685ecc89d9e88->enter($__internal_7043b0d0def6a4c852a7fd9698f0bb462065d598a89aa7b4d5f685ecc89d9e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e5c01752495cc717340c583e2b7d17a9c0f05703212334807f8e341436ddc1dc->leave($__internal_e5c01752495cc717340c583e2b7d17a9c0f05703212334807f8e341436ddc1dc_prof);

        
        $__internal_7043b0d0def6a4c852a7fd9698f0bb462065d598a89aa7b4d5f685ecc89d9e88->leave($__internal_7043b0d0def6a4c852a7fd9698f0bb462065d598a89aa7b4d5f685ecc89d9e88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
