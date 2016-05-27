<?php

/* MainBundle:Public:index.html.twig */
class __TwigTemplate_d240bce2a5ccf78f71e9274fed8a39e5a113d356514413870cc3f8a5223367b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Public:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0dac4abfb74153b67c1c3e370f7227d470bb71b4854266cc6dff95b54ab29c9 = $this->env->getExtension("native_profiler");
        $__internal_f0dac4abfb74153b67c1c3e370f7227d470bb71b4854266cc6dff95b54ab29c9->enter($__internal_f0dac4abfb74153b67c1c3e370f7227d470bb71b4854266cc6dff95b54ab29c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Public:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0dac4abfb74153b67c1c3e370f7227d470bb71b4854266cc6dff95b54ab29c9->leave($__internal_f0dac4abfb74153b67c1c3e370f7227d470bb71b4854266cc6dff95b54ab29c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b4c14ec25959ea9956c3be394c0a223792cac437f53d52a8b44a741f4b2e98f = $this->env->getExtension("native_profiler");
        $__internal_5b4c14ec25959ea9956c3be394c0a223792cac437f53d52a8b44a741f4b2e98f->enter($__internal_5b4c14ec25959ea9956c3be394c0a223792cac437f53d52a8b44a741f4b2e98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des articles | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_5b4c14ec25959ea9956c3be394c0a223792cac437f53d52a8b44a741f4b2e98f->leave($__internal_5b4c14ec25959ea9956c3be394c0a223792cac437f53d52a8b44a741f4b2e98f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a07aaad57baa74f63cfdc7f9161a176673c35e1c75bd442e2d3d88844b42a97a = $this->env->getExtension("native_profiler");
        $__internal_a07aaad57baa74f63cfdc7f9161a176673c35e1c75bd442e2d3d88844b42a97a->enter($__internal_a07aaad57baa74f63cfdc7f9161a176673c35e1c75bd442e2d3d88844b42a97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!-- Body -->

<div class=\"container text-center\">    

<!-- Banner pub-->

  <div class=\"container\">
    <br>
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
      <!-- Indicators -->
      <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class=\"carousel-inner\" role=\"listbox\">

        <div class=\"item active\">
          <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pub_banner.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>

        <div class=\"item\">
          <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pub_banner.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>
      
        <div class=\"item\">
          <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pub_banner.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>

        <div class=\"item\">
          <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pub_banner.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>
    
      </div>

      <!-- Left and right controls -->
      <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>
  </div>

<!-- Categories -->

  <div class=\"row categories\">
    <div class=\"col-sm-3\">
      <div>
        <h1>Alimentaire</h1>
        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/aliments.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"><br>
        <p>Description de la catégorie</p>
        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("Main_alimentaire");
        echo "\">Commander</a>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div>
        <h1>High tech</h1>
        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hightech.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"><br>
        <p>Description de la catégorie</p>
        <a href=\"#\">Commander</a>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div>
        <h1>Batiment</h1>
        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/briques.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"><br>
        <p>Description de la catégorie</p>
        <a href=\"#\">Commander</a>
      </div>
    </div>
    <div class=\"col-sm-3\"> 
      <div>
        <h1>Medicaments</h1>    
        <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/medicaments.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"><br>
        <p>Description de la catégorie</p>
        <a href=\"#\">Commander</a>
      </div>
    </div>
  </div>

  <div class=\"row bottombanner\">
    <div class=\"col-sm-4\">
      <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/assistance.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"><br>
    </div>
    <div class=\"col-sm-4\">
      <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/social.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"><br>
    </div>
    <div class=\"col-sm-4\">
      <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/payment.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"><br>
    </div>
  </div>
</div>
\t
";
        
        $__internal_a07aaad57baa74f63cfdc7f9161a176673c35e1c75bd442e2d3d88844b42a97a->leave($__internal_a07aaad57baa74f63cfdc7f9161a176673c35e1c75bd442e2d3d88844b42a97a_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Public:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 102,  180 => 99,  174 => 96,  162 => 87,  151 => 79,  140 => 71,  131 => 65,  126 => 63,  100 => 40,  93 => 36,  86 => 32,  79 => 28,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %} Liste des articles | {{ parent()}} {% endblock%}*/
/* */
/* {% block body %}*/
/* */
/* <!-- Body -->*/
/* */
/* <div class="container text-center">    */
/* */
/* <!-- Banner pub-->*/
/* */
/*   <div class="container">*/
/*     <br>*/
/*     <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*       <!-- Indicators -->*/
/*       <ol class="carousel-indicators">*/
/*         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*       </ol>*/
/* */
/*       <!-- Wrapper for slides -->*/
/*       <div class="carousel-inner" role="listbox">*/
/* */
/*         <div class="item active">*/
/*           <img src="{{ asset('img/pub_banner.png')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/* */
/*         <div class="item">*/
/*           <img src="{{ asset('img/pub_banner.png')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/*       */
/*         <div class="item">*/
/*           <img src="{{ asset('img/pub_banner.png')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/* */
/*         <div class="item">*/
/*           <img src="{{ asset('img/pub_banner.png')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/*     */
/*       </div>*/
/* */
/*       <!-- Left and right controls -->*/
/*       <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*         <span class="sr-only">Previous</span>*/
/*       </a>*/
/*       <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*         <span class="sr-only">Next</span>*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* */
/* <!-- Categories -->*/
/* */
/*   <div class="row categories">*/
/*     <div class="col-sm-3">*/
/*       <div>*/
/*         <h1>Alimentaire</h1>*/
/*         <img src="{{ asset('img/aliments.png')}}" class="img-responsive" style="width:100%" alt="Image"><br>*/
/*         <p>Description de la catégorie</p>*/
/*         <a href="{{ path("Main_alimentaire") }}">Commander</a>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div>*/
/*         <h1>High tech</h1>*/
/*         <img src="{{ asset('img/hightech.png')}}" class="img-responsive" style="width:100%" alt="Image"><br>*/
/*         <p>Description de la catégorie</p>*/
/*         <a href="#">Commander</a>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div>*/
/*         <h1>Batiment</h1>*/
/*         <img src="{{ asset('img/briques.png')}}" class="img-responsive" style="width:100%" alt="Image"><br>*/
/*         <p>Description de la catégorie</p>*/
/*         <a href="#">Commander</a>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3"> */
/*       <div>*/
/*         <h1>Medicaments</h1>    */
/*         <img src="{{ asset('img/medicaments.png')}}" class="img-responsive" style="width:100%" alt="Image"><br>*/
/*         <p>Description de la catégorie</p>*/
/*         <a href="#">Commander</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row bottombanner">*/
/*     <div class="col-sm-4">*/
/*       <img src="{{ asset('img/assistance.png')}}" class="img-responsive" style="width:100%" alt="Image"><br>*/
/*     </div>*/
/*     <div class="col-sm-4">*/
/*       <img src="{{ asset('img/social.png')}}" class="img-responsive" style="width:100%" alt="Image"><br>*/
/*     </div>*/
/*     <div class="col-sm-4">*/
/*       <img src="{{ asset('img/payment.png')}}" class="img-responsive" style="width:100%" alt="Image"><br>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* 	*/
/* {% endblock %}*/
