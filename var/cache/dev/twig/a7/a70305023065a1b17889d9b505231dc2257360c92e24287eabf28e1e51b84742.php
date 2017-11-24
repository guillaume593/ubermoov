<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7794ab6b3538a9909aeb3dec065c99388729d7eb4faf788b0ee08380c9e15e35 extends Twig_Template
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
        $__internal_47ea679ce09dc32c85775f97eeb60f5be857edb5a3f09fcdcf21ae17ec588c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ea679ce09dc32c85775f97eeb60f5be857edb5a3f09fcdcf21ae17ec588c0c->enter($__internal_47ea679ce09dc32c85775f97eeb60f5be857edb5a3f09fcdcf21ae17ec588c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_47ea679ce09dc32c85775f97eeb60f5be857edb5a3f09fcdcf21ae17ec588c0c->leave($__internal_47ea679ce09dc32c85775f97eeb60f5be857edb5a3f09fcdcf21ae17ec588c0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
