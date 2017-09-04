<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7248ed7fed3c54b93de43ea165e77fee21adcd9490823672fda1a2faa58e7035 extends Twig_Template
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
        $__internal_737c5dce46de0d68632bd8d2b5a6aff4e84ac155cb87448a091db3b1af47ff7b = $this->env->getExtension("native_profiler");
        $__internal_737c5dce46de0d68632bd8d2b5a6aff4e84ac155cb87448a091db3b1af47ff7b->enter($__internal_737c5dce46de0d68632bd8d2b5a6aff4e84ac155cb87448a091db3b1af47ff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737c5dce46de0d68632bd8d2b5a6aff4e84ac155cb87448a091db3b1af47ff7b->leave($__internal_737c5dce46de0d68632bd8d2b5a6aff4e84ac155cb87448a091db3b1af47ff7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01400a42753b2192886eb5dfb0bc70fd06f6ecff03cedb2bb6a8dfb88fb14e06 = $this->env->getExtension("native_profiler");
        $__internal_01400a42753b2192886eb5dfb0bc70fd06f6ecff03cedb2bb6a8dfb88fb14e06->enter($__internal_01400a42753b2192886eb5dfb0bc70fd06f6ecff03cedb2bb6a8dfb88fb14e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01400a42753b2192886eb5dfb0bc70fd06f6ecff03cedb2bb6a8dfb88fb14e06->leave($__internal_01400a42753b2192886eb5dfb0bc70fd06f6ecff03cedb2bb6a8dfb88fb14e06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a19d4678fe6f986e884501d6ea74e0902026e8482e0ab44cd01ce4d59b667c42 = $this->env->getExtension("native_profiler");
        $__internal_a19d4678fe6f986e884501d6ea74e0902026e8482e0ab44cd01ce4d59b667c42->enter($__internal_a19d4678fe6f986e884501d6ea74e0902026e8482e0ab44cd01ce4d59b667c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a19d4678fe6f986e884501d6ea74e0902026e8482e0ab44cd01ce4d59b667c42->leave($__internal_a19d4678fe6f986e884501d6ea74e0902026e8482e0ab44cd01ce4d59b667c42_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98d8b04b61577c807d49018081c0df9c62b00f8c9669265ce7b7e1b735413e2b = $this->env->getExtension("native_profiler");
        $__internal_98d8b04b61577c807d49018081c0df9c62b00f8c9669265ce7b7e1b735413e2b->enter($__internal_98d8b04b61577c807d49018081c0df9c62b00f8c9669265ce7b7e1b735413e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_98d8b04b61577c807d49018081c0df9c62b00f8c9669265ce7b7e1b735413e2b->leave($__internal_98d8b04b61577c807d49018081c0df9c62b00f8c9669265ce7b7e1b735413e2b_prof);

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
