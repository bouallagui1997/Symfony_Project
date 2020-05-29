<?php

/* base.html.twig */
class __TwigTemplate_7615b1be9c9a5fc6f9769bd8a6c990c11648fa222c5b3de1739a5ef6fb2f9e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/core-img/icon.png"), "html", null, true);
        echo "/>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "

</head>
<body>

<!-- Preloader -->
<div class=\"preloader d-flex align-items-center justify-content-center\">
    <div class=\"preloader-circle\"></div>
    <div class=\"preloader-img\">
        <img src=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/leaf.png"), "html", null, true);
        echo " alt=\"\">
    </div>
</div>


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
        // line 67
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 68
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
            echo " |
                                        <a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                    ";
        } else {
            // line 73
            echo "                                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 75
        echo "                                </div>
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
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-brand\"><img
                                src=";
        // line 98
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
        // line 116
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 117
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_homepage");
            echo "\">Dashboard</a></li>
                                ";
        }
        // line 119
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                                <li><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">Boutique</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">Shop</a></li>
                                        <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">Panier</a></li>

                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event");
        echo "\">Evenement</a></li>
                                <li><a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation");
        echo "\">Reclamation</a></li>

                                <li><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeQuestion");
        echo "\">Forum</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeQuestion");
        echo "\">Accueil Forum</a></li>
                                        <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutQuestion");
        echo "\">Ajouter une Question</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\">Messagerie</a></li>

                            </ul>


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

";
        // line 160
        $this->displayBlock('body', $context, $blocks);
        // line 161
        echo "<footer class=\"footer-area bg-img\" style=\"background-image: url(";
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
        // line 171
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
                                <li><a href=\"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeQuestion");
        echo "\">Forum</a></li>
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
        // line 210
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
        // line 221
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


</body>

";
        // line 280
        $this->displayBlock('javascripts', $context, $blocks);
        // line 289
        echo "</html>
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

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
        <link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/classy-nav.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/elegant-icon.css")), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css")), "html", null, true);
        echo ">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/icon.png"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 280
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 281
        echo "
    <script src=";
        // line 282
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery/jquery-2.2.4.min.js")), "html", null, true);
        echo "></script>
    <script src=";
        // line 283
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/popper.min.js")), "html", null, true);
        echo "></script>
    <script src=";
        // line 284
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js")), "html", null, true);
        echo "></script>
    <script src=";
        // line 285
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/plugins.js")), "html", null, true);
        echo "></script>
    <script src=";
        // line 286
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js")), "html", null, true);
        echo "></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 286,  516 => 285,  512 => 284,  508 => 283,  504 => 282,  501 => 281,  492 => 280,  475 => 160,  462 => 20,  458 => 19,  454 => 18,  450 => 17,  446 => 16,  442 => 15,  438 => 14,  434 => 13,  430 => 12,  427 => 11,  418 => 10,  398 => 5,  387 => 289,  385 => 280,  323 => 221,  309 => 210,  286 => 190,  264 => 171,  250 => 161,  248 => 160,  221 => 136,  215 => 133,  211 => 132,  206 => 130,  201 => 128,  197 => 127,  190 => 123,  186 => 122,  181 => 120,  176 => 119,  170 => 117,  168 => 116,  147 => 98,  143 => 97,  119 => 75,  111 => 73,  105 => 70,  101 => 69,  96 => 68,  94 => 67,  56 => 32,  45 => 23,  43 => 10,  37 => 8,  35 => 5,  29 => 1,);
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
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Pepiniere</title>

        {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href={{asset('/img/core-img/icon.png') }}/>

    {% block stylesheets %}

        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/bootstrap.min.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/classy-nav.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/owl.carousel.min.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/animate.css')  }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/magnific-popup.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/font-awesome.min.css')  }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/elegant-icon.css') }}>
        <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/style.css')}}>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/core-img/icon.png') }}\" />

    {% endblock %}


</head>
<body>

<!-- Preloader -->
<div class=\"preloader d-flex align-items-center justify-content-center\">
    <div class=\"preloader-circle\"></div>
    <div class=\"preloader-img\">
        <img src={{ asset('img/core-img/leaf.png') }} alt=\"\">
    </div>
</div>


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
                                <li><a href=\"{{ path('cart') }}\">Boutique</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"{{ path('cart') }}\">Shop</a></li>
                                        <li><a href=\"{{ path('cart') }}\">Panier</a></li>

                                    </ul>
                                </li>
                                <li><a href=\"{{ path('event') }}\">Evenement</a></li>
                                <li><a href=\"{{ path('reclamation') }}\">Reclamation</a></li>

                                <li><a href=\"{{ path('listeQuestion') }}\">Forum</a>
                                    <ul class=\"dropdown\">
                                        <li><a href=\"{{ path('listeQuestion') }}\">Accueil Forum</a></li>
                                        <li><a href=\"{{ path('ajoutQuestion') }}\">Ajouter une Question</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"{{ path('fos_message_inbox') }}\">Messagerie</a></li>

                            </ul>


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

{% block body %}{% endblock %}
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
                                <li><a href=\"{{ path('listeQuestion') }}\">Forum</a></li>
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


</body>

{% block javascripts %}

    <script src={{  app.request.schemeAndHttpHost ~ asset('js/jquery/jquery-2.2.4.min.js') }}></script>
    <script src={{  app.request.schemeAndHttpHost ~ asset('js/bootstrap/popper.min.js') }}></script>
    <script src={{  app.request.schemeAndHttpHost ~ asset('js/bootstrap/bootstrap.min.js') }}></script>
    <script src={{  app.request.schemeAndHttpHost ~ asset('js/plugins/plugins.js') }}></script>
    <script src={{  app.request.schemeAndHttpHost ~ asset('js/active.js') }}></script>

{% endblock %}
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\app\\Resources\\views\\base.html.twig");
    }
}
