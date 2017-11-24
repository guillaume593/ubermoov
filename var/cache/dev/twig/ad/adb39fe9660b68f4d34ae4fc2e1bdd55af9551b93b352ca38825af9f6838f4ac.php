<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_28d5b1fa3a8d28af1bada3e899e525045d814b4e5be33501dc850a3358c9abeb extends Twig_Template
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
        $__internal_9ed6baefee1fca42f2a2935181ae173e7cc0f1577e2b9b5c22bc47707027a203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed6baefee1fca42f2a2935181ae173e7cc0f1577e2b9b5c22bc47707027a203->enter($__internal_9ed6baefee1fca42f2a2935181ae173e7cc0f1577e2b9b5c22bc47707027a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 1
        echo "<h4>";
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
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 58, $this->getSourceContext()); })())) {
            // line 59
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 59, $this->getSourceContext()); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 63, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_9ed6baefee1fca42f2a2935181ae173e7cc0f1577e2b9b5c22bc47707027a203->leave($__internal_9ed6baefee1fca42f2a2935181ae173e7cc0f1577e2b9b5c22bc47707027a203_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 95,  173 => 94,  169 => 93,  165 => 92,  143 => 73,  138 => 71,  130 => 66,  124 => 63,  120 => 62,  117 => 61,  111 => 59,  109 => 58,  105 => 57,  70 => 25,  66 => 24,  62 => 23,  58 => 22,  42 => 8,  38 => 7,  35 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4>{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
{% trans_default_domain 'FOSUserBundle' %}</h4>


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
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
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

  </form>
", "@FOSUser/Security/login_content.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
