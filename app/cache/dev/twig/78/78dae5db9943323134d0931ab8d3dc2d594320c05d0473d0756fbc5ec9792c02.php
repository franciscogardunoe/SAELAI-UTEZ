<?php

/* saelaiBundle:Manager\Student:StudentDetails.html.twig */
class __TwigTemplate_889312f94d53d84d893fa6ee7786f448d2244ed005d7d1e6aecca86f987ad693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("saelaiBundle::Template.html.twig", "saelaiBundle:Manager\\Student:StudentDetails.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'name' => array($this, 'block_name'),
            'students' => array($this, 'block_students'),
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
        $__internal_a4a483589471a11f81c19559fc4217741520be7e79f3620947adf666754aba03 = $this->env->getExtension("native_profiler");
        $__internal_a4a483589471a11f81c19559fc4217741520be7e79f3620947adf666754aba03->enter($__internal_a4a483589471a11f81c19559fc4217741520be7e79f3620947adf666754aba03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:Manager\\Student:StudentDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a483589471a11f81c19559fc4217741520be7e79f3620947adf666754aba03->leave($__internal_a4a483589471a11f81c19559fc4217741520be7e79f3620947adf666754aba03_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a583403f5f977e11ff6b2cf54b0c2c011d29e6b551067312f0b23f27a7f77a3 = $this->env->getExtension("native_profiler");
        $__internal_6a583403f5f977e11ff6b2cf54b0c2c011d29e6b551067312f0b23f27a7f77a3->enter($__internal_6a583403f5f977e11ff6b2cf54b0c2c011d29e6b551067312f0b23f27a7f77a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('students', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_6a583403f5f977e11ff6b2cf54b0c2c011d29e6b551067312f0b23f27a7f77a3->leave($__internal_6a583403f5f977e11ff6b2cf54b0c2c011d29e6b551067312f0b23f27a7f77a3_prof);

    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
        $__internal_3543c3297b3fcea9e62cfe7e791b32c956d4b17c6a790ea04fb4566b14afda7d = $this->env->getExtension("native_profiler");
        $__internal_3543c3297b3fcea9e62cfe7e791b32c956d4b17c6a790ea04fb4566b14afda7d->enter($__internal_3543c3297b3fcea9e62cfe7e791b32c956d4b17c6a790ea04fb4566b14afda7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        // line 6
        echo "        <h6 class=\"navbar-brand\" href=\"#\">Manager | Amalia Rojas</h6> 
    ";
        
        $__internal_3543c3297b3fcea9e62cfe7e791b32c956d4b17c6a790ea04fb4566b14afda7d->leave($__internal_3543c3297b3fcea9e62cfe7e791b32c956d4b17c6a790ea04fb4566b14afda7d_prof);

    }

    // line 9
    public function block_students($context, array $blocks = array())
    {
        $__internal_38fea855dcdc56b5ecabaee9b0c3ede9c59083e0fd6a0532a9bb94bb92ca7de4 = $this->env->getExtension("native_profiler");
        $__internal_38fea855dcdc56b5ecabaee9b0c3ede9c59083e0fd6a0532a9bb94bb92ca7de4->enter($__internal_38fea855dcdc56b5ecabaee9b0c3ede9c59083e0fd6a0532a9bb94bb92ca7de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "students"));

        // line 10
        echo "        <li class=\"active\">
            <a href=\"user.html\">
                <i class=\"pe-7s-study\"></i>
                <p>Students</p>
            </a>
        </li>
    ";
        
        $__internal_38fea855dcdc56b5ecabaee9b0c3ede9c59083e0fd6a0532a9bb94bb92ca7de4->leave($__internal_38fea855dcdc56b5ecabaee9b0c3ede9c59083e0fd6a0532a9bb94bb92ca7de4_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_8a4b702f5a3571f5c1465a0a7f4c7f2ab21a211348ee79d2740bd25260a5cba3 = $this->env->getExtension("native_profiler");
        $__internal_8a4b702f5a3571f5c1465a0a7f4c7f2ab21a211348ee79d2740bd25260a5cba3->enter($__internal_8a4b702f5a3571f5c1465a0a7f4c7f2ab21a211348ee79d2740bd25260a5cba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_8a4b702f5a3571f5c1465a0a7f4c7f2ab21a211348ee79d2740bd25260a5cba3->leave($__internal_8a4b702f5a3571f5c1465a0a7f4c7f2ab21a211348ee79d2740bd25260a5cba3_prof);

    }

    // line 30
    public function block_modal($context, array $blocks = array())
    {
        $__internal_46a4e75ef79e9256420b2845a6ae78583835f3ab2c772bf128b822be87925efa = $this->env->getExtension("native_profiler");
        $__internal_46a4e75ef79e9256420b2845a6ae78583835f3ab2c772bf128b822be87925efa->enter($__internal_46a4e75ef79e9256420b2845a6ae78583835f3ab2c772bf128b822be87925efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_46a4e75ef79e9256420b2845a6ae78583835f3ab2c772bf128b822be87925efa->leave($__internal_46a4e75ef79e9256420b2845a6ae78583835f3ab2c772bf128b822be87925efa_prof);

    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6d96e829e0dafeffce56effef9b6de886a8a7be54dfad3308266ad5ab24f7479 = $this->env->getExtension("native_profiler");
        $__internal_6d96e829e0dafeffce56effef9b6de886a8a7be54dfad3308266ad5ab24f7479->enter($__internal_6d96e829e0dafeffce56effef9b6de886a8a7be54dfad3308266ad5ab24f7479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6d96e829e0dafeffce56effef9b6de886a8a7be54dfad3308266ad5ab24f7479->leave($__internal_6d96e829e0dafeffce56effef9b6de886a8a7be54dfad3308266ad5ab24f7479_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:Manager\\Student:StudentDetails.html.twig";
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
/*     {% block students %}*/
/*         <li class="active">*/
/*             <a href="user.html">*/
/*                 <i class="pe-7s-study"></i>*/
/*                 <p>Students</p>*/
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
