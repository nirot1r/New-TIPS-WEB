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
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#information">BANの情報</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#evidence">証拠</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#objection">BANを解除する</a>
                        </li>
                    </ul>

                    <div id="pageData" class="tab-content">
                        <div class="tab-pane fade active show" id="information">
                            <h2 class="margin-top">BANの情報</h2>

                            <table class="nirot1r-table">
                                <tbody>
                                    <tr>
                                        <td class="nirot1r-table-icon"><i class="fa fa-user-times" aria-hidden="true"></i></td>
                                        <td class="nirot1r-table-header">BANされた人</td>
                                        <td class="nirot1r-table-data">nirot1r</td>
                                    </tr>
                                    <tr>
                                        <td class="nirot1r-table-icon"><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                        <td class="nirot1r-table-header">BANの理由</td>
                                        <td class="nirot1r-table-data">うんち！</td>
                                    </tr>
                                    <tr>
                                        <td class="nirot1r-table-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                                        <td class="nirot1r-table-header">BANされた日時</td>
                                        <td class="nirot1r-table-data">2018/08/10 11:45:14 JST</td>
                                    </tr>
                                    <tr>
                                        <td class="nirot1r-table-icon"><i class="fa fa-tag" aria-hidden="true"></i></td>
                                        <td class="nirot1r-table-header">BANの種類</td>
                                        <td class="nirot1r-table-data">期限付きBAN</td>
                                    </tr>
                                    <tr>
                                        <td class="nirot1r-table-icon"><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                        <td class="nirot1r-table-header">解除される時間</td>
                                        <td class="nirot1r-table-data">2018/09/10 11:45:14 JST</td>
                                    </tr>
                                    <tr>
                                        <td class="nirot1r-table-icon"><i class="fa fa-user-plus" aria-hidden="true"></i></td>
                                        <td class="nirot1r-table-header">BANした人</td>
                                        <td class="nirot1r-table-data">nirot1r</td>
                                    </tr>
                                    <tr>
                                        <td class="nirot1r-table-icon"><i class="fa fa-server" aria-hidden="true"></i></td>
                                        <td class="nirot1r-table-header">BANしたサーバー</td>
                                        <td class="nirot1r-table-data">yululi Server</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="tab-pane fade" id="evidence">
                            <h2 class="margin-top">証拠一覧</h2>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="card mb-3">
                                        <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
                                        <div class="card-footer text-muted">
                                            2 日前
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card mb-3">
                                        <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
                                        <div class="card-footer text-muted">
                                            2 日前
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card mb-3">
                                        <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
                                        <div class="card-footer text-muted">
                                            2 日前
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card mb-3">
                                        <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
                                        <div class="card-footer text-muted">
                                            2 日前
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card mb-3">
                                        <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
                                        <div class="card-footer text-muted">
                                            2 days ago
                                        </div>
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