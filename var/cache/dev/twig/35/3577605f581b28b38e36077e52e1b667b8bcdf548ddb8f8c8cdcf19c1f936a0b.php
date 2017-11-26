<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_df6049ef45397e45bda903a5da52f69cef4b1a9bba8fe4c2bdee41f90c94a41f extends Twig_Template
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
        $__internal_17acfd6d0d1ad37b0bdcd3350330ca8d4fd1e14d0eca17600ba029f2cb2677af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17acfd6d0d1ad37b0bdcd3350330ca8d4fd1e14d0eca17600ba029f2cb2677af->enter($__internal_17acfd6d0d1ad37b0bdcd3350330ca8d4fd1e14d0eca17600ba029f2cb2677af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4f7e01bb1a1253b70112aee7d531af94d76b21af805e6653b80471bd4fd5e8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7e01bb1a1253b70112aee7d531af94d76b21af805e6653b80471bd4fd5e8b4->enter($__internal_4f7e01bb1a1253b70112aee7d531af94d76b21af805e6653b80471bd4fd5e8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_17acfd6d0d1ad37b0bdcd3350330ca8d4fd1e14d0eca17600ba029f2cb2677af->leave($__internal_17acfd6d0d1ad37b0bdcd3350330ca8d4fd1e14d0eca17600ba029f2cb2677af_prof);

        
        $__internal_4f7e01bb1a1253b70112aee7d531af94d76b21af805e6653b80471bd4fd5e8b4->leave($__internal_4f7e01bb1a1253b70112aee7d531af94d76b21af805e6653b80471bd4fd5e8b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
