<html id="chrispederick-com" lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1,shrink-to-fit=no,width=device-width">
<meta name="theme-color" content="#fff">
<link href="/css/style.css" rel="preload" as="style">
<link href="/css/style1.css" rel="stylesheet" media="all" onload="this.media='all'">
<noscript><link href="/css/style2.css" rel="stylesheet"></noscript>
<title>Encurtador</title>

<link href="" rel="shortcut icon">
<link href="" rel="apple-touch-icon">
<body>
<nav class="navbar navbar-expand-md navbar-light">
<div class="container">
<a href="/" class="navbar-brand"><span class="brand-logo"></span><span class="d-lg-inline d-md-none">&nbsp;Encurtador de URL</span></a>
<button class="navbar-toggler" aria-label="Toggle navigation" data-target="#navbar-nav" data-toggle="collapse"><span class="navbar-toggler-icon"></span></button>
<div id="navbar-nav" class="collapse navbar-collapse">
<ul class="mr-5 navbar-nav">
<li class="nav-item active"><a href="/work/" class="nav-link"><svg class="icon icon-mono" width="0" height="0"><use xlink:href="/icon/3.1/common.svg#work"></use></svg>&nbsp;Inicio</a></li>
<li class="nav-item"><a href="/blog/" class="nav-link"><svg class="icon icon-mono" width="0" height="0"><use xlink:href="/icon/3.1/common.svg#blog"></use></svg>&nbsp;Staff</a></li>
<li class="nav-item"><a href="/about/" class="nav-link"><svg class="icon icon-mono" width="0" height="0"><use xlink:href="/icon/3.1/common.svg#about"></use></svg>&nbsp;Sobre</a></li>
</ul>
<form action="https://duckduckgo.com/" method="get" class="form-inline my-2 my-md-0">
<input type="hidden" name="sites" value="chrispederick.com">
</button>
</form>
</div>
</div>
</nav>
<div class="container pt-4">
<h1 class="sr-only">Encurtador</h1>
<center><div class="alert alert-dark"><div class="media"><svg class="icon icon-mono mr-2" width="0" height="0"><use xlink:href="/icon/3.1/common.svg#ess"></use></svg><div class="media-body"> Desenvolvido por Matheus Fernandes e configurado.</div></div></div><div class="alert alert-danger"><div class="media"><svg class="icon icon-mono mr-2" width="0" height="0"><use xlink:href="/icon/3.1/common.svg#information"></use></svg><div class="media-body">Não está totalmente funcional, por enquanto só armazena dados</a>.</div></div></div><div class="bg-light border card">
<div class="justify-content-center row">

</div>
</div>
<div class="card">
<div class="card-body">
<div class="align-items-center row">
     
     <?php
     if($_POST){
        include 'cadastrar.php';    
    }
     ?>

    <h1></h1>
    <form method="post" action="index.php" >
    <div class="form-group">
        <label>URL</label>
        <input type="text" class="form-control" name="url" size="15" />
    </div>
    <div class="form-group">
        <label>Link:</label>
		<input type="text" class="form-control" name="link" size="15" value="abre.ai/" />
    </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar" />
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="pb-3">
<div class="container">
<div class="row">
<div class="col-auto mr-auto"><a href="/appearance/" rel="nofollow"><svg class="icon icon-fill" width="0" height="0"><use xlink:href="/icon/3.1/common.svg#appearance"></use></svg><span class="sr-only">Change appearance</span></a>
</div>
<div class="col-auto"><small class="text-muted">
©&nbsp;2020–2020 <span></span>&nbsp;<a href="" class="text-muted">Matheus</a>
</small>
</div>
</div>
</div>
</footer>
</div>
<script src="/js/texto.js" defer=""></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-80819-1', 'auto');
  ga('send', 'pageview');
</script>


</body></html>