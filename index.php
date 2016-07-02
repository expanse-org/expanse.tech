<?php include_once('i8n/i8n.php'); ?>
<?php include_once('header.php'); ?>
<div class="navspacer">&nbsp;</div>
<section class="section1">
  <video autoplay loop muted poster="images/spacebg.jpg" id="bgvid">
    <source src="video/galaxy-mod.mp4" type="video/mp4">
    <source src="video/galaxy-mod.webm" type="video/webm">
  </video>
  <div id="shapebg">
    <div class="headline"><?php echo $i8n['main_headline']; ?></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 rocket wow fadeInUp"  data-wow-duration="1.5s"></div>
        <div class="col-lg-4 col-md-5 col-sm-5 entry_text"><?php echo $i8n['main_description']; ?>
          <div id="read_more" class="more_btn"><?php echo $i8n['main_readmore']; ?> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about" class="section2">
  <div class="container wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
    <div id="main_text" class="row  globe_grafix">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h1><?php echo $i8n['main_about_what']; ?></h1>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="linie_blue"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="main_text globe_grafix"><?php echo $i8n['main_about_left']; ?></div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="main_text2 globe_grafix"><?php echo $i8n['main_about_right']; ?></div>
      </div>
    </div>
    <div class="row video_area">
      <div class="col-lg-2 col-md-1 col-sm-12">
        <div class=""></div>
      </div>
      <div class="col-lg-8 col-md-10 col-sm-12">
        <div class="video_holder">
          <iframe width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen src="https://www.youtube.com/embed/RWPeWQrnYVg"></iframe>
        </div>
      </div>
      <div class="col-lg-2 col-md-1 col-sm-12">
        <div class=""></div>
      </div>
    </div>
  </div>
</section>
<section class="section3">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 circles wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1s">
        <div class="circle01"><i class="fa fa-file-code-o" aria-hidden="true"></i></div>
        <p class="title justify"><?php echo $i8n['main_about_title1']; ?></p>
        <p class="subtitle"><?php echo $i8n['main_about_desc1']; ?></p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 circles wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
        <div class="circle01"><i class="fa fa-cloud" aria-hidden="true"></i></div>
        <p class="title justify"><?php echo $i8n['main_about_title2']; ?></p>
        <p class="subtitle"><?php echo $i8n['main_about_desc2']; ?></p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 circles wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
        <div class="circle01"><i class="fa fa-bullseye" aria-hidden="true"></i></div>
        <p class="title justify"><?php echo $i8n['main_about_title3']; ?></p>
        <p class="subtitle"><?php echo $i8n['main_about_desc3']; ?></p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 circles wow fadeInUp" data-wow-delay="0.9s" data-wow-duration="1s">
        <div class="circle01"><i class="fa fa-globe" aria-hidden="true"></i></div>
        <p class="title justify"><?php echo $i8n['main_about_title4']; ?></p>
        <p class="subtitle"><?php echo $i8n['main_about_desc4']; ?></p>
      </div>
    </div>
  </div>
</section>

<!-- DOWNLOADS MODALS -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModelLabel_gexposx" aria-hidden="true">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="ModelLabel_gexposx">GEXP OSX</h1>
        </div>
        <div class="modal-body">
          <div class="btn0"><a href="/downloads/gexp-darwin-x86.tar.gz">gexp-darwin-x86.tar.gz</a></div>
          <div class="btn0"><a href="/downloads/gexp-darwin-x64.tar.gz">gexp-darwin-x64.tar.gz</a></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="ModelLabel_gexpwin" aria-hidden="true">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="ModelLabel_gexpwin">GEXP WIN</h1>
        </div>
        <div class="modal-body">
          <div class="btn0"><a href="/downloads/gexp-windows-x86.zip">gexp-windows-x86.zip</a></div>
          <div class="btn0"><a href="/downloads/gexp-windows-x64.zip">gexp-windows-x64.zip</a></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="ModelLabel_gexplinux" aria-hidden="true">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="ModelLabel_gexplinux">GEXP LINUX</h1>
        </div>
        <div class="modal-body">
          <div class="btn0"><a href="/downloads/gexp-linux-x86.tar.gz">gexp-linux-x86.tar.gz</a></div>
          <div class="btn0"><a href="/downloads/gexp-linux-x64.tar.gz">gexp-linux-x64.tar.gz</a></div>
          <div class="btn0"><a href="/downloads/gexp-linux-arm.tar.gz">gexp-linux-arm.tar.gz</a></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="ModelLabel_walletosx" aria-hidden="true">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="ModelLabel_walletosx">Expanse Mist dApp Wallet v0.7.2 (OSX)</h1>
        </div>
        <div class="modal-body">
          <div class="btn0"><a href="/downloads/Expanse-Wallet-macosx-0-7-2.tar.gz">Expanse-Wallet-macosx-0-7-2.tar.gz (x64)</a></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="ModelLabel_walletwin" aria-hidden="true">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="ModelLabel_walletwin">Expanse Mist dApp Wallet v0.7.2 (Windows)</h1>
        </div>
        <div class="modal-body">
          <div class="btn0"><a href="/downloads/Expanse-Wallet-win32-0-7-2.zip">Expanse-Wallet-win32-0-7-2.zip (x86)</a></div>
          <div class="btn0"><a href="/downloads/Expanse-Wallet-win64-0-7-2.zip">Expanse-Wallet-win64-0-7-2.zip (x64)</a></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="ModelLabel_walletlinux" aria-hidden="true">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="ModelLabel_walletlinux">Expanse Mist dApp Wallet v0.7.2 (Linux)</h1>
        </div>
        <div class="modal-body">
          <div class="btn0"><a href="/downloads/Expanse-Wallet-linux32-0-7-2.tar.gz">Expanse-Wallet-linux32-0-7-2.tar.gz (x86)</a></div>
          <div class="btn0"><a href="/downloads/Expanse-Wallet-linux64-0-7-2.tar.gz">Expanse-Wallet-linux64-0-7-2.tar.gz (x64)</a></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DOWNLOADS -->
<section id="downloads" class="section4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h1><?php echo $i8n['main_downloads_header']; ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <div class="linie_blue_center"></div>
      </div>
    </div>
  </div>
  <div class="container top_space wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1.8s">
    <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12 text_holder">
        <p class="title"><?php echo $i8n['main_downloads_gexptitle']; ?></p>
        <p class="subtitle"><?php echo $i8n['main_downloads_gexpdesc']; ?></p>
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 circles" data-toggle="modal" data-target="#myModal">
              <div class="circle02"><i class="fa fa-apple" aria-hidden="true"></i></div>
              <div class="btn0"><?php echo $i8n['main_downloads_download']; ?></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 circles" data-toggle="modal" data-target="#myModal2">
              <div class="circle02"><i class="fa fa-windows" aria-hidden="true"></i></div>
              <div class="btn0"><?php echo $i8n['main_downloads_download']; ?></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 circles" data-toggle="modal" data-target="#myModal3">
              <div class="circle02"><i class="fa fa-linux" aria-hidden="true"></i></div>
              <div class="btn0" ><?php echo $i8n['main_downloads_download']; ?></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 circles">
              <div class="circle02"><a href="//github.com/expanse-project/go-expanse"><i class="fa fa-github" aria-hidden="true"></i></a></div>
              <div class="btn0"><a href="//github.com/expanse-project/go-expanse">Github Source</a></div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <div class="linie_blue_full"></div>
      </div>
    </div>
  </div>
  <div class="container top_space wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1.8s">
    <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12 text_holder">
        <p class="title"><?php echo $i8n['main_downloads_wallettitle']; ?></p>
        <p class="subtitle"><?php echo $i8n['main_downloads_walletdesc']; ?></p>
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 circles" data-toggle="modal" data-target="#myModal4">
              <div class="circle02" ><i class="fa fa-apple" aria-hidden="true"></i></div>
              <div class="btn0"><?php echo $i8n['main_downloads_download']; ?></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 circles" data-toggle="modal" data-target="#myModal5">
              <div class="circle02"><i class="fa fa-windows" aria-hidden="true"></i></div>
              <div class="btn0"><?php echo $i8n['main_downloads_download']; ?></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 circles"  data-toggle="modal" data-target="#myModal6"">
              <div class="circle02"><i class="fa fa-linux" aria-hidden="true"></i></div>
              <div class="btn0"><?php echo $i8n['main_downloads_download']; ?></div>
            </div>
              <div class="col-lg-3 col-md-3 col-sm-6 circles">
              <div class="circle02"><a href="//github.com/expanse-org/meteor-dapp-wallet"><i class="fa fa-github" aria-hidden="true"></i></a></div>
              <div class="btn0"><a href="//github.com/expanse-org/meteor-dapp-wallet">Github Source</a></div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 world">
        <h2><?php echo $i8n['main_explore_header']; ?></h2>
      </div>
    </div>
    <div class="row mtop25">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="panel panel-default panel-transparent"> <a href="//www.borderless.tech">
          <div class="panel-body center"><img src="images/borderless.png" width="100" height="100" alt=""/></div>
          <div class="panel-heading feature_text">Borderless</div>
          </a> </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="panel panel-default panel-transparent">
          <div class="panel-body center"><img src="images/expanse_logo_100.png" width="100" height="100" alt=""/></div>
          <div class="panel-heading feature_text">Expanse DAO</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DOCUMENTATION -->
<section id="documentation" class="section6">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h1><?php echo $i8n['main_documentation_header']; ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <div class="linie_blue_center"></div>
      </div>
    </div>
  </div>
  <div class="container top_space wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1.8s">
    <div class="row">
      <div class="list_space col-lg-4 col-md-12 col-sm-12 text_holder">
        <p class="title"><?php echo $i8n['main_documentation_title']; ?></p>
        <p class="d_text"><?php echo $i8n['main_documentation_desc']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 text_holder">
        <p class="title"><?php echo $i8n['main_documentation_start']; ?></p>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="http://www.expanse.tech/docs/guide#install"><?php echo $i8n['main_documentation_install']; ?></a></li>
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="http://www.expanse.tech/docs/guide#basics"><?php echo $i8n['main_documentation_concepts']; ?></a></li>
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="http://www.expanse.tech/docs/guide#backup"><?php echo $i8n['main_documentation_backup']; ?></a></li>
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="http://www.expanse.tech/docs/guide#mining"><?php echo $i8n['main_documentation_mining']; ?></a></li>
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="http://www.expanse.tech/docs/guide#accounts"><?php echo $i8n['main_documentation_accounts']; ?></a></li>
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="http://www.expanse.tech/docs/guide#transactions"><?php echo $i8n['main_documentation_tx']; ?></a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 text_holder">
        <p class="title"><?php echo $i8n['main_documentation_tech']; ?></p>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="http://www.expanse.tech/docs/guide"><?php echo $i8n['main_documentation_guide']; ?></a></li>
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="http://www.expanse.tech/docs/roadmap.pdf"><?php echo $i8n['main_documentation_roadmap']; ?></a></li>
        </ul>
        <a href="http://www.expanse.tech/docs/Expanse_whitepaper.pdf">
        <div class="btn3"><?php echo $i8n['main_documentation_whitepaper']; ?></div>
        </a> </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section id="team" class="section7">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <div class="dark"><?php echo $i8n['main_team_heading']; ?></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <div class="linie_blue_center"></div>
      </div>
    </div>
  </div>
  <div class="container top_space wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1.5s">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm01"></div>
        <p class="name_text">Christopher Franko</p>
        <p class="title_text"><?php echo $i8n['main_team_title_chris']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_chris']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm02"></div>
        <p class="name_text">Daniel Conway</p>
        <p class="title_text"><?php echo $i8n['main_team_title_dan']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_dan']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm03"></div>
        <p class="name_text">James Clayton</p>
        <p class="title_text"><?php echo $i8n['main_team_title_james']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_james']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm04"></div>
        <p class="name_text">Marcia Danzeisen</p>
        <p class="title_text"><?php echo $i8n['main_team_title_marcia']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_marcia']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm05"></div>
        <p class="name_text">Esaias Tong</p>
        <p class="title_text"><?php echo $i8n['main_team_title_esias']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_esias']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm06"></div>
        <p class="name_text">Timothée Gimbert</p>
        <p class="title_text"><?php echo $i8n['main_team_title_tim']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_tim']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm07"></div>
        <p class="name_text">Sandro Ieva</p>
        <p class="title_text"><?php echo $i8n['main_team_title_sandro']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_sandro']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm08"></div>
        <p class="name_text">Dave Wyrm</p>
        <p class="title_text"><?php echo $i8n['main_team_title_dave']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_dave']; ?></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 circles">
        <div class="team_pic tm09"></div>
        <p class="name_text">Nathan Patten</p>
        <p class="title_text"><?php echo $i8n['main_team_title_nathan']; ?></p>
        <p  class="team_text"><?php echo $i8n['main_team_desc_nathan']; ?></p>
      </div>
    </div>
  </div>
</section>

<!-- COMMUNITY -->
<section id="community" class="section8">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h1><?php echo $i8n['main_community_heading']; ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <div class="linie_white_center"></div>
      </div>
    </div>
  </div>
  <div class="container top_space wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1.8s">
    <div class="row">
      <div class="list_space col-lg-4 col-md-4 col-sm-12 text_holder">
        <p class="title"><a href="//forum.expanse.tech"><?php echo $i8n['main_community_title']; ?></a></p>
        <p class="d_text"><?php echo $i8n['main_community_desc']; ?></p>
        <p class="sub_head"><?php echo $i8n['main_community_featured']; ?></p>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="//forum.expanse.tech/category/1/announcements"><?php echo $i8n['main_community_subforum1']; ?></a></li>
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="//forum.expanse.tech/category/6/development-technical-discussion"><?php echo $i8n['main_community_subforum2']; ?></a></li>
          <li><i class="fa-li fa fa-long-arrow-right"></i><a href="//forum.expanse.tech/category/8/contracts-dapps"><?php echo $i8n['main_community_subforum3']; ?></a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 text_holder">
        <p class="title"><?php echo $i8n['main_community_interact']; ?></p>
        <p class="d_text"><?php echo $i8n['main_community_interact_desc']; ?></p>
        <a href="//slack.expanse.tech">
        <div class="slack_btn"></div>
        </a><a href="irc://irc.freenode.net/expanse">
        <div class="irc_btn"></div>
        </a> </div>
      <div class="col-lg-4 col-md-4 col-sm-12 text_holder">
        <p class="title"><?php echo $i8n['main_community_social']; ?></p>
        <a href="//blog.expanse.tech">
        <div class="btn4"><?php echo $i8n['main_community_blog']; ?></div>
        </a>
        <div class="btn_row"> <a href="//www.facebook.com/groups/expanseofficial">
          <div class="btn_f"><i class="fa fa-facebook" aria-hidden="true"></i></div>
          </a> <a href="//www.twitter.com/expanseofficial">
          <div class="btn_t"><i class="fa fa-twitter" aria-hidden="true"></i></div>
          </a> <a href="//www.reddit.com/r/expanseofficial">
          <div class="btn_r"><i class="fa fa-reddit" aria-hidden="true"></i></div>
          </a> </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>
