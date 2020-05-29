<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_5cae88784cbed972f9632348dd2eb88e76064f20e74082673f9ba4206c006967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'fos_message_content' => [$this, 'block_fos_message_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/core-img/icon.png"), "html", null, true);
        echo "/>

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    </head>

    <body>

    <header class=\"header-area\">

        <!-- ***** Top Header Area ***** -->
        <div class=\"top-header-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"top-header-content d-flex align-items-center justify-content-between\">
                            <!-- Top Header Content -->


                            <!-- Top Header Content -->
                            <div class=\"top-header-meta d-flex\">
                                <!-- Language Dropdown -->
                                <div class=\"language-dropdown\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-secondary dropdown-toggle mr-30\" type=\"button\"
                                                id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                                aria-expanded=\"false\">langue
                                        </button>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                            <a class=\"dropdown-item\" href=\"#\">USA</a>
                                            <a class=\"dropdown-item\" href=\"#\">FR</a>

                                        </div>
                                    </div>
                                </div>
                                <!-- Login -->
                                <div class=\"login\">
                                    <div>
                                        ";
        // line 59
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
            echo " |
                                            <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 65
            echo "                                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                                        ";
        }
        // line 67
        echo "                                    </div>
                                </div>
                                <!-- Cart -->
                                <div class=\"cart\">
                                    <a href=\"#\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> <span>Panier <span
                                                    class=\"cart-quantity\">(0)</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class=\"alazea-main-menu\">
            <div class=\"classy-nav-container breakpoint-off\">
                <div class=\"container\">
                    <!-- Menu -->
                    <nav class=\"classy-navbar justify-content-between\" id=\"alazeaNav\">

                        <!-- Nav Brand -->
                        <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-brand\"><img
                                    src=";
        // line 90
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/logo1.png")), "html", null, true);
        echo " alt=\"\"></a>

                        <!-- Navbar Toggler -->
                        <div class=\"classy-navbar-toggler\">
                            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class=\"classy-menu\">

                            <!-- Close Button -->
                            <div class=\"classycloseIcon\">
                                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class=\"classynav\">
                                <ul>
                                    ";
        // line 108
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 109
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_homepage");
            echo "\">Dashboard</a></li>
                                    ";
        }
        // line 111
        echo "                                    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                                    <li><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite");
        echo "\">Publicité</a></li>
                                    <li><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">Boutique</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">Shop</a></li>
                                            <li><a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">Panier</a></li>

                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event");
        echo "\">Evenement</a></li>
                                    <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation");
        echo "\">Reclamation</a></li>

                                    <li><a href=\"#\">Forum</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeQuestion");
        echo "\">Accueil Forum</a></li>
                                            <li><a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutQuestion");
        echo "\">Ajouter une Question</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\">Messagerie</a></li>

                                </ul>

                                <!-- Search Icon -->


                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class=\"search-form\">
                        <form action=\"#\" method=\"get\">
                            <input type=\"search\" name=\"search\" id=\"search\" placeholder=\"Type keywords &amp; press enter...\">
                            <button type=\"submit\" class=\"d-none\"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class=\"closeIcon\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"breadcrumb-area\">
        <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\" style=\"background-image: url(";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/24.jpg"), "html", null, true);
        echo ");\">
            <h2> </h2>

        </div>
    </div>









    ";
        // line 170
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 171
        echo "

    <footer class=\"footer-area bg-img\" style=\"background-image: url(";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/3.jpg"), "html", null, true);
        echo ");\">
        <!-- Main Footer Area -->
        <div class=\"main-footer-area\">
            <div class=\"container\">
                <div class=\"row\">

                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-logo mb-30\">
                                <a href=\"#\"><img src= ";
        // line 183
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/logo.png")), "html", null, true);
        echo "  alt=\"\"></a>
                            </div>
                            <p>Pepiniere est le spécialiste de la vente en ligne en Tunisie. Nous disposons du plus grand
                                choix et des meilleurs prix en Tunisie</p>
                            <div class=\"social-info\">
                                <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <div class=\"single-footer-widget\">
                            <div class=\"widget-title\">
                                <h5>LIEN RAPIDE</h5>
                            </div>
                            <nav class=\"widget-nav\">
                                <ul>
                                    <li><a href=\"#\">Forum</a></li>
                                    <li></li>
                                    <li><a href=\"#\">Annonces</a></li>
                                    <li></li>
                                    <li><a href=\"#\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <div class=\"single-footer-widget\">
                            <div class=\"widget-title\">
                                <h5>Meilleures ventes</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class=\"single-best-seller-product d-flex align-items-center\">
                                <div class=\"product-thumbnail\">
                                    <a href=\"shop-details.html\"><img src=";
        // line 222
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/4.jpg")), "html", null, true);
        echo "  alt=\"\"></a>
                                </div>
                                <div class=\"product-info\">
                                    <a href=\"shop-details.html\">Cactus Flower</a>
                                    <p>\$10.99</p>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class=\"single-best-seller-product d-flex align-items-center\">
                                <div class=\"product-thumbnail\">
                                    <a href=\"shop-details.html\"><img src=";
        // line 233
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/5.jpg")), "html", null, true);
        echo " alt=\"\"></a>
                                </div>
                                <div class=\"product-info\">
                                    <a href=\"shop-details.html\">Tulip Flower</a>
                                    <p>\$11.99</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <div class=\"single-footer-widget\">
                            <div class=\"widget-title\">
                                <h5>CONTACT</h5>
                            </div>

                            <div class=\"contact-information\">
                                <p><span>Adresse:</span>Z.I. Chotrana II B.P. 160
                                    Pôle Technologique El Ghazela - Ariana 2083</p>
                                <p><span>TelePhone:</span>70 685 685</p>
                                <p><span>Email:</span>blaq@esprit.tn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class=\"footer-bottom-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"border-line\"></div>
                    </div>

                    <!-- Footer Nav -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"footer-nav\">
                            <nav>
                                <ul>
                                    <li><a href=\"#\">Acceuil</a></li>
                                    <li><a href=\"#\">A propos</a></li>
                                    <li><a href=\"#\">Service</a></li>
                                    <li><a href=\"#\">Blog</a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    ";
        // line 293
        $this->displayBlock('javascripts', $context, $blocks);
        // line 309
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pepiniere</title>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
            <link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo ">
            <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">


            <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/classy-nav.css")), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css")), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css")), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css")), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css")), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/elegant-icon.css")), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 23
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css")), "html", null, true);
        echo ">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_fos_message_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 293
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 294
        echo "

        <script src=";
        // line 296
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery/jquery-2.2.4.min.js")), "html", null, true);
        echo "></script>
        <script src=";
        // line 297
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/popper.min.js")), "html", null, true);
        echo "></script>
        <script src=";
        // line 298
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js")), "html", null, true);
        echo "></script>
        <script src=";
        // line 299
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/plugins.js")), "html", null, true);
        echo "></script>
        <script src=";
        // line 300
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js")), "html", null, true);
        echo "></script>

        <script href=";
        // line 302
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script href=";
        // line 303
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://code.jquery.com/jquery-1.11.1.min.js"), "html", null, true);
        echo "></script>
        <script language=\"JavaScript\">
            \$('button').attr('class', 'btn btn-success');
        </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 303,  540 => 302,  535 => 300,  531 => 299,  527 => 298,  523 => 297,  519 => 296,  515 => 294,  506 => 293,  489 => 170,  477 => 23,  473 => 22,  469 => 21,  465 => 20,  461 => 19,  457 => 18,  453 => 17,  446 => 13,  443 => 12,  434 => 11,  414 => 5,  401 => 309,  399 => 293,  336 => 233,  322 => 222,  280 => 183,  267 => 173,  263 => 171,  261 => 170,  244 => 156,  214 => 129,  208 => 126,  204 => 125,  197 => 121,  193 => 120,  186 => 116,  182 => 115,  177 => 113,  173 => 112,  168 => 111,  162 => 109,  160 => 108,  139 => 90,  135 => 89,  111 => 67,  103 => 65,  97 => 62,  93 => 61,  88 => 60,  86 => 59,  50 => 25,  48 => 11,  43 => 9,  40 => 8,  38 => 5,  34 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset={{ _charset }}\" />
        <title>{% block title %}Pepiniere</title>

        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href={{asset('/img/core-img/icon.png') }}/>

        {% block stylesheets %}

            <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/bootstrap.min.css') }}>
            <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">


            <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/classy-nav.css') }}>
            <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/owl.carousel.min.css') }}>
            <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/animate.css')  }}>
            <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/magnific-popup.css') }}>
            <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/font-awesome.min.css')  }}>
            <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/elegant-icon.css') }}>
            <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/style.css')}}>
        {% endblock %}
    </head>

    <body>

    <header class=\"header-area\">

        <!-- ***** Top Header Area ***** -->
        <div class=\"top-header-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"top-header-content d-flex align-items-center justify-content-between\">
                            <!-- Top Header Content -->


                            <!-- Top Header Content -->
                            <div class=\"top-header-meta d-flex\">
                                <!-- Language Dropdown -->
                                <div class=\"language-dropdown\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-secondary dropdown-toggle mr-30\" type=\"button\"
                                                id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                                aria-expanded=\"false\">langue
                                        </button>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                            <a class=\"dropdown-item\" href=\"#\">USA</a>
                                            <a class=\"dropdown-item\" href=\"#\">FR</a>

                                        </div>
                                    </div>
                                </div>
                                <!-- Login -->
                                <div class=\"login\">
                                    <div>
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
                                <!-- Cart -->
                                <div class=\"cart\">
                                    <a href=\"#\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> <span>Panier <span
                                                    class=\"cart-quantity\">(0)</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class=\"alazea-main-menu\">
            <div class=\"classy-nav-container breakpoint-off\">
                <div class=\"container\">
                    <!-- Menu -->
                    <nav class=\"classy-navbar justify-content-between\" id=\"alazeaNav\">

                        <!-- Nav Brand -->
                        <a href=\"{{ path('homepage') }}\" class=\"nav-brand\"><img
                                    src={{ app.request.schemeAndHttpHost ~ asset('img/core-img/logo1.png')}} alt=\"\"></a>

                        <!-- Navbar Toggler -->
                        <div class=\"classy-navbar-toggler\">
                            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class=\"classy-menu\">

                            <!-- Close Button -->
                            <div class=\"classycloseIcon\">
                                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class=\"classynav\">
                                <ul>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li><a href=\"{{ path('backoffice_homepage') }}\">Dashboard</a></li>
                                    {% endif %}
                                    <li><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                                    <li><a href=\"{{ path('publicite') }}\">Publicité</a></li>
                                    <li><a href=\"{{ path('cart') }}\">Boutique</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"{{ path('cart') }}\">Shop</a></li>
                                            <li><a href=\"{{ path('cart') }}\">Panier</a></li>

                                        </ul>
                                    </li>
                                    <li><a href=\"{{ path('event') }}\">Evenement</a></li>
                                    <li><a href=\"{{ path('reclamation') }}\">Reclamation</a></li>

                                    <li><a href=\"#\">Forum</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"{{ path('listeQuestion') }}\">Accueil Forum</a></li>
                                            <li><a href=\"{{ path('ajoutQuestion') }}\">Ajouter une Question</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{ path('fos_message_inbox') }}\">Messagerie</a></li>

                                </ul>

                                <!-- Search Icon -->


                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class=\"search-form\">
                        <form action=\"#\" method=\"get\">
                            <input type=\"search\" name=\"search\" id=\"search\" placeholder=\"Type keywords &amp; press enter...\">
                            <button type=\"submit\" class=\"d-none\"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class=\"closeIcon\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class=\"breadcrumb-area\">
        <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\" style=\"background-image: url({{ asset('img/bg-img/24.jpg') }});\">
            <h2> </h2>

        </div>
    </div>









    {% block fos_message_content %}{% endblock %}


    <footer class=\"footer-area bg-img\" style=\"background-image: url({{ asset('img/bg-img/3.jpg') }});\">
        <!-- Main Footer Area -->
        <div class=\"main-footer-area\">
            <div class=\"container\">
                <div class=\"row\">

                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-logo mb-30\">
                                <a href=\"#\"><img src= {{app.request.schemeAndHttpHost ~ asset('img/core-img/logo.png') }}  alt=\"\"></a>
                            </div>
                            <p>Pepiniere est le spécialiste de la vente en ligne en Tunisie. Nous disposons du plus grand
                                choix et des meilleurs prix en Tunisie</p>
                            <div class=\"social-info\">
                                <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <div class=\"single-footer-widget\">
                            <div class=\"widget-title\">
                                <h5>LIEN RAPIDE</h5>
                            </div>
                            <nav class=\"widget-nav\">
                                <ul>
                                    <li><a href=\"#\">Forum</a></li>
                                    <li></li>
                                    <li><a href=\"#\">Annonces</a></li>
                                    <li></li>
                                    <li><a href=\"#\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <div class=\"single-footer-widget\">
                            <div class=\"widget-title\">
                                <h5>Meilleures ventes</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class=\"single-best-seller-product d-flex align-items-center\">
                                <div class=\"product-thumbnail\">
                                    <a href=\"shop-details.html\"><img src={{ app.request.schemeAndHttpHost ~ asset('img/bg-img/4.jpg') }}  alt=\"\"></a>
                                </div>
                                <div class=\"product-info\">
                                    <a href=\"shop-details.html\">Cactus Flower</a>
                                    <p>\$10.99</p>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class=\"single-best-seller-product d-flex align-items-center\">
                                <div class=\"product-thumbnail\">
                                    <a href=\"shop-details.html\"><img src={{ app.request.schemeAndHttpHost ~ asset('img/bg-img/5.jpg') }} alt=\"\"></a>
                                </div>
                                <div class=\"product-info\">
                                    <a href=\"shop-details.html\">Tulip Flower</a>
                                    <p>\$11.99</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <div class=\"single-footer-widget\">
                            <div class=\"widget-title\">
                                <h5>CONTACT</h5>
                            </div>

                            <div class=\"contact-information\">
                                <p><span>Adresse:</span>Z.I. Chotrana II B.P. 160
                                    Pôle Technologique El Ghazela - Ariana 2083</p>
                                <p><span>TelePhone:</span>70 685 685</p>
                                <p><span>Email:</span>blaq@esprit.tn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class=\"footer-bottom-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"border-line\"></div>
                    </div>

                    <!-- Footer Nav -->
                    <div class=\"col-12 col-md-6\">
                        <div class=\"footer-nav\">
                            <nav>
                                <ul>
                                    <li><a href=\"#\">Acceuil</a></li>
                                    <li><a href=\"#\">A propos</a></li>
                                    <li><a href=\"#\">Service</a></li>
                                    <li><a href=\"#\">Blog</a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    {% block javascripts %}


        <script src={{  app.request.schemeAndHttpHost ~ asset('js/jquery/jquery-2.2.4.min.js') }}></script>
        <script src={{  app.request.schemeAndHttpHost ~ asset('js/bootstrap/popper.min.js') }}></script>
        <script src={{  app.request.schemeAndHttpHost ~ asset('js/bootstrap/bootstrap.min.js') }}></script>
        <script src={{  app.request.schemeAndHttpHost ~ asset('js/plugins/plugins.js') }}></script>
        <script src={{  app.request.schemeAndHttpHost ~ asset('js/active.js') }}></script>

        <script href={{  app.request.scheme ~ '://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js'  }}></script>
        <script href={{  app.request.scheme ~ '://code.jquery.com/jquery-1.11.1.min.js'  }}></script>
        <script language=\"JavaScript\">
            \$('button').attr('class', 'btn btn-success');
        </script>

    {% endblock %}

    </body>
</html>
", "FOSMessageBundle::layout.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\app/Resources/FOSMessageBundle/views/layout.html.twig");
    }
}
