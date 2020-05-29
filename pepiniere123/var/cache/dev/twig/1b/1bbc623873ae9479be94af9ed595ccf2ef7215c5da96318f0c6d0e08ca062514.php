<?php

/* @Forum/question/listequestionpdf.html.twig */
class __TwigTemplate_cbbd7aca0a0fa0b7e5990e587cb3b2b97c2bb124d561b38c2d1d21407eabaa88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/question/listequestionpdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/question/listequestionpdf.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tableauquestion.css")), "html", null, true);
        echo " rel=\"stylesheet\" >
    <link rel=\"stylesheet\" href=";
        // line 4
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css")), "html", null, true);
        echo ">

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
                                    <div class=\"row\">

                                        <div class=\"col-md-12\">
                                            <div class=\"panel panel-success\">
                                                <div class=\"panel-heading\">
                                                    <h3 class=\"panel-title\">liste des questions:</h3>
                                                    <div class=\"pull-right\">
\t\t\t\t\t\t\t<span class=\"clickable filter\"  title=\"Toggle table filter\" data-container=\"body\">

\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-filter\"></i>
\t\t\t\t\t\t\t</span>
                                                    </div>
                                                </div>
                                                <div class=\"panel-body\" style=\"display: none\">
                                                    <input type=\"text\" class=\"form-control\" id=\"task-table-filter\" data-action=\"filter\" data-filters=\"#task-table\" placeholder=\"Filter Tasks\" />
                                                </div>
                                                <table class=\"table table-hover\" id=\"task-table\">
                                                    <thead>
                                                    <tr>
                                                        <th>numero:</th>
                                                        <th>Titre Question</th>

                                                        <th>Nom d'utilisateur</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeQuestion"] ?? $this->getContext($context, "listeQuestion")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 75
            echo "                                                        <tr>
                                                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", []), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "titreQuestion", []), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "user", []), "html", null, true);
            echo "</td>

                                                            <td>
                                                                <div>   <button type=\"button\" class=\"btn btn-success\">commenter</button>
                                                                    ";
            // line 82
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 83
                echo "                                                                    ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []) == $this->getAttribute($context["list"], "user", []))) {
                    // line 84
                    echo "                                                                      <button type=\"button\" class=\"btn btn-success\">modifier</button>
                                                                    <button type=\"button\" class=\"btn btn-success\">supprimer</button>
                                                                </div>
                                                                ";
                }
                // line 88
                echo "                                                                ";
            }
            // line 89
            echo "                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    <script src=";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tableauquestion.js")), "html", null, true);
        echo " ></script>
    <script src=";
        // line 124
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"), "html", null, true);
        echo "></script>

    <script src=";
        // line 126
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
        return "@Forum/question/listequestionpdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  261 => 126,  256 => 124,  251 => 123,  242 => 122,  204 => 92,  196 => 89,  193 => 88,  187 => 84,  184 => 83,  182 => 82,  175 => 78,  171 => 77,  167 => 76,  164 => 75,  160 => 74,  97 => 14,  92 => 11,  83 => 10,  70 => 6,  65 => 4,  60 => 3,  51 => 2,  41 => 122,  38 => 121,  36 => 10,  33 => 9,  31 => 2,  28 => 1,);
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
{% block stylesheets %}
    <link href={{ app.request.schemeAndHttpHost ~ asset('css/tableauquestion.css') }} rel=\"stylesheet\" >
    <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/font-awesome.min.css')  }}>

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
                                    <div class=\"row\">

                                        <div class=\"col-md-12\">
                                            <div class=\"panel panel-success\">
                                                <div class=\"panel-heading\">
                                                    <h3 class=\"panel-title\">liste des questions:</h3>
                                                    <div class=\"pull-right\">
\t\t\t\t\t\t\t<span class=\"clickable filter\"  title=\"Toggle table filter\" data-container=\"body\">

\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-filter\"></i>
\t\t\t\t\t\t\t</span>
                                                    </div>
                                                </div>
                                                <div class=\"panel-body\" style=\"display: none\">
                                                    <input type=\"text\" class=\"form-control\" id=\"task-table-filter\" data-action=\"filter\" data-filters=\"#task-table\" placeholder=\"Filter Tasks\" />
                                                </div>
                                                <table class=\"table table-hover\" id=\"task-table\">
                                                    <thead>
                                                    <tr>
                                                        <th>numero:</th>
                                                        <th>Titre Question</th>

                                                        <th>Nom d'utilisateur</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for list in listeQuestion %}
                                                        <tr>
                                                            <td>{{ list.id }}</td>
                                                            <td>{{ list.titreQuestion }}</td>
                                                            <td>{{ list.user }}</td>

                                                            <td>
                                                                <div>   <button type=\"button\" class=\"btn btn-success\">commenter</button>
                                                                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                                                    {% if (app.user.username==list.user )%}
                                                                      <button type=\"button\" class=\"btn btn-success\">modifier</button>
                                                                    <button type=\"button\" class=\"btn btn-success\">supprimer</button>
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
    <script src={{ app.request.schemeAndHttpHost ~ asset('js/tableauquestion.js') }} ></script>
    <script src={{ app.request.scheme ~ '://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js' }}></script>

    <script src={{ app.request.scheme ~ '://code.jquery.com/jquery-1.11.1.min.js' }}></script>
    <script language=\"JavaScript\">
        \$('button').attr('class', 'btn btn-success');
    </script>
{% endblock %}", "@Forum/question/listequestionpdf.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\ForumBundle\\Resources\\views\\question\\listequestionpdf.html.twig");
    }
}
