<?php

/* @Forum/reponse/listereponse.html.twig */
class __TwigTemplate_ac01ad05db055e6b7c8ee1043ceb4278f6404d0647c08e97ba2431381976b766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Forum/reponse/listereponse.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/reponse/listereponse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/reponse/listereponse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href=";
        // line 6
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" id=\"bootstrap-css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"breadcrumb-area\">
        <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\" style=\"background-image: url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/24.jpg"), "html", null, true);
        echo ");\">


        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"single-blog-post mb-50\">

                <div class=\"col-12\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeQuestion");
        echo "\"><i class=\"fa fa-home\"></i>Accueil de forum</a></li>

                            <li class=\"breadcrumb-item active\" aria-current=\"page\">liste des commentaires</li>

                        </ol>
                        <div class=\"pull-right\"  >
                            ";
        // line 31
        if ((($context["reponse"] ?? $this->getContext($context, "reponse")) != null)) {
            // line 32
            echo "                            <h3 class=\"fa fa-print\" ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichereponsepdf", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "id", [])]), "html", null, true);
            echo "\"> telecharger cette page </a> </h3>
                            ";
        }
        // line 34
        echo "
                        </div>

                    </nav>

                </div>

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> <label style=\"font-size: 30px\">";
        // line 42
        if ((($context["reponse"] ?? $this->getContext($context, "reponse")) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "titreQuestion", []), "html", null, true);
            echo " </label></div><br/><br/>
                    <div class=\"panel-body\">
                        <label style=\"font-size: 15px; margin-left:30px; \"><p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "descriptionQuestion", []), "html", null, true);
            echo "</p></label> <br>

                        <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "dateQuestion", [])), "html", null, true);
            echo " </label>
                        <br/>
                        <br/><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutReponse", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "id", [])]), "html", null, true);
            echo "\">    <button type=\"button\" class=\"btn btn-success\">commenter</button>   </a>
                        ";
        }
        // line 50
        echo "
                        </div>
                </div>


                <br/><br/>

                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reponse"] ?? $this->getContext($context, "reponse")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 58
            echo "
                    <div class=\"panel panel-success\">
                        <div class=\"panel-heading\"> <h4> commentaire n°: ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
            echo "</h4></div>
                        <div class=\"panel-body\">

                            <h4>
                                ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "descriptionReponse", []), "html", null, true);
            echo "
                                <br>
                            </h4>

                            <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >
                                ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateReponse", [])), "html", null, true);
            echo "
                            </label>


                                <br>
                            <br>
                            ";
            // line 75
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 76
                echo "                            ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []) == $this->getAttribute($this->getAttribute($context["r"], "question", []), "user", []))) {
                    // line 77
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierreponse", ["idrep" => $this->getAttribute($context["r"], "id", [])]), "html", null, true);
                    echo "\">    <button type=\"button\" class=\"btn btn-success\">modifier</button>   </a>
                            <a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletereponse", ["idrep" => $this->getAttribute($context["r"], "id", [])]), "html", null, true);
                    echo "\" onclick=\"return confirm('Voulez vous vraiment supprimer cette question ?');\">    <button type=\"button\" class=\"btn btn-success\">supprimer</button>   </a>
                        ";
                }
                // line 80
                echo "                            ";
            }
            // line 81
            echo "

                        </div>

                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=";
        // line 96
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tableauquestion.js")), "html", null, true);
        echo " ></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Forum/reponse/listereponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 96,  233 => 95,  217 => 87,  206 => 81,  203 => 80,  198 => 78,  193 => 77,  190 => 76,  188 => 75,  179 => 69,  171 => 64,  164 => 60,  160 => 58,  156 => 57,  147 => 50,  142 => 48,  137 => 46,  132 => 44,  125 => 42,  115 => 34,  109 => 32,  107 => 31,  98 => 25,  82 => 12,  79 => 11,  70 => 10,  57 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{parent()}}

    <link href={{  app.request.scheme ~ '://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css'  }} rel=\"stylesheet\" id=\"bootstrap-css\">

{% endblock %}

{% block body %}
    <div class=\"breadcrumb-area\">
        <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\" style=\"background-image: url({{ asset('img/bg-img/24.jpg') }});\">


        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"single-blog-post mb-50\">

                <div class=\"col-12\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('listeQuestion') }}\"><i class=\"fa fa-home\"></i>Accueil de forum</a></li>

                            <li class=\"breadcrumb-item active\" aria-current=\"page\">liste des commentaires</li>

                        </ol>
                        <div class=\"pull-right\"  >
                            {% if reponse != null %}
                            <h3 class=\"fa fa-print\" ><a href=\"{{path('affichereponsepdf',{'id':reponse[0].question.id})}}\"> telecharger cette page </a> </h3>
                            {% endif %}

                        </div>

                    </nav>

                </div>

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> <label style=\"font-size: 30px\">{% if reponse != null %} {{ reponse[0].question.titreQuestion  }} </label></div><br/><br/>
                    <div class=\"panel-body\">
                        <label style=\"font-size: 15px; margin-left:30px; \"><p>{{ reponse[0].question.descriptionQuestion }}</p></label> <br>

                        <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >{{ reponse[0].question.dateQuestion | date }} </label>
                        <br/>
                        <br/><a href=\"{{ path('ajoutReponse' ,{'id':reponse[0].question.id}) }}\">    <button type=\"button\" class=\"btn btn-success\">commenter</button>   </a>
                        {% endif %}

                        </div>
                </div>


                <br/><br/>

                {% for r in reponse %}

                    <div class=\"panel panel-success\">
                        <div class=\"panel-heading\"> <h4> commentaire n°: {{  r.id }}</h4></div>
                        <div class=\"panel-body\">

                            <h4>
                                {{ r.descriptionReponse }}
                                <br>
                            </h4>

                            <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >
                                {{ r.dateReponse|date }}
                            </label>


                                <br>
                            <br>
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            {% if (app.user.username==r.question.user )%}
                            <a href=\"{{ path('modifierreponse',{'idrep':r.id}) }}\">    <button type=\"button\" class=\"btn btn-success\">modifier</button>   </a>
                            <a href=\"{{ path('deletereponse',{'idrep':r.id}) }}\" onclick=\"return confirm('Voulez vous vraiment supprimer cette question ?');\">    <button type=\"button\" class=\"btn btn-success\">supprimer</button>   </a>
                        {% endif %}
                            {% endif %}


                        </div>

                    </div>
                {% endfor  %}

            </div>

        </div>
    </div>

{% endblock %}

{% block javascripts %}    {{parent()}}
    <script src={{ app.request.schemeAndHttpHost ~ asset('js/tableauquestion.js') }} ></script>{% endblock %}", "@Forum/reponse/listereponse.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\ForumBundle\\Resources\\views\\reponse\\listereponse.html.twig");
    }
}
