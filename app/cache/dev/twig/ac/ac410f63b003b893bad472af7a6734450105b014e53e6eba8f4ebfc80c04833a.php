<?php

/* saelaiBundle:Manager\AcademicDivision:AcademicDivision.html.twig */
class __TwigTemplate_cea8de5b771db3f2b00ad64374a1ef0756d0e10248c90610ae5fdcaaf6ea6eed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("saelaiBundle::Template.html.twig", "saelaiBundle:Manager\\AcademicDivision:AcademicDivision.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'name' => array($this, 'block_name'),
            'academicDivision' => array($this, 'block_academicDivision'),
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
        $__internal_ed003cadaebf03d1cace21d09c44c79548c898bdbb7d3f7be900418947a0b1ab = $this->env->getExtension("native_profiler");
        $__internal_ed003cadaebf03d1cace21d09c44c79548c898bdbb7d3f7be900418947a0b1ab->enter($__internal_ed003cadaebf03d1cace21d09c44c79548c898bdbb7d3f7be900418947a0b1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:Manager\\AcademicDivision:AcademicDivision.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed003cadaebf03d1cace21d09c44c79548c898bdbb7d3f7be900418947a0b1ab->leave($__internal_ed003cadaebf03d1cace21d09c44c79548c898bdbb7d3f7be900418947a0b1ab_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a43ade0f554a1327676cbaf0620d2c6ffcef23b232795694608e9c63e1952bc1 = $this->env->getExtension("native_profiler");
        $__internal_a43ade0f554a1327676cbaf0620d2c6ffcef23b232795694608e9c63e1952bc1->enter($__internal_a43ade0f554a1327676cbaf0620d2c6ffcef23b232795694608e9c63e1952bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('academicDivision', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_a43ade0f554a1327676cbaf0620d2c6ffcef23b232795694608e9c63e1952bc1->leave($__internal_a43ade0f554a1327676cbaf0620d2c6ffcef23b232795694608e9c63e1952bc1_prof);

    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
        $__internal_a0afcfbaf747160eb342f5469f6d9ad767a2b8ab0aed25da058094990a2d0663 = $this->env->getExtension("native_profiler");
        $__internal_a0afcfbaf747160eb342f5469f6d9ad767a2b8ab0aed25da058094990a2d0663->enter($__internal_a0afcfbaf747160eb342f5469f6d9ad767a2b8ab0aed25da058094990a2d0663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        // line 6
        echo "        <h6 class=\"navbar-brand\" href=\"#\">Manager | Amalia Rojas</h6> 
    ";
        
        $__internal_a0afcfbaf747160eb342f5469f6d9ad767a2b8ab0aed25da058094990a2d0663->leave($__internal_a0afcfbaf747160eb342f5469f6d9ad767a2b8ab0aed25da058094990a2d0663_prof);

    }

    // line 9
    public function block_academicDivision($context, array $blocks = array())
    {
        $__internal_e3517b18059fa4f73c3f07e9951a1d5500707ec2a19901c57227692353b4081a = $this->env->getExtension("native_profiler");
        $__internal_e3517b18059fa4f73c3f07e9951a1d5500707ec2a19901c57227692353b4081a->enter($__internal_e3517b18059fa4f73c3f07e9951a1d5500707ec2a19901c57227692353b4081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "academicDivision"));

        // line 10
        echo "        <li class=\"active\">
            <a href=\"icons.html\">
                <i class=\"pe-7s-culture\"></i>
                <p>Academic Divisions</p>
            </a>
        </li>
    ";
        
        $__internal_e3517b18059fa4f73c3f07e9951a1d5500707ec2a19901c57227692353b4081a->leave($__internal_e3517b18059fa4f73c3f07e9951a1d5500707ec2a19901c57227692353b4081a_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2eb38154f056fa989f8cb38fffeccbfb3b484c23db339dc7a8146b54ea1b1f7e = $this->env->getExtension("native_profiler");
        $__internal_2eb38154f056fa989f8cb38fffeccbfb3b484c23db339dc7a8146b54ea1b1f7e->enter($__internal_2eb38154f056fa989f8cb38fffeccbfb3b484c23db339dc7a8146b54ea1b1f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_2eb38154f056fa989f8cb38fffeccbfb3b484c23db339dc7a8146b54ea1b1f7e->leave($__internal_2eb38154f056fa989f8cb38fffeccbfb3b484c23db339dc7a8146b54ea1b1f7e_prof);

    }

    // line 30
    public function block_modal($context, array $blocks = array())
    {
        $__internal_5881d3328e88147d4ea6f00a04d783ae4dbc08e1c41675ee48d3ac9ff5d6e2c5 = $this->env->getExtension("native_profiler");
        $__internal_5881d3328e88147d4ea6f00a04d783ae4dbc08e1c41675ee48d3ac9ff5d6e2c5->enter($__internal_5881d3328e88147d4ea6f00a04d783ae4dbc08e1c41675ee48d3ac9ff5d6e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_5881d3328e88147d4ea6f00a04d783ae4dbc08e1c41675ee48d3ac9ff5d6e2c5->leave($__internal_5881d3328e88147d4ea6f00a04d783ae4dbc08e1c41675ee48d3ac9ff5d6e2c5_prof);

    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_76b12cc96ec8c7d8cca865439e96e85a32c1b214ab217a30cb494ae1a440b001 = $this->env->getExtension("native_profiler");
        $__internal_76b12cc96ec8c7d8cca865439e96e85a32c1b214ab217a30cb494ae1a440b001->enter($__internal_76b12cc96ec8c7d8cca865439e96e85a32c1b214ab217a30cb494ae1a440b001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_76b12cc96ec8c7d8cca865439e96e85a32c1b214ab217a30cb494ae1a440b001->leave($__internal_76b12cc96ec8c7d8cca865439e96e85a32c1b214ab217a30cb494ae1a440b001_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:Manager\\AcademicDivision:AcademicDivision.html.twig";
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
/*     {% block academicDivision %}*/
/*         <li class="active">*/
/*             <a href="icons.html">*/
/*                 <i class="pe-7s-culture"></i>*/
/*                 <p>Academic Divisions</p>*/
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
