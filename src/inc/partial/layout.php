<?php
$this->addStyle("admin.css");
$this->addStyle("jquery.fancybox.css");
$this->addScript("ajaxify.min.js");
$this->addScript("jquery.fancybox.js");
$this->addScript("chart.min.js");
$this->addScript("admin.js");
?>
<div class='leftpane'>
  <center>
    <h3>logSys<br/><span style='font-size: 12px;'><?php echo $this->manifest['version'];?><a style='display: block;' href='http://subinsb.com/php-logsys?utm_source=lobby_logsys.admin' target='_blank'>Documentation</a></span></h3>
  </center>
  <div>
    <?php
    $links = array(
      "/admin" => "Home",
      "/admin/users" => "Users",
      "/admin/tokens" => "Tokens",
      "/admin/stats" => "Stats",
      "/admin/config" => "Settings"
    );
    foreach($links as $link => $name){
      echo $this->l($link, $name, (\Lobby::curPage() == "/app/fr-logsys$link" ? "class='active'" : ""));
    }
    ?>
  </div>
</div>
<div class='rightpane'>
  <div class='contentLoading'>
    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="200px" height="200px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve" ><path fill="#FF6700" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z"><animateTransform attributeType="xml" attributeName="transform"type="rotate"from="0 25 25"to="360 25 25" dur="0.6s" repeatCount="indefinite"/></path></svg>
  </div>
