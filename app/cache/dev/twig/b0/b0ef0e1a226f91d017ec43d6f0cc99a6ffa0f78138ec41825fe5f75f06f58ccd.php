<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c10d4664a33c7cc3d1ab41326ec02d7bc3fe4c9b63bc74b455c2b7065306879d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8482b5cf39f939b8a576b2324bec75f3b0d66a05f190e5f39961871247c9adff = $this->env->getExtension("native_profiler");
        $__internal_8482b5cf39f939b8a576b2324bec75f3b0d66a05f190e5f39961871247c9adff->enter($__internal_8482b5cf39f939b8a576b2324bec75f3b0d66a05f190e5f39961871247c9adff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8482b5cf39f939b8a576b2324bec75f3b0d66a05f190e5f39961871247c9adff->leave($__internal_8482b5cf39f939b8a576b2324bec75f3b0d66a05f190e5f39961871247c9adff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c42de83c59de12bfafdd6bc8194809fdf2250778793d05860fe1f7cfefe2615 = $this->env->getExtension("native_profiler");
        $__internal_6c42de83c59de12bfafdd6bc8194809fdf2250778793d05860fe1f7cfefe2615->enter($__internal_6c42de83c59de12bfafdd6bc8194809fdf2250778793d05860fe1f7cfefe2615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6c42de83c59de12bfafdd6bc8194809fdf2250778793d05860fe1f7cfefe2615->leave($__internal_6c42de83c59de12bfafdd6bc8194809fdf2250778793d05860fe1f7cfefe2615_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
