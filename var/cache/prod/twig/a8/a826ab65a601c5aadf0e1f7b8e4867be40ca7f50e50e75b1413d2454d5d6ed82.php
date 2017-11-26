<?php

/* default/index.html */
class __TwigTemplate_f5bbe6fa43caa9db1c18eeba6f765a0f81f0e16a845f616c56b0e6de73057020 extends Twig_Template
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

    <title>Ubermoov' - Accueil</title>

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

    <header class=\"masthead text-center text-white d-flex\">
      <div class=\"container my-auto\">
        <div class=\"row\">
          <div class=\"col-lg-10 mx-auto\">
            <h1 class=\"text-uppercase\">
              <strong>Le Meilleur Moyen De Se Faire Livrer.</strong>
            </h1>
            <hr>
          </div>
          <div class=\"col-lg-8 mx-auto\">
            <p class=\"text-faded mb-5\">UBERMOOV’ , Leader sur le secteur de la livraison à Paris vous propose une alternative innovante aux moyen de livraison et de déménagement. </p>
            <a class=\"btn btn-primary btn-xl js-scroll-trigger\" href=\"#about\">En savoir plus</a>
          </div>
        </div>
      </div>
    </header>

    <section class=\"bg-primary\" id=\"about\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 mx-auto text-center\">
            <h2 class=\"section-heading text-white\"> JUST ASK, WE MOVE !</h2>
            <hr class=\"light my-4\">
            <p class=\"text-faded mb-4\">UberMoov est une solution digitale via une application qui a pour but de faciliter le transport de colis ou de plis.
Avec cette application, la personne désirant transporter quelque chose d’un point
A à un point B aura simplement besoin d’ouvrir cette application, prendre une photo du colis, valider le type de transporteur proposé par l’application et indiquer son point de départ et d'arrivée.</p>
            <a class=\"btn btn-light btn-xl js-scroll-trigger\" href=\"/register\">S'inscrire</a>
          </div>
        </div>
      </div>
    </section>

    <section id=\"services\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading\">À Votre Service</h2>
            <hr class=\"my-4\">
          </div>
        </div>
      </div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-6 text-center\">
            <div class=\"service-box mt-5 mx-auto\">
              <i class=\"fa fa-4x fa-diamond text-primary mb-3 sr-icons\"></i>
              <h3 class=\"mb-3\">Qualité de Service</h3>
              <p class=\"text-muted mb-0\">C'est l'une des principales raisons pour lesquelles les utilisateurs choisissent notre plateforme.</p>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6 text-center\">
            <div class=\"service-box mt-5 mx-auto\">
              <i class=\"fa fa-4x fa-paper-plane text-primary mb-3 sr-icons\"></i>
              <h3 class=\"mb-3\">Livraison Rapide</h3>
              <p class=\"text-muted mb-0\">Commander une livraison en quelques minutes.</p>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6 text-center\">
            <div class=\"service-box mt-5 mx-auto\">
              <i class=\"fa fa-4x fa-cog text-primary mb-3 sr-icons\"></i>
              <h3 class=\"mb-3\">Sur Mesure</h3>
              <p class=\"text-muted mb-0\">Un service personalisé en fonction de vos besoins.</p>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6 text-center\">
            <div class=\"service-box mt-5 mx-auto\">
              <i class=\"fa fa-4x fa-heart text-primary mb-3 sr-icons\"></i>
              <h3 class=\"mb-3\">Satisfaction Client</h3>
              <p class=\"text-muted mb-0\">Nos services délivre la meilleure expérience client.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"p-0\" id=\"portfolio\">
      <div class=\"container-fluid p-0\">
        <div class=\"row no-gutters popup-gallery\">
          <div class=\"col-lg-4 col-sm-6\">
            <a class=\"portfolio-box\" href=\"img/portfolio/fullsize/1.jpg\">
              <img class=\"img-fluid\" src=\"img/portfolio/thumbnails/1.jpg\" alt=\"\">
              <div class=\"portfolio-box-caption\">
                <div class=\"portfolio-box-caption-content\">
                  <div class=\"project-category text-faded\">
                    Louis
                  </div>
                  <div class=\"project-name\">
                    Musicien et partenaire
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class=\"col-lg-4 col-sm-6\">
            <a class=\"portfolio-box\" href=\"img/portfolio/fullsize/2.jpg\">
              <img class=\"img-fluid\" src=\"img/portfolio/thumbnails/2.jpg\" alt=\"\">
              <div class=\"portfolio-box-caption\">
                <div class=\"portfolio-box-caption-content\">
                  <div class=\"project-category text-faded\">
                    Vincent
                  </div>
                  <div class=\"project-name\">
                    Coach sportif et partenaire
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class=\"col-lg-4 col-sm-6\">
            <a class=\"portfolio-box\" href=\"img/portfolio/fullsize/3.jpg\">
              <img class=\"img-fluid\" src=\"img/portfolio/thumbnails/3.jpg\" alt=\"\">
              <div class=\"portfolio-box-caption\">
                <div class=\"portfolio-box-caption-content\">
                  <div class=\"project-category text-faded\">
                    Kévin
                  </div>
                  <div class=\"project-name\">
                    Papa et partenaire
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class=\"col-lg-4 col-sm-6\">
            <a class=\"portfolio-box\" href=\"img/portfolio/fullsize/4.jpg\">
              <img class=\"img-fluid\" src=\"img/portfolio/thumbnails/4.jpg\" alt=\"\">
              <div class=\"portfolio-box-caption\">
                <div class=\"portfolio-box-caption-content\">
                  <div class=\"project-category text-faded\">
                    Amandine
                  </div>
                  <div class=\"project-name\">
                    Chanteuse et partenaire
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class=\"col-lg-4 col-sm-6\">
            <a class=\"portfolio-box\" href=\"img/portfolio/fullsize/5.jpg\">
              <img class=\"img-fluid\" src=\"img/portfolio/thumbnails/5.jpg\" alt=\"\">
              <div class=\"portfolio-box-caption\">
                <div class=\"portfolio-box-caption-content\">
                  <div class=\"project-category text-faded\">
                    Alex
                  </div>
                  <div class=\"project-name\">
                    Jardinier et partenaire
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class=\"col-lg-4 col-sm-6\">
            <a class=\"portfolio-box\" href=\"img/portfolio/fullsize/6.jpg\">
              <img class=\"img-fluid\" src=\"img/portfolio/thumbnails/6.jpg\" alt=\"\">
              <div class=\"portfolio-box-caption\">
                <div class=\"portfolio-box-caption-content\">
                  <div class=\"project-category text-faded\">
                    Julie
                  </div>
                  <div class=\"project-name\">
                    Vendeuse et partenaire
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class=\"bg-dark text-white\">
      <div class=\"container text-center\">
        <h2 class=\"mb-4\">Commandez une livraison avec UBERMOOV'!</h2>
        <img class=\"app\"src=\"../app.png\">
</br>
</br>
</br>
        <img class=\"tagapp\"src=\"../appstore.png\">&nbsp;&nbsp;&nbsp;<img class=\"tagapp\"src=\"../googleplay.png\">
</br>
</br>
        <a class=\"btn btn-light btn-xl sr-button\" href=\"https://itunes.apple.com/fr/app/uber/id368677368?mt=8\">Download Now!</a>
      </div>
    </section>

    <section id=\"contact\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 mx-auto text-center\">
            <h2 class=\"section-heading\">Entrons en Contact!</h2>
            <hr class=\"my-4\">
            <p class=\"mb-5\">Prêt à commencer votre prochain projet avec nous ? C'est génial ! Appelez-nous ou envoyez-nous un courriel et nous vous répondrons dans les plus brefs délais !</p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-4 ml-auto text-center\">
            <i class=\"fa fa-phone fa-3x mb-3 sr-contact\"></i>
            <p>123-456-6789</p>
          </div>
          <div class=\"col-lg-4 mr-auto text-center\">
            <i class=\"fa fa-envelope-o fa-3x mb-3 sr-contact\"></i>
            <p>
              <a href=\"mailto:your-email@your-domain.com\">contact@ubermoov.com</a>
            </p>
          </div>
        </div>
      </div>
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
        return "default/index.html";
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
        return new Twig_Source("", "default/index.html", "/Applications/MAMP/htdocs/my_project_name/app/Resources/views/default/index.html");
    }
}
