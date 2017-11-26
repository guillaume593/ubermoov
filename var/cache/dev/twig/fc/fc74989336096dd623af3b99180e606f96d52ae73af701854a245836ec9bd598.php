<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d74a7df42dec66c4579ecab7c0f0891b2443c8c2b2ec4649d41bc301a82cc622 extends Twig_Template
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
        $__internal_93779513c2c7b93af5b1b3e8496c5040c313d0de56519edf7be4e194ffafead7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93779513c2c7b93af5b1b3e8496c5040c313d0de56519edf7be4e194ffafead7->enter($__internal_93779513c2c7b93af5b1b3e8496c5040c313d0de56519edf7be4e194ffafead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9995c969637a3cf4b5f0c4bc7d113587c48c6862f54f3b2d998db8b2578cda4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9995c969637a3cf4b5f0c4bc7d113587c48c6862f54f3b2d998db8b2578cda4e->enter($__internal_9995c969637a3cf4b5f0c4bc7d113587c48c6862f54f3b2d998db8b2578cda4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_93779513c2c7b93af5b1b3e8496c5040c313d0de56519edf7be4e194ffafead7->leave($__internal_93779513c2c7b93af5b1b3e8496c5040c313d0de56519edf7be4e194ffafead7_prof);

        
        $__internal_9995c969637a3cf4b5f0c4bc7d113587c48c6862f54f3b2d998db8b2578cda4e->leave($__internal_9995c969637a3cf4b5f0c4bc7d113587c48c6862f54f3b2d998db8b2578cda4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
