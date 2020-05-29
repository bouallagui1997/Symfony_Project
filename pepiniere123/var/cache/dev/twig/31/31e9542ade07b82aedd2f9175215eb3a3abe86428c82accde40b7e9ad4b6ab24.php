<?php

/* @backoffice/basedashboard.html.twig */
class __TwigTemplate_6fed1a9912d3dd5151ece07ea53c120379e25b184ee63750f6bbf522a17be12f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@backoffice/basedashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@backoffice/basedashboard.html.twig"));

        // line 1
        echo "
<html>

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Place favicon.ico in the root directory -->
        <link href=";
        // line 12
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" id=\"bootstrap-css\">
        <link href=";
        // line 13
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tableauquestion.css")), "html", null, true);
        echo " rel=\"stylesheet\" >
        <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/classy-nav.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/elegant-icon.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css")), "html", null, true);
        echo ">



        <link rel=\"stylesheet\" href=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor.css"), "html", null, true);
        echo ">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/icon.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=";
        // line 27
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 28
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/classy-nav.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 29
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 30
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 31
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 32
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 33
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/elegant-icon.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 34
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css")), "html", null, true);
        echo ">

        <!-- Theme initialization -->

    </head>
    <body>

    <div class=\"main-wrapper\">
        <div class=\"app\" id=\"app\">
            <header class=\"header\">
                <div class=\"header-block header-block-collapse d-lg-none d-xl-none\">
                    <button class=\"collapse-btn\" id=\"sidebar-collapse-btn\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                </div>
                <div class=\"header-block header-block-search\">
                    <form role=\"search\">
                        <div class=\"input-container\">
                            <i class=\"fa fa-search\"></i>
                            <input type=\"search\" placeholder=\"Search\">
                            <div class=\"underline\"></div>
                        </div>
                    </form>
                </div>
                <div class=\"header-block header-block-buttons\">

                        <i class=\"fa fa-github-alt\"></i>
                        <span>View on GitHub</span>
                    </a>
                    <a href=\"https://github.com/modularcode/modular-admin-html/stargazers\" class=\"btn btn-sm header-btn\">
                        <i class=\"fa fa-star\"></i>
                        <span>Star Us</span>
                    </a>
                    <a href=\"https://github.com/modularcode/modular-admin-html/releases\" class=\"btn btn-sm header-btn\">
                        <i class=\"fa fa-cloud-download\"></i>
                        <span>Download .zip</span>
                    </a>
                </div>
                <div class=\"header-block header-block-nav\">
                    <ul class=\"nav-profile\">
                        <li >
                            <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> Sortir De Dashboard </a>

                        </li>
                        <li class=\"profile dropdown\">
                            <div class=\"login\">
                                <div >
                                    ";
        // line 82
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 83
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
            echo " |
                                        <a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                            ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                    ";
        } else {
            // line 88
            echo "                                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 90
        echo "                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <aside class=\"sidebar\">
                <div class=\"sidebar-container\">
                    <div class=\"sidebar-header\">
                        <div class=\"brand\">
                            <div class=\"logo\">
                                <span class=\"l l1\"></span>
                                <span class=\"l l2\"></span>
                                <span class=\"l l3\"></span>
                                <span class=\"l l4\"></span>
                                <span class=\"l l5\"></span>
                            </div> Pepinier </div>
                    </div>
                    <nav class=\"menu\">
                        <ul class=\"sidebar-menu metismenu\" id=\"sidebar-menu\">

                            <li class=\"active\">
                                <a href=\"index.html\">
                                    <i class=\"fa fa-home\"></i> Dashboard </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-th-large\"></i> Gestion des categories
                                    <i class=\"fa arrow\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-th-large\"></i> Gestion des produits
                                    <i class=\"fa arrow\"></i>
                                </a>
                            </li>





                            <li>
                                <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeQuestionDASHBOARD");
        echo "\">
                                    <i class=\"fa fa-th-large\"></i> Gestion de Forum
                                    <i class=\"fa arrow\"></i>
                                </a>
                            </li>



                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-th-large\"></i> Items Manager
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"items-list.html\"> Items List </a>
                                    </li>
                                    <li>
                                        <a href=\"item-editor.html\"> Item Editor </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-area-chart\"></i> Charts
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"charts-flot.html\"> Flot Charts </a>
                                    </li>
                                    <li>
                                        <a href=\"charts-morris.html\"> Morris Charts </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-table\"></i> Tables
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"static-tables.html\"> Static Tables </a>
                                    </li>
                                    <li>
                                        <a href=\"responsive-tables.html\"> Responsive Tables </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"forms.html\">
                                    <i class=\"fa fa-pencil-square-o\"></i> Forms </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-desktop\"></i> UI Elements
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"buttons.html\"> Buttons </a>
                                    </li>
                                    <li>
                                        <a href=\"cards.html\"> Cards </a>
                                    </li>
                                    <li>
                                        <a href=\"typography.html\"> Typography </a>
                                    </li>
                                    <li>
                                        <a href=\"icons.html\"> Icons </a>
                                    </li>
                                    <li>
                                        <a href=\"grid.html\"> Grid </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-file-text-o\"></i> Pages
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"login.html\"> Login </a>
                                    </li>
                                    <li>
                                        <a href=\"signup.html\"> Sign Up </a>
                                    </li>
                                    <li>
                                        <a href=\"reset.html\"> Reset </a>
                                    </li>
                                    <li>
                                        <a href=\"error-404.html\"> Error 404 App </a>
                                    </li>
                                    <li>
                                        <a href=\"error-404-alt.html\"> Error 404 Global </a>
                                    </li>
                                    <li>
                                        <a href=\"error-500.html\"> Error 500 App </a>
                                    </li>
                                    <li>
                                        <a href=\"error-500-alt.html\"> Error 500 Global </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-sitemap\"></i> Menu Levels
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"#\"> Second Level Item
                                            <i class=\"fa arrow\"></i>
                                        </a>
                                        <ul class=\"sidebar-nav\">
                                            <li>
                                                <a href=\"#\"> Third Level Item </a>
                                            </li>
                                            <li>
                                                <a href=\"#\"> Third Level Item </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\"> Second Level Item </a>
                                    </li>
                                    <li>
                                        <a href=\"#\"> Second Level Item
                                            <i class=\"fa arrow\"></i>
                                        </a>
                                        <ul class=\"sidebar-nav\">
                                            <li>
                                                <a href=\"#\"> Third Level Item </a>
                                            </li>
                                            <li>
                                                <a href=\"#\"> Third Level Item </a>
                                            </li>
                                            <li>
                                                <a href=\"#\"> Third Level Item
                                                    <i class=\"fa arrow\"></i>
                                                </a>
                                                <ul class=\"sidebar-nav\">
                                                    <li>
                                                        <a href=\"#\"> Fourth Level Item </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\"> Fourth Level Item </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"screenful.html\">
                                    <i class=\"fa fa-bar-chart\"></i> Agile Metrics
                                    <span class=\"label label-screenful\">by Screenful</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"https://github.com/modularcode/modular-admin-html\">
                                    <i class=\"fa fa-github-alt\"></i> Theme Docs </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <footer class=\"sidebar-footer\">
                    <ul class=\"sidebar-menu metismenu\" id=\"customize-menu\">
                        <li>
                            <ul>
                                <li class=\"customize\">
                                    <div class=\"customize-item\">
                                        <div class=\"row customize-header\">
                                            <div class=\"col-4\"> </div>
                                            <div class=\"col-4\">
                                                <label class=\"title\">fixed</label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label class=\"title\">static</label>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-4\">
                                                <label class=\"title\">Sidebar:</label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"sidebarPosition\" value=\"sidebar-fixed\">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"sidebarPosition\" value=\"\">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-4\">
                                                <label class=\"title\">Header:</label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"headerPosition\" value=\"header-fixed\">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"headerPosition\" value=\"\">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-4\">
                                                <label class=\"title\">Footer:</label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"footerPosition\" value=\"footer-fixed\">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"footerPosition\" value=\"\">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"customize-item\">
                                        <ul class=\"customize-colors\">
                                            <li>
                                                <span class=\"color-item color-red\" data-theme=\"red\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-orange\" data-theme=\"orange\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-green active\" data-theme=\"\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-seagreen\" data-theme=\"seagreen\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-blue\" data-theme=\"blue\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-purple\" data-theme=\"purple\"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <a href=\"#\">
                                <i class=\"fa fa-cog\"></i> Customize </a>
                        </li>
                    </ul>
                </footer>
            </aside>
            <div class=\"sidebar-overlay\" id=\"sidebar-overlay\"></div>
            <div class=\"sidebar-mobile-menu-handle\" id=\"sidebar-mobile-menu-handle\"></div>
            <div class=\"mobile-menu-handle\"></div>


        ";
        // line 404
        $this->displayBlock('body', $context, $blocks);
        // line 405
        echo "        </div>
    </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 404
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@backoffice/basedashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 404,  521 => 405,  519 => 404,  245 => 133,  200 => 90,  192 => 88,  186 => 85,  182 => 84,  177 => 83,  175 => 82,  166 => 76,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<html>

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Place favicon.ico in the root directory -->
        <link href={{  app.request.scheme ~ '://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css'  }} rel=\"stylesheet\" id=\"bootstrap-css\">
        <link href={{ app.request.schemeAndHttpHost ~ asset('css/tableauquestion.css') }} rel=\"stylesheet\" >
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/bootstrap.min.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/classy-nav.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/owl.carousel.min.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/animate.css')  }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/magnific-popup.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/font-awesome.min.css')  }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/elegant-icon.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/style.css')}}>



        <link rel=\"stylesheet\" href={{ asset('css/vendor.css') }}>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/core-img/icon.png') }}\" />
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/bootstrap.min.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/classy-nav.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/owl.carousel.min.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/animate.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/magnific-popup.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/font-awesome.min.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/elegant-icon.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/style.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/app.css') }}>

        <!-- Theme initialization -->

    </head>
    <body>

    <div class=\"main-wrapper\">
        <div class=\"app\" id=\"app\">
            <header class=\"header\">
                <div class=\"header-block header-block-collapse d-lg-none d-xl-none\">
                    <button class=\"collapse-btn\" id=\"sidebar-collapse-btn\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                </div>
                <div class=\"header-block header-block-search\">
                    <form role=\"search\">
                        <div class=\"input-container\">
                            <i class=\"fa fa-search\"></i>
                            <input type=\"search\" placeholder=\"Search\">
                            <div class=\"underline\"></div>
                        </div>
                    </form>
                </div>
                <div class=\"header-block header-block-buttons\">

                        <i class=\"fa fa-github-alt\"></i>
                        <span>View on GitHub</span>
                    </a>
                    <a href=\"https://github.com/modularcode/modular-admin-html/stargazers\" class=\"btn btn-sm header-btn\">
                        <i class=\"fa fa-star\"></i>
                        <span>Star Us</span>
                    </a>
                    <a href=\"https://github.com/modularcode/modular-admin-html/releases\" class=\"btn btn-sm header-btn\">
                        <i class=\"fa fa-cloud-download\"></i>
                        <span>Download .zip</span>
                    </a>
                </div>
                <div class=\"header-block header-block-nav\">
                    <ul class=\"nav-profile\">
                        <li >
                            <a href=\"{{ path('homepage') }}\"> Sortir De Dashboard </a>

                        </li>
                        <li class=\"profile dropdown\">
                            <div class=\"login\">
                                <div >
                                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                        <a href=\"{{ path('fos_user_security_logout') }}\">
                                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                        </a>
                                    {% else %}
                                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                                    {% endif %}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <aside class=\"sidebar\">
                <div class=\"sidebar-container\">
                    <div class=\"sidebar-header\">
                        <div class=\"brand\">
                            <div class=\"logo\">
                                <span class=\"l l1\"></span>
                                <span class=\"l l2\"></span>
                                <span class=\"l l3\"></span>
                                <span class=\"l l4\"></span>
                                <span class=\"l l5\"></span>
                            </div> Pepinier </div>
                    </div>
                    <nav class=\"menu\">
                        <ul class=\"sidebar-menu metismenu\" id=\"sidebar-menu\">

                            <li class=\"active\">
                                <a href=\"index.html\">
                                    <i class=\"fa fa-home\"></i> Dashboard </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-th-large\"></i> Gestion des categories
                                    <i class=\"fa arrow\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-th-large\"></i> Gestion des produits
                                    <i class=\"fa arrow\"></i>
                                </a>
                            </li>





                            <li>
                                <a href=\"{{ path('listeQuestionDASHBOARD')}}\">
                                    <i class=\"fa fa-th-large\"></i> Gestion de Forum
                                    <i class=\"fa arrow\"></i>
                                </a>
                            </li>



                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-th-large\"></i> Items Manager
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"items-list.html\"> Items List </a>
                                    </li>
                                    <li>
                                        <a href=\"item-editor.html\"> Item Editor </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-area-chart\"></i> Charts
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"charts-flot.html\"> Flot Charts </a>
                                    </li>
                                    <li>
                                        <a href=\"charts-morris.html\"> Morris Charts </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-table\"></i> Tables
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"static-tables.html\"> Static Tables </a>
                                    </li>
                                    <li>
                                        <a href=\"responsive-tables.html\"> Responsive Tables </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"forms.html\">
                                    <i class=\"fa fa-pencil-square-o\"></i> Forms </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-desktop\"></i> UI Elements
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"buttons.html\"> Buttons </a>
                                    </li>
                                    <li>
                                        <a href=\"cards.html\"> Cards </a>
                                    </li>
                                    <li>
                                        <a href=\"typography.html\"> Typography </a>
                                    </li>
                                    <li>
                                        <a href=\"icons.html\"> Icons </a>
                                    </li>
                                    <li>
                                        <a href=\"grid.html\"> Grid </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-file-text-o\"></i> Pages
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"login.html\"> Login </a>
                                    </li>
                                    <li>
                                        <a href=\"signup.html\"> Sign Up </a>
                                    </li>
                                    <li>
                                        <a href=\"reset.html\"> Reset </a>
                                    </li>
                                    <li>
                                        <a href=\"error-404.html\"> Error 404 App </a>
                                    </li>
                                    <li>
                                        <a href=\"error-404-alt.html\"> Error 404 Global </a>
                                    </li>
                                    <li>
                                        <a href=\"error-500.html\"> Error 500 App </a>
                                    </li>
                                    <li>
                                        <a href=\"error-500-alt.html\"> Error 500 Global </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-sitemap\"></i> Menu Levels
                                    <i class=\"fa arrow\"></i>
                                </a>
                                <ul class=\"sidebar-nav\">
                                    <li>
                                        <a href=\"#\"> Second Level Item
                                            <i class=\"fa arrow\"></i>
                                        </a>
                                        <ul class=\"sidebar-nav\">
                                            <li>
                                                <a href=\"#\"> Third Level Item </a>
                                            </li>
                                            <li>
                                                <a href=\"#\"> Third Level Item </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\"> Second Level Item </a>
                                    </li>
                                    <li>
                                        <a href=\"#\"> Second Level Item
                                            <i class=\"fa arrow\"></i>
                                        </a>
                                        <ul class=\"sidebar-nav\">
                                            <li>
                                                <a href=\"#\"> Third Level Item </a>
                                            </li>
                                            <li>
                                                <a href=\"#\"> Third Level Item </a>
                                            </li>
                                            <li>
                                                <a href=\"#\"> Third Level Item
                                                    <i class=\"fa arrow\"></i>
                                                </a>
                                                <ul class=\"sidebar-nav\">
                                                    <li>
                                                        <a href=\"#\"> Fourth Level Item </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\"> Fourth Level Item </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"screenful.html\">
                                    <i class=\"fa fa-bar-chart\"></i> Agile Metrics
                                    <span class=\"label label-screenful\">by Screenful</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"https://github.com/modularcode/modular-admin-html\">
                                    <i class=\"fa fa-github-alt\"></i> Theme Docs </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <footer class=\"sidebar-footer\">
                    <ul class=\"sidebar-menu metismenu\" id=\"customize-menu\">
                        <li>
                            <ul>
                                <li class=\"customize\">
                                    <div class=\"customize-item\">
                                        <div class=\"row customize-header\">
                                            <div class=\"col-4\"> </div>
                                            <div class=\"col-4\">
                                                <label class=\"title\">fixed</label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label class=\"title\">static</label>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-4\">
                                                <label class=\"title\">Sidebar:</label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"sidebarPosition\" value=\"sidebar-fixed\">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"sidebarPosition\" value=\"\">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-4\">
                                                <label class=\"title\">Header:</label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"headerPosition\" value=\"header-fixed\">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"headerPosition\" value=\"\">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-4\">
                                                <label class=\"title\">Footer:</label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"footerPosition\" value=\"footer-fixed\">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class=\"col-4\">
                                                <label>
                                                    <input class=\"radio\" type=\"radio\" name=\"footerPosition\" value=\"\">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"customize-item\">
                                        <ul class=\"customize-colors\">
                                            <li>
                                                <span class=\"color-item color-red\" data-theme=\"red\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-orange\" data-theme=\"orange\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-green active\" data-theme=\"\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-seagreen\" data-theme=\"seagreen\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-blue\" data-theme=\"blue\"></span>
                                            </li>
                                            <li>
                                                <span class=\"color-item color-purple\" data-theme=\"purple\"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <a href=\"#\">
                                <i class=\"fa fa-cog\"></i> Customize </a>
                        </li>
                    </ul>
                </footer>
            </aside>
            <div class=\"sidebar-overlay\" id=\"sidebar-overlay\"></div>
            <div class=\"sidebar-mobile-menu-handle\" id=\"sidebar-mobile-menu-handle\"></div>
            <div class=\"mobile-menu-handle\"></div>


        {% block body %}{% endblock %}
        </div>
    </div>
    </body>
</html>", "@backoffice/basedashboard.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\backofficeBundle\\Resources\\views\\basedashboard.html.twig");
    }
}
