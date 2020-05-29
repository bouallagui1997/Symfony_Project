<?php

/* @backoffice/Default/dashboard.html.twig */
class __TwigTemplate_486c05197eec59d49d3218d42af45899a2dd56a1df0fad7c7338b8518ce829d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@backoffice/Default/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@backoffice/Default/dashboard.html.twig"));

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
        <link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor.css"), "html", null, true);
        echo ">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/icon.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/classy-nav.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/elegant-icon.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
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
                    <a href=\"https://github.com/modularcode/modular-admin-html\" class=\"btn btn-sm header-btn\">
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
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> Sortir De Dashboard </a>

                        </li>
                        <li class=\"profile dropdown\">
                            <div class=\"login\">
                                <div >
                                    ";
        // line 68
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 69
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
            echo " |
                                        <a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                            ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                    ";
        } else {
            // line 74
            echo "                                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 76
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
        // line 114
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
            <article class=\"content dashboard-page\">
                <section class=\"section\">
                    <div class=\"row sameheight-container\">
                        <div class=\"col col-12 col-sm-12 col-md-6 col-xl-5 stats-col\">
                            <div class=\"card sameheight-item stats\" data-exclude=\"xs\">
                                <div class=\"card-block\">
                                    <div class=\"title-block\">
                                        <h4 class=\"title\"> Stats </h4>
                                        <p class=\"title-description\"> Website metrics for
                                            <a href=\"http://modularteam.github.io/modularity-free-admin-dashboard-theme-html/\"> wahb </a>
                                        </p>
                                    </div>
                                    <div class=\"row row-sm stats-container\">
                                        <div class=\"col-12 col-sm-6 stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-rocket\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> 5407 </div>
                                                <div class=\"name\"> Active items </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 75%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6 stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> 78464 </div>
                                                <div class=\"name\"> Items sold </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 25%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6  stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-line-chart\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> \$80.560 </div>
                                                <div class=\"name\"> Monthly income </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 60%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6  stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-users\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> 359 </div>
                                                <div class=\"name\"> Total users </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 34%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6  stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-list-alt\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> 59 </div>
                                                <div class=\"name\"> Tickets closed </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 49%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6 stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-dollar\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> \$780.064 </div>
                                                <div class=\"name\"> Total income </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 15%;\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col col-12 col-sm-12 col-md-6 col-xl-7 history-col\">
                            <div class=\"card sameheight-item\" data-exclude=\"xs\" id=\"dashboard-history\">
                                <div class=\"card-header card-header-sm bordered\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\">History</h3>
                                    </div>
                                    <ul class=\"nav nav-tabs pull-right\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"#visits\" role=\"tab\" data-toggle=\"tab\">Visits</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#downloads\" role=\"tab\" data-toggle=\"tab\">Downloads</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"card-block\">
                                    <div class=\"tab-content\">
                                        <div role=\"tabpanel\" class=\"tab-pane active fade show\" id=\"visits\">
                                            <p class=\"title-description\"> Number of unique visits last 30 days </p>
                                            <div id=\"dashboard-visits-chart\"></div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"downloads\">
                                            <p class=\"title-description\"> Number of downloads last 30 days </p>
                                            <div id=\"dashboard-downloads-chart\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"section\">
                    <div class=\"row sameheight-container\">
                        <div class=\"col-xl-8\">
                            <div class=\"card sameheight-item items\" data-exclude=\"xs,sm,lg\">
                                <div class=\"card-header bordered\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\"> Items </h3>
                                        <a href=\"item-editor.html\" class=\"btn btn-primary btn-sm\"> Add new </a>
                                    </div>
                                    <div class=\"header-block pull-right\">
                                        <label class=\"search\">
                                            <input class=\"search-input\" placeholder=\"search...\">
                                            <i class=\"fa fa-search search-icon\"></i>
                                        </label>
                                        <div class=\"pagination\">
                                            <a href=\"#\" class=\"btn btn-primary btn-sm\">
                                                <i class=\"fa fa-angle-up\"></i>
                                            </a>
                                            <a href=\"#\" class=\"btn btn-primary btn-sm\">
                                                <i class=\"fa fa-angle-down\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class=\"item-list striped\">
                                    <li class=\"item item-list-header\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col item-col-header fixed item-col-img xs\"></div>
                                            <div class=\"item-col item-col-header item-col-title\">
                                                <div>
                                                    <span>Name</span>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-header item-col-sales\">
                                                <div>
                                                    <span>Sales</span>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-header item-col-stats\">
                                                <div class=\"no-overflow\">
                                                    <span>Stats</span>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-header item-col-date\">
                                                <div>
                                                    <span>Published</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url(";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("faces/twitter/brad_frost/128.jpg"), "html", null, true);
        echo "\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> 12 Myths Uncovered About IT &amp; Software </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 4958 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url(";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("faces/twitter/_everaldo/128.jpg"), "html", null, true);
        echo ")\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> 50% of things doesn&#x27;t really belongs to you </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 192 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url(";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("faces/twitter/eduardo_olv/128.jpg"), "html", null, true);
        echo ")\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> Vestibulum tincidunt amet laoreet mauris sit sem aliquam cras maecenas vel aliquam. </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 2143 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url(";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("faces/twitter/why_this/128.jpg)"), "html", null, true);
        echo "\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> 10 tips of Object Oriented Design </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 124 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url(";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("faces/twitter/w7download/128.jpg"), "html", null, true);
        echo ")\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> Sometimes friend tells it is cold </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 10214 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url(";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("faces/twitter/pankogut/128.jpg"), "html", null, true);
        echo ")\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> New ways of conceptual thinking </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 3217 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-xl-4\">
                            <div class=\"card sameheight-item sales-breakdown\" data-exclude=\"xs,sm,lg\">
                                <div class=\"card-header\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\"> Sales breakdown </h3>
                                    </div>
                                </div>
                                <div class=\"card-block\">
                                    <div class=\"dashboard-sales-breakdown-chart\" id=\"dashboard-sales-breakdown-chart\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"section map-tasks\">
                    <div class=\"row sameheight-container\">
                        <div class=\"col-md-8\">
                            <div class=\"card sameheight-item\" data-exclude=\"xs,sm\">
                                <div class=\"card-header\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\"> Sales by countries </h3>
                                    </div>
                                </div>
                                <div class=\"card-block\">
                                    <div id=\"dashboard-sales-map\" style=\"width: 100%; height: 400px;\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card tasks sameheight-item\" data-exclude=\"xs,sm\">
                                <div class=\"card-header bordered\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\"> Tasks </h3>
                                    </div>
                                    <div class=\"header-block pull-right\">
                                        <a href=\"#\" class=\"btn btn-primary btn-sm rounded pull-right\"> Add new </a>
                                    </div>
                                </div>
                                <div class=\"card-block\">
                                    <div class=\"tasks-block\">
                                        <ul class=\"item-list\">
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Meeting with embassador</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Confession</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Time to start building an ark</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Beer time with dudes</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Meeting new girls</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Remember damned home address</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Get home before you got sleep</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Meeting with embassador</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Confession</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Time to start building an ark</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Beer time with dudes</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Meeting new girls</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Remember damned home address</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <footer class=\"footer\">
                <div class=\"footer-block buttons\">
                    <iframe class=\"footer-github-btn\" src=\"https://ghbtns.com/github-btn.html?user=modularcode&amp;repo=modular-admin-html&amp;type=star&amp;count=true\" frameborder=\"0\" scrolling=\"0\" width=\"140px\" height=\"20px\"></iframe>
                </div>
                <div class=\"footer-block author\">
                    <ul>
                        <li> created by
                            <a href=\"https://github.com/modularcode\">ModularCode</a>
                        </li>
                        <li>
                            <a href=\"https://github.com/modularcode/modular-admin-html#get-in-touch\">get in touch</a>
                        </li>
                    </ul>
                </div>
            </footer>
            <div class=\"modal fade\" id=\"modal-media\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">Media Library</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                <span class=\"sr-only\">Close</span>
                            </button>
                        </div>
                        <div class=\"modal-body modal-tab-container\">
                            <ul class=\"nav nav-tabs modal-tabs\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#gallery\" data-toggle=\"tab\" role=\"tab\">Gallery</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"#upload\" data-toggle=\"tab\" role=\"tab\">Upload</a>
                                </li>
                            </ul>
                            <div class=\"tab-content modal-tab-content\">
                                <div class=\"tab-pane fade\" id=\"gallery\" role=\"tabpanel\">
                                    <div class=\"images-container\">
                                        <div class=\"row\"> </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade active in\" id=\"upload\" role=\"tabpanel\">
                                    <div class=\"upload-container\">
                                        <div id=\"dropzone\">
                                            <form action=\"https://modularcode.io/\" method=\"POST\" enctype=\"multipart/form-data\" class=\"dropzone needsclick dz-clickable\" id=\"demo-upload\">
                                                <div class=\"dz-message-block\">
                                                    <div class=\"dz-message needsclick\"> Drop files here or click to upload. </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                            <button type=\"button\" class=\"btn btn-primary\">Insert Selected</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class=\"modal fade\" id=\"confirm-modal\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">
                                <i class=\"fa fa-warning\"></i> Alert</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>Are you sure want to do this?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Yes</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div>
    <!-- Reference block for JS -->
    <div class=\"ref\" id=\"ref\">
        <div class=\"color-primary\"></div>
        <div class=\"chart\">
            <div class=\"color-primary\"></div>
            <div class=\"color-secondary\"></div>
        </div>
    </div>


        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>
        <script src=";
        // line 1430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 1431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 1432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 1433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/popper.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 1434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 1435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/plugins.js"), "html", null, true);
        echo "></script>
    <script src=\"";
        // line 1436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@backoffice/Default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1556 => 1436,  1552 => 1435,  1548 => 1434,  1544 => 1433,  1540 => 1432,  1536 => 1431,  1532 => 1430,  803 => 704,  770 => 674,  737 => 644,  704 => 614,  671 => 584,  638 => 554,  195 => 114,  155 => 76,  147 => 74,  141 => 71,  137 => 70,  132 => 69,  130 => 68,  121 => 62,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  25 => 1,);
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
        <link rel=\"stylesheet\" href={{ asset('css/vendor.css') }}>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/core-img/icon.png') }}\" />
        <link rel=\"stylesheet\" href={{ asset('css/bootstrap.min.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/classy-nav.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/owl.carousel.min.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/animate.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/magnific-popup.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/font-awesome.min.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/elegant-icon.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/style.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/app.css') }}>

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
                    <a href=\"https://github.com/modularcode/modular-admin-html\" class=\"btn btn-sm header-btn\">
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
            <article class=\"content dashboard-page\">
                <section class=\"section\">
                    <div class=\"row sameheight-container\">
                        <div class=\"col col-12 col-sm-12 col-md-6 col-xl-5 stats-col\">
                            <div class=\"card sameheight-item stats\" data-exclude=\"xs\">
                                <div class=\"card-block\">
                                    <div class=\"title-block\">
                                        <h4 class=\"title\"> Stats </h4>
                                        <p class=\"title-description\"> Website metrics for
                                            <a href=\"http://modularteam.github.io/modularity-free-admin-dashboard-theme-html/\"> wahb </a>
                                        </p>
                                    </div>
                                    <div class=\"row row-sm stats-container\">
                                        <div class=\"col-12 col-sm-6 stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-rocket\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> 5407 </div>
                                                <div class=\"name\"> Active items </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 75%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6 stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> 78464 </div>
                                                <div class=\"name\"> Items sold </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 25%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6  stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-line-chart\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> \$80.560 </div>
                                                <div class=\"name\"> Monthly income </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 60%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6  stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-users\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> 359 </div>
                                                <div class=\"name\"> Total users </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 34%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6  stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-list-alt\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> 59 </div>
                                                <div class=\"name\"> Tickets closed </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 49%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-6 stat-col\">
                                            <div class=\"stat-icon\">
                                                <i class=\"fa fa-dollar\"></i>
                                            </div>
                                            <div class=\"stat\">
                                                <div class=\"value\"> \$780.064 </div>
                                                <div class=\"name\"> Total income </div>
                                            </div>
                                            <div class=\"progress stat-progress\">
                                                <div class=\"progress-bar\" style=\"width: 15%;\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col col-12 col-sm-12 col-md-6 col-xl-7 history-col\">
                            <div class=\"card sameheight-item\" data-exclude=\"xs\" id=\"dashboard-history\">
                                <div class=\"card-header card-header-sm bordered\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\">History</h3>
                                    </div>
                                    <ul class=\"nav nav-tabs pull-right\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"#visits\" role=\"tab\" data-toggle=\"tab\">Visits</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#downloads\" role=\"tab\" data-toggle=\"tab\">Downloads</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"card-block\">
                                    <div class=\"tab-content\">
                                        <div role=\"tabpanel\" class=\"tab-pane active fade show\" id=\"visits\">
                                            <p class=\"title-description\"> Number of unique visits last 30 days </p>
                                            <div id=\"dashboard-visits-chart\"></div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"downloads\">
                                            <p class=\"title-description\"> Number of downloads last 30 days </p>
                                            <div id=\"dashboard-downloads-chart\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"section\">
                    <div class=\"row sameheight-container\">
                        <div class=\"col-xl-8\">
                            <div class=\"card sameheight-item items\" data-exclude=\"xs,sm,lg\">
                                <div class=\"card-header bordered\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\"> Items </h3>
                                        <a href=\"item-editor.html\" class=\"btn btn-primary btn-sm\"> Add new </a>
                                    </div>
                                    <div class=\"header-block pull-right\">
                                        <label class=\"search\">
                                            <input class=\"search-input\" placeholder=\"search...\">
                                            <i class=\"fa fa-search search-icon\"></i>
                                        </label>
                                        <div class=\"pagination\">
                                            <a href=\"#\" class=\"btn btn-primary btn-sm\">
                                                <i class=\"fa fa-angle-up\"></i>
                                            </a>
                                            <a href=\"#\" class=\"btn btn-primary btn-sm\">
                                                <i class=\"fa fa-angle-down\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class=\"item-list striped\">
                                    <li class=\"item item-list-header\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col item-col-header fixed item-col-img xs\"></div>
                                            <div class=\"item-col item-col-header item-col-title\">
                                                <div>
                                                    <span>Name</span>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-header item-col-sales\">
                                                <div>
                                                    <span>Sales</span>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-header item-col-stats\">
                                                <div class=\"no-overflow\">
                                                    <span>Stats</span>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-header item-col-date\">
                                                <div>
                                                    <span>Published</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url({{ asset('faces/twitter/brad_frost/128.jpg') }}\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> 12 Myths Uncovered About IT &amp; Software </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 4958 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url({{ asset('faces/twitter/_everaldo/128.jpg') }})\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> 50% of things doesn&#x27;t really belongs to you </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 192 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url({{ asset('faces/twitter/eduardo_olv/128.jpg') }})\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> Vestibulum tincidunt amet laoreet mauris sit sem aliquam cras maecenas vel aliquam. </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 2143 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url({{ asset('faces/twitter/why_this/128.jpg)') }}\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> 10 tips of Object Oriented Design </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 124 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url({{ asset('faces/twitter/w7download/128.jpg') }})\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> Sometimes friend tells it is cold </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 10214 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"item\">
                                        <div class=\"item-row\">
                                            <div class=\"item-col fixed item-col-img xs\">
                                                <a href=\"#\">
                                                    <div class=\"item-img xs rounded\" style=\"background-image: url({{ asset('faces/twitter/pankogut/128.jpg') }})\"></div>
                                                </a>
                                            </div>
                                            <div class=\"item-col item-col-title no-overflow\">
                                                <div>
                                                    <a href=\"#\" class=\"\">
                                                        <h4 class=\"item-title no-wrap\"> New ways of conceptual thinking </h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-sales\">
                                                <div class=\"item-heading\">Sales</div>
                                                <div> 3217 </div>
                                            </div>
                                            <div class=\"item-col item-col-stats\">
                                                <div class=\"item-heading\">Stats</div>
                                                <div class=\"no-overflow\">
                                                    <div class=\"item-stats sparkline\" data-type=\"bar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"item-col item-col-date\">
                                                <div class=\"item-heading\">Published</div>
                                                <div> 21 SEP 10:45 </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-xl-4\">
                            <div class=\"card sameheight-item sales-breakdown\" data-exclude=\"xs,sm,lg\">
                                <div class=\"card-header\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\"> Sales breakdown </h3>
                                    </div>
                                </div>
                                <div class=\"card-block\">
                                    <div class=\"dashboard-sales-breakdown-chart\" id=\"dashboard-sales-breakdown-chart\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"section map-tasks\">
                    <div class=\"row sameheight-container\">
                        <div class=\"col-md-8\">
                            <div class=\"card sameheight-item\" data-exclude=\"xs,sm\">
                                <div class=\"card-header\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\"> Sales by countries </h3>
                                    </div>
                                </div>
                                <div class=\"card-block\">
                                    <div id=\"dashboard-sales-map\" style=\"width: 100%; height: 400px;\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card tasks sameheight-item\" data-exclude=\"xs,sm\">
                                <div class=\"card-header bordered\">
                                    <div class=\"header-block\">
                                        <h3 class=\"title\"> Tasks </h3>
                                    </div>
                                    <div class=\"header-block pull-right\">
                                        <a href=\"#\" class=\"btn btn-primary btn-sm rounded pull-right\"> Add new </a>
                                    </div>
                                </div>
                                <div class=\"card-block\">
                                    <div class=\"tasks-block\">
                                        <ul class=\"item-list\">
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Meeting with embassador</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Confession</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Time to start building an ark</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Beer time with dudes</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Meeting new girls</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Remember damned home address</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Get home before you got sleep</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Meeting with embassador</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Confession</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Time to start building an ark</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Beer time with dudes</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\" checked=\"checked\">
                                                            <span>Meeting new girls</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"item\">
                                                <div class=\"item-row\">
                                                    <div class=\"item-col item-col-title\">
                                                        <label>
                                                            <input class=\"checkbox\" type=\"checkbox\">
                                                            <span>Remember damned home address</span>
                                                        </label>
                                                    </div>
                                                    <div class=\"item-col fixed item-col-actions-dropdown\">
                                                        <div class=\"item-actions-dropdown\">
                                                            <a class=\"item-actions-toggle-btn\">
                                                                    <span class=\"inactive\">
                                                                        <i class=\"fa fa-cog\"></i>
                                                                    </span>
                                                                <span class=\"active\">
                                                                        <i class=\"fa fa-chevron-circle-right\"></i>
                                                                    </span>
                                                            </a>
                                                            <div class=\"item-actions-block\">
                                                                <ul class=\"item-actions-list\">
                                                                    <li>
                                                                        <a class=\"remove\" href=\"#\" data-toggle=\"modal\" data-target=\"#confirm-modal\">
                                                                            <i class=\"fa fa-trash-o \"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"check\" href=\"#\">
                                                                            <i class=\"fa fa-check\"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class=\"edit\" href=\"item-editor.html\">
                                                                            <i class=\"fa fa-pencil\"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <footer class=\"footer\">
                <div class=\"footer-block buttons\">
                    <iframe class=\"footer-github-btn\" src=\"https://ghbtns.com/github-btn.html?user=modularcode&amp;repo=modular-admin-html&amp;type=star&amp;count=true\" frameborder=\"0\" scrolling=\"0\" width=\"140px\" height=\"20px\"></iframe>
                </div>
                <div class=\"footer-block author\">
                    <ul>
                        <li> created by
                            <a href=\"https://github.com/modularcode\">ModularCode</a>
                        </li>
                        <li>
                            <a href=\"https://github.com/modularcode/modular-admin-html#get-in-touch\">get in touch</a>
                        </li>
                    </ul>
                </div>
            </footer>
            <div class=\"modal fade\" id=\"modal-media\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">Media Library</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                <span class=\"sr-only\">Close</span>
                            </button>
                        </div>
                        <div class=\"modal-body modal-tab-container\">
                            <ul class=\"nav nav-tabs modal-tabs\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#gallery\" data-toggle=\"tab\" role=\"tab\">Gallery</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"#upload\" data-toggle=\"tab\" role=\"tab\">Upload</a>
                                </li>
                            </ul>
                            <div class=\"tab-content modal-tab-content\">
                                <div class=\"tab-pane fade\" id=\"gallery\" role=\"tabpanel\">
                                    <div class=\"images-container\">
                                        <div class=\"row\"> </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade active in\" id=\"upload\" role=\"tabpanel\">
                                    <div class=\"upload-container\">
                                        <div id=\"dropzone\">
                                            <form action=\"https://modularcode.io/\" method=\"POST\" enctype=\"multipart/form-data\" class=\"dropzone needsclick dz-clickable\" id=\"demo-upload\">
                                                <div class=\"dz-message-block\">
                                                    <div class=\"dz-message needsclick\"> Drop files here or click to upload. </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                            <button type=\"button\" class=\"btn btn-primary\">Insert Selected</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class=\"modal fade\" id=\"confirm-modal\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">
                                <i class=\"fa fa-warning\"></i> Alert</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>Are you sure want to do this?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Yes</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">No</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div>
    <!-- Reference block for JS -->
    <div class=\"ref\" id=\"ref\">
        <div class=\"color-primary\"></div>
        <div class=\"chart\">
            <div class=\"color-primary\"></div>
            <div class=\"color-secondary\"></div>
        </div>
    </div>


        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>
        <script src={{ asset('js/vendor.js') }}></script>
        <script src={{ asset('js/app.js') }}></script>
    <script src={{ asset('js/jquery/jquery-2.2.4.min.js') }}></script>
    <script src={{ asset('js/bootstrap/popper.min.js') }}></script>
    <script src={{ asset('js/bootstrap/bootstrap.min.js') }}></script>
    <script src={{ asset('js/plugins/plugins.js') }}></script>
    <script src=\"{{ asset('js/active.js') }}\"></script>
    </body>
</html>", "@backoffice/Default/dashboard.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\backofficeBundle\\Resources\\views\\Default\\dashboard.html.twig");
    }
}
