<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f82e1cc36cbcc1cb0b1fcc2fde073c7b5a3b9255967200f3b8275a15a11d8855 extends Twig_Template
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
        $__internal_946d0f2faddb6d92290439c1f16957cdb4738bdbbe64827b21ad088d1122faef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946d0f2faddb6d92290439c1f16957cdb4738bdbbe64827b21ad088d1122faef->enter($__internal_946d0f2faddb6d92290439c1f16957cdb4738bdbbe64827b21ad088d1122faef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_bfb4e3322760ed4660e7af1e19270dc42a9a58d6f74b956d5213d472b2c8a4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb4e3322760ed4660e7af1e19270dc42a9a58d6f74b956d5213d472b2c8a4df->enter($__internal_bfb4e3322760ed4660e7af1e19270dc42a9a58d6f74b956d5213d472b2c8a4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_946d0f2faddb6d92290439c1f16957cdb4738bdbbe64827b21ad088d1122faef->leave($__internal_946d0f2faddb6d92290439c1f16957cdb4738bdbbe64827b21ad088d1122faef_prof);

        
        $__internal_bfb4e3322760ed4660e7af1e19270dc42a9a58d6f74b956d5213d472b2c8a4df->leave($__internal_bfb4e3322760ed4660e7af1e19270dc42a9a58d6f74b956d5213d472b2c8a4df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
