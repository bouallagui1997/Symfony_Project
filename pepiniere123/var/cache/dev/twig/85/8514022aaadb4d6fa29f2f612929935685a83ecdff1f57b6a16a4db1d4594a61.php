<?php

/* @Forum/question/listeQuestion.html.twig */
class __TwigTemplate_ea31e0543da8bb9d5cf1f2b305fae015f089f4d4c6371270f22dcbbf53f6d130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Forum/question/listeQuestion.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/question/listeQuestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/question/listeQuestion.html.twig"));

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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=";
        // line 5
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tableauquestion.css")), "html", null, true);
        echo " rel=\"stylesheet\" >

    <link href=";
        // line 7
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
        echo "
    <div class=\"breadcrumb-area\">
        <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\"
             style=\"background-image: url(";
        // line 14
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/24.jpg")), "html", null, true);
        echo ");\">

            <h2></h2>

        </div>
    </div>


    <section class=\"alazea-blog-area mb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-8\">
                    <div class=\"row\">

                        <!-- Single Blog Post Area -->
                        <div class=\"col-12 col-lg-6\">
                            <div class=\"single-blog-post mb-50\">


                                <div class=\"col-12\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"fa fa-home\"></i> accueil de forum</a></li>

                                        </ol>
                                    </nav>
                                </div>




                                <!------ Include the above in your HEAD tag ---------->

                                <div class=\"container\">
                                    <h3>Cliquer sur l'icone(<i class=\"glyphicon glyphicon-filter\"></i>) pour chercher les questions <small></small></h3>
                                    <div class=\"row\">

                                        <div class=\"col-md-12\">
                                            <div class=\"panel panel-success\">
                                                <div class=\"panel-heading\">
                                                    <h3 class=\"panel-title\">liste des questions:</h3>
                                                    <div class=\"pull-right\">
                                                        <h3 class=\"fa fa-print\"  style=\"margin-top: -0.1em; margin-left: -10em; position: absolute\"><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeQuestionpdf");
        echo "\"> telecharger cette page </a> </h3>
                                                        <span class=\"clickable filter\"  title=\"Toggle table filter\" data-container=\"body\">



\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-filter\"></i>
\t\t\t\t\t\t\t</span>
                                                    </div>
                                                </div>
                                                <div class=\"panel-body\" style=\"display: none\">
                                                    <input type=\"text\" class=\"form-control\" id=\"task-table-filter\" data-action=\"filter\" data-filters=\"#task-table\" placeholder=\"Filtrer les questions\" />
                                                </div>
                                                <table class=\"table table-hover\" id=\"task-table\">
                                                    <thead>
                                                    <tr>
                                                        <th>numero</th>
                                                        <th>Titre Question(cliquer pour afficher listes des commentaires)</th>
                                                        <th>date </th>


                                                        <th>Nom d'utilisateur</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeQuestion"] ?? $this->getContext($context, "listeQuestion")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 82
            echo "                                                    <tr>
                                                        <div class=\"post-meta\">
                                                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", []), "html", null, true);
            echo "</td>


                                                            ";
            // line 87
            if (($context["list"] != null)) {
                // line 88
                echo "                                                        <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichereponse", ["id" => $this->getAttribute($context["list"], "id", [])], []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "titreQuestion", []), "html", null, true);
                echo "</a></td>
                                                    ";
            } else {
                // line 90
                echo "                                                        <td><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "titreQuestion", []), "html", null, true);
                echo "</a></td>
                                                            ";
            }
            // line 92
            echo "                                                         <td><label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["list"], "datequestion", [])), "html", null, true);
            echo " </label></td>

                                                            <td>  <a href=\"#\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>  ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "user", []), "html", null, true);
            echo "</a>   </td>
                                                        </div>

                                                        <td>
                                                            <div> <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutReponse", ["id" => $this->getAttribute($context["list"], "id", [])]), "html", null, true);
            echo "\">    <button type=\"button\" class=\"btn btn-success\">commenter</button>   </a>
                                                                ";
            // line 99
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 100
                echo "                                                            ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []) == $this->getAttribute($context["list"], "user", []))) {
                    // line 101
                    echo "                                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatequestion", ["id" => $this->getAttribute($context["list"], "id", [])]), "html", null, true);
                    echo "\">    <button type=\"button\" class=\"btn btn-success\">modifier</button>   </a>
                                                                <a href=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletequestion", ["id" => $this->getAttribute($context["list"], "id", [])]), "html", null, true);
                    echo "\" onclick=\"return confirm('Voulez vous vraiment supprimer cette question ?');\">    <button type=\"button\" class=\"btn btn-success\">supprimer</button>   </a>
                                                            </div>
                                                            ";
                }
                // line 105
                echo "                                                        ";
            }
            // line 106
            echo "                                                        </td>
                                                    </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>









                                    <br>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=";
        // line 141
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tableauquestion.js")), "html", null, true);
        echo " ></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Forum/question/listeQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 141,  280 => 140,  271 => 139,  233 => 109,  225 => 106,  222 => 105,  216 => 102,  211 => 101,  208 => 100,  206 => 99,  202 => 98,  195 => 94,  189 => 92,  183 => 90,  175 => 88,  173 => 87,  167 => 84,  163 => 82,  159 => 81,  131 => 56,  86 => 14,  81 => 11,  72 => 10,  60 => 7,  55 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
{{ parent()}}
    <link href={{ app.request.schemeAndHttpHost ~ asset('css/tableauquestion.css') }} rel=\"stylesheet\" >

    <link href={{  app.request.scheme ~ '://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css'  }} rel=\"stylesheet\" id=\"bootstrap-css\">
{% endblock %}

{% block body %}

    <div class=\"breadcrumb-area\">
        <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\"
             style=\"background-image: url({{ app.request.schemeAndHttpHost ~ asset('img/bg-img/24.jpg')}});\">

            <h2></h2>

        </div>
    </div>


    <section class=\"alazea-blog-area mb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-8\">
                    <div class=\"row\">

                        <!-- Single Blog Post Area -->
                        <div class=\"col-12 col-lg-6\">
                            <div class=\"single-blog-post mb-50\">


                                <div class=\"col-12\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"fa fa-home\"></i> accueil de forum</a></li>

                                        </ol>
                                    </nav>
                                </div>




                                <!------ Include the above in your HEAD tag ---------->

                                <div class=\"container\">
                                    <h3>Cliquer sur l'icone(<i class=\"glyphicon glyphicon-filter\"></i>) pour chercher les questions <small></small></h3>
                                    <div class=\"row\">

                                        <div class=\"col-md-12\">
                                            <div class=\"panel panel-success\">
                                                <div class=\"panel-heading\">
                                                    <h3 class=\"panel-title\">liste des questions:</h3>
                                                    <div class=\"pull-right\">
                                                        <h3 class=\"fa fa-print\"  style=\"margin-top: -0.1em; margin-left: -10em; position: absolute\"><a href=\"{{path('listeQuestionpdf')}}\"> telecharger cette page </a> </h3>
                                                        <span class=\"clickable filter\"  title=\"Toggle table filter\" data-container=\"body\">



\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-filter\"></i>
\t\t\t\t\t\t\t</span>
                                                    </div>
                                                </div>
                                                <div class=\"panel-body\" style=\"display: none\">
                                                    <input type=\"text\" class=\"form-control\" id=\"task-table-filter\" data-action=\"filter\" data-filters=\"#task-table\" placeholder=\"Filtrer les questions\" />
                                                </div>
                                                <table class=\"table table-hover\" id=\"task-table\">
                                                    <thead>
                                                    <tr>
                                                        <th>numero</th>
                                                        <th>Titre Question(cliquer pour afficher listes des commentaires)</th>
                                                        <th>date </th>


                                                        <th>Nom d'utilisateur</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for list in listeQuestion %}
                                                    <tr>
                                                        <div class=\"post-meta\">
                                                        <td>{{ list.id }}</td>


                                                            {% if list != null %}
                                                        <td><a href=\"{{ path('affichereponse' ,{'id':list.id},{}) }}\">{{ list.titreQuestion }}</a></td>
                                                    {% else %}
                                                        <td><a href=\"#\">{{ list.titreQuestion }}</a></td>
                                                            {% endif %}
                                                         <td><label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >{{list.datequestion | date }} </label></td>

                                                            <td>  <a href=\"#\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>  {{ list.user }}</a>   </td>
                                                        </div>

                                                        <td>
                                                            <div> <a href=\"{{ path('ajoutReponse' ,{'id':list.id}) }}\">    <button type=\"button\" class=\"btn btn-success\">commenter</button>   </a>
                                                                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                                            {% if (app.user.username==list.user )%}
                                                                <a href=\"{{ path('updatequestion',{'id':list.id}) }}\">    <button type=\"button\" class=\"btn btn-success\">modifier</button>   </a>
                                                                <a href=\"{{ path('deletequestion',{'id':list.id}) }}\" onclick=\"return confirm('Voulez vous vraiment supprimer cette question ?');\">    <button type=\"button\" class=\"btn btn-success\">supprimer</button>   </a>
                                                            </div>
                                                            {% endif %}
                                                        {% endif %}
                                                        </td>
                                                    </tr>
                                                    {% endfor %}


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>









                                    <br>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src={{ app.request.schemeAndHttpHost ~ asset('js/tableauquestion.js') }} ></script>
{% endblock %}", "@Forum/question/listeQuestion.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\ForumBundle\\Resources\\views\\question\\listeQuestion.html.twig");
    }
}
