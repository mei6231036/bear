<div class="duya-header" id="duya-header">

    <div class="duya-header-wrap clearfix">

        <div class="duya-header-bd clearfix">

            <h1 id="duya-header-logo" title="虎牙直播-虎牙TV-中国领先的互动直播平台">

                <a href="http://www.huya.com/" class="clickstat" eid="click/navi/logo" eid_desc="点击/导航/logo"><img src="images/logo.png" alt="虎牙直播" width="120" height="36"></a>

            </h1>

            <div class="duya-header-nav">

                <span class="hy-nav-link"><a href="<?=url('/') ?>" class="hy-nav-title clickstat" eid="click/navi/home" eid_desc="点击/导航/首页">首页</a></span>

                <span class="hy-nav-link"><a href="<?=url('/l')?>" class="hy-nav-title hiido_stat clickstat"  hiido_code="10004221" eid="click/navi/zhibo" eid_desc="点击/导航/直播">直播</a></span>

                <div class="hy-nav-expand">

                    <div class="hy-nav-title nav-main" id="nav-main"><a href="<?=url('/cate')?>">分类</a><i class="icon-arrow"></i></div>

                    <div class="nav-expand-list nav-expand-game">

                        <i class="arrow"></i>
							<!-- 111111111111 -->
						<dl class="clearfix"><dt>系统推荐</dt>
						@foreach($res as $val)
						<dd>
						<a class="clickstat" eid="click/navi/game/game1" eid_desc="点击/导航/游戏/游戏1" title="<?=$val['typename']?>" href="<?=url('/cate')?>?id=<?=$val['id']?>" target="_blank">{{ $val['typename'] }}</a>
						</dd>
						@endforeach
						</dl>
						<a href="<?=url('cate/index')?>" class="nav-expand-game-more" target="_blank">更多 <span>&gt;</span></a>
						<!-- 111111111111 -->

                    </div>

                </div>

                <!-- <span class="hy-nav-link"><a href="http://v.huya.com" class="hy-nav-title hiido_stat clickstat" hiido_code="10004227" target="_blank" eid="click/navi/video" eid_desc="点击/导航/视频">视频</a></span> -->

            </div>

            <div class="duya-header-search clearfix" id="J_duyaHdSearch" >

                <form method="get" id="searchForm_id" name="navSearchForm" action="http://www.huya.com/search.php" target="_blank">

                    <input type="text" name="hsk" value="主播、频道、游戏" autocomplete="off">

                    <button type="submit" class="btn-search clickstat" eid="click/search/searchbutton" eid_desc="点击/搜索/搜索按钮"></button>

                </form>

            </div>

            <div class="duya-header-gg clickstat" id="J_duyaHdGg" eid="click/push/navipic" eid_desc="点击/推荐/顶部导航图片"></div>

            <div class="duya-header-control clearfix">

                <div class="hy-nav-right hy-nav-kaibo">

                    <a class="hy-nav-title clickstat" href="http://www.huya.com/e/zhubo" eid="click/navi/kaibo" eid_desc="点击/导航/开播" target="_blank">

                        <i class="hy-nav-icon hy-nav-video-icon"></i>

                        <span class="title">开播</span>

                    </a>

                    <div class="nav-expand-list nav-expand-kaibo">

                        <i class="arrow"></i>

                        <div class="kaibo-nav">

                            <a target="_blank" href="http://www.huya.com/e/zhubo"><i class="hy-nav-video-icon"></i><span>我要开播</span></a>

                            <a target="_blank" href="#"><i class="hy-nav-home-icon"></i><span>公会入驻</span></a>

                        </div>

                    </div>

                </div>

                <div class="hy-nav-right">

                        <span class="title"></span>


                    <div class="nav-expand-list nav-expand-download">

                        <i class="arrow"></i>

                        <div class="download-nav">

                            <a target="_blank" href="http://www.huya.com/download/"><i class="hy-nav-app-icon"></i><span>移动APP</span></a>

                            <a target="_blank" href="http://www.huya.com/download/#players_pc"><i class="hy-nav-play-icon"></i><span>主播工具</span></a>

                            <!-- <a target="_blank" href="http://www.huya.com/download/#tv"><i class="hy-nav-tv-icon"></i><span>虎牙TV版</span></a> -->

                        </div>

                    </div>

                </div>

                <div class="hy-nav-right nav-subscribe success-login">

                    <a class="hy-nav-title new-clickstat" href="http://i.huya.com/index.php?m=Subscribe" target="_blank" report='{"eid":"click/position","position":"click/navi/dingyue"}'>

                        <i class="hy-nav-icon hy-nav-subscribe-icon"></i>

                        <span class="title">订阅</span>

                    </a>

                    <div class="nav-expand-list">

                        <i class="arrow"></i>

                        <div class="subscribe-hd clearfix" style="display:none;">

                            <h5>我订阅的有<em class="subscribe-key">0</em>个正在直播</h5>

                        </div>

                        <div class="subscribe-bd" style="display:none;">

                            <ul class="subscribe-list"></ul>

                            <a class="subscribe-all" href="http://i.huya.com/index.php?m=Subscribe" target="_blank">全部订阅</a>

                        </div>

                        <div class="mod-list-more">

                            <div class="more-loading">

                                <i class="icon-loading"></i>

                                <em>正在加载您的订阅...</em>

                            </div>

                            <div class="more-empty">

                                <i class="icon-empty"></i>

                                <p>暂无订阅的直播。<br/><em>你可以在主播的播放页进行订阅喔！</em></p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="hy-nav-right hy-nav-history">

                        <span class="title"></span>


                    <div class="nav-expand-list nav-expand-history">

                        <i class="arrow"></i>

                        <div class="load-history">

                            <div class="mod-list-more">

                                <div class="more-loading">

                                    <i class="icon-loading"></i>

                                    <em></em>

                                </div>

                            </div>                            

                        </div>

                        <a href="http://i.huya.com/index.php?m=Subscribe&watch=1" class="nav-expand-history-more J_gNavLogin" style="display:none" target="_blank">更多&gt;</a>

                    </div>

                </div>

                <!-- 判断用户是否登录 -->
                @if(!isset($user)) 
                <div class="hy-nav-right un-login" style="display:block">

                    <div class="hy-nav-title">

                        <i class="hy-nav-icon hy-nav-login-icon"></i>

                        <div class="un-login-btn">

                            <a class="clickstat" id="nav-login" href="login" eid="click/navi/sign" eid_desc="点击/导航/登录">登录</a>

                            <i>|</i>

                            <a class="clickstat" id="nav-regiest" href="register" eid="click/navi/login" eid_desc="点击/导航/注册">注册</a>

                        </div>

                    </div>

                </div>
                @else 
                <div class="hy-nav-right nav-user success-login" style="display:block">

                    <a class="nav-user-title" href="http://i.huya.com/" target="_blank">

                        <img id="login-userAvatar" src="images/10001.jpg" alt="头像" />

                        <span id="login-username" title="{{$user->nickname}}">{{$user->nickname}}</span>

                        <i></i>

                    </a>

                    <div class="nav-expand-list">

                        <i class="arrow"></i>

                        <div class="tt-user-card">

                            <a class="btn-exit" id="nav-loggout" href="login_out"><i class="hy-nav-exit-icon"></i><span>退出</span></a>

                            <div class="u-info">

                                <a class="avatar" id="J_huyaNavUserCardAvatar" href="http://i.huya.com/" target="_blank">

                                    <img src="images/10001.jpg" id="J_huyaNavUserCardAvatarImg" />

                                </a>

<<<<<<< HEAD
                                <p class="nick" id="J_huyaNavUserCardNick">...</p>

                                <p class="user-sign" id="J_huyaNavUserCardSign">...</p>
=======
                                <p class="nick" id="J_huyaNavUserCardNick">{{$user->nickname}}</p>

                                <p class="user-sign" id="J_huyaNavUserCardSign">
                                    @if($user->signature == '')
                                    <a href="">点击编辑属于您的个性签名</a>
                                    @else
                                    <a href="">{{$user->signature}}</a>
                                    @endif
                                </p>
>>>>>>> a739b7e487ab7b9cb0541a091cdc7ba714aa1e67

                                <div class="exp clearfix">

                                    <div class="between">

                                        <span class="from" id="J_huyaNavUserCardExpFrom">LV-{{$user->level}}</span>

                                        <div class="bar-cnt">

                                            <p id="J_huyaNavUserCardBarInfo">
                                                亲，你还要{{200-$user->integral}}点经验才能升级呢
                                            </p>

                                            <p class="bar">

                                                <i id="J_huyaNavUserCardExpBar" style="width: {{$user->integral/200*100}}% ;"><b class="J_huyaNavUserCardExpText"></b></i>

                                                <span class="J_huyaNavUserCardExpText">{{$user->integral}}/200</span>

                                            </p>

                                        </div>

                                        <span class="to" id="J_huyaNavUserCardExpTo">LV-{{$user->level+1}}</span>

                                    </div>

                                </div>

                            </div>

                            <div class="u-assets">

                                <div class="bd">

                                    <span class="type-name">资产</span>

                                    <ul class="type">

                                        <li><i class="gold-bean"></i><em id="J_huyaNavUserCardAssetsGb">{{$user->jindou}}</em></li>

                                        <li class="type-ticket"><i class="gold-ticket"></i><em id="J_huyaNavUserCardAssetsTk">{{$user->jin_quan}}</em></li>

                                        <li><i class="silver-bean"></i><em id="J_huyaNavUserCardAssetsSb">{{$user->yindou}}</em></li>

                                    </ul>

                                    <a class="topup new-clickstat" target="_blank" href="http://i.huya.com/?evt=recharge" report='{"eid":"click/position","position":"header/usercard/recharge"}'>充值</a>

                                </div>

                            </div>

                            <div class="u-task loading" id="J_huyaNavUserCardTask">

                            </div>

                            <div class="u-links">

                                <ul>

                                    <li class="links-i">

                                        <a href="http://i.huya.com/" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"header/usercard/entrance1"}'>                                        

                                            <i></i>

                                            <p>个人中心</p>

                                        </a>

                                    </li>

                                    <li class="links-noble">

                                        <a href="http://i.huya.com/index.php?m=NobleSys" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance2"}'>

                                            <i></i>

                                            <p>我的贵族</p>

                                        </a>

                                    </li>

                                    <li class="links-msg" id="J_huyaNavUserMsg">

                                        <a href="http://i.huya.com/index.php?m=Msg&do=listMsg" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance3"}'>

                                            <i></i>

                                            <p>我的消息</p>

                                        </a>

                                        <b class="dot" id="J_huyaNavUserMsgDot"></b>

                                    </li>

                                    <li class="links-play">

                                        <a href="http://www.huya.com/e/zhubo" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance4"}'>

                                            <i></i>

                                            <p>我要直播</p>

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
                @endif
            </div>

            <div class="duya-header-tips">

                <em class="close-tips">&times;</em>

                <p class="tips-top">有新的直播内容，<span class="refresh-current">刷新看看</span></p>

                <div id="refresh-wrap">

                    <h5>你订阅的主播信息</h5>

                    <div class="refresh-tips"></div>

                    <h6><input type="checkbox" id="checkTips"><label for="checkTips">今天内不提醒</label></h6>

                </div>

            </div>

        </div>

    </div>

</div>

<script data-fixed="true">

var UDB_SDK_SWTICH = true;

</script>