<body class="loggedin">
    <div class="header radius3">
        <div class="headerinner">
            <a href="#">
                <img src="<?=base_url();?>images/starlight_admin_template_logo_small.png" alt="" />
            </a>    
            <div class="headright">
                <div class="headercolumn">&nbsp;</div>
                <div id="searchPanel" class="headercolumn">
                    <div class="searchbox">
                        <form action="#" method="post">
                            <input type="text" id="keyword" name="keyword" class="radius2" value="Buscar" /> 
                        </form>
                    </div>
                </div>
                <div id="notiPanel" class="headercolumn">
                    <div class="notiwrapper">
                        <a href="<?=base_url();?>ajax/messages.html" class="notialert radius2">5</a>
                        <div class="notibox">
                            <ul class="tabmenu">
                                <li class="current">
                                    <a href="<?=base_url();?>ajax/messages.html" class="msg">
                                        Messages (2)
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>ajax/activities.html" class="act">
                                        Recent Activity (3)
                                    </a>
                                </li>
                            </ul>
                            <br clear="all" />
                            <div class="loader">
                                <img src="<?=base_url();?>images/loaders/loader3.gif" alt="Loading Icon" /> Loading...</div>
                            <div class="noticontent"></div>
                        </div>
                    </div>
                </div>
                <div id="userPanel" class="headercolumn">
                    <a href="#" class="userinfo radius2">
                        <img src="<?=base_url();?>images/avatar.png" alt="" class="radius2" />
                        <span><strong><?= $this->session->userdata('usuario') ?></strong></span>
                    </a>
                    <div class="userdrop">
                        <ul>
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Pay</a></li>
                            <li><a href="index.html">Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    