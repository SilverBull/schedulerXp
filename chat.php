<!DOCTYPE html>
<html lang="en">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php
include_once 'header.php';
?>

<body>
    <div class="main-wrapper">
        <?php
        include_once 'top_menu.php';
        include_once 'menu.php';
        ?>
        <div class="page-wrapper">
            <div class="chat-main-row">
                <div class="chat-main-wrapper">
                    <div class="col-lg-9 message-view chat-view">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="navbar">
                                    <div class="user-details mr-auto">
                                        <div class="float-left user-img m-r-10">
                                            <a href="profile.html" title="Persona Acaso"><img src="assets/img/user-05.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                        </div>
                                        <div class="user-info float-left">
                                            <a href="profile.html"><span class="font-bold">Persona Acaso</span> <i class="typing-text">Sta scrivendo...</i></a>
                                            <span class="last-seen">Ultimo accesso 09:50</span>
                                        </div>
                                    </div>
                                    <div class="search-box">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="input-group-append">
                                                <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="nav custom-menu">
                                        <li class="nav-item">
                                            <a href="#chat_sidebar" class="nav-link task-chat profile-rightbar float-right" id="task_chat"><i class="fa fa-user"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="voice-call.html"><i class="fa fa-phone"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="video-call.html"><i class="fa fa-video-camera"></i></a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-action">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Elimina conversazione</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Impostazioni</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <div class="chat-wrap-inner">
                                        <div class="chat-box">
                                            <div class="chats">
                                                <div class="chat chat-right">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Ciao, cosa posso fare per te?</p>
                                                                <span class="chat-time">08:30</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-line">
                                                    <span class="chat-date">10 Novembre 2020</span>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.html" class="avatar">
                                                            <img alt="Jennifer Robinson" src="assets/img/user-05.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Il ciclo di produzione ha un problema</p>
                                                                <p>Come devo fare? </p>
                                                                <span class="chat-time">08:35</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-right">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Dove?</p>
                                                                <span class="chat-time">08:40</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Descrivimi il problema nello specifico</p>
                                                                <span class="chat-time">8:42</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <div class="message-bar">
                                    <div class="message-inner">
                                        <a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
                                        <div class="message-area">
                                            <div class="input-group">
                                                <textarea class="form-control" placeholder="Scrivi messaggio..."></textarea>
                                                <span class="input-group-append">
                                                    <button class="btn btn-primary" type="button"><i class="fa fa-send"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="chat_sidebar">
                        <div class="chat-window video-window">
                            <div class="fixed-header">
                                <ul class="nav nav-tabs nav-tabs-bottom">
                                    <li class="nav-item"><a class="nav-link" href="#calls_tab" data-toggle="tab">Chiama</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="#profile_tab" data-toggle="tab">Profilo</a></li>
                                </ul>
                            </div>
                            <div class="tab-content chat-contents">
                                <div class="content-full tab-pane" id="calls_tab">
                                    <div class="chat-wrap-inner">
                                        <div class="chat-box">
                                            <div class="chats">
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.html" class="avatar">
                                                            <img alt="Tizio Qualunque" src="assets/img/user-03.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">Tu</span> <span class="chat-time">08:35</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">phone_missed</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <span class="call-description">Persona Acaso chiamata persa</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.html" class="avatar">
                                                            <img alt="Persona Acaso" src="assets/img/user-05.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">Persona Acaso</span> <span class="chat-time">08:35</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">call_end</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details"><span class="call-description">Chiamata terminata</span></div>
                                                                        <div class="call-timing">Durata: <strong>5 min 57 sec</strong></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-line">
                                                    <span class="chat-date">11 Novembre 2020</span>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.html" class="avatar">
                                                            <img alt="Cristina Groves" src="assets/img/user-03.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">Tu</span> <span class="chat-time">08:35</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">ring_volume</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <a href="#" class="call-description call-description--linked" data-qa="call_attachment_link">Chiamata Persona ...</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-full tab-pane show active" id="profile_tab">
                                    <div class="display-table">
                                        <div class="table-row">
                                            <div class="table-body">
                                                <div class="table-content">
                                                    <div class="chat-profile-img">
                                                        <div class="edit-profile-img">
                                                            <img src="assets/img/user-03.jpg" alt="">
                                                            <span class="change-img">Cambia immagina</span>
                                                        </div>
                                                        <h3 class="user-name m-t-10 mb-0">Tizio Qualunque</h3>
                                                        <small class="text-muted">CTO</small>
                                                        <a href="edit-profile.html" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="chat-profile-info">
                                                        <ul class="user-det-list">
                                                            <li>
                                                                <span>Username:</span>
                                                                <span class="float-right text-muted">@tizio_qualunque</span>
                                                            </li>
                                                            <li>
                                                                <span>DOB:</span>
                                                                <span class="float-right text-muted">3 Marzo</span>
                                                            </li>
                                                            <li>
                                                                <span>Email:</span>
                                                                <span class="float-right text-muted">t.qualunque@mm.com</span>
                                                            </li>
                                                            <li>
                                                                <span>Telefono:</span>
                                                                <span class="float-right text-muted"> 333 333 3333</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="transfer-files">
                                                        <ul class="nav nav-tabs nav-tabs-solid nav-justified mb-0">
                                                            <li class="nav-item"><a class="nav-link active" href="#all_files" data-toggle="tab">Tutti i file</a></li>
                                                            <li class="nav-item"><a class="nav-link" href="#my_files" data-toggle="tab">Miei file</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="all_files">
                                                                <ul class="files-list">
                                                                    <li>
                                                                        <div class="files-cont">
                                                                            <div class="file-type">
                                                                                <span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
                                                                            </div>
                                                                            <div class="files-info">
                                                                                <span class="file-name text-ellipsis">Ciclo_produttivo2020.xls</span>
                                                                                <span class="file-author"><a href="#">Persona Qualunque</a></span> <span class="file-date">31 Maggio 2020, 10:00</span>
                                                                            </div>
                                                                            <ul class="files-action">
                                                                                <li class="dropdown dropdown-action">
                                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Condividi</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane" id="my_files">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="drag_files" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Drag and drop files upload</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form id="js-upload-form">
                                <div class="upload-drop-zone" id="drop-zone">
                                    <i class="fa fa-cloud-upload fa-2x"></i> <span class="upload-text">Just drag and drop files here</span>
                                </div>
                                <h4>Uploading</h4>
                                <ul class="upload-list">
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-photo"></i> photo.png
                                            </div>
                                            <div class="file-size">1.07 gb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">37% done</div>
                                    </li>
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-file"></i> task.doc
                                            </div>
                                            <div class="file-size">5.8 kb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">37% done</div>
                                    </li>
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-photo"></i> dashboard.png
                                            </div>
                                            <div class="file-size">2.1 mb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">Completed</div>
                                    </li>
                                </ul>
                            </form>
                            <div class="m-t-30 text-center">
                                <button class="btn btn-primary submit-btn">Add to upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add_group" class="modal fade">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Create a group</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Groups are where your team communicates. They’re best when organized around a topic — #leads, for example.</p>
                            <form>
                                <div class="form-group">
                                    <label>Group Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Send invites to: <span class="text-muted-light">(optional)</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="m-t-50 text-center">
                                    <button class="btn btn-primary submit-btn">Create Group</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add_chat_user" class="modal fade " role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Create Chat Group</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group m-b-30">
                                <input placeholder="Search to start a chat" class="form-control search-input" id="btn-input" type="text">
                                <span class="input-group-append">
                                    <button class="btn btn-primary">Search</button>
                                </span>
                            </div>
                            <div>
                                <h5>Recent Conversations</h5>
                                <ul class="chat-user-list">
                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <span class="avatar align-self-center">J</span>
                                                <div class="media-body align-self-center text-nowrap">
                                                    <div class="user-name">Jeffery Lalor</div>
                                                    <span class="designation">Team Leader</span>
                                                </div>
                                                <div class="text-nowrap align-self-center">
                                                    <div class="online-date">1 day ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media ">
                                                <span class="avatar align-self-center">B</span>
                                                <div class="media-body align-self-center text-nowrap">
                                                    <div class="user-name">Bernardo Galaviz</div>
                                                    <span class="designation">Web Developer</span>
                                                </div>
                                                <div class="align-self-center text-nowrap">
                                                    <div class="online-date">3 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <span class="avatar align-self-center">
                                                    <img src="assets/img/user.jpg" alt="John Doe">
                                                </span>
                                                <div class="media-body text-nowrap align-self-center">
                                                    <div class="user-name">John Doe</div>
                                                    <span class="designation">Web Designer</span>
                                                </div>
                                                <div class="align-self-center text-nowrap">
                                                    <div class="online-date">7 months ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="m-t-50 text-center">
                                <button class="btn btn-primary submit-btn">Create Group</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="share_files" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Share File</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="files-share-list">
                                <div class="files-cont">
                                    <div class="file-type">
                                        <span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
                                    </div>
                                    <div class="files-info">
                                        <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                        <span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Share With</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="m-t-50 text-center">
                                <button class="btn btn-primary submit-btn">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- chat23:29-->

</html>