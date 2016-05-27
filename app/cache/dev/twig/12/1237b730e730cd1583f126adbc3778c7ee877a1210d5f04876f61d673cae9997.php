<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a373d8e2c1c0bdbdcefa31bca7a7f1344339acbcdd328cf20b0ea5bb442ee46d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_005cf87809a8970801d0896590e971952ae27858e5d5c304e784f6007853d9ca = $this->env->getExtension("native_profiler");
        $__internal_005cf87809a8970801d0896590e971952ae27858e5d5c304e784f6007853d9ca->enter($__internal_005cf87809a8970801d0896590e971952ae27858e5d5c304e784f6007853d9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_005cf87809a8970801d0896590e971952ae27858e5d5c304e784f6007853d9ca->leave($__internal_005cf87809a8970801d0896590e971952ae27858e5d5c304e784f6007853d9ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cdfc5e49a72140a793fde5c098cf6de923303dd3a1cb282b510a4ebb9851d8b = $this->env->getExtension("native_profiler");
        $__internal_2cdfc5e49a72140a793fde5c098cf6de923303dd3a1cb282b510a4ebb9851d8b->enter($__internal_2cdfc5e49a72140a793fde5c098cf6de923303dd3a1cb282b510a4ebb9851d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2cdfc5e49a72140a793fde5c098cf6de923303dd3a1cb282b510a4ebb9851d8b->leave($__internal_2cdfc5e49a72140a793fde5c098cf6de923303dd3a1cb282b510a4ebb9851d8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
