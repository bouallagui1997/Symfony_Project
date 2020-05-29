<?php

/* @Forum/reponse/listereponseDASHBOARD.html.twig */
class __TwigTemplate_aae9e889ef4e048919ca678b9dd02eb5f29f733d27dcb85a3131622cc72305f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@backoffice/basedashboard.html.twig", "@Forum/reponse/listereponseDASHBOARD.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@backoffice/basedashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/reponse/listereponseDASHBOARD.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/reponse/listereponseDASHBOARD.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <br>
     <br>
     <br>
     <br>
<center>
     <h2>Liste des commentaire de question :</h2>
    <br>
    <br>
    <div class=\"pull-right\"  >
        ";
        // line 13
        if ((($context["reponse"] ?? $this->getContext($context, "reponse")) != null)) {
            // line 14
            echo "        <h3 class=\"fa fa-print\" ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichereponsepdfDASHBOARD", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "id", [])]), "html", null, true);
            echo "\"> telecharger cette page </a> </h3>
        ";
        }
        // line 16
        echo "
    </div>
</center>
     <label>titre de question: <br>
            ";
        // line 20
        if ((($context["reponse"] ?? $this->getContext($context, "reponse")) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "titreQuestion", []), "html", null, true);
            echo "</label>
         <br/>
         <label > Contenue de question: <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "descriptionQuestion", []), "html", null, true);
            echo "</p></label> <br>
         <label > date de'ajout de question: </label>
         <label class=\"fa fa-clock-o\" aria-hidden=\"true\"  >";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "dateQuestion", [])), "html", null, true);
            echo " </label>
         <br/>
         ";
        }
        // line 27
        echo "

     <br>

     <table class=\"table\">

     <thead class=\"thead-light\">
     <tr>
         <th class=\"text-success\">Numero du commentaire</th>
         <th class=\"text-success\">Description du commentaire</th>
         <th class=\"text-success\">Date du commentaire</th>
         <th class=\"text-success\">Action</th>
     </tr>
     </thead>
     ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reponse"] ?? $this->getContext($context, "reponse")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 42
            echo "     <tbody>
     <tr>

         <td>   ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
            echo "</td>

           <td> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "descriptionReponse", []), "html", null, true);
            echo "</td>

         <td>
                 <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >
                     ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateReponse", [])), "html", null, true);
            echo "
                 </label>
         </td>

         <td> <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletereponseDASHBOARD", ["idrep" => $this->getAttribute($context["r"], "id", [])]), "html", null, true);
            echo "\" onclick=\"return confirm('Voulez vous vraiment supprimer cette question ?');\">
                 <button type=\"button\" class=\"btn btn-success\">supprimer</button>   </a> </td>

     </tr>

     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "     </tbody>
     </table>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Forum/reponse/listereponseDASHBOARD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  136 => 55,  129 => 51,  122 => 47,  117 => 45,  112 => 42,  108 => 41,  92 => 27,  86 => 24,  81 => 22,  74 => 20,  68 => 16,  62 => 14,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@backoffice/basedashboard.html.twig' %}

 {% block body %}
     <br>
     <br>
     <br>
     <br>
<center>
     <h2>Liste des commentaire de question :</h2>
    <br>
    <br>
    <div class=\"pull-right\"  >
        {% if reponse != null %}
        <h3 class=\"fa fa-print\" ><a href=\"{{path('affichereponsepdfDASHBOARD',{'id':reponse[0].question.id})}}\"> telecharger cette page </a> </h3>
        {% endif %}

    </div>
</center>
     <label>titre de question: <br>
            {% if reponse != null %} {{ reponse[0].question.titreQuestion  }}</label>
         <br/>
         <label > Contenue de question: <p>{{ reponse[0].question.descriptionQuestion }}</p></label> <br>
         <label > date de'ajout de question: </label>
         <label class=\"fa fa-clock-o\" aria-hidden=\"true\"  >{{ reponse[0].question.dateQuestion | date }} </label>
         <br/>
         {% endif %}


     <br>

     <table class=\"table\">

     <thead class=\"thead-light\">
     <tr>
         <th class=\"text-success\">Numero du commentaire</th>
         <th class=\"text-success\">Description du commentaire</th>
         <th class=\"text-success\">Date du commentaire</th>
         <th class=\"text-success\">Action</th>
     </tr>
     </thead>
     {% for r in reponse %}
     <tbody>
     <tr>

         <td>   {{  r.id }}</td>

           <td> {{ r.descriptionReponse }}</td>

         <td>
                 <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >
                     {{ r.dateReponse|date }}
                 </label>
         </td>

         <td> <a href=\"{{ path('deletereponseDASHBOARD',{'idrep':r.id}) }}\" onclick=\"return confirm('Voulez vous vraiment supprimer cette question ?');\">
                 <button type=\"button\" class=\"btn btn-success\">supprimer</button>   </a> </td>

     </tr>

     {% endfor  %}
     </tbody>
     </table>
 {% endblock %}", "@Forum/reponse/listereponseDASHBOARD.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\ForumBundle\\Resources\\views\\reponse\\listereponseDASHBOARD.html.twig");
    }
}
