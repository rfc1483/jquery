<?php

/* AcmeJqueryBundle:Default:css.html.twig */
class __TwigTemplate_285439890d47087d03b281c401c522a3 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeJqueryBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 21
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->renderParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"div.box\").click(function(){
                \$(this).css(\"background-color\",\"blue\");
            });
        });
    </script>        
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <h1>CSS</h1>
    
    <div class=\"box\" style=\"width:100px;height:100px;background:#ff0000\"></div>
    <p>Click in the red box to change the background color.</p>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
