<?php

/* index.html */
class __TwigTemplate_c48d44acfe9bf655c17424ae88157c5d7b6fcf949f4ba8163075ade825bac562 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-cmn-Hans\">
<head>
\t<meta charset=\"utf-8\">
\t<title>飞蓬 - 技术栈</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@0.6.1/build/pure-min.css\">
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/static/css/main.css\">
</head>
<body>
\t<!-- 固定顶部文件 -->
\t<div class=\"penn-style-header\">
\t    <div class=\"pure-menu pure-menu-horizontal pure-menu-scrollable penn-style-header-menu\">
\t        <a href=\"#\" class=\"pure-menu-heading penn-style-header-title\">飞蓬技术栈</a>
\t        <a href=\"#\" class=\"penn-style-header-toggle\" id=\"toggle\"><s class=\"bar\"></s><s class=\"bar\"></s></a>
\t    </div>
\t    <div class=\" pure-menu pure-menu-horizontal pure-menu-scrollable penn-style-header-menu penn-style-header-bottom\" id=\"tuckedMenu\">
\t        <ul class=\"pure-menu-list\">
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">Ctrl + D</a></li>
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">PHP 开发</a></li>
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">Python 栈</a></li>
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">Linux  栈</a></li>
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">Raspberry Pi</a></li>
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">开发模式</a></li>
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">程序开发与算法</a></li> 
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">程序开发与区块链</a></li> 
\t            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">杂谈</a></li>
\t        </ul>
\t    </div>
\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-lg-3-4 pure-u-sm-1-1 b\">
\t\t\t我是文章内容的显示和文章列表
\t\t</div>

\t\t<div class=\"pure-u-lg-1-4 pure-u-sm-1-1 b\">
\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "我是标签内容热门推荐之类
\t\t</div>
\t</div>



<!-- JS控制 -->
<script>
\t(function (window, document) {
\t\tdocument.getElementById('toggle').addEventListener('click', function (e) {
\t\t\tdocument.getElementById('tuckedMenu').classList.toggle('show');
\t\t    document.getElementById('toggle').classList.toggle('open');
\t\t});
\t})(this, this.document);
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 39,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\Users\\Penn\\Documents\\GitHub\\foro\\resources\\view\\index.html");
    }
}
