<?php

/* AcmeStoreBundle:Default:index.html.twig */
class __TwigTemplate_946f66e7d75c3402fa0a4821ce501d95 extends Twig_Template
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

    ";
        // line 4
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), "price", array(), "any", false));
        echo "

    ";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "

    <input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
