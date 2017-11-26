<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_2c959f3e385589603bb61c3d1352c361d0c86ee7955e3f5c5cf4776a88e56193 extends Twig_Template
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
        echo "<h4>";
        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
";
        // line 8
        echo "</h4>


<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Se connecter</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/form-elements.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/style.css"), "html", null, true);
        echo "\">
</head>
 <body>
<div class=\"top-content\">

           <div class=\"inner-bg\">
               <div class=\"container\">
                   <div class=\"row\">
                       <div class=\"col-sm-8 col-sm-offset-2 text\">
                           <h1><strong>UBERMOOV'</strong><br>Se connecter</h1>
                           <div class=\"description\">
                             <p>
                               Gérez vos options de paiement, parcourez l'historique de vos livraisons et bien plus encore.<br>
                               Télécharger notre application <a href=\"https://itunes.apple.com/fr/app/uber/id368677368?mt=8\"><strong>UBERMOOV'</strong></a>, commander une livraison en quelques minutes !
                             </p>
                           </div>
                       </div>
                   </div>
                   <div class=\"row\">
                       <div class=\"col-sm-6 col-sm-offset-3 form-box\">
                         <div class=\"form-top\">
                           <div class=\"form-top-left\">
                             <h3>Connectez-vous à votre compte</h3>
                               <p>Entrez votre nom d'utilisateur et votre mot de passe pour vous connecter:</p>
                           </div>
                           <div class=\"form-top-right\">
                             <i class=\"fa fa-lock\"></i>
                           </div>
                           </div>
                           <div class=\"form-bottom\">
\t\t\t                    <form role=\"form\" action=\"\" method=\"post\" class=\"login-form\">

<form action=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 58
        if (($context["csrf_token"] ?? null)) {
            // line 59
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 61
        echo "<div class=\"form-group\">
    <label class=\"sr-only\" for=\"username\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"form-username form-control\" id=\"username\" name=\"_username\" placeholder=\"Nom d'utilisateur...\"  value=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" />
</div>
 <div class=\"form-group\">
    <label class=\"sr-only\" for=\"password\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"form-password form-control\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe...\" required=\"required\" />
</div>
 <div class=\"form-group\">
    <input class=\"btn\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
</div>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>

</div>
                   </div>
               </div>
               <div class=\"row\">
                       <div class=\"col-sm-6 col-sm-offset-3 social-login\">
               <h3>
<div class=\"login-help\">
        <a href=\"/register\">Vous n'avez pas encore de compte ?</a> - <a href=\"/resetting/request\">Vous avez oublié votre mot de passe  ?</a>
        </div></h3>\t</div>
                        </div>
                        </div>
                </div>
            </div>

        </div>
        <!-- Javascript -->
      <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/scripts.js"), "html", null, true);
        echo "\"></script>



  </body>

</html>

  </form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 95,  170 => 94,  166 => 93,  162 => 92,  140 => 73,  135 => 71,  127 => 66,  121 => 63,  117 => 62,  114 => 61,  108 => 59,  106 => 58,  102 => 57,  67 => 25,  63 => 24,  59 => 23,  55 => 22,  39 => 8,  35 => 7,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
