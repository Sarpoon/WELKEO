<?php

/* ::base.html.twig */
class __TwigTemplate_b99dcc5667d5cb6347181cede927ee15efc8cb084cda43c9fd268feaab754ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d9058e5833f2a84b1b2d88b50aea0324b34af1db336e3e59b33cfa9ef95c18c = $this->env->getExtension("native_profiler");
        $__internal_9d9058e5833f2a84b1b2d88b50aea0324b34af1db336e3e59b33cfa9ef95c18c->enter($__internal_9d9058e5833f2a84b1b2d88b50aea0324b34af1db336e3e59b33cfa9ef95c18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo " 
</head>
<body>

<div class=\"jumbotron\">
    <div class=\"container\">
      <div class=\"row\" style=\"margin-top: 20px;\">
        <div class=\"col-sm-4\" style=\"margin: 0; margin-top: 10px; padding: 0;\">
          <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoalphacroped.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 90%;\" alt=\"Logo\">
        </div>
        <div class=\"col-sm-3\" style=\"margin: 0; padding: 0;\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/congocroped.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"\" alt=\"Congo\">
        </div>
        <div class=\"col-sm-3\" style=\"margin: 0; margin-top: 10px;\">
          <ul style=\"list-style-type:none\"><br>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-info-sign\"></span> Qui sommes nous ?</a></li><br>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-map-marker\"></span> Nos agences en Europe</a></li><br>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-flag\"></span> Nos dépôts à Kinshasa</a></li><br>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-earphone\"></span> Contactez nous</a></li><br>
          </ul>
        </div>
        <div class=\"col-sm-2\" style=\"padding-top: 0; padding-bottom: 0; padding-left: 0;\">
          <div class=\"panel panel-default\" style=\"padding: 0; background-color: #484d91; color: #ffffff;\">
            <div class=\"panel-body\" style=\"padding: 2px 10px 2px 10px;\">
              <p style=\"text-align: center; font-size: 1em; margin: 0; padding: 0;\">Connexion</p>
              <form role=\"form\">
                <div class=\"form-group\">
                  <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Identifiant\">
                </div>
                <div class=\"form-group\">
                  <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Mot de passe\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\" style=\"width: 100%;\">Entrer</button>
              </form>
              <small><a href=\"#\" style=\"color: #cccccc;\">Mot de passe oublié ?</a></small>
            </div>
          </div>
          <button class=\"btn btn-danger\" style=\"width: 100%; margin-bottom: 20px;\">Créer un compte</button>
        </div>
      </div>
    </div>
</div>

<!-- Barre de navigation-->

<nav class=\"navbar navbar-inverse \">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" style=\"padding: 0;\" href=\"#\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logosimplewhite.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 60%; margin: 8% 0 0 8%; \" alt=\"Image\"><br>
</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("Main_home");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("Main_alimentaire");
        echo "\">Alimentaire</a></li>
        <li><a href=\"#\">High-tech</a></li>
        <li><a href=\"#\">Matériaux de construction</a></li>
        <li><a href=\"#\">Médicaments</a></li>
        <li><a href=\"#\">Vente en agence</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- body -->


";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "

<!-- footer -->

<footer class=\"container-fluid text-center\">
  <div class=\"row\">
    <div class=\"col-sm-4\">
      <ul>
        <li><a href=\"#\">Qui sommes nous</a></li>
        <li><a href=\"#\">Nos agences en Europe</a></li>
        <li><a href=\"#\">Nos dépôts à Kinshasa</a></li>
        <li><a href=\"#\">Contactez nous</a></li>
      </ul>
    </div>
    <div class=\"col-sm-4\">
      <h1><a href=\"#\">Mentions légales</a></h1>
    </div>
    <div class=\"col-sm-4\"> 
      <h1><a href=\"#\">Garanties et sécurité</a></h1>        
    </div>
  </div>
</footer>

<!-- javascript -->

";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "
</body>
</html>
";
        
        $__internal_9d9058e5833f2a84b1b2d88b50aea0324b34af1db336e3e59b33cfa9ef95c18c->leave($__internal_9d9058e5833f2a84b1b2d88b50aea0324b34af1db336e3e59b33cfa9ef95c18c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_36cdff76c2a1c19b2e816df1af492ecdc798bfc9c6c671fbcdf42a5196183f76 = $this->env->getExtension("native_profiler");
        $__internal_36cdff76c2a1c19b2e816df1af492ecdc798bfc9c6c671fbcdf42a5196183f76->enter($__internal_36cdff76c2a1c19b2e816df1af492ecdc798bfc9c6c671fbcdf42a5196183f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welinkeo !";
        
        $__internal_36cdff76c2a1c19b2e816df1af492ecdc798bfc9c6c671fbcdf42a5196183f76->leave($__internal_36cdff76c2a1c19b2e816df1af492ecdc798bfc9c6c671fbcdf42a5196183f76_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_803d2ddbb1442036a74b2404bbdb3219818d48eea248993a293a74e839872226 = $this->env->getExtension("native_profiler");
        $__internal_803d2ddbb1442036a74b2404bbdb3219818d48eea248993a293a74e839872226->enter($__internal_803d2ddbb1442036a74b2404bbdb3219818d48eea248993a293a74e839872226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">       
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/alimentaire.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_803d2ddbb1442036a74b2404bbdb3219818d48eea248993a293a74e839872226->leave($__internal_803d2ddbb1442036a74b2404bbdb3219818d48eea248993a293a74e839872226_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c5b3fa38693a5c6a4295ca86ffa3501a95bce6090792eeb17f4e5df6cc0844 = $this->env->getExtension("native_profiler");
        $__internal_67c5b3fa38693a5c6a4295ca86ffa3501a95bce6090792eeb17f4e5df6cc0844->enter($__internal_67c5b3fa38693a5c6a4295ca86ffa3501a95bce6090792eeb17f4e5df6cc0844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67c5b3fa38693a5c6a4295ca86ffa3501a95bce6090792eeb17f4e5df6cc0844->leave($__internal_67c5b3fa38693a5c6a4295ca86ffa3501a95bce6090792eeb17f4e5df6cc0844_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f41df037cc720d7628d80679cd462220f99f39326703cbaf98af471b228cb161 = $this->env->getExtension("native_profiler");
        $__internal_f41df037cc720d7628d80679cd462220f99f39326703cbaf98af471b228cb161->enter($__internal_f41df037cc720d7628d80679cd462220f99f39326703cbaf98af471b228cb161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "  <!-- #### JAVASCRIPT FILES ### -->

  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
  <script>
    window.jQuery || document.write('<script src=\"js/jquery-1.11.0.min.js\"><\\/script>')
  </script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
";
        
        $__internal_f41df037cc720d7628d80679cd462220f99f39326703cbaf98af471b228cb161->leave($__internal_f41df037cc720d7628d80679cd462220f99f39326703cbaf98af471b228cb161_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 108,  211 => 107,  200 => 81,  191 => 12,  187 => 11,  182 => 8,  176 => 7,  164 => 4,  154 => 116,  152 => 107,  125 => 82,  123 => 81,  107 => 68,  103 => 67,  95 => 62,  55 => 25,  49 => 22,  39 => 14,  37 => 7,  31 => 4,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   <title>{% block title %}Welinkeo !{% endblock %}</title>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   {% block stylesheets %}*/
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*   <link href="{{ asset('css/base.css') }}" rel="stylesheet">       */
/*   <link href="{{ asset('css/alimentaire.css') }}" rel="stylesheet">*/
/*   {% endblock %}*/
/*  */
/* </head>*/
/* <body>*/
/* */
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*       <div class="row" style="margin-top: 20px;">*/
/*         <div class="col-sm-4" style="margin: 0; margin-top: 10px; padding: 0;">*/
/*           <img src="{{ asset('img/logoalphacroped.png')}}" class="img-responsive" style="width: 90%;" alt="Logo">*/
/*         </div>*/
/*         <div class="col-sm-3" style="margin: 0; padding: 0;">*/
/*             <img src="{{ asset('img/congocroped.png')}}" class="img-responsive" style="" alt="Congo">*/
/*         </div>*/
/*         <div class="col-sm-3" style="margin: 0; margin-top: 10px;">*/
/*           <ul style="list-style-type:none"><br>*/
/*             <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Qui sommes nous ?</a></li><br>*/
/*             <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> Nos agences en Europe</a></li><br>*/
/*             <li><a href="#"><span class="glyphicon glyphicon-flag"></span> Nos dépôts à Kinshasa</a></li><br>*/
/*             <li><a href="#"><span class="glyphicon glyphicon-earphone"></span> Contactez nous</a></li><br>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-2" style="padding-top: 0; padding-bottom: 0; padding-left: 0;">*/
/*           <div class="panel panel-default" style="padding: 0; background-color: #484d91; color: #ffffff;">*/
/*             <div class="panel-body" style="padding: 2px 10px 2px 10px;">*/
/*               <p style="text-align: center; font-size: 1em; margin: 0; padding: 0;">Connexion</p>*/
/*               <form role="form">*/
/*                 <div class="form-group">*/
/*                   <input type="email" class="form-control" id="email" placeholder="Identifiant">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <input type="password" class="form-control" id="pwd" placeholder="Mot de passe">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-default" style="width: 100%;">Entrer</button>*/
/*               </form>*/
/*               <small><a href="#" style="color: #cccccc;">Mot de passe oublié ?</a></small>*/
/*             </div>*/
/*           </div>*/
/*           <button class="btn btn-danger" style="width: 100%; margin-bottom: 20px;">Créer un compte</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Barre de navigation-->*/
/* */
/* <nav class="navbar navbar-inverse ">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <a class="navbar-brand" style="padding: 0;" href="#"><img src="{{ asset('img/logosimplewhite.png')}}" class="img-responsive" style="width: 60%; margin: 8% 0 0 8%; " alt="Image"><br>*/
/* </a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="myNavbar">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="{{ path("Main_home") }}">Accueil</a></li>*/
/*         <li><a href="{{ path("Main_alimentaire") }}">Alimentaire</a></li>*/
/*         <li><a href="#">High-tech</a></li>*/
/*         <li><a href="#">Matériaux de construction</a></li>*/
/*         <li><a href="#">Médicaments</a></li>*/
/*         <li><a href="#">Vente en agence</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* */
/* <!-- body -->*/
/* */
/* */
/* {% block body %}{% endblock %}*/
/* */
/* */
/* <!-- footer -->*/
/* */
/* <footer class="container-fluid text-center">*/
/*   <div class="row">*/
/*     <div class="col-sm-4">*/
/*       <ul>*/
/*         <li><a href="#">Qui sommes nous</a></li>*/
/*         <li><a href="#">Nos agences en Europe</a></li>*/
/*         <li><a href="#">Nos dépôts à Kinshasa</a></li>*/
/*         <li><a href="#">Contactez nous</a></li>*/
/*       </ul>*/
/*     </div>*/
/*     <div class="col-sm-4">*/
/*       <h1><a href="#">Mentions légales</a></h1>*/
/*     </div>*/
/*     <div class="col-sm-4"> */
/*       <h1><a href="#">Garanties et sécurité</a></h1>        */
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* */
/* <!-- javascript -->*/
/* */
/* {% block javascripts %}*/
/*   <!-- #### JAVASCRIPT FILES ### -->*/
/* */
/*   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*   <script>*/
/*     window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')*/
/*   </script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
