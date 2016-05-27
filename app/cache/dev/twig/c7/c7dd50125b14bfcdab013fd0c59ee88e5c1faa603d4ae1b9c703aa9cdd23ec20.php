<?php

/* MainBundle:Public:alimentaire.html.twig */
class __TwigTemplate_ec064e76dd5847779526bc8c612c7ae888e481b5527e3a6cff5a87e72b58d96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Public:alimentaire.html.twig", 1);
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
        $__internal_8180ae99b93839ac8734095ec2962ed7256f3b8534d4d393134c8b279181dce0 = $this->env->getExtension("native_profiler");
        $__internal_8180ae99b93839ac8734095ec2962ed7256f3b8534d4d393134c8b279181dce0->enter($__internal_8180ae99b93839ac8734095ec2962ed7256f3b8534d4d393134c8b279181dce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Public:alimentaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8180ae99b93839ac8734095ec2962ed7256f3b8534d4d393134c8b279181dce0->leave($__internal_8180ae99b93839ac8734095ec2962ed7256f3b8534d4d393134c8b279181dce0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52520781ef6253a5c9860a533c8317f8e10a6a4128bcff3e505994e30d8b112f = $this->env->getExtension("native_profiler");
        $__internal_52520781ef6253a5c9860a533c8317f8e10a6a4128bcff3e505994e30d8b112f->enter($__internal_52520781ef6253a5c9860a533c8317f8e10a6a4128bcff3e505994e30d8b112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des articles | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_52520781ef6253a5c9860a533c8317f8e10a6a4128bcff3e505994e30d8b112f->leave($__internal_52520781ef6253a5c9860a533c8317f8e10a6a4128bcff3e505994e30d8b112f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a06f597eea2f620064ece96a63883a0f4f7edd837f451f8dfd2d7e79984ba469 = $this->env->getExtension("native_profiler");
        $__internal_a06f597eea2f620064ece96a63883a0f4f7edd837f451f8dfd2d7e79984ba469->enter($__internal_a06f597eea2f620064ece96a63883a0f4f7edd837f451f8dfd2d7e79984ba469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container articlepage\"> 
  <div class=\"row\">
    <div class=\"col-md-2\">
      <p class=\"lead\">Catégories</p>
      <div class=\"list-group\">
        <a href=\"#\" class=\"list-group-item active\">Produits emballés</a>
        <a href=\"#\" class=\"list-group-item\">Produits en conserve et conditionnés</a>
        <a href=\"#\" class=\"list-group-item\">Viandes et poissons</a>
        <a href=\"#\" class=\"list-group-item\">Boissons & divers</a>
      </div>
    </div>  


    <div class=\"col-md-7 articles\">
      <div class=\"row articledetail\">
        <div class=\"col-sm-3\">
          <br><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/imageEmpty.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>
        <div class=\"col-sm-9\">
          <div class=\"row\">
            <div class=\"col-sm-8\">
              <h1>Article 1</h1>
              <p> Réf : 0878909</p>
              <p>Descrition</p>
            </div>
            <div class=\"col-sm-4\">
              <h1>72 €</h1> 
              <p> prix TTC</p>
              <button>Commander</button>
            </div>
          </div>  
        </div>
      </div>

      <div class=\"row articledetail\">
        <div class=\"col-sm-3\">
          <br><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/imageEmpty.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>
        <div class=\"col-sm-9\">
          <div class=\"row\">
            <div class=\"col-sm-8\">
              <h1>Article 2</h1>
              <p> Réf : 0985674</p>
              <p>Descrition</p>
            </div>
            <div class=\"col-sm-4\">
              <h1>43 €</h1> 
              <p> prix TTC</p>
              <button>Commander</button>
            </div>
          </div>  
        </div>
      </div>

      <div class=\"row articledetail\">
        <div class=\"col-sm-3\">
          <br><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/imageEmpty.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>
        <div class=\"col-sm-9\">
          <div class=\"row\">
            <div class=\"col-sm-8\">
              <h1>Article 3</h1>
              <p> Réf : 6523409</p>
              <p>Descrition</p>
            </div>
            <div class=\"col-sm-4\">
              <h1>09 €</h1> 
              <p> prix TTC</p>
              <button>Commander</button>
            </div>
          </div>  
        </div>
      </div>

      <div class=\"row articledetail\">
        <div class=\"col-sm-3\">
          <br><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/imageEmpty.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>
        <div class=\"col-sm-9\">
          <div class=\"row\">
            <div class=\"col-sm-8\">
              <h1>Article 4</h1>
              <p> Réf : 0878909</p>
              <p>Descrition</p>
            </div>
            <div class=\"col-sm-4\">
              <h1>10 €</h1> 
              <p> prix TTC</p>
              <button>Commander</button>
            </div>
          </div>  
        </div>
      </div>

      <div class=\"row articledetail\">
        <div class=\"col-sm-3\">
          <br><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/imageEmpty.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
        </div>
        <div class=\"col-sm-9\">
          <div class=\"row\">
            <div class=\"col-sm-8\">
              <h1>Article 5</h1>
              <p> Réf : 0878909</p>
              <p>Descrition</p>
            </div>
            <div class=\"col-sm-4\">
              <h1>23 €</h1> 
              <p> prix TTC</p>
              <button>Commander</button>
            </div>
          </div>  
        </div>
      </div>

    </div>

    <div class=\"col-md-3 panier\">
      <p class=\"lead\">Panier</p>
      <table class=\"table table-hover paniertableau\">
        <thead>
          <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Article 1</td>
            <td>1</td>
            <td>12 €</td>
          </tr>
          <tr>
            <td>Article 6</td>
            <td>1</td>
            <td>32 €</td>
          </tr>
          <tr>
            <td>Article 8</td>
            <td>3</td>
            <td>8 €</td>
          </tr>
        </tbody>
      </table>

      <table class=\"table table-hover paniertableaufinal\">
        <thead>
          <tr>
            <th><b>Total</b> </th>
            <th><b> </b> </th>
            <th><b> </b> </th>
            <th><b> </b> </th>
            <th><b> </b> </th>
            <th><b> </b> </th>
            <th><b>68 €</b> </th>
          </tr>
        </thead>
      </table>

      <button> Terminer la commande</button>
    </div>
  </div>
</div>

\t
";
        
        $__internal_a06f597eea2f620064ece96a63883a0f4f7edd837f451f8dfd2d7e79984ba469->leave($__internal_a06f597eea2f620064ece96a63883a0f4f7edd837f451f8dfd2d7e79984ba469_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Public:alimentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 103,  143 => 83,  120 => 63,  97 => 43,  74 => 23,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %} Liste des articles | {{ parent()}} {% endblock%}*/
/* */
/* {% block body%}*/
/* */
/* <div class="container articlepage"> */
/*   <div class="row">*/
/*     <div class="col-md-2">*/
/*       <p class="lead">Catégories</p>*/
/*       <div class="list-group">*/
/*         <a href="#" class="list-group-item active">Produits emballés</a>*/
/*         <a href="#" class="list-group-item">Produits en conserve et conditionnés</a>*/
/*         <a href="#" class="list-group-item">Viandes et poissons</a>*/
/*         <a href="#" class="list-group-item">Boissons & divers</a>*/
/*       </div>*/
/*     </div>  */
/* */
/* */
/*     <div class="col-md-7 articles">*/
/*       <div class="row articledetail">*/
/*         <div class="col-sm-3">*/
/*           <br><img src="{{ asset('img/imageEmpty.jpg')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/*         <div class="col-sm-9">*/
/*           <div class="row">*/
/*             <div class="col-sm-8">*/
/*               <h1>Article 1</h1>*/
/*               <p> Réf : 0878909</p>*/
/*               <p>Descrition</p>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*               <h1>72 €</h1> */
/*               <p> prix TTC</p>*/
/*               <button>Commander</button>*/
/*             </div>*/
/*           </div>  */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row articledetail">*/
/*         <div class="col-sm-3">*/
/*           <br><img src="{{ asset('img/imageEmpty.jpg')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/*         <div class="col-sm-9">*/
/*           <div class="row">*/
/*             <div class="col-sm-8">*/
/*               <h1>Article 2</h1>*/
/*               <p> Réf : 0985674</p>*/
/*               <p>Descrition</p>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*               <h1>43 €</h1> */
/*               <p> prix TTC</p>*/
/*               <button>Commander</button>*/
/*             </div>*/
/*           </div>  */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row articledetail">*/
/*         <div class="col-sm-3">*/
/*           <br><img src="{{ asset('img/imageEmpty.jpg')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/*         <div class="col-sm-9">*/
/*           <div class="row">*/
/*             <div class="col-sm-8">*/
/*               <h1>Article 3</h1>*/
/*               <p> Réf : 6523409</p>*/
/*               <p>Descrition</p>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*               <h1>09 €</h1> */
/*               <p> prix TTC</p>*/
/*               <button>Commander</button>*/
/*             </div>*/
/*           </div>  */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row articledetail">*/
/*         <div class="col-sm-3">*/
/*           <br><img src="{{ asset('img/imageEmpty.jpg')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/*         <div class="col-sm-9">*/
/*           <div class="row">*/
/*             <div class="col-sm-8">*/
/*               <h1>Article 4</h1>*/
/*               <p> Réf : 0878909</p>*/
/*               <p>Descrition</p>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*               <h1>10 €</h1> */
/*               <p> prix TTC</p>*/
/*               <button>Commander</button>*/
/*             </div>*/
/*           </div>  */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row articledetail">*/
/*         <div class="col-sm-3">*/
/*           <br><img src="{{ asset('img/imageEmpty.jpg')}}" class="img-responsive" style="width:100%" alt="Image">*/
/*         </div>*/
/*         <div class="col-sm-9">*/
/*           <div class="row">*/
/*             <div class="col-sm-8">*/
/*               <h1>Article 5</h1>*/
/*               <p> Réf : 0878909</p>*/
/*               <p>Descrition</p>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*               <h1>23 €</h1> */
/*               <p> prix TTC</p>*/
/*               <button>Commander</button>*/
/*             </div>*/
/*           </div>  */
/*         </div>*/
/*       </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="col-md-3 panier">*/
/*       <p class="lead">Panier</p>*/
/*       <table class="table table-hover paniertableau">*/
/*         <thead>*/
/*           <tr>*/
/*             <th>Produit</th>*/
/*             <th>Quantité</th>*/
/*             <th>Prix</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td>Article 1</td>*/
/*             <td>1</td>*/
/*             <td>12 €</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>Article 6</td>*/
/*             <td>1</td>*/
/*             <td>32 €</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>Article 8</td>*/
/*             <td>3</td>*/
/*             <td>8 €</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/* */
/*       <table class="table table-hover paniertableaufinal">*/
/*         <thead>*/
/*           <tr>*/
/*             <th><b>Total</b> </th>*/
/*             <th><b> </b> </th>*/
/*             <th><b> </b> </th>*/
/*             <th><b> </b> </th>*/
/*             <th><b> </b> </th>*/
/*             <th><b> </b> </th>*/
/*             <th><b>68 €</b> </th>*/
/*           </tr>*/
/*         </thead>*/
/*       </table>*/
/* */
/*       <button> Terminer la commande</button>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* 	*/
/* {% endblock %}*/
