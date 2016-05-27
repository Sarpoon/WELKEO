<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2fab347bd0b0f9288c5042e7ce248a69dcdfa1671d4ee079f784dffb4f08ef88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7822649ad9e77d9890ea34dec74b109dfb00e07c659a33000d5817d8969b4058 = $this->env->getExtension("native_profiler");
        $__internal_7822649ad9e77d9890ea34dec74b109dfb00e07c659a33000d5817d8969b4058->enter($__internal_7822649ad9e77d9890ea34dec74b109dfb00e07c659a33000d5817d8969b4058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7822649ad9e77d9890ea34dec74b109dfb00e07c659a33000d5817d8969b4058->leave($__internal_7822649ad9e77d9890ea34dec74b109dfb00e07c659a33000d5817d8969b4058_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5ee5f8fd85dc0b555284361d9a18e4e8dce0bd11ada8bfe5ac7684ac7d42a8b = $this->env->getExtension("native_profiler");
        $__internal_b5ee5f8fd85dc0b555284361d9a18e4e8dce0bd11ada8bfe5ac7684ac7d42a8b->enter($__internal_b5ee5f8fd85dc0b555284361d9a18e4e8dce0bd11ada8bfe5ac7684ac7d42a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5ee5f8fd85dc0b555284361d9a18e4e8dce0bd11ada8bfe5ac7684ac7d42a8b->leave($__internal_b5ee5f8fd85dc0b555284361d9a18e4e8dce0bd11ada8bfe5ac7684ac7d42a8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b6a37c194335a4a8f9bb6f692d6ba63a956798886573b97ac151081d0f60cca = $this->env->getExtension("native_profiler");
        $__internal_7b6a37c194335a4a8f9bb6f692d6ba63a956798886573b97ac151081d0f60cca->enter($__internal_7b6a37c194335a4a8f9bb6f692d6ba63a956798886573b97ac151081d0f60cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b6a37c194335a4a8f9bb6f692d6ba63a956798886573b97ac151081d0f60cca->leave($__internal_7b6a37c194335a4a8f9bb6f692d6ba63a956798886573b97ac151081d0f60cca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_92388f8eafe957a3a08a4ad3899d8ff2834ce3c3fcb9eb2cde183cd406e1f42a = $this->env->getExtension("native_profiler");
        $__internal_92388f8eafe957a3a08a4ad3899d8ff2834ce3c3fcb9eb2cde183cd406e1f42a->enter($__internal_92388f8eafe957a3a08a4ad3899d8ff2834ce3c3fcb9eb2cde183cd406e1f42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_92388f8eafe957a3a08a4ad3899d8ff2834ce3c3fcb9eb2cde183cd406e1f42a->leave($__internal_92388f8eafe957a3a08a4ad3899d8ff2834ce3c3fcb9eb2cde183cd406e1f42a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
