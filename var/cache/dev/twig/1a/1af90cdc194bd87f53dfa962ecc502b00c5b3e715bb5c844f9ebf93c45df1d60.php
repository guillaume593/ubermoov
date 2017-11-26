<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_78d34da58e40a370b926f16bb2d0f86797b4e31c359c78edf4ce7c7d022701d4 extends Twig_Template
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
        $__internal_e3f2130bba254e05d16a0e77784a3164768e22fbc9acee6f695ed8ae82f74578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f2130bba254e05d16a0e77784a3164768e22fbc9acee6f695ed8ae82f74578->enter($__internal_e3f2130bba254e05d16a0e77784a3164768e22fbc9acee6f695ed8ae82f74578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9aa1bd72659662490c95b672a87920620c56f9ecc92adc4966dc225234eda96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa1bd72659662490c95b672a87920620c56f9ecc92adc4966dc225234eda96d->enter($__internal_9aa1bd72659662490c95b672a87920620c56f9ecc92adc4966dc225234eda96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e3f2130bba254e05d16a0e77784a3164768e22fbc9acee6f695ed8ae82f74578->leave($__internal_e3f2130bba254e05d16a0e77784a3164768e22fbc9acee6f695ed8ae82f74578_prof);

        
        $__internal_9aa1bd72659662490c95b672a87920620c56f9ecc92adc4966dc225234eda96d->leave($__internal_9aa1bd72659662490c95b672a87920620c56f9ecc92adc4966dc225234eda96d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
