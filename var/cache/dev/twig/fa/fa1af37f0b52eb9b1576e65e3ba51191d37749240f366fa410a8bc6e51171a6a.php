<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_44c930dc4203322ce8baa748608dc622af13c0c959479fa93fb7056882fea50e extends Twig_Template
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
        $__internal_b17a70891ea8d1361744ea1f90dc3aab45d1c19894b0431a6ad20676a67d4e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17a70891ea8d1361744ea1f90dc3aab45d1c19894b0431a6ad20676a67d4e47->enter($__internal_b17a70891ea8d1361744ea1f90dc3aab45d1c19894b0431a6ad20676a67d4e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a2cafc0c6d22b9beb9255fcd30a3017b160fe5e3211f2bc58ce2a6fbfb71d9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cafc0c6d22b9beb9255fcd30a3017b160fe5e3211f2bc58ce2a6fbfb71d9a3->enter($__internal_a2cafc0c6d22b9beb9255fcd30a3017b160fe5e3211f2bc58ce2a6fbfb71d9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b17a70891ea8d1361744ea1f90dc3aab45d1c19894b0431a6ad20676a67d4e47->leave($__internal_b17a70891ea8d1361744ea1f90dc3aab45d1c19894b0431a6ad20676a67d4e47_prof);

        
        $__internal_a2cafc0c6d22b9beb9255fcd30a3017b160fe5e3211f2bc58ce2a6fbfb71d9a3->leave($__internal_a2cafc0c6d22b9beb9255fcd30a3017b160fe5e3211f2bc58ce2a6fbfb71d9a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
