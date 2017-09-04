<?php

/* saelaiBundle:Manager\Group:Group.html.twig */
class __TwigTemplate_76f6f3e5760f149b2f05eefacac392661efb653cf36b7e27b3e99fcd6cdf3ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("saelaiBundle::Template.html.twig", "saelaiBundle:Manager\\Group:Group.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'name' => array($this, 'block_name'),
            'groups' => array($this, 'block_groups'),
            'contenido' => array($this, 'block_contenido'),
            'modal' => array($this, 'block_modal'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "saelaiBundle::Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b75140437486c08cb39c7a1c92c08ae90aae11c2a2849e97f7a653800167bffa = $this->env->getExtension("native_profiler");
        $__internal_b75140437486c08cb39c7a1c92c08ae90aae11c2a2849e97f7a653800167bffa->enter($__internal_b75140437486c08cb39c7a1c92c08ae90aae11c2a2849e97f7a653800167bffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:Manager\\Group:Group.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b75140437486c08cb39c7a1c92c08ae90aae11c2a2849e97f7a653800167bffa->leave($__internal_b75140437486c08cb39c7a1c92c08ae90aae11c2a2849e97f7a653800167bffa_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5d2ce9981fbb82660e83b2e4ea6d021327303cbd35ca1a272b52167a076261ca = $this->env->getExtension("native_profiler");
        $__internal_5d2ce9981fbb82660e83b2e4ea6d021327303cbd35ca1a272b52167a076261ca->enter($__internal_5d2ce9981fbb82660e83b2e4ea6d021327303cbd35ca1a272b52167a076261ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('groups', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_5d2ce9981fbb82660e83b2e4ea6d021327303cbd35ca1a272b52167a076261ca->leave($__internal_5d2ce9981fbb82660e83b2e4ea6d021327303cbd35ca1a272b52167a076261ca_prof);

    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
        $__internal_ce1b188ae5587886c8aecfb0425a02e59d6f053c41cea78586041a1222510faf = $this->env->getExtension("native_profiler");
        $__internal_ce1b188ae5587886c8aecfb0425a02e59d6f053c41cea78586041a1222510faf->enter($__internal_ce1b188ae5587886c8aecfb0425a02e59d6f053c41cea78586041a1222510faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        // line 6
        echo "        <h6 class=\"navbar-brand\" href=\"#\">Manager | Amalia Rojas</h6> 
    ";
        
        $__internal_ce1b188ae5587886c8aecfb0425a02e59d6f053c41cea78586041a1222510faf->leave($__internal_ce1b188ae5587886c8aecfb0425a02e59d6f053c41cea78586041a1222510faf_prof);

    }

    // line 9
    public function block_groups($context, array $blocks = array())
    {
        $__internal_e7951d399b56bf68a933ab994eef87461bdb81e6392bbc174436dbd16a454a65 = $this->env->getExtension("native_profiler");
        $__internal_e7951d399b56bf68a933ab994eef87461bdb81e6392bbc174436dbd16a454a65->enter($__internal_e7951d399b56bf68a933ab994eef87461bdb81e6392bbc174436dbd16a454a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groups"));

        // line 10
        echo "        <li class=\"active\">
            <a href=\"dashboard.html\">
                <i class=\"pe-7s-pin\"></i>
                <p>Groups</p>
            </a>
        </li>
    ";
        
        $__internal_e7951d399b56bf68a933ab994eef87461bdb81e6392bbc174436dbd16a454a65->leave($__internal_e7951d399b56bf68a933ab994eef87461bdb81e6392bbc174436dbd16a454a65_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_979cd296c066f55949ca1b576bec9675bcc173bac75170713e8f887f03d5326f = $this->env->getExtension("native_profiler");
        $__internal_979cd296c066f55949ca1b576bec9675bcc173bac75170713e8f887f03d5326f->enter($__internal_979cd296c066f55949ca1b576bec9675bcc173bac75170713e8f887f03d5326f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <!--AQUÍ VA TODO EL CONTENIDO DE LA PÁGINA-->
                    HOLA
                </div>
            </div>
        </div>
    ";
        
        $__internal_979cd296c066f55949ca1b576bec9675bcc173bac75170713e8f887f03d5326f->leave($__internal_979cd296c066f55949ca1b576bec9675bcc173bac75170713e8f887f03d5326f_prof);

    }

    // line 30
    public function block_modal($context, array $blocks = array())
    {
        $__internal_a3f13d1c0c3a9f0cb0e064eeaa24b383839ea4de8bb804eb26c5b57f305b59e7 = $this->env->getExtension("native_profiler");
        $__internal_a3f13d1c0c3a9f0cb0e064eeaa24b383839ea4de8bb804eb26c5b57f305b59e7->enter($__internal_a3f13d1c0c3a9f0cb0e064eeaa24b383839ea4de8bb804eb26c5b57f305b59e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_a3f13d1c0c3a9f0cb0e064eeaa24b383839ea4de8bb804eb26c5b57f305b59e7->leave($__internal_a3f13d1c0c3a9f0cb0e064eeaa24b383839ea4de8bb804eb26c5b57f305b59e7_prof);

    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f02646a269949f63ace18631d6d1d1535c11dd9388458ec1646442fcd216cbb8 = $this->env->getExtension("native_profiler");
        $__internal_f02646a269949f63ace18631d6d1d1535c11dd9388458ec1646442fcd216cbb8->enter($__internal_f02646a269949f63ace18631d6d1d1535c11dd9388458ec1646442fcd216cbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_f02646a269949f63ace18631d6d1d1535c11dd9388458ec1646442fcd216cbb8->leave($__internal_f02646a269949f63ace18631d6d1d1535c11dd9388458ec1646442fcd216cbb8_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:Manager\\Group:Group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  119 => 30,  104 => 19,  98 => 18,  85 => 10,  79 => 9,  71 => 6,  65 => 5,  58 => 18,  55 => 17,  53 => 9,  50 => 8,  48 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "saelaiBundle::Template.html.twig" %}*/
/* */
/* {% block main %}*/
/* */
/*     {% block name %}*/
/*         <h6 class="navbar-brand" href="#">Manager | Amalia Rojas</h6> */
/*     {% endblock %}*/
/* */
/*     {% block groups %}*/
/*         <li class="active">*/
/*             <a href="dashboard.html">*/
/*                 <i class="pe-7s-pin"></i>*/
/*                 <p>Groups</p>*/
/*             </a>*/
/*         </li>*/
/*     {% endblock %}*/
/* */
/*     {% block contenido %}*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="card">*/
/*                     <!--AQUÍ VA TODO EL CONTENIDO DE LA PÁGINA-->*/
/*                     HOLA*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
/* {% block modal %}*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* {% endblock %}*/
/* */
/* */
