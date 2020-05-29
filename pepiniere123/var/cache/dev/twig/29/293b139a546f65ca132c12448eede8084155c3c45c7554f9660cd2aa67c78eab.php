<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_24dfa61158e1300a7b006b60b90076f8a38be87d6e6b15127b8901cd521b6d01 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<div class=\"breadcrumb-area\">
    <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\" style=\"background-image: url(";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/24.jpg"), "html", null, true);
        echo ");\">


    </div>

</div>
<section class=\"form-login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"offset-2 col-md-8\">



                ";
        // line 17
        echo "
                ";
        // line 18
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 19
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 21
        echo "
                <div class=\"login_sec\">
                    <div class=\"container\">
                        <br><br>
                        <h2>Login</h2>
                        <div class=\"col-md-6 log\">
                            <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                ";
        // line 28
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 29
            echo "                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                                ";
        }
        // line 31
        echo "
                                <label for=\"username\"> Nom d'utilisateur </label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                                <br>
                                <label for=\"password\">Mot de passe </label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                                <br>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\"> se souvenir de moi </label>
                                <br>
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\"  />
                                <a class=\"acount-btn\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Créer un compte</a>

                                <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu?</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 44,  91 => 42,  79 => 33,  75 => 31,  69 => 29,  67 => 28,  63 => 27,  55 => 21,  49 => 19,  47 => 18,  44 => 17,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"breadcrumb-area\">
    <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\" style=\"background-image: url({{ asset('img/bg-img/24.jpg') }});\">


    </div>

</div>
<section class=\"form-login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"offset-2 col-md-8\">



                {% trans_default_domain 'FOSUserBundle' %}

                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <div class=\"login_sec\">
                    <div class=\"container\">
                        <br><br>
                        <h2>Login</h2>
                        <div class=\"col-md-6 log\">
                            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                {% if csrf_token %}
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                {% endif %}

                                <label for=\"username\"> Nom d'utilisateur </label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                                <br>
                                <label for=\"password\">Mot de passe </label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                                <br>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\"> se souvenir de moi </label>
                                <br>
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\"  />
                                <a class=\"acount-btn\" href=\"{{ path ('fos_user_registration_register') }}\">Créer un compte</a>

                                <a href=\"{{ path ('fos_user_resetting_request') }}\">Mot de passe perdu?</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
