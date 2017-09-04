<?php

/* saelaiBundle:example:Template.html.twig */
class __TwigTemplate_e933be5ed0a3779cf312b564536d69b4999385ca47df90fe44d6f03d1bbae1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3231dd671879cf731388baf4f2e12842e493b590a81006c04c558f19c0c4108 = $this->env->getExtension("native_profiler");
        $__internal_d3231dd671879cf731388baf4f2e12842e493b590a81006c04c558f19c0c4108->enter($__internal_d3231dd671879cf731388baf4f2e12842e493b590a81006c04c558f19c0c4108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:example:Template.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"icon\" type=\"image/png\" href=\"assets/img/favicon.ico\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/css/demo.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" />


        <!--     Fonts and icons     -->
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href=\"bundles/assets/css/pe-icon-7-stroke.css\" rel=\"stylesheet\" />
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
                        <li class=\"active\">
                            <a href=\"dashboard.html\">
                                <i class=\"pe-7s-home\"></i>
                                <p>Start</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"user.html\">
                                <i class=\"pe-7s-study\"></i>
                                <p>Students</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"dashboard.html\">
                                <i class=\"pe-7s-pin\"></i>
                                <p>Groups</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"table.html\">
                                <i class=\"pe-7s-users\"></i>
                                <p>Teachers</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"maps.html\">
                                <i class=\"pe-7s-note2\"></i>
                                <p>Exams</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"typography.html\">
                                <i class=\"pe-7s-science\"></i>
                                <p>Careers</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"icons.html\">
                                <i class=\"pe-7s-culture\"></i>
                                <p>Academic Divisions</p>
                            </a>
                        </li>                                              
                        <li class=\"active\">
                            <a href=\"upgrade.html\">
                                <i class=\"pe-7s-user\"></i>
                                <p>My profile</p>
                            </a>
                        </li>
                    </ul>
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
                        <h6 class=\"navbar-brand\" href=\"#\">Manager | Amalia Rojas</h6> 

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
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"card\">
                                    <div class=\"header\">
                                        <h4 class=\"title\">Students</h4>

                                    </div>
                                    <div class=\"content\">
                                        <button type=\"button\" class=\"btn btn-success btn-fill pull-right\"><i class=\"pe-7s-pen\"></i> New Student</button>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"content table-responsive table-full-width\">
                                            <table class=\"table table-hover table-striped\">
                                                <thead>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Salary</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dakota Rice</td>
                                                        <td>\$36,738</td>
                                                        <td>Niger</td>
                                                        <td>Oud-Turnhout</td>
                                                    </tr>                                                                                                        
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan=\"12\">
                                                            <ul class=\"pagination pull-right\"></ul>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>                                            
                                        </div>
                                        <div class=\"footer\">                                                                                       
                                            <hr>
                                            <div class=\"stats\">
                                                <i class=\"fa fa-clock-o\"></i> Campaign sent 2 days ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"bundles/assets/js/bootstrap.min.js\" type=\"text/javascript\"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/bootstrap-checkbox-radio-switch.js"), "html", null, true);
        echo "\"></script>

    <!--  Charts Plugin -->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/chartist.min.js"), "html", null, true);
        echo "\"></script>

    <!--  Notifications Plugin    -->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

    <!--  Google Maps Plugin    -->
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false\"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/light-bootstrap-dashboard.js"), "html", null, true);
        echo "\"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/js/demo.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
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
</html>


";
        
        $__internal_d3231dd671879cf731388baf4f2e12842e493b590a81006c04c558f19c0c4108->leave($__internal_d3231dd671879cf731388baf4f2e12842e493b590a81006c04c558f19c0c4108_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:example:Template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 229,  279 => 226,  270 => 220,  264 => 217,  258 => 214,  251 => 210,  85 => 47,  70 => 35,  56 => 24,  49 => 20,  43 => 17,  37 => 14,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <link rel="icon" type="image/png" href="assets/img/favicon.ico">*/
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
/*         <link href="{{asset('bundles/assets/css/demo.css" rel="stylesheet')}}" />*/
/* */
/* */
/*         <!--     Fonts and icons     -->*/
/*         <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/*         <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>*/
/*         <link href="bundles/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />*/
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
/*                         <li class="active">*/
/*                             <a href="dashboard.html">*/
/*                                 <i class="pe-7s-home"></i>*/
/*                                 <p>Start</p>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="user.html">*/
/*                                 <i class="pe-7s-study"></i>*/
/*                                 <p>Students</p>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="dashboard.html">*/
/*                                 <i class="pe-7s-pin"></i>*/
/*                                 <p>Groups</p>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="table.html">*/
/*                                 <i class="pe-7s-users"></i>*/
/*                                 <p>Teachers</p>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="maps.html">*/
/*                                 <i class="pe-7s-note2"></i>*/
/*                                 <p>Exams</p>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="typography.html">*/
/*                                 <i class="pe-7s-science"></i>*/
/*                                 <p>Careers</p>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="icons.html">*/
/*                                 <i class="pe-7s-culture"></i>*/
/*                                 <p>Academic Divisions</p>*/
/*                             </a>*/
/*                         </li>                                              */
/*                         <li class="active">*/
/*                             <a href="upgrade.html">*/
/*                                 <i class="pe-7s-user"></i>*/
/*                                 <p>My profile</p>*/
/*                             </a>*/
/*                         </li>*/
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
/*                         <h6 class="navbar-brand" href="#">Manager | Amalia Rojas</h6> */
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
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="card">*/
/*                                     <div class="header">*/
/*                                         <h4 class="title">Students</h4>*/
/* */
/*                                     </div>*/
/*                                     <div class="content">*/
/*                                         <button type="button" class="btn btn-success btn-fill pull-right"><i class="pe-7s-pen"></i> New Student</button>*/
/*                                     </div>*/
/*                                     <div class="content">*/
/*                                         <div class="content table-responsive table-full-width">*/
/*                                             <table class="table table-hover table-striped">*/
/*                                                 <thead>*/
/*                                                 <th>ID</th>*/
/*                                                 <th>Name</th>*/
/*                                                 <th>Salary</th>*/
/*                                                 <th>Country</th>*/
/*                                                 <th>City</th>*/
/*                                                 </thead>*/
/*                                                 <tbody>*/
/*                                                     <tr>*/
/*                                                         <td>1</td>*/
/*                                                         <td>Dakota Rice</td>*/
/*                                                         <td>$36,738</td>*/
/*                                                         <td>Niger</td>*/
/*                                                         <td>Oud-Turnhout</td>*/
/*                                                     </tr>                                                                                                        */
/*                                                 </tbody>*/
/*                                                 <tfoot>*/
/*                                                     <tr>*/
/*                                                         <td colspan="12">*/
/*                                                             <ul class="pagination pull-right"></ul>*/
/*                                                         </td>*/
/*                                                     </tr>*/
/*                                                 </tfoot>*/
/*                                             </table>                                            */
/*                                         </div>*/
/*                                         <div class="footer">                                                                                       */
/*                                             <hr>*/
/*                                             <div class="stats">*/
/*                                                 <i class="fa fa-clock-o"></i> Campaign sent 2 days ago*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
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
/*     <script src="bundles/assets/js/bootstrap.min.js" type="text/javascript"></script>*/
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
/*     <script type="text/javascript">*/
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
/* */
/* */
/* */
