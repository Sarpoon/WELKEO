<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5b89110d008b973e0d29d226868dca6161c37c6ca2514d8eb60c9aad23cb07a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_527962985ebeeaca23a1a7f78d748eaa07f3df8ac6dedfc626cc649999454b6c = $this->env->getExtension("native_profiler");
        $__internal_527962985ebeeaca23a1a7f78d748eaa07f3df8ac6dedfc626cc649999454b6c->enter($__internal_527962985ebeeaca23a1a7f78d748eaa07f3df8ac6dedfc626cc649999454b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527962985ebeeaca23a1a7f78d748eaa07f3df8ac6dedfc626cc649999454b6c->leave($__internal_527962985ebeeaca23a1a7f78d748eaa07f3df8ac6dedfc626cc649999454b6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf5f8a347aa049f4b6c07f2fa0ae6c60ff0b32280ed16e3ae3b3394847c12a7b = $this->env->getExtension("native_profiler");
        $__internal_cf5f8a347aa049f4b6c07f2fa0ae6c60ff0b32280ed16e3ae3b3394847c12a7b->enter($__internal_cf5f8a347aa049f4b6c07f2fa0ae6c60ff0b32280ed16e3ae3b3394847c12a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<div class=\"container\">
  
\t<div class=\"row\" id=\"pwd-container\">
\t\t<div class=\"col-md-4\"></div>

\t\t<div class=\"col-md-4\">
\t\t\t<section class=\"login-form\">

\t\t\t\t";
        // line 18
        echo "

\t\t\t<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"login\">
\t\t\t\t<img alt=\"logo\" width=\"250\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoinline.png"), "html", null, true);
        echo "\" />
\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t    ";
        // line 25
        echo "\t\t\t    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Saisissez votre adresse e-mail\" required=\"\" autofocus=\"\" />

\t\t\t    ";
        // line 28
        echo "\t\t\t    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" required=\"\" />

\t\t\t    ";
        // line 34
        echo "
\t\t\t    ";
        // line 36
        echo "\t\t\t    <input type=\"submit\" class=\"btn btn-lg btn-warning btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</form>

\t\t\t</section>  
\t\t</div>    
\t\t\t    
\t\t<div class=\"col-md-4\"></div>\t\t          
\t\t</div>
\t</div>
";
        
        $__internal_cf5f8a347aa049f4b6c07f2fa0ae6c60ff0b32280ed16e3ae3b3394847c12a7b->leave($__internal_cf5f8a347aa049f4b6c07f2fa0ae6c60ff0b32280ed16e3ae3b3394847c12a7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  89 => 34,  85 => 28,  79 => 25,  74 => 22,  70 => 21,  66 => 20,  62 => 18,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="container">*/
/*   */
/* 	<div class="row" id="pwd-container">*/
/* 		<div class="col-md-4"></div>*/
/* */
/* 		<div class="col-md-4">*/
/* 			<section class="login-form">*/
/* */
/* 				{# ------ Formulaire de connexion ------ #}*/
/* */
/* */
/* 			<form action="{{ path("fos_user_security_check") }}" method="post" role="login">*/
/* 				<img alt="logo" width="250" src="{{ asset('img/logoinline.png') }}" />*/
/* 			    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 			    {# Champ email #}*/
/* 			    <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="Saisissez votre adresse e-mail" required="" autofocus="" />*/
/* */
/* 			    {# Champ mot de passe #}*/
/* 			    <input type="password" class="form-control" id="password" name="_password" required="required" placeholder="Mot de passe" required="" />*/
/* */
/* 			    {#*/
/* 			    <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 			    <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* 			    #}*/
/* */
/* 			    {# Bouton de connexion #}*/
/* 			    <input type="submit" class="btn btn-lg btn-warning btn-block" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 			</form>*/
/* */
/* 			</section>  */
/* 		</div>    */
/* 			    */
/* 		<div class="col-md-4"></div>		          */
/* 		</div>*/
/* 	</div>*/
/* {% endblock fos_user_content %}*/
/* */
