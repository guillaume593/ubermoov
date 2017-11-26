<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_865feb19c825c4710194054853c061049c95a3ceb8b542802edc97488b7b5162 extends Twig_Template
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
        $__internal_d0dee85373e7018e22a289a3c83bd9e7962644490f80621b3b6dbeac9594519e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0dee85373e7018e22a289a3c83bd9e7962644490f80621b3b6dbeac9594519e->enter($__internal_d0dee85373e7018e22a289a3c83bd9e7962644490f80621b3b6dbeac9594519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7a5a019cf589df3e7e2b9d8af26108d6dcf86f90c8fd90c13ecb449703d57907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5a019cf589df3e7e2b9d8af26108d6dcf86f90c8fd90c13ecb449703d57907->enter($__internal_7a5a019cf589df3e7e2b9d8af26108d6dcf86f90c8fd90c13ecb449703d57907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d0dee85373e7018e22a289a3c83bd9e7962644490f80621b3b6dbeac9594519e->leave($__internal_d0dee85373e7018e22a289a3c83bd9e7962644490f80621b3b6dbeac9594519e_prof);

        
        $__internal_7a5a019cf589df3e7e2b9d8af26108d6dcf86f90c8fd90c13ecb449703d57907->leave($__internal_7a5a019cf589df3e7e2b9d8af26108d6dcf86f90c8fd90c13ecb449703d57907_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
