<?php

/* AcmeFormBundle:Default:index.html.twig */
class __TwigTemplate_e117c5bd861509084c2775254d6812d3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_product"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "
    <div>
        ";
        // line 4
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false), array("attr" => array("name" => "foo")));
        echo "
    </div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "

    <input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "AcmeFormBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
