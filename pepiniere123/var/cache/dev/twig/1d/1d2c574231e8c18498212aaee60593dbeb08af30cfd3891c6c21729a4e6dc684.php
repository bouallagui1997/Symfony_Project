<?php

/* @Forum/reponse/listerReponsepdf.html.twig */
class __TwigTemplate_3bbc1a34a22962493051ea0e10ca2437a59c8ae0eee183cdd89d960634bd7a7b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/reponse/listerReponsepdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/reponse/listerReponsepdf.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "
";
        // line 90
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
        echo "
    <link rel=\"stylesheet\" href=";
        // line 4
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css")), "html", null, true);
        echo ">

    <link rel=\"stylesheet\" href=";
        // line 7
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css")), "html", null, true);
        echo ">
    <link href=";
        // line 8
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" id=\"bootstrap-css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"breadcrumb-area\">
        <div class=\"top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center\" style=\"background-image: url(";
        // line 14
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
                            <li class=\"breadcrumb-item\"><i class=\"fa fa-home\"></i> accueil de forum</li>
                            <li class=\"breadcrumb-item\">detail de question</li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">liste des commentaires</li>

                        </ol>
                        <div class=\"pull-right\"  >
                        </div>

                    </nav>

                </div>

                <label style=\"font-size: 30px\">";
        // line 39
        if ((($context["reponse"] ?? $this->getContext($context, "reponse")) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "titreQuestion", []), "html", null, true);
            echo " </label><br/><br/>
                <label style=\"font-size: 15px; margin-left:30px; \"><p>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "descriptionQuestion", []), "html", null, true);
            echo "</p></label> <br>

                <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "dateQuestion", [])), "html", null, true);
            echo " </label>
                <br/>
                <br/>   <button type=\"button\" class=\"btn btn-success\">commenter</button>
                ";
        }
        // line 46
        echo "                <br/><br/>

                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reponse"] ?? $this->getContext($context, "reponse")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 49
            echo "
                    <div class=\"panel panel-success\">
                        <div class=\"panel-heading\"> <h4> commentaire n:  ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
            echo "</h4></div>
                        <div class=\"panel-body\">

                            <h4>
                                ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "descriptionReponse", []), "html", null, true);
            echo "
                                <br>
                            </h4>

                            <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >
                                ";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateReponse", [])), "html", null, true);
            echo "
                            </label>



                            <br>
                            <br>
                            ";
            // line 67
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 68
                echo "                                ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []) == $this->getAttribute($this->getAttribute($context["r"], "question", []), "user", []))) {
                    // line 69
                    echo "                                     <button type=\"button\" class=\"btn btn-success\">modifier</button>
                                    <button type=\"button\" class=\"btn btn-success\">supprimer</button>
                                ";
                }
                // line 72
                echo "                            ";
            }
            // line 73
            echo "

                        </div>

                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "



            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "
    <script src=";
        // line 92
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tableauquestion.js")), "html", null, true);
        echo " ></script>
    <script src=";
        // line 93
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/popper.min.js")), "html", null, true);
        echo "></script>
    <script src=";
        // line 94
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js")), "html", null, true);
        echo "></script>
    <script src=";
        // line 95
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/plugins.js")), "html", null, true);
        echo "></script>
    <script src=";
        // line 96
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "schemeAndHttpHost", []) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js")), "html", null, true);
        echo "></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Forum/reponse/listerReponsepdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  255 => 96,  251 => 95,  247 => 94,  243 => 93,  239 => 92,  236 => 91,  227 => 90,  208 => 79,  197 => 73,  194 => 72,  189 => 69,  186 => 68,  184 => 67,  174 => 60,  166 => 55,  159 => 51,  155 => 49,  151 => 48,  147 => 46,  140 => 42,  135 => 40,  129 => 39,  101 => 14,  98 => 13,  89 => 12,  76 => 8,  72 => 7,  67 => 5,  63 => 4,  60 => 3,  51 => 2,  41 => 90,  38 => 89,  36 => 12,  33 => 11,  31 => 2,  28 => 1,);
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

    <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/bootstrap.min.css') }}>
    <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/animate.css')  }}>

    <link rel=\"stylesheet\" href={{ app.request.schemeAndHttpHost ~ asset('css/font-awesome.min.css')  }}>
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
                            <li class=\"breadcrumb-item\"><i class=\"fa fa-home\"></i> accueil de forum</li>
                            <li class=\"breadcrumb-item\">detail de question</li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">liste des commentaires</li>

                        </ol>
                        <div class=\"pull-right\"  >
                        </div>

                    </nav>

                </div>

                <label style=\"font-size: 30px\">{% if reponse != null %} {{ reponse[0].question.titreQuestion  }} </label><br/><br/>
                <label style=\"font-size: 15px; margin-left:30px; \"><p>{{ reponse[0].question.descriptionQuestion }}</p></label> <br>

                <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >{{ reponse[0].question.dateQuestion | date }} </label>
                <br/>
                <br/>   <button type=\"button\" class=\"btn btn-success\">commenter</button>
                {% endif %}
                <br/><br/>

                {% for r in reponse %}

                    <div class=\"panel panel-success\">
                        <div class=\"panel-heading\"> <h4> commentaire n:  {{  r.id }}</h4></div>
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
                                     <button type=\"button\" class=\"btn btn-success\">modifier</button>
                                    <button type=\"button\" class=\"btn btn-success\">supprimer</button>
                                {% endif %}
                            {% endif %}


                        </div>

                    </div>
                {% endfor  %}




            </div>

        </div>
    </div>

{% endblock %}

{% block javascripts %}

    <script src={{ app.request.schemeAndHttpHost ~ asset('js/tableauquestion.js') }} ></script>
    <script src={{  app.request.schemeAndHttpHost ~ asset('js/bootstrap/popper.min.js') }}></script>
    <script src={{  app.request.schemeAndHttpHost ~ asset('js/bootstrap/bootstrap.min.js') }}></script>
    <script src={{  app.request.schemeAndHttpHost ~ asset('js/plugins/plugins.js') }}></script>
    <script src={{  app.request.schemeAndHttpHost ~ asset('js/active.js') }}></script>

{% endblock %}", "@Forum/reponse/listerReponsepdf.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\ForumBundle\\Resources\\views\\reponse\\listerReponsepdf.html.twig");
    }
}
