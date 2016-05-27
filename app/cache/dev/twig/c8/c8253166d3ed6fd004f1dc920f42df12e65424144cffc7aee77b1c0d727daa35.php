<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0fa5efcecba7479697dfa159c7754fdd415be8e117b91a9970173ecfde28461e extends Twig_Template
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
        $__internal_cefd2178b9d00fb7e687218cd79ef5c441bdda1403591708ba4073506113fe0a = $this->env->getExtension("native_profiler");
        $__internal_cefd2178b9d00fb7e687218cd79ef5c441bdda1403591708ba4073506113fe0a->enter($__internal_cefd2178b9d00fb7e687218cd79ef5c441bdda1403591708ba4073506113fe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cefd2178b9d00fb7e687218cd79ef5c441bdda1403591708ba4073506113fe0a->leave($__internal_cefd2178b9d00fb7e687218cd79ef5c441bdda1403591708ba4073506113fe0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f766ae185caed00a9b23f3bcdd66f45cb219ed504b2b472932222b327e7c0e9c = $this->env->getExtension("native_profiler");
        $__internal_f766ae185caed00a9b23f3bcdd66f45cb219ed504b2b472932222b327e7c0e9c->enter($__internal_f766ae185caed00a9b23f3bcdd66f45cb219ed504b2b472932222b327e7c0e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f766ae185caed00a9b23f3bcdd66f45cb219ed504b2b472932222b327e7c0e9c->leave($__internal_f766ae185caed00a9b23f3bcdd66f45cb219ed504b2b472932222b327e7c0e9c_prof);

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
