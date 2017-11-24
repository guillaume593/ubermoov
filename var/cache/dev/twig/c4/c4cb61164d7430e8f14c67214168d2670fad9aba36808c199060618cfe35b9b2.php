<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_6d089a4df5d1f10ce7fc134ef97fad4dcda01a2824f0a9ddba128e02d47bd892 extends Twig_Template
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
        $__internal_f2f185a4c6b50a5b68982cb777c96a458c3f31449d8f9ecbd9b5e16bbd30ac22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f185a4c6b50a5b68982cb777c96a458c3f31449d8f9ecbd9b5e16bbd30ac22->enter($__internal_f2f185a4c6b50a5b68982cb777c96a458c3f31449d8f9ecbd9b5e16bbd30ac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Se connecter</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/form-elements.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
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
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 54
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 54, $this->getSourceContext()); })())) {
            // line 55
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 55, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 57
        echo "<div class=\"form-group\">
    <label class=\"sr-only\" for=\"username\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"form-username form-control\" id=\"username\" name=\"_username\" placeholder=\"Nom d'utilisateur...\"  value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 59, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
</div>
 <div class=\"form-group\">
    <label class=\"sr-only\" for=\"password\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"form-password form-control\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe...\" required=\"required\" />
</div>
 <div class=\"form-group\">
    <input class=\"btn\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
</div>
    <input type=\"submit\" class=\"btn\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 69
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/scripts.js"), "html", null, true);
        echo "\"></script>



  </body>

</html>
";
        
        $__internal_f2f185a4c6b50a5b68982cb777c96a458c3f31449d8f9ecbd9b5e16bbd30ac22->leave($__internal_f2f185a4c6b50a5b68982cb777c96a458c3f31449d8f9ecbd9b5e16bbd30ac22_prof);

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
        return array (  165 => 90,  161 => 89,  157 => 88,  153 => 87,  132 => 69,  127 => 67,  119 => 62,  113 => 59,  109 => 58,  106 => 57,  100 => 55,  98 => 54,  94 => 53,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<!DOCTYPE html>
<html lang=\"fr\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Se connecter</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500\">
        <link rel=\"stylesheet\" href=\"{{ asset('login/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('login/font-awesome/css/font-awesome.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('login/css/form-elements.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('login/css/style.css') }}\">
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

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
<div class=\"form-group\">
    <label class=\"sr-only\" for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" class=\"form-username form-control\" id=\"username\" name=\"_username\" placeholder=\"Nom d'utilisateur...\"  value=\"{{ last_username }}\" required=\"required\" />
</div>
 <div class=\"form-group\">
    <label class=\"sr-only\" for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" class=\"form-password form-control\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe...\" required=\"required\" />
</div>
 <div class=\"form-group\">
    <input class=\"btn\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
</div>
    <input type=\"submit\" class=\"btn\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
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
      <script src=\"{{ asset('login/js/jquery-1.11.1.min.js') }}\"></script>
      <script src=\"{{ asset('login/bootstrap/js/bootstrap.min.js') }}\"></script>
      <script src=\"{{ asset('login/js/jquery.backstretch.min.js') }}\"></script>
      <script src=\"{{ asset('login/js/scripts.js') }}\"></script>



  </body>

</html>
", "FOSUserBundle:Security:login_content.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
