<?php

/* default/userprofil.html */
class __TwigTemplate_493cff0fdcaa68310ae49799a52692723dade59c44cd1fd5ec62886604602ee1 extends Twig_Template
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
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">

  <head>
<script type=\"text/javascript\"> window.\$crisp=[];window.CRISP_WEBSITE_ID=\"758b5248-0123-42bb-b6d8-3e1d7f61a55b\";(function(){ d=document;s=d.createElement(\"script\"); s.src=\"https://client.crisp.chat/l.js\"; s.async=1;d.getElementsByTagName(\"head\")[0].appendChild(s);})(); </script>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <title>Ubermoov' - Mon Compte</title>

    <!-- Bootstrap core CSS -->

<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <!-- Custom fonts for this template -->

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->

<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/magnific-popup//magnific-popup.css"), "html", null, true);
        echo "\" />
    <!-- Custom styles for this template -->

<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/creative.min.css"), "html", null, true);
        echo "\" />
  </head>

  <body id=\"page-top\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
      <div class=\"container\">

        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\"><img class=\"logo\"src=\"../logo.jpg\"> </a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#services\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Communauté</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
            </li>
            <li class=\"nav-item\">
              <div class=\"nav-link js-scroll-trigger\">
                ";
        // line 58
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 59
            echo "
                    <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 64
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 66
        echo "
              </div>
              </li>
          </ul>
        </div>
      </div>
    </nav>


    </section>

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>
    <script src=\"vendor/scrollreveal/scrollreveal.min.js\"></script>
    <script src=\"vendor/magnific-popup/jquery.magnific-popup.min.js\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"js/creative.min.js\"></script>

  </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "default/userprofil.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 66,  108 => 64,  102 => 61,  98 => 60,  95 => 59,  93 => 58,  61 => 29,  55 => 26,  46 => 20,  40 => 17,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/userprofil.html", "/Applications/MAMP/htdocs/my_project_name/app/Resources/views/default/userprofil.html");
    }
}
