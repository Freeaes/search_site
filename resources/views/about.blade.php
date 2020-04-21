<!DOCTYPE html>
<html lang="zh">

@include('layouts.header')

<body class="page-body boxed-container">
    <nav class="navbar horizontal-menu navbar-fixed-top">
        <div class="navbar-inner">
            <div class="navbar-brand">
                <a href="/" class="logo">
                    <img src="{{ asset('img/logo_dark@2x.png') }}" width="100%" alt="" class="hidden-xs">
                    <img src="{{ asset('img/logo@2x.png') }}" width="100%" alt="" class="visible-xs">
                </a>
            </div>
            <div class="navbar-mobile-clear"></div>
            <a href="https://github.com/CrazyBoyM/WebStack-Laravel/" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
        </div>
    </nav>
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- 关于项目 -->
                        <h4 class="text-gray">关于项目</h4>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- 关于作者 -->
                            <h4 class="text-gray">关于我们</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://www.viggoz.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://github.com/CrazyBoyM">
                                        <div class="xe-comment-entry">
                                            <a class="xe-user-img">
                                                <img src="https://avatars1.githubusercontent.com/u/35400185?s=460&v=4" class="img-circle" width="40">
                                            </a>
                                            <div class="xe-comment">
                                                <a href="#" class="xe-user-name overflowClip_1">
                                                    <strong>贡献者</strong>
                                                   
                                                </a>
                                                 <p>原作 by Viggo 框架 by hui-ho 魔改 by CrazyBoyM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br />
                                            <blockquote>
                                            	<p class="overflowClip_2">欢迎关注 微信公众号：GeekS356 </p>
                                            	<br>
                                                <p>
                                                    这是一个公益项目，而且是<a href="https://github.com/CrazyBoyM/WebStack-Laravel/"> 开源 </a>的。你也可以拿来制作自己的网址导航。如果你有更好的想法，可以通过邮件与我联系，欢迎与我交流分享。
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
