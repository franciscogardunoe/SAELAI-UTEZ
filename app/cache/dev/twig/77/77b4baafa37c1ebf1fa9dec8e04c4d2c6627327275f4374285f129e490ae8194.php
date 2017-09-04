<?php

/* saelaiBundle::Template.html.twig */
class __TwigTemplate_fa272b908181431d0d58499c6fb08a1cbd9e7c8a865f2056d4afc47c9c775ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'start' => array($this, 'block_start'),
            'students' => array($this, 'block_students'),
            'groups' => array($this, 'block_groups'),
            'teachers' => array($this, 'block_teachers'),
            'exams' => array($this, 'block_exams'),
            'careers' => array($this, 'block_careers'),
            'academicDivision' => array($this, 'block_academicDivision'),
            'myProfile' => array($this, 'block_myProfile'),
            'name' => array($this, 'block_name'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_013eccf0a847e3c2c3283f27bdebdbd1811d7078da87072c76749aef46cdf3a9 = $this->env->getExtension("native_profiler");
        $__internal_013eccf0a847e3c2c3283f27bdebdbd1811d7078da87072c76749aef46cdf3a9->enter($__internal_013eccf0a847e3c2c3283f27bdebdbd1811d7078da87072c76749aef46cdf3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle::Template.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/img/logo_utez_azul.png"), "html", null, true);
        echo "\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

        <title>SAELAI</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name=\"viewport\" content=\"width=device-width\" />

        <!-- Bootstrap core CSS     -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <!-- Animation library for notifications   -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/css/light-bootstrap-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


        <!--     Fonts and icons     -->
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>
    <body>

        <div class=\"wrapper\">
            <div class=\"sidebar\" data-color=\"purple\" data-image=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/img/sidebar-5.jpg"), "html", null, true);
        echo "\">

                <!--
            
                    Tip 1: you can change the color of the sidebar using: data-color=\"blue | azure | green | orange | red | purple\"
                    Tip 2: you can also add an image using data-image tag
            
                -->

                <div class=\"sidebar-wrapper\">
                    <div class=\"logo\">
                        <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/img/logo_academia_idiomas.png"), "html", null, true);
        echo "\" alt=\"...\" height=\"63\" width=\"200\" class=\"img-rounded\">
                        </a>
                        <center><h6>Sistema de Aplicación de Examenes en Línea para la Academia de Idiomas</h6></center>
                    </div>

                    <ul class=\"nav\">
                        ";
        // line 53
        $this->displayBlock('start', $context, $blocks);
        // line 61
        echo "                        ";
        $this->displayBlock('students', $context, $blocks);
        // line 69
        echo "                        ";
        $this->displayBlock('groups', $context, $blocks);
        // line 77
        echo "                        ";
        $this->displayBlock('teachers', $context, $blocks);
        // line 85
        echo "                        ";
        $this->displayBlock('exams', $context, $blocks);
        // line 93
        echo "                        ";
        $this->displayBlock('careers', $context, $blocks);
        // line 101
        echo "                        ";
        $this->displayBlock('academicDivision', $context, $blocks);
        // line 109
        echo "                        ";
        $this->displayBlock('myProfile', $context, $blocks);
        // line 117
        echo "                    </ul>
                </div>
            </div>

            <div class=\"main-panel\">
                <nav class=\"navbar navbar-default navbar-fixed\">
                    <div class=\"container-fluid\">               
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-example-2\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>

                        ";
        // line 133
        $this->displayBlock('name', $context, $blocks);
        // line 135
        echo "
                        <div class=\"collapse navbar-collapse\">                         
                            <ul class=\"nav navbar-nav navbar-right\">                                                            
                                <li>
                                    <a href=\"#\">
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <div class=\"content\">
                    <div class=\"container-fluid\">
                        ";
        // line 151
        $this->displayBlock('contenido', $context, $blocks);
        // line 154
        echo "                    </div>
                </div>


                <footer class=\"footer\">
                    <div class=\"container-fluid\">
                        <nav class=\"pull-left\">
                            <ul>
                                <li>
                                    <a href=\"#\">
                                        &copy; 2017 Universidad Tecnologica Emiliano Zapata del Estado de Morelos
                                    </a>
                                </li> 
                            </ul>
                        </nav>
                        <p class=\"copyright pull-right\">
                            &copy; 2016 <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
                        </p>
                    </div>
                </footer>

            </div>
        </div>


    </body>

    <!--   Core JS Files   -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/bootstrap-checkbox-radio-switch.js"), "html", null, true);
        echo "\"></script>

    <!--  Charts Plugin -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/chartist.min.js"), "html", null, true);
        echo "\"></script>

    <!--  Notifications Plugin    -->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

    <!--  Google Maps Plugin    -->
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false\"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/light-bootstrap-dashboard.js"), "html", null, true);
        echo "\"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/demo.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function () {

            demo.initChartist();

            \$.notify({
                icon: 'pe-7s-gift',
                message: \"Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer.\"

            }, {
                type: 'info',
                timer: 4000
            });

        });
    </script>
</html>";
        
        $__internal_013eccf0a847e3c2c3283f27bdebdbd1811d7078da87072c76749aef46cdf3a9->leave($__internal_013eccf0a847e3c2c3283f27bdebdbd1811d7078da87072c76749aef46cdf3a9_prof);

    }

    // line 53
    public function block_start($context, array $blocks = array())
    {
        $__internal_7f2fbd4ac56911f32e030449b42f38c367f50e84038d8d3398e8fd30af8d6e96 = $this->env->getExtension("native_profiler");
        $__internal_7f2fbd4ac56911f32e030449b42f38c367f50e84038d8d3398e8fd30af8d6e96->enter($__internal_7f2fbd4ac56911f32e030449b42f38c367f50e84038d8d3398e8fd30af8d6e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "start"));

        // line 54
        echo "                            <li>
                                <a href=\"dashboard.html\">
                                    <i class=\"pe-7s-home\"></i>
                                    <p>Start</p>
                                </a>
                            </li>
                        ";
        
        $__internal_7f2fbd4ac56911f32e030449b42f38c367f50e84038d8d3398e8fd30af8d6e96->leave($__internal_7f2fbd4ac56911f32e030449b42f38c367f50e84038d8d3398e8fd30af8d6e96_prof);

    }

    // line 61
    public function block_students($context, array $blocks = array())
    {
        $__internal_9f9bd32e2c76259314a8210059fb3274ccfba377c889777754f242f55d83ba14 = $this->env->getExtension("native_profiler");
        $__internal_9f9bd32e2c76259314a8210059fb3274ccfba377c889777754f242f55d83ba14->enter($__internal_9f9bd32e2c76259314a8210059fb3274ccfba377c889777754f242f55d83ba14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "students"));

        // line 62
        echo "                            <li>
                                <a href=\"user.html\">
                                    <i class=\"pe-7s-study\"></i>
                                    <p>Students</p>
                                </a>
                            </li>
                        ";
        
        $__internal_9f9bd32e2c76259314a8210059fb3274ccfba377c889777754f242f55d83ba14->leave($__internal_9f9bd32e2c76259314a8210059fb3274ccfba377c889777754f242f55d83ba14_prof);

    }

    // line 69
    public function block_groups($context, array $blocks = array())
    {
        $__internal_83a423834df9d72f1a6f8e73e6826b85717ea17e7e9daef5b8489395c4b504c0 = $this->env->getExtension("native_profiler");
        $__internal_83a423834df9d72f1a6f8e73e6826b85717ea17e7e9daef5b8489395c4b504c0->enter($__internal_83a423834df9d72f1a6f8e73e6826b85717ea17e7e9daef5b8489395c4b504c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "groups"));

        // line 70
        echo "                            <li>
                                <a href=\"dashboard.html\">
                                    <i class=\"pe-7s-pin\"></i>
                                    <p>Groups</p>
                                </a>
                            </li>
                        ";
        
        $__internal_83a423834df9d72f1a6f8e73e6826b85717ea17e7e9daef5b8489395c4b504c0->leave($__internal_83a423834df9d72f1a6f8e73e6826b85717ea17e7e9daef5b8489395c4b504c0_prof);

    }

    // line 77
    public function block_teachers($context, array $blocks = array())
    {
        $__internal_8562471fee497fd30cf4f42ff2ead52645acc4da538910a3af3825809c995b50 = $this->env->getExtension("native_profiler");
        $__internal_8562471fee497fd30cf4f42ff2ead52645acc4da538910a3af3825809c995b50->enter($__internal_8562471fee497fd30cf4f42ff2ead52645acc4da538910a3af3825809c995b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "teachers"));

        // line 78
        echo "                            <li>
                                <a href=\"table.html\">
                                    <i class=\"pe-7s-users\"></i>
                                    <p>Teachers</p>
                                </a>
                            </li>
                        ";
        
        $__internal_8562471fee497fd30cf4f42ff2ead52645acc4da538910a3af3825809c995b50->leave($__internal_8562471fee497fd30cf4f42ff2ead52645acc4da538910a3af3825809c995b50_prof);

    }

    // line 85
    public function block_exams($context, array $blocks = array())
    {
        $__internal_8eefaed31bbde8ac06245b1a26ddf99d00800a4f7883804a8e4c007db1f07370 = $this->env->getExtension("native_profiler");
        $__internal_8eefaed31bbde8ac06245b1a26ddf99d00800a4f7883804a8e4c007db1f07370->enter($__internal_8eefaed31bbde8ac06245b1a26ddf99d00800a4f7883804a8e4c007db1f07370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "exams"));

        // line 86
        echo "                            <li>
                                <a href=\"maps.html\">
                                    <i class=\"pe-7s-note2\"></i>
                                    <p>Exams</p>
                                </a>
                            </li>
                        ";
        
        $__internal_8eefaed31bbde8ac06245b1a26ddf99d00800a4f7883804a8e4c007db1f07370->leave($__internal_8eefaed31bbde8ac06245b1a26ddf99d00800a4f7883804a8e4c007db1f07370_prof);

    }

    // line 93
    public function block_careers($context, array $blocks = array())
    {
        $__internal_7dc7701ae49fd1e7fbc89828e927be3a9fbf838922b4383c05d1f7e86bcce14e = $this->env->getExtension("native_profiler");
        $__internal_7dc7701ae49fd1e7fbc89828e927be3a9fbf838922b4383c05d1f7e86bcce14e->enter($__internal_7dc7701ae49fd1e7fbc89828e927be3a9fbf838922b4383c05d1f7e86bcce14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "careers"));

        // line 94
        echo "                            <li>
                                <a href=\"typography.html\">
                                    <i class=\"pe-7s-science\"></i>
                                    <p>Careers</p>
                                </a>
                            </li>
                        ";
        
        $__internal_7dc7701ae49fd1e7fbc89828e927be3a9fbf838922b4383c05d1f7e86bcce14e->leave($__internal_7dc7701ae49fd1e7fbc89828e927be3a9fbf838922b4383c05d1f7e86bcce14e_prof);

    }

    // line 101
    public function block_academicDivision($context, array $blocks = array())
    {
        $__internal_b49a4773b2808aac05eded649c53ba6c37584e9f03d81ad812ea62faebf12e28 = $this->env->getExtension("native_profiler");
        $__internal_b49a4773b2808aac05eded649c53ba6c37584e9f03d81ad812ea62faebf12e28->enter($__internal_b49a4773b2808aac05eded649c53ba6c37584e9f03d81ad812ea62faebf12e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "academicDivision"));

        // line 102
        echo "                            <li>
                                <a href=\"icons.html\">
                                    <i class=\"pe-7s-culture\"></i>
                                    <p>Academic Divisions</p>
                                </a>
                            </li>
                        ";
        
        $__internal_b49a4773b2808aac05eded649c53ba6c37584e9f03d81ad812ea62faebf12e28->leave($__internal_b49a4773b2808aac05eded649c53ba6c37584e9f03d81ad812ea62faebf12e28_prof);

    }

    // line 109
    public function block_myProfile($context, array $blocks = array())
    {
        $__internal_22dcdbb732b5bef0be6f40384caa25fb7d1a63988a5f056eb84dba8ea4ac7eda = $this->env->getExtension("native_profiler");
        $__internal_22dcdbb732b5bef0be6f40384caa25fb7d1a63988a5f056eb84dba8ea4ac7eda->enter($__internal_22dcdbb732b5bef0be6f40384caa25fb7d1a63988a5f056eb84dba8ea4ac7eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myProfile"));

        // line 110
        echo "                            <li class=\"active\">
                                <a href=\"upgrade.html\">
                                    <i class=\"pe-7s-user\"></i>
                                    <p>My profile</p>
                                </a>
                            </li>
                        ";
        
        $__internal_22dcdbb732b5bef0be6f40384caa25fb7d1a63988a5f056eb84dba8ea4ac7eda->leave($__internal_22dcdbb732b5bef0be6f40384caa25fb7d1a63988a5f056eb84dba8ea4ac7eda_prof);

    }

    // line 133
    public function block_name($context, array $blocks = array())
    {
        $__internal_696617ec16bb3512fb775cdc19ce85b7e14b1fc78146ce52e130377bd0808099 = $this->env->getExtension("native_profiler");
        $__internal_696617ec16bb3512fb775cdc19ce85b7e14b1fc78146ce52e130377bd0808099->enter($__internal_696617ec16bb3512fb775cdc19ce85b7e14b1fc78146ce52e130377bd0808099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo "                        
                        ";
        
        $__internal_696617ec16bb3512fb775cdc19ce85b7e14b1fc78146ce52e130377bd0808099->leave($__internal_696617ec16bb3512fb775cdc19ce85b7e14b1fc78146ce52e130377bd0808099_prof);

    }

    // line 151
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cc18196c89e1b6d6335ee9456c1b2096251bf96fe4bf3aa47c114a4615186193 = $this->env->getExtension("native_profiler");
        $__internal_cc18196c89e1b6d6335ee9456c1b2096251bf96fe4bf3aa47c114a4615186193->enter($__internal_cc18196c89e1b6d6335ee9456c1b2096251bf96fe4bf3aa47c114a4615186193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 152
        echo "
                        ";
        
        $__internal_cc18196c89e1b6d6335ee9456c1b2096251bf96fe4bf3aa47c114a4615186193->leave($__internal_cc18196c89e1b6d6335ee9456c1b2096251bf96fe4bf3aa47c114a4615186193_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle::Template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 152,  431 => 151,  418 => 133,  405 => 110,  399 => 109,  386 => 102,  380 => 101,  367 => 94,  361 => 93,  348 => 86,  342 => 85,  329 => 78,  323 => 77,  310 => 70,  304 => 69,  291 => 62,  285 => 61,  272 => 54,  266 => 53,  240 => 201,  234 => 198,  225 => 192,  219 => 189,  213 => 186,  207 => 183,  203 => 182,  173 => 154,  171 => 151,  153 => 135,  151 => 133,  133 => 117,  130 => 109,  127 => 101,  124 => 93,  121 => 85,  118 => 77,  115 => 69,  112 => 61,  110 => 53,  101 => 47,  86 => 35,  78 => 30,  69 => 24,  62 => 20,  56 => 17,  50 => 14,  38 => 5,  32 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <link rel="icon" type="image/png" href="{{asset('bundles/assets/img/logo_utez_azul.png')}}">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/* */
/*         <title>SAELAI</title>*/
/* */
/*         <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />*/
/*         <meta name="viewport" content="width=device-width" />*/
/* */
/*         <!-- Bootstrap core CSS     -->*/
/*         <link href="{{asset('bundles/assets/css/bootstrap.min.css')}}" rel="stylesheet" />*/
/* */
/*         <!-- Animation library for notifications   -->*/
/*         <link href="{{asset('bundles/assets/css/animate.min.css')}}" rel="stylesheet"/>*/
/* */
/*         <!--  Light Bootstrap Table core CSS    -->*/
/*         <link href="{{asset('bundles/assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>*/
/* */
/* */
/*         <!--  CSS for Demo Purpose, don't include it in your project     -->*/
/*         <link href="{{asset('bundles/assets/css/demo.css')}}" rel="stylesheet"/>*/
/* */
/* */
/*         <!--     Fonts and icons     -->*/
/*         <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/*         <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>*/
/*         <link href="{{asset('bundles/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <div class="wrapper">*/
/*             <div class="sidebar" data-color="purple" data-image="{{asset('bundles/assets/img/sidebar-5.jpg')}}">*/
/* */
/*                 <!--*/
/*             */
/*                     Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"*/
/*                     Tip 2: you can also add an image using data-image tag*/
/*             */
/*                 -->*/
/* */
/*                 <div class="sidebar-wrapper">*/
/*                     <div class="logo">*/
/*                         <a href="http://www.creative-tim.com" class="simple-text">*/
/*                             <img src="{{asset('bundles/assets/img/logo_academia_idiomas.png')}}" alt="..." height="63" width="200" class="img-rounded">*/
/*                         </a>*/
/*                         <center><h6>Sistema de Aplicación de Examenes en Línea para la Academia de Idiomas</h6></center>*/
/*                     </div>*/
/* */
/*                     <ul class="nav">*/
/*                         {% block start %}*/
/*                             <li>*/
/*                                 <a href="dashboard.html">*/
/*                                     <i class="pe-7s-home"></i>*/
/*                                     <p>Start</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endblock %}*/
/*                         {% block students %}*/
/*                             <li>*/
/*                                 <a href="user.html">*/
/*                                     <i class="pe-7s-study"></i>*/
/*                                     <p>Students</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endblock %}*/
/*                         {% block groups %}*/
/*                             <li>*/
/*                                 <a href="dashboard.html">*/
/*                                     <i class="pe-7s-pin"></i>*/
/*                                     <p>Groups</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endblock %}*/
/*                         {% block teachers %}*/
/*                             <li>*/
/*                                 <a href="table.html">*/
/*                                     <i class="pe-7s-users"></i>*/
/*                                     <p>Teachers</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endblock %}*/
/*                         {% block exams %}*/
/*                             <li>*/
/*                                 <a href="maps.html">*/
/*                                     <i class="pe-7s-note2"></i>*/
/*                                     <p>Exams</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endblock %}*/
/*                         {% block careers %}*/
/*                             <li>*/
/*                                 <a href="typography.html">*/
/*                                     <i class="pe-7s-science"></i>*/
/*                                     <p>Careers</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endblock %}*/
/*                         {% block academicDivision %}*/
/*                             <li>*/
/*                                 <a href="icons.html">*/
/*                                     <i class="pe-7s-culture"></i>*/
/*                                     <p>Academic Divisions</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endblock %}*/
/*                         {% block myProfile %}*/
/*                             <li class="active">*/
/*                                 <a href="upgrade.html">*/
/*                                     <i class="pe-7s-user"></i>*/
/*                                     <p>My profile</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endblock %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="main-panel">*/
/*                 <nav class="navbar navbar-default navbar-fixed">*/
/*                     <div class="container-fluid">               */
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/* */
/*                         {% block name %}                        */
/*                         {% endblock %}*/
/* */
/*                         <div class="collapse navbar-collapse">                         */
/*                             <ul class="nav navbar-nav navbar-right">                                                            */
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         Log out*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/* */
/* */
/*                 <div class="content">*/
/*                     <div class="container-fluid">*/
/*                         {% block contenido %}*/
/* */
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <footer class="footer">*/
/*                     <div class="container-fluid">*/
/*                         <nav class="pull-left">*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         &copy; 2017 Universidad Tecnologica Emiliano Zapata del Estado de Morelos*/
/*                                     </a>*/
/*                                 </li> */
/*                             </ul>*/
/*                         </nav>*/
/*                         <p class="copyright pull-right">*/
/*                             &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web*/
/*                         </p>*/
/*                     </div>*/
/*                 </footer>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </body>*/
/* */
/*     <!--   Core JS Files   -->*/
/*     <script src="{{asset('bundles/assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('bundles/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/* */
/*     <!--  Checkbox, Radio & Switch Plugins -->*/
/*     <script src="{{asset('bundles/assets/js/bootstrap-checkbox-radio-switch.js')}}"></script>*/
/* */
/*     <!--  Charts Plugin -->*/
/*     <script src="{{asset('bundles/assets/js/chartist.min.js')}}"></script>*/
/* */
/*     <!--  Notifications Plugin    -->*/
/*     <script src="{{asset('bundles/assets/js/bootstrap-notify.js')}}"></script>*/
/* */
/*     <!--  Google Maps Plugin    -->*/
/*     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>*/
/* */
/*     <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->*/
/*     <script src="{{asset('bundles/assets/js/light-bootstrap-dashboard.js')}}"></script>*/
/* */
/*     <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->*/
/*     <script src="{{asset('bundles/assets/js/demo.js')}}"></script>*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/* */
/*             demo.initChartist();*/
/* */
/*             $.notify({*/
/*                 icon: 'pe-7s-gift',*/
/*                 message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."*/
/* */
/*             }, {*/
/*                 type: 'info',*/
/*                 timer: 4000*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* </html>*/
