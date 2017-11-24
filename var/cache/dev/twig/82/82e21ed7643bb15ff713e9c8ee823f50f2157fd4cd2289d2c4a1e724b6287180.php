<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_49bc978b0ec4f37f8b28232ccf78b95f45f3b0594ba497cbcbc5aea35b80bc53 extends Twig_Template
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
        $__internal_8ac8f3f626c4a14fe5d1c1df75e32f30f3845e594e293cca3f4b3f7883042270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac8f3f626c4a14fe5d1c1df75e32f30f3845e594e293cca3f4b3f7883042270->enter($__internal_8ac8f3f626c4a14fe5d1c1df75e32f30f3845e594e293cca3f4b3f7883042270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8ac8f3f626c4a14fe5d1c1df75e32f30f3845e594e293cca3f4b3f7883042270->leave($__internal_8ac8f3f626c4a14fe5d1c1df75e32f30f3845e594e293cca3f4b3f7883042270_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
