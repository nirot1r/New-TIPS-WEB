<?php
    include "../inc/config.php";

    if(!isset($_GET["punishID"])) {

    }
    
    $punishID = htmlspecialchars($_GET["punishID"]);

    $title = "Punish #".$punishID;
    include "../inc/header.php";
?>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="alert alert-dismissible alert-success">
                        このBANは、解除されています。
                    </div>
                    <h1>Punish #<?= $punishID ?></h1>

                    <ul class="nav nav-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" data-toggle="tab" href="#information">BANの情報</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#objection">BANを解除する</a>
                        </li>
                    </ul>

                    <div id="pageData" class="tab-content">
                        <div class="tab-pane fade active show" id="information">
                            <h2 class="margin-top">BANの情報</h2>
                            
                            <div class="nirot1r-card bg-dark text-light">
                                <div class="nirot1r-icon"><i class="fa fa-user-times" aria-hidden="true"></i></div>
                                <div class="nirot1r-content">nirot1r</div>
                                <div class="nirot1r-title">BANされた人</div>
                            </div>

                            <div class="nirot1r-card bg-dark text-light">
                                <div class="nirot1r-icon"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                                <div class="nirot1r-content-min">うんち！</div>
                                <div class="nirot1r-title">BANの理由</div>
                            </div>

                            <div class="nirot1r-card bg-dark text-light">
                                <div class="nirot1r-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                <div class="nirot1r-content-min">2018/08/10 11:45:14 JST</div>
                                <div class="nirot1r-title">BANされた日時</div>
                            </div>

                            <div class="row">
                            
                                <div class="col-sm-6">

                                    <div class="nirot1r-card bg-warning text-light">
                                        <div class="nirot1r-icon"><i class="fa fa-server" aria-hidden="true"></i></div>
                                        <div class="nirot1r-content">期限ありBAN</div>
                                        <div class="nirot1r-title">BANの種類</div>
                                    </div>

                                    <div class="nirot1r-card bg-warning text-light">
                                        <div class="nirot1r-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                        <div class="nirot1r-content-min">2018/09/10 11:45:14 JST</div>
                                        <div class="nirot1r-title">解除される時間</div>
                                    </div>

                                </div>
                            
                                <div class="col-sm-6">

                                    <div class="nirot1r-card bg-info text-light">
                                        <div class="nirot1r-icon"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                                        <div class="nirot1r-content">nirot1r</div>
                                        <div class="nirot1r-title">BANした人</div>
                                    </div>

                                    <div class="nirot1r-card bg-info text-light">
                                        <div class="nirot1r-icon"><i class="fa fa-server" aria-hidden="true"></i></div>
                                        <div class="nirot1r-content">yululi Server</div>
                                        <div class="nirot1r-title">BANしたサーバー</div>
                                    </div>

                                </div>
                                
                            </div>

                        </div>

                        <div class="tab-pane fade" id="objection">
                            <h2 class="margin-top">異議申し立て</h2>
                        </div>

                    </div>

                </div>
<?php include "../inc/sidebar.php"; ?>
            </div>
        </div>
<?php include "../inc/footer.php"; ?>