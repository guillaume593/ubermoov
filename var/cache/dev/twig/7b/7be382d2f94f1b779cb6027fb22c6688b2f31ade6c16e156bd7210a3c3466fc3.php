<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0ad2a74c9d5aab52ce699d5a5369484d0f4bc495b5634f4d2bd76c2b603268b7 extends Twig_Template
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
        $__internal_a1e6bd2168a9c1cf995a435e7e55c41d6c18a6d30606ae13f353efa50bd6c2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e6bd2168a9c1cf995a435e7e55c41d6c18a6d30606ae13f353efa50bd6c2f6->enter($__internal_a1e6bd2168a9c1cf995a435e7e55c41d6c18a6d30606ae13f353efa50bd6c2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5ffd36b8f1889bf47a8ad453eb5333b6a8aeb255964019812d37a449b28a73c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffd36b8f1889bf47a8ad453eb5333b6a8aeb255964019812d37a449b28a73c2->enter($__internal_5ffd36b8f1889bf47a8ad453eb5333b6a8aeb255964019812d37a449b28a73c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a1e6bd2168a9c1cf995a435e7e55c41d6c18a6d30606ae13f353efa50bd6c2f6->leave($__internal_a1e6bd2168a9c1cf995a435e7e55c41d6c18a6d30606ae13f353efa50bd6c2f6_prof);

        
        $__internal_5ffd36b8f1889bf47a8ad453eb5333b6a8aeb255964019812d37a449b28a73c2->leave($__internal_5ffd36b8f1889bf47a8ad453eb5333b6a8aeb255964019812d37a449b28a73c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
