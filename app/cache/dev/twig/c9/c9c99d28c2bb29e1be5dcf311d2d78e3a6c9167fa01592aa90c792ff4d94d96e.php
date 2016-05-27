<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18e843c6b1bc953cbc8e903a4e8322b19f8863aa244ea6a0434f075892dd0abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9724746baf59e904d5bbe7d24ae1cb22d26e11ae1e68fa489cb2eb7be497745 = $this->env->getExtension("native_profiler");
        $__internal_c9724746baf59e904d5bbe7d24ae1cb22d26e11ae1e68fa489cb2eb7be497745->enter($__internal_c9724746baf59e904d5bbe7d24ae1cb22d26e11ae1e68fa489cb2eb7be497745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9724746baf59e904d5bbe7d24ae1cb22d26e11ae1e68fa489cb2eb7be497745->leave($__internal_c9724746baf59e904d5bbe7d24ae1cb22d26e11ae1e68fa489cb2eb7be497745_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_456de5216aaf2eee9af2013367249898b8bc8cd04388f89da83af1b82c908584 = $this->env->getExtension("native_profiler");
        $__internal_456de5216aaf2eee9af2013367249898b8bc8cd04388f89da83af1b82c908584->enter($__internal_456de5216aaf2eee9af2013367249898b8bc8cd04388f89da83af1b82c908584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_456de5216aaf2eee9af2013367249898b8bc8cd04388f89da83af1b82c908584->leave($__internal_456de5216aaf2eee9af2013367249898b8bc8cd04388f89da83af1b82c908584_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0b194ca857ae4ccf975a07cfa01b2aebe2007792f633d3d9cbcf9094b05afb9 = $this->env->getExtension("native_profiler");
        $__internal_e0b194ca857ae4ccf975a07cfa01b2aebe2007792f633d3d9cbcf9094b05afb9->enter($__internal_e0b194ca857ae4ccf975a07cfa01b2aebe2007792f633d3d9cbcf9094b05afb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0b194ca857ae4ccf975a07cfa01b2aebe2007792f633d3d9cbcf9094b05afb9->leave($__internal_e0b194ca857ae4ccf975a07cfa01b2aebe2007792f633d3d9cbcf9094b05afb9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17403e76588e7f0e34af6bf8d2783d2c6a78fbc83a0dd02f381a4a10bb99cfbf = $this->env->getExtension("native_profiler");
        $__internal_17403e76588e7f0e34af6bf8d2783d2c6a78fbc83a0dd02f381a4a10bb99cfbf->enter($__internal_17403e76588e7f0e34af6bf8d2783d2c6a78fbc83a0dd02f381a4a10bb99cfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17403e76588e7f0e34af6bf8d2783d2c6a78fbc83a0dd02f381a4a10bb99cfbf->leave($__internal_17403e76588e7f0e34af6bf8d2783d2c6a78fbc83a0dd02f381a4a10bb99cfbf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
