<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7d1bf57e1821558c4dfa792c6724462f469e9a1f6ef39c9881deb6f134a62137 extends Twig_Template
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
        $__internal_03066cdf8dd6edacfda89b36b0eea6c1625d8c70d034559500da5a73f2b3b5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03066cdf8dd6edacfda89b36b0eea6c1625d8c70d034559500da5a73f2b3b5a7->enter($__internal_03066cdf8dd6edacfda89b36b0eea6c1625d8c70d034559500da5a73f2b3b5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_03066cdf8dd6edacfda89b36b0eea6c1625d8c70d034559500da5a73f2b3b5a7->leave($__internal_03066cdf8dd6edacfda89b36b0eea6c1625d8c70d034559500da5a73f2b3b5a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
