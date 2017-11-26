<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f8409f4c0a9dc9c31a1edc633cdfe8062cea4162c5a2bbb6e10e0edce4e49d0f extends Twig_Template
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
        $__internal_7728d92c1093cdf71cb799fb8bb986b5801bf4ebf0ce6410920f9647c4e80890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7728d92c1093cdf71cb799fb8bb986b5801bf4ebf0ce6410920f9647c4e80890->enter($__internal_7728d92c1093cdf71cb799fb8bb986b5801bf4ebf0ce6410920f9647c4e80890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3e0477b82b9648f6b2cea32f96cdd21741fe661b3d7b9b032e6cdf11e35f4c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0477b82b9648f6b2cea32f96cdd21741fe661b3d7b9b032e6cdf11e35f4c54->enter($__internal_3e0477b82b9648f6b2cea32f96cdd21741fe661b3d7b9b032e6cdf11e35f4c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7728d92c1093cdf71cb799fb8bb986b5801bf4ebf0ce6410920f9647c4e80890->leave($__internal_7728d92c1093cdf71cb799fb8bb986b5801bf4ebf0ce6410920f9647c4e80890_prof);

        
        $__internal_3e0477b82b9648f6b2cea32f96cdd21741fe661b3d7b9b032e6cdf11e35f4c54->leave($__internal_3e0477b82b9648f6b2cea32f96cdd21741fe661b3d7b9b032e6cdf11e35f4c54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
