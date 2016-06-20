<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>权限系统</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- intoHead  -->
    <link rel="stylesheet" type="text/css" href="Public/Css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="Public/Css/console1412.css"/>
    <!-- 全局公共样式 -->
    <link rel="stylesheet" type="text/css" href="Public/Css/global.css"/>
    <!-- jQuery2.0库 -->
    <!-- <script type="text/javascript" src="Public/Js/jquery-2.1.1.min.js"></script> -->
    <script type="text/javascript" src="Public/Js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="Public/Js/jquery.form.js"></script>
    <!-- LayerUi库 -->
    <script type="text/javascript" src="Public/Resources/LayerUI/layer.js"></script>
    <script type="text/javascript" src="Public/Resources/LayerUI/laypage/laypage.js"></script>
    <script type="text/javascript" src="Public/Js/jquery.confirm.js"></script>
    <!-- 后台JS -->
    <script type="text/javascript" src="Public/Js/index.js"></script>
    <script type="text/javascript" src="Public/Js/layerUi.js"></script>
    <script type="text/javascript" src="Public/Js/global.js"></script>
    <script type="text/javascript">
        document.oncontextmenu = function () {
            return false
        }
    </script>
    <script>
        $(function () {
            var h = $('.viewFramework-sidebar', parent.document).height();
            $('.home-container').css('height', h - 30);
        });
    </script>
    <!-- /intoHead  -->
</head>
<body class="iframe-body" data-setTime="598" data-actionUrl="Admin/Index/index">
<!-- header  -->
<div class="viewFramework-topbar ng-scope">
    <!-- topbar -->
    <div class="aliyun-console-topbar ng-isolate-scope">
        <div class="topbar-wrap topbar-clearfix">
            <div class="topbar-head topbar-left"><a href="/index.php?s=/Index/index.html" target="_blank"
                                                    class="topbar-logo topbar-left"><span class="icon-logo1"></span></a>
                <a href="/index.php?s=/Index/index.html" target="_self" class="topbar-home-link topbar-btn topbar-left"><span
                        class="ng-binding">管理控制台</span></a>
            </div>
            <!-- <div class="topbar-head topbar-left"><a href="/index.php?s=/Member/index.html" target="_self" class="topbar-home-link topbar-btn topbar-left"><span class="ng-binding">用户管理</span></a>
            </div>
            <div class="topbar-head topbar-left"><a href="/index.php?s=/Access/index.html" target="_self" class="topbar-home-link topbar-btn topbar-left"><span class="ng-binding">权限管理</span></a>
            </div>
            <div class="topbar-head topbar-left"><a href="/index.php?s=/System/index.html" target="_self" class="topbar-home-link topbar-btn topbar-left"><span class="ng-binding">系统管理</span></a>
            </div> -->
            <div class="topbar-info topbar-right topbar-clearfix">
                <!-- 手机app -->
                <!-- ngIf: versionGreaterThan1_3_21 && navLinks.qrcode.show -->
                <div class="topbar-qrcode topbar-left ng-scope">
                    <a class="topbar-btn" href="javascript:;" target="_blank">
                        <!-- ngIf: navLinks.qrcode.icon --><span class="icon-qrcode"></span>
                        <!-- end ngIf: navLinks.qrcode.icon -->
                        <!-- ngIf: navLinks.qrcode.text --><span class="ng-scope ng-binding">二维码</span>
                        <!-- end ngIf: navLinks.qrcode.text -->
                        <!-- ngIf: navLinks.qrcode.showNew -->
                    </a>

                    <div class="topbar-qrcode-panel">
                        <div class="topbar-qrcode-image"><img src="Public/Images/qrcode.png"
                                                              widht="100" height="100"></div>
                        <div class="topbar-qrcode-title ng-binding">扫码关注平台动态</div>
                    </div>
                </div>
                <!-- end ngIf: versionGreaterThan1_3_21 && navLinks.qrcode.show -->
                <!-- 站内信 -->
                <!-- ngIf: messages && messages.total >=0 && navLinks.message.show -->
                <div class="dropdown topbar-notice topbar-btn topbar-left ng-scope"><a href="javascript:;"
                                                                                       class="dropdown-toggle topbar-btn-notice"><span
                        class="topbar-btn-notice-icon icon-bell"></span> <span class="topbar-btn-notice-num ng-binding">22</span></a>

                    <div class="topbar-notice-panel">
                        <div class="topbar-notice-arrow"></div>
                        <div class="topbar-notice-head"><span class="ng-binding">站内消息通知</span></div>
                        <div class="topbar-notice-body">
                            <!-- ngIf: messages && messages.messageList.length >0 -->
                            <ul class="ng-scope">
                                <!-- ngRepeat: item in messages.messageList -->
                                <li class="ng-scope">
                                    <a target="_blank" class="clearfix" href="#"><span class="inline-block"><span
                                            class="topbar-notice-link ng-binding">【重要通知】阿里云推荐码限量开放申请中，分享9折推荐码，获10%返利！</span> <span
                                            class="topbar-notice-time ng-binding">2015-10-23</span></span>
                                        <!-- ngIf: item.className --><span
                                                class="inline-block topbar-notice-class ng-scope"><span
                                                class="topbar-notice-class-name ng-binding">优惠活动</span></span>
                                        <!-- end ngIf: item.className -->
                                    </a>
                                </li>
                                <!-- end ngRepeat: item in messages.messageList -->
                                <li class="ng-scope">
                                    <a ng-href="#" target="_blank" class="clearfix" href="#"><span class="inline-block"><span
                                            class="topbar-notice-link ng-binding">参与云服务器优化调研，赢100元通用代金券！</span> <span
                                            class="topbar-notice-time ng-binding">2015-10-16</span></span>
                                        <!-- ngIf: item.className --><span
                                                class="inline-block topbar-notice-class ng-scope"><span
                                                class="topbar-notice-class-name ng-binding">问卷回访</span></span>
                                        <!-- end ngIf: item.className -->
                                    </a>
                                </li>
                                <!-- end ngRepeat: item in messages.messageList -->
                                <li ng-repeat="item in messages.messageList"
                                    ng-class="{'topbar-notice-readed':item.readed}" class="ng-scope">
                                    <a ng-href="#" target="_blank" class="clearfix" ng-click="readMessage(item)"
                                       aliyun-console-spm="402" data-spm-click="gostr=/aliyun;locaid=d402;;"
                                       href="#"><span class="inline-block"><span class="topbar-notice-link ng-binding"
                                                                                 ng-bind="item.title">【新生宝贝】美国硅谷第二可用区正式上线！ ECS88折活动10.10~11.9仅此一月</span> <span
                                            class="topbar-notice-time ng-binding" ng-bind="item.formatCreatedTime">2015-10-12</span></span>
                                        <!-- ngIf: item.className --><span
                                                class="inline-block topbar-notice-class ng-scope"
                                                ng-if="item.className"><span
                                                class="topbar-notice-class-name ng-binding">产品动态</span></span>
                                        <!-- end ngIf: item.className -->
                                    </a>
                                </li>
                                <!-- end ngRepeat: item in messages.messageList -->
                                <li ng-repeat="item in messages.messageList"
                                    ng-class="{'topbar-notice-readed':item.readed}" class="ng-scope">
                                    <a ng-href="#" target="_blank" class="clearfix" ng-click="readMessage(item)"
                                       aliyun-console-spm="403" data-spm-click="gostr=/aliyun;locaid=d403;;"
                                       href="#"><span class="inline-block"><span class="topbar-notice-link ng-binding"
                                                                                 ng-bind="item.title">阿里云 ACE 产品问卷调查</span> <span
                                            class="topbar-notice-time ng-binding" ng-bind="item.formatCreatedTime">2015-10-12</span></span>
                                        <!-- ngIf: item.className --><span
                                                class="inline-block topbar-notice-class ng-scope"
                                                ng-if="item.className"><span
                                                class="topbar-notice-class-name ng-binding">问卷回访</span></span>
                                        <!-- end ngIf: item.className -->
                                    </a>
                                </li>
                                <!-- end ngRepeat: item in messages.messageList -->
                                <li ng-repeat="item in messages.messageList"
                                    ng-class="{'topbar-notice-readed':item.readed}" class="ng-scope">
                                    <a ng-href="#" target="_blank" class="clearfix" ng-click="readMessage(item)"
                                       aliyun-console-spm="404" data-spm-click="gostr=/aliyun;locaid=d404;;"
                                       href="#"><span class="inline-block"><span class="topbar-notice-link ng-binding"
                                                                                 ng-bind="item.title">【重要通知】阿里云推荐码返利升级，10%返利+50元额外奖励等你拿！</span> <span
                                            class="topbar-notice-time ng-binding" ng-bind="item.formatCreatedTime">2015-09-17</span></span>
                                        <!-- ngIf: item.className --><span
                                                class="inline-block topbar-notice-class ng-scope"
                                                ng-if="item.className"><span
                                                class="topbar-notice-class-name ng-binding">优惠活动</span></span>
                                        <!-- end ngIf: item.className -->
                                    </a>
                                </li>
                                <!-- end ngRepeat: item in messages.messageList -->
                            </ul>
                            <!-- end ngIf: messages && messages.messageList.length >0 -->
                            <!-- ngIf: !messages ||  messages.messageList.length == 0 -->
                        </div>
                        <div class="topbar-notice-foot"><a class="topbar-notice-more ng-binding" target="_blank"
                                                           ng-href="#" aliyun-console-spm="401"
                                                           data-spm-click="gostr=/aliyun;locaid=d401;;"
                                                           href="#">查看更多</a></div>
                    </div>
                </div>
                <!-- end ngIf: messages && messages.total >=0 && navLinks.message.show -->
                <!-- AccessKeys -->
                <!-- ngIf: navLinks.accesskeys.show -->
                <div class="topbar-left topbar-accesskeys topbar-info-item ng-scope"><a href="javascript:;"
                                                                                        data-url="/index.php?s=/Common/alipay.html"
                                                                                        class="topbar-btn ng-binding groupAuth">支付弹窗
                    <!-- ngIf: navLinks.accesskeys.showNew --></a></div>
                <!-- end ngIf: navLinks.accesskeys.show -->
                <!-- 工单 -->
                <!-- ngIf: navLinks.workorder.show -->
                <div class="topbar-left topbar-workorder topbar-info-item ng-scope" ng-if="navLinks.workorder.show">
                    <div class="dropdown"><a href="javascript:;" class="dropdown-toggle topbar-btn"
                                             data-toggle="dropdown" aliyun-console-spm="51"
                                             data-spm-click="gostr=/aliyun;locaid=d51;;"><span
                            ng-bind="navLinks.workorder.text" class="ng-binding">等待添加</span><!-- ngIf: navLinks.workorder.showNew --><span
                            class="icon-arrow-down"></span></a>
                        <ul class="dropdown-menu">
                            <!-- ngRepeat: link in navLinks.workorder.links -->
                            <li ng-repeat="link in navLinks.workorder.links" class="topbar-info-btn ng-scope"><a
                                    href="#" target="_blank"><span class="ng-binding">等待添加</span><!-- ngIf: link.showNew -->
                            </a></li>
                            <!-- end ngRepeat: link in navLinks.workorder.links -->
                            <li ng-repeat="link in navLinks.workorder.links" class="topbar-info-btn ng-scope"><a
                                    href="#" target="_blank"><span class="ng-binding">等待添加</span><!-- ngIf: link.showNew -->
                            </a></li>
                            <!-- end ngRepeat: link in navLinks.workorder.links -->
                        </ul>
                    </div>
                </div>
                <!-- end ngIf: navLinks.workorder.show -->
                <!-- 备案 -->
                <!-- ngIf: navLinks.icp.show -->
                <div class="topbar-left topbar-accesskeys topbar-info-item ng-scope"><a href="javascript:;"
                                                                                        data-url="/index.php?s=/Public/clearAdminCache.html"
                                                                                        class="topbar-btn ng-binding delete">清理缓存
                    <!-- ngIf: navLinks.icp.showNew --></a></div>
                <!-- end ngIf: navLinks.icp.show -->
                <!-- 帮助 -->
                <!-- ngIf: navLinks.help.show -->
                <div class="topbar-left topbar-help topbar-info-item ng-scope" ng-if="navLinks.help.show">
                    <div class="dropdown"><a href="javascript:;" class="dropdown-toggle topbar-btn"><span
                            class="ng-binding" id="help">等待添加</span><!-- ngIf: navLinks.help.showNew --><span
                            class="icon-arrow-down"></span></a>
                        <ul class="dropdown-menu">
                            <!-- ngRepeat: link in navLinks.help.links -->
                            <li class="topbar-info-btn ng-scope"><a href="#" target="_blank"><span class="ng-binding">等待添加</span><!-- ngIf: link.showNew -->
                            </a></li>
                            <!-- end ngRepeat: link in navLinks.help.links -->
                            <li class="topbar-info-btn ng-scope"><a href="#" target="_blank"><span class="ng-binding">等待添加</span><!-- ngIf: link.showNew -->
                            </a></li>
                            <!-- end ngRepeat: link in navLinks.help.links -->
                            <li class="topbar-info-btn ng-scope"><a href="#" target="_blank"><span class="ng-binding">等待添加</span><!-- ngIf: link.showNew -->
                            </a></li>
                            <!-- end ngRepeat: link in navLinks.help.links -->
                            <li class="topbar-info-btn ng-scope"><a href="#" target="_blank"><span class="ng-binding">等待添加</span><!-- ngIf: link.showNew -->
                            </a></li>
                            <!-- end ngRepeat: link in navLinks.help.links -->
                        </ul>
                    </div>
                </div>
                <!-- end ngIf: navLinks.help.show -->
                <!-- 新版当页帮助 -->
                <!-- ngIf: navLinks.assist.show -->
                <!-- 其他entrance区域 -->
                <!-- ngRepeat: entry in navLinks.entrances -->
                <!-- user -->
                <!-- ngIf: navLinks.user.show -->
                <div class="topbar-left ng-scope">
                    <div id='loginOut' class="dropdown topbar-info-item">
                        <a href="javascript:;" class="dropdown-toggle topbar-btn">
                            <span class="ng-binding">26287****@qq.com</span>
                            <span class="icon-arrow-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- ngRepeat: link in navLinks.user.links -->
                            <li class="topbar-info-btn ng-scope">
                                <a href="/index.php?s=/Public/loginOut.html" target="_self"><span
                                        class="ng-binding">退出</span></a>
                            </li>
                            <!-- end ngRepeat: link in navLinks.user.links -->
                        </ul>
                    </div>
                </div>
                <!-- end ngIf: navLinks.user.show -->
                <!-- 国际化 -->
                <!-- ngIf: navLinks.i18n.show && navLinks.i18n.currentLanguage -->
            </div>
            <!-- ngIf: navLinks.assist.show && helpConfig -->
        </div>
    </div>
    <!-- /topbar -->
</div>
<!-- /header  -->

<div id='sidebar-left' class="viewFramework-body viewFramework-sidebar-full">
    <div class="viewFramework-sidebar">
        <!-- sidebar -->
        <script type="text/javascript">
            document.oncontextmenu = function () {
                return false
            }
        </script>
        <div id="sidebar" product-id="account" class="sidebar-content">
            <!-- ngIf: !loadingState -->
            <div class="sidebar-inner ng-scope">
                <!-- ngIf: versionGreaterThan1_3_21 -->
                <div id='sidebar-icon' class="sidebar-fold ng-scope icon-unfold"></div>
                <!-- end ngIf: versionGreaterThan1_3_21 -->
                <div class="sidebar-nav main-nav">
                    <div class="sidebar-title">
                        <div class="sidebar-title-inner ng-scope"><span
                                class="sidebar-title-icon icon-arrow-down"></span><span
                                class="sidebar-title-text ng-binding">快捷方式菜单</span>
                            <span class="sidebar-manage ng-scope"><a class="icon-setup ng-isolate-scope"></a></span>
                        </div>
                    </div>
                    <ul class="sidebar-trans" style="height:auto;">
                        <!-- ngRepeat: item in productList track by $index -->
                        <li class="nav-item ng-scope">
                            <a href="/index.php?s=/Index/home.html" class="sidebar-trans ng-scope">
                                <div class="nav-icon sidebar-trans"><span class="icon-wo-sitebuild"></span></div>
                                <span class="nav-title ng-binding">首页&nbsp;</span>
                            </a>
                        </li>
                        <!-- end ngRepeat: item in productList track by $index -->
                        <!-- ngRepeat: item in productList track by $index -->
                        <!-- <li class="nav-item ng-scope">
                            <a href="/index.php?s=/Access/roleList.html" class="sidebar-trans ng-scope">
                                <div class="nav-icon sidebar-trans"><span class="icon-rds"></span></div><span class="nav-title ng-binding">角色管理&nbsp;</span>
                            </a>
                        </li> -->
                        <!-- end ngRepeat: item in productList track by $index -->
                    </ul>
                </div>
                <div class="sidebar-nav">
                    <div class="sidebar-title">
                        <div class="sidebar-title-inner ng-scope"><span class="sidebar-title-icon"><span
                                class="icon-arrow-down"></span></span><span
                                class="sidebar-title-text ng-binding">用户中心</span>
					<span class="sidebar-manage ng-scope">
						<a class="icon-setup ng-isolate-scope" title="自定义用户中心快捷入口"></a>
						</span>
                        </div>
                    </div>
                    <ul class="entrance-nav sidebar-trans" id="nav" style="height:auto;">
                        <!-- <li class="nav-item ng-scope active">
                            <a href="#" class="ng-scope">
                                <div class="nav-icon"><span class="icon-account-2"></span></div><span class="nav-title ng-binding">全局</span>
                            </a>
                        </li> -->
                        <li class="nav-item ng-scope">
                            <a href="javascript:;" data-submenu="2" data-count="5" data-url="Admin/System/index"
                               class="ng-scope">
                                <div class="nav-icon"><span class="icon-ecs"></span></div>
                                <span class="nav-title ng-binding">系统</span>
                            </a>
                        </li>
                        <li class="nav-item ng-scope">
                            <a href="javascript:;" data-submenu="3" data-count="4" data-url="Admin/Member/index"
                               class="ng-scope">
                                <div class="nav-icon"><span class="icon-account-2"></span></div>
                                <span class="nav-title ng-binding">用户</span>
                            </a>
                        </li>
                        <li class="nav-item ng-scope">
                            <a href="javascript:;" data-submenu="4" data-count="3" data-url="Admin/Access/index"
                               class="ng-scope">
                                <div class="nav-icon"><span class="icon-yundun"></span></div>
                                <span class="nav-title ng-binding">权限</span>
                            </a>
                        </li>
                        <li class="nav-item ng-scope">
                            <a href="javascript:;" data-submenu="11" data-count="5" data-url="Admin/Database/index"
                               class="ng-scope">
                                <div class="nav-icon"><span class="category-icon icon-yunxunizhuji"></span></div>
                                <span class="nav-title ng-binding">数据</span>
                            </a>
                        </li>
                        <li class="nav-item ng-scope">
                            <a href="javascript:;" data-submenu="13" data-count="3" data-url="Admin/Monitor/index"
                               class="ng-scope">
                                <div class="nav-icon"><span class="icon-yunjiankong"></span></div>
                                <span class="nav-title ng-binding">监控</span>
                            </a>
                        </li>
                        <li class="nav-item ng-scope">
                            <a href="javascript:;" data-submenu="50" data-count="2" data-url="Admin/Addons/index"
                               class="ng-scope">
                                <div class="nav-icon"><span class="category-icon icon-rds"></span></div>
                                <span class="nav-title ng-binding">扩展</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="time" class="time">
                    <!-- <font id="today">2016-03-14 17:21:50</font> -->
                    <font id="today">2016-03-14 17:21:50</font>
                </div>
            </div>
            <!-- end ngIf: !loadingState -->
            <!-- ngIf: loadingState -->
        </div>
        <!-- /sidebar -->
    </div>

    <div id='sidebal-middle' class="viewFramework-product">
        <!-- <div class="viewFramework-product-navbar-bg"></div> -->
        <!-- ngIf: config.productNavBar != 'disabled' -->
        <div class="viewFramework-product-navbar ng-scope hidden">
            <!-- product nav -->
            <div class="product-nav-stage ng-scope product-nav-stage-main">
                <div class="product-nav-scene product-nav-main-scene">
                    <div class="product-nav-title ng-binding">账号管理</div>
                    <!-- 自定义内容插入点，比如商标、logo -->
                    <div customized-content="" class="ng-isolate-scope"></div>
                    <div class="product-nav-list" id="product-nav-list">
                        <ul class="submenu-2 hidden" data-submenu="2">

                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Config/setConfig.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">网站设置</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/System/reg.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">注册设置</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Payment/index.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">支付设置</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Notify/index.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">通知设置</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Config/index.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">配置管理</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="submenu-3 hidden" data-submenu="3">

                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Member/localUser.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">本地用户</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Member/oauth.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">第三方用户</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Member/groupList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">会员等级</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-showchild">
                                <div class="ng-isolate-scope checkChild">
                                    <a href="javascript:;" class="ng-scope">
                                        <div class="nav-icon">
                                            <span class="icon-arrow-down"></span>
                                        </div>
                                        <div class="nav-title ng-binding" ng-bind="item.title">
                                            会员返利
                                        </div>
                                    </a>
                                </div>
                                <!-- ngIf: item.childs -->
                                <ul class="ng-scope ishidden hidden">
                                    <!-- ngRepeat: childItem in item.childs -->
                                    <li>
                                        <div class="ng-isolate-scope">
                                            <a href="javascript:;"
                                               data-url="/index.php?s=/Admin/Member/refereeList.html" class="ng-scope">
                                                <div class="nav-icon"></div>
                                                <div class="nav-title ng-binding">邀请返利列表</div>
                                            </a>
                                        </div>
                                    </li>
                                    <!-- end ngRepeat: childItem in item.childs -->
                                </ul>
                                <!-- end ngIf: item.childs -->
                            </li>
                        </ul>
                        <ul class="submenu-4 hidden" data-submenu="4">

                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Access/authList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">管理列表</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Access/roleList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">角色列表</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Access/nodeList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">节点列表</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="submenu-11 hidden" data-submenu="11">

                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Database/exportList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">备份数据</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Database/importList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">还原数据</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Database/repairList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">优化修复</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Database/zipList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">压缩列表</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Database/fileList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">文件管理</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="submenu-13 hidden" data-submenu="13">

                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Monitor/regCount.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">注册统计</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Monitor/actionLog.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">行为日志</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Monitor/actionCount.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">行为统计</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="submenu-50 hidden" data-submenu="50">

                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Addons/addonList.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">插件管理</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="ng-isolate-scope">
                                    <a href="javascript:;" data-url="/index.php?s=/Admin/Addons/hooks.html"
                                       class="ng-scope">
                                        <div class="nav-icon"></div>
                                        <div class="nav-title ng-binding">钩子管理</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-nav-scene product-nav-sub-scene">
                    <div class="product-nav-title">
                        <!-- ngIf: config.backNav -->
                    </div>
                    <div class="product-nav-list">
                        <ul>
                            <!-- ngRepeat: item in config.subNav -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /product nav -->
        </div>
        <!-- end ngIf: config.productNavBar != 'disabled' -->
        <!-- product nav collapse-->
        <!-- ngIf: config.productNavBar != 'disabled' -->
        <div class="viewFramework-product-navbar-collapse ng-scope hidden">
            <div class="product-navbar-collapse-inner">
                <div class="product-navbar-collapse-bg"></div>
                <div id='icon-left' class="product-navbar-collapse">
                    <span class="icon-collapse-left"></span>
                    <span class="icon-collapse-right"></span>
                </div>
            </div>
        </div>
        <!-- end ngIf: config.productNavBar != 'disabled' -->
        <!-- /product nav collapse-->
        <div class="viewFramework-product-body" id="mainFrameBody">
            <!-- product body -->
            
    <form action="" method="post">
        用户名：<input name="username" type="text" value="">
        密码：<input name="password" type="password" value="">
        <button type="submit">提交</button>
    </form>

            <!-- /product body -->
        </div>
    </div>
</div>
<!-- <div class="aliyun-console-sidebar-tooltip right fade in" title="" content="云服务器ECS&nbsp;" style="top: 120px; left: 50px; display: block;">
    <div class="tooltip-arrow"></div>
    <div class="tooltip-inner ng-binding">云服务器ECS&nbsp;</div>
</div> -->
</body>
</html>