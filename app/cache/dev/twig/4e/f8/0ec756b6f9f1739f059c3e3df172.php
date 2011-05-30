<?php

/* AcmeHelloBundle:User:index.html.twig */
class __TwigTemplate_4ef80ec756b6f9f1739f059c3e3df172 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Let's create some links:
<br />
<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create", array("name" => "name")), "html");
        echo "\">Create a new user </a>
<br />
<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("id" => 1)), "html");
        echo "\">Delete an user </a>
<br />
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show"), "html");
        echo "\">Show all users ordered by name </a>
<br />
";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
