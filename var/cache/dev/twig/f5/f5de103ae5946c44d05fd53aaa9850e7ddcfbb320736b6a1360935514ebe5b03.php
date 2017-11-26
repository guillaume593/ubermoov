<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c96b00aeed2fab1443f5fd4cd1f83f51fe36aecd1ebf06b1e720cf1daff9e5f3 extends Twig_Template
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
        $__internal_142aaf67e492d3d531887f9052b8c9063ad96292875af7c1495c936a5fc30d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142aaf67e492d3d531887f9052b8c9063ad96292875af7c1495c936a5fc30d76->enter($__internal_142aaf67e492d3d531887f9052b8c9063ad96292875af7c1495c936a5fc30d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c7db8db88e8933efaf9c6e545491f923b9a6a8889a3cda400fe4f6e0aae92266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7db8db88e8933efaf9c6e545491f923b9a6a8889a3cda400fe4f6e0aae92266->enter($__internal_c7db8db88e8933efaf9c6e545491f923b9a6a8889a3cda400fe4f6e0aae92266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_142aaf67e492d3d531887f9052b8c9063ad96292875af7c1495c936a5fc30d76->leave($__internal_142aaf67e492d3d531887f9052b8c9063ad96292875af7c1495c936a5fc30d76_prof);

        
        $__internal_c7db8db88e8933efaf9c6e545491f923b9a6a8889a3cda400fe4f6e0aae92266->leave($__internal_c7db8db88e8933efaf9c6e545491f923b9a6a8889a3cda400fe4f6e0aae92266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
