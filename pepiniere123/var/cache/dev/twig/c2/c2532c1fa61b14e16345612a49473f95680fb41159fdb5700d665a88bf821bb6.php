<?php

/* FOSMessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_c8014ae9e3fc63c7437f5f57a37e0ca92922804a8970d9637473aea788fcf8ee extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        // line 1
        echo "<table class=\"table\">

    <thead class=\"thead-light\">
        <tr>
            <th class=\"text-success\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("subject", [], "FOSMessageBundle");
        echo "</th>
            <th class=\"text-success\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("starter", [], "FOSMessageBundle");
        echo "</th>
            <th class=\"text-success\">";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("startdate", [], "FOSMessageBundle");
        echo "</th>
            <th class=\"text-success\">";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("nombre de messages", [], "FOSMessageBundle");
        echo "</th>
            <th class=\"text-success\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("last_message", [], "FOSMessageBundle");
        echo "</th>
            <th class=\"text-success\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("actions", [], "FOSMessageBundle");
        echo "</th>
        </tr>
    </thead>

    <tbody>

    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-circle\"></div>
        <div class=\"preloader-img\">
            <img src=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/leaf.png"), "html", null, true);
        echo " alt=\"\">
        </div>
    </div>

    ";
        // line 23
        if (($context["threads"] ?? $this->getContext($context, "threads"))) {
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["threads"] ?? $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 25
                echo "            <tr>

                <td>
                    <div>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", ["threadId" => $this->getAttribute($context["thread"], "id", [])]), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", []), "html", null, true);
                echo "
                    </a>

                    ";
                // line 32
                if ( !$this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isRead($context["thread"])) {
                    // line 33
                    echo "


                          ";
                    // line 36
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("<span class=\"glyphicon glyphicon-envelope\"></span>   nouveau", [], "FOSMessageBundle");
                    // line 41
                    echo "                    ";
                }
                // line 42
                echo "                    </div>
                </td>
                <br>


                <td>
                    <div>
                    ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "createdBy", []), "html", null, true);
                echo "
                    </div>
                </td>


                <td>
                    <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  > ";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", [])), "html", null, true);
                echo " </label>
                </td>
                <td>
                    ";
                // line 58
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["thread"], "messages", [])), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 61
                if ($this->getAttribute($context["thread"], "lastMessage", [])) {
                    // line 62
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", ["threadId" => $this->getAttribute($context["thread"], "id", [])]), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", []), "id", []), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", [], "FOSMessageBundle");
                    echo "\">
                            →
                        </a>
                        ";
                    // line 65
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("on", ["%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", []), "createdAt", []))], "FOSMessageBundle");
                    // line 66
                    echo "                        <br />
                        ";
                    // line 67
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("by", ["%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", []), "sender", []))], "FOSMessageBundle");
                    // line 68
                    echo "                    ";
                } else {
                    // line 69
                    echo "                        ----
                    ";
                }
                // line 71
                echo "                </td>
                <td>
                    ";
                // line 73
                if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->canDeleteThread($context["thread"])) {
                    // line 74
                    echo "                        ";
                    if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 75
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_undelete", ["threadId" => $this->getAttribute($context["thread"], "id", [])]), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 76
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", [], "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 77
                        echo "                        ";
                    } else {
                        // line 78
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_delete", ["threadId" => $this->getAttribute($context["thread"], "id", [])]), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 79
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", [], "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 80
                        echo "                        ";
                    }
                    // line 81
                    echo "

                        <form action=\"";
                    // line 83
                    echo twig_escape_filter($this->env, ($context["formAction"] ?? $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                            <button type=\"submit\" class=\"btn btn-success\">";
                    // line 84
                    echo twig_escape_filter($this->env, ($context["submitValue"] ?? $this->getContext($context, "submitValue")), "html", null, true);
                    echo "</button>

                        </form>
                    ";
                }
                // line 88
                echo "

                        <button type=\"submit\" class=\"btn btn-success\">
                            <span class=\"fa fa-send-o\"></span>
                        <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", ["threadId" => $this->getAttribute($context["thread"], "id", [])]), "html", null, true);
                echo "\" > ouvrir la discussion
                        </a>
                        </button>

                </td>


                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "    ";
        } else {
            // line 103
            echo "        <tr>
            <td colspan=\"6\">
                ";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("no_thread", [], "FOSMessageBundle");
            echo ".



            </td>
        </tr>
    ";
        }
        // line 112
        echo "
    </tbody>

</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 112,  239 => 105,  235 => 103,  232 => 102,  216 => 92,  210 => 88,  203 => 84,  199 => 83,  195 => 81,  192 => 80,  187 => 79,  182 => 78,  179 => 77,  174 => 76,  169 => 75,  166 => 74,  164 => 73,  160 => 71,  156 => 69,  153 => 68,  151 => 67,  148 => 66,  146 => 65,  135 => 62,  133 => 61,  127 => 58,  121 => 55,  112 => 49,  103 => 42,  100 => 41,  98 => 36,  93 => 33,  91 => 32,  83 => 29,  77 => 25,  72 => 24,  70 => 23,  63 => 19,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table\">

    <thead class=\"thead-light\">
        <tr>
            <th class=\"text-success\">{% trans from 'FOSMessageBundle' %}subject{% endtrans %}</th>
            <th class=\"text-success\">{% trans from 'FOSMessageBundle' %}starter{% endtrans %}</th>
            <th class=\"text-success\">{% trans from 'FOSMessageBundle' %}startdate{% endtrans %}</th>
            <th class=\"text-success\">{% trans from 'FOSMessageBundle' %}nombre de messages{% endtrans %}</th>
            <th class=\"text-success\">{% trans from 'FOSMessageBundle' %}last_message{% endtrans %}</th>
            <th class=\"text-success\">{% trans from 'FOSMessageBundle' %}actions{% endtrans %}</th>
        </tr>
    </thead>

    <tbody>

    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-circle\"></div>
        <div class=\"preloader-img\">
            <img src={{ asset('img/core-img/leaf.png') }} alt=\"\">
        </div>
    </div>

    {% if threads %}
        {% for thread in threads %}
            <tr>

                <td>
                    <div>
                    <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" > {{ thread.subject }}
                    </a>

                    {% if not fos_message_is_read(thread) %}



                          {% trans from 'FOSMessageBundle' %}

                              <span class=\"glyphicon glyphicon-envelope\"></span>   nouveau

                    {% endtrans %}
                    {% endif %}
                    </div>
                </td>
                <br>


                <td>
                    <div>
                    {{ thread.createdBy }}
                    </div>
                </td>


                <td>
                    <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  > {{ thread.createdAt|date }} </label>
                </td>
                <td>
                    {{ thread.messages|length }}
                </td>
                <td>
                    {% if thread.lastMessage %}
                        <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}\" title=\"{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}\">
                            →
                        </a>
                        {% trans with {'%date%': thread.lastMessage.createdAt|date} from 'FOSMessageBundle' %}on{% endtrans %}
                        <br />
                        {% trans with {'%sender%': thread.lastMessage.sender|e } from 'FOSMessageBundle' %}by{% endtrans %}
                    {% else %}
                        ----
                    {% endif %}
                </td>
                <td>
                    {% if fos_message_can_delete_thread(thread) %}
                        {% if fos_message_deleted_by_participant(thread) %}
                            {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}
                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}
                        {% else %}
                            {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}
                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}
                        {% endif %}


                        <form action=\"{{ formAction }}\" method=\"post\">
                            <button type=\"submit\" class=\"btn btn-success\">{{ submitValue }}</button>

                        </form>
                    {% endif %}


                        <button type=\"submit\" class=\"btn btn-success\">
                            <span class=\"fa fa-send-o\"></span>
                        <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" > ouvrir la discussion
                        </a>
                        </button>

                </td>


                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"6\">
                {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.



            </td>
        </tr>
    {% endif %}

    </tbody>

</table>
", "FOSMessageBundle:Message:threads_list.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\app/Resources/FOSMessageBundle/views/Message/threads_list.html.twig");
    }
}
