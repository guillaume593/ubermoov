<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2d4d90e2d08ba12d905500c874b8630986d7b97b8b62dd66888df1beac1f7380 extends Twig_Template
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
        $__internal_7580acd6daf42faf435e62bcd2bc4c65bead2ce77add5534dfc15e8a25754eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7580acd6daf42faf435e62bcd2bc4c65bead2ce77add5534dfc15e8a25754eb1->enter($__internal_7580acd6daf42faf435e62bcd2bc4c65bead2ce77add5534dfc15e8a25754eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_151ca6e56579ec0a4f270870622dd03ecacfc939edec22fcd0172525a0591320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151ca6e56579ec0a4f270870622dd03ecacfc939edec22fcd0172525a0591320->enter($__internal_151ca6e56579ec0a4f270870622dd03ecacfc939edec22fcd0172525a0591320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7580acd6daf42faf435e62bcd2bc4c65bead2ce77add5534dfc15e8a25754eb1->leave($__internal_7580acd6daf42faf435e62bcd2bc4c65bead2ce77add5534dfc15e8a25754eb1_prof);

        
        $__internal_151ca6e56579ec0a4f270870622dd03ecacfc939edec22fcd0172525a0591320->leave($__internal_151ca6e56579ec0a4f270870622dd03ecacfc939edec22fcd0172525a0591320_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
