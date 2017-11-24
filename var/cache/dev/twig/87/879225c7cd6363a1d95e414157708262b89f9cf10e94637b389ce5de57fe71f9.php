<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_deeb6b988d19d276f5a629faf6e3b35499dea7b8166d86e69704c627cb34bd28 extends Twig_Template
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
        $__internal_fa805289baaee0094bc3ae0c0aac2b448da6b45d831f3d97d03ad043ad893328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa805289baaee0094bc3ae0c0aac2b448da6b45d831f3d97d03ad043ad893328->enter($__internal_fa805289baaee0094bc3ae0c0aac2b448da6b45d831f3d97d03ad043ad893328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fa805289baaee0094bc3ae0c0aac2b448da6b45d831f3d97d03ad043ad893328->leave($__internal_fa805289baaee0094bc3ae0c0aac2b448da6b45d831f3d97d03ad043ad893328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
