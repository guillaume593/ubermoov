<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f8c8bb2e7e636b4cb0ca2077ce3fc0f2afebed508c946fe50788c34eb35beca2 extends Twig_Template
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
        $__internal_a4b3e08ccd82fd80f5fae66df9de0cb0f086cf825fb3219751201bb7fa32cc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b3e08ccd82fd80f5fae66df9de0cb0f086cf825fb3219751201bb7fa32cc48->enter($__internal_a4b3e08ccd82fd80f5fae66df9de0cb0f086cf825fb3219751201bb7fa32cc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a4b3e08ccd82fd80f5fae66df9de0cb0f086cf825fb3219751201bb7fa32cc48->leave($__internal_a4b3e08ccd82fd80f5fae66df9de0cb0f086cf825fb3219751201bb7fa32cc48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
