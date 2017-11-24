<?php

/* default/userprofil.html */
class __TwigTemplate_2478f06fc0fa4208c845b371be06c082d9fc64c8c9e945f80616ee663bbf7d75 extends Twig_Template
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
        $__internal_1af3f6a9e06604b8247fece851e1e0448fcfff8d7493e38ff597b51b5a947951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af3f6a9e06604b8247fece851e1e0448fcfff8d7493e38ff597b51b5a947951->enter($__internal_1af3f6a9e06604b8247fece851e1e0448fcfff8d7493e38ff597b51b5a947951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/userprofil.html"));

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
        
        $__internal_1af3f6a9e06604b8247fece851e1e0448fcfff8d7493e38ff597b51b5a947951->leave($__internal_1af3f6a9e06604b8247fece851e1e0448fcfff8d7493e38ff597b51b5a947951_prof);

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
        return array (  119 => 66,  111 => 64,  105 => 61,  101 => 60,  98 => 59,  96 => 58,  64 => 29,  58 => 26,  49 => 20,  43 => 17,  34 => 11,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"fr\">

  <head>
<script type=\"text/javascript\"> window.\$crisp=[];window.CRISP_WEBSITE_ID=\"758b5248-0123-42bb-b6d8-3e1d7f61a55b\";(function(){ d=document;s=d.createElement(\"script\"); s.src=\"https://client.crisp.chat/l.js\"; s.async=1;d.getElementsByTagName(\"head\")[0].appendChild(s);})(); </script>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <title>Ubermoov' - Mon Compte</title>

    <!-- Bootstrap core CSS -->

<link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" />
    <!-- Custom fonts for this template -->

    <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->

<link rel=\"stylesheet\" href=\"{{ asset('vendor/magnific-popup//magnific-popup.css') }}\" />
    <!-- Custom styles for this template -->

<link rel=\"stylesheet\" href=\"{{ asset('css/creative.min.css') }}\" />
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
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

                    <a href=\"{{ path('fos_user_security_logout') }}\">
                        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                    </a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                {% endif %}

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
", "default/userprofil.html", "/Applications/MAMP/htdocs/my_project_name/app/Resources/views/default/userprofil.html");
    }
}
