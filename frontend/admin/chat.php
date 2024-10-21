<?php include 'include/header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Chat</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active"> Chat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
    <div class="row g-0">
        <div class="col-xxl-3 col-xl-4 col-md-5 box-col-5">
            <div class="left-sidebar-wrapper card">
                <div class="left-sidebar-chat">
                <div class="input-group"><span class="input-group-text"><i class="search-icon text-gray" data-feather="search"></i></span>
                    <input class="form-control" type="text" placeholder="Search here..">
                </div>
                </div>
                <div class="advance-options">
                <ul class="nav border-tab" id="chat-options-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active f-w-600" id="chats-tab" data-bs-toggle="tab" href="#chats" role="tab" aria-controls="chats" aria-selected="true">Chats</a></li>
                    <li class="nav-item"><a class="nav-link f-w-600" id="group-tab" data-bs-toggle="tab" href="#group-chats" role="tab" aria-controls="group-chats" aria-selected="true">Group Chats</a></li>
                </ul>
                <div class="tab-content" id="chat-options-tabContent">
                    <div class="tab-pane fade show active" id="chats" role="tabpanel" aria-labelledby="chats-tab">
                        <div class="common-space">
                            <p>Recent chats</p>
                            <div class="header-top"><a class="btn badge-light-primary f-w-500" href="#!"><i class="fa fa-plus"></i></a></div>
                        </div>
                        <ul class="chats-user">
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/avtar/3.jpg" alt="user">
                                    <div class="status bg-success"></div>
                                </div>
                                <div>
                                    <span>Cameron Williamson</span>
                                    <p>Hey, How are you?</p>
                                </div>
                            </div>
                            <div>
                                <p>2 min </p>
                                <div class="badge badge-light-success">15</div>
                            </div>
                            </li>
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/avtar/11.jpg" alt="user">
                                    <div class="status bg-success"></div>
                                </div>
                                <div>
                                    <span>Esther Howard</span>
                                    <p>Thanks for reply</p>
                                </div>
                            </div>
                            <div>
                                <p>7:30 PM</p>
                            </div>
                            </li>
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/avtar/7.jpg" alt="user">
                                    <div class="status bg-success"></div>
                                </div>
                                <div>
                                    <span>Jane Cooper</span>
                                    <p>Hey, What's up?</p>
                                </div>
                            </div>
                            <div>
                                <p>1:10 PM</p>
                            </div>
                            </li>
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/avtar/16.jpg" alt="user">
                                    <div class="status bg-success"></div>
                                </div>
                                <div>
                                    <span>Ronald Richards</span>
                                    <p>I'm ready</p>
                                </div>
                            </div>
                            <div>
                                <p>13:10 PM</p>
                            </div>
                            </li>
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/avtar/4.jpg" alt="user">
                                    <div class="status bg-warning"></div>
                                </div>
                                <div>
                                    <span>Darlene Robertson</span>
                                    <p>Hey, How are you?</p>
                                </div>
                            </div>
                            <div>
                                <p>1:30 PM</p>
                            </div>
                            </li>
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/blog/comment.jpg" alt="user">
                                    <div class="status bg-warning"></div>
                                </div>
                                <div>
                                    <span>Darrell Steward </span>
                                    <p>What's going on?</p>
                                </div>
                            </div>
                            <div>
                                <p>2:10 PM</p>
                            </div>
                            </li>
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/blog/4.jpg" alt="user">
                                    <div class="status bg-success"></div>
                                </div>
                                <div>
                                    <span>Theresa Webb</span>
                                    <p>What's up?</p>
                                </div>
                            </div>
                            <div>
                                <p>1:50 AM</p>
                            </div>
                            </li>
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/blog/12.png" alt="user">
                                    <div class="status bg-warning"></div>
                                </div>
                                <div>
                                    <span>Floyd Miles</span>
                                    <p>Are you sure?</p>
                                </div>
                            </div>
                            <div>
                                <p>5:14 PM</p>
                            </div>
                            </li>
                            <li class="common-space">
                            <div class="chat-time">
                                <div class="active-profile">
                                    <img class="img-fluid rounded-circle" src="../assets/images/blog/9.jpg" alt="user">
                                    <div class="status bg-warning"></div>
                                </div>
                                <div>
                                    <span>Annette Black</span>
                                    <p>Thanks</p>
                                </div>
                            </div>
                            <div>
                                <p>1:50 PM</p>
                            </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade show" id="group-chats" role="tabpanel" aria-labelledby="group-tab">
                        <div class="common-space">
                            <p>Recent chats</p>
                            <div class="header-top"><a class="btn badge-light-primary f-w-500" href="#!"><i class="fa fa-plus"></i></a></div>
                        </div>
                        <ul class="chats-user">
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/blog/9.jpg" alt="user">
                                        <div class="status bg-warning"></div>
                                    </div>
                                    <div>
                                        <span>Annette Black</span>
                                        <p>Thanks</p>
                                    </div>
                                </div>
                                <div>
                                    <p>1:50 PM</p>
                                </div>
                            </li>
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/blog/12.png" alt="user">
                                        <div class="status bg-warning"></div>
                                    </div>
                                    <div>
                                        <span>Floyd Miles</span>
                                        <p>Are you sure?</p>
                                    </div>
                                </div>
                                <div>
                                    <p>5:14 PM</p>
                                </div>
                            </li>
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/blog/4.jpg" alt="user">
                                        <div class="status bg-success"></div>
                                    </div>
                                    <div>
                                        <span>Theresa Webb</span>
                                        <p>What's up?</p>
                                    </div>
                                </div>
                                <div>
                                    <p>1:50 AM</p>
                                </div>
                            </li>
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/avtar/3.jpg" alt="user">
                                        <div class="status bg-success"></div>
                                    </div>
                                    <div>
                                        <span>Cameron Williamson</span>
                                        <p>Hey, How are you?</p>
                                    </div>
                                </div>
                                <div>
                                    <p>2 min </p>
                                    <div class="badge badge-light-success">15</div>
                                </div>
                            </li>
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/avtar/11.jpg" alt="user">
                                        <div class="status bg-success"></div>
                                    </div>
                                    <div>
                                        <span>Esther Howard</span>
                                        <p>Thanks for reply</p>
                                    </div>
                                </div>
                                <div>
                                    <p>7:30 PM</p>
                                </div>
                            </li>
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/avtar/7.jpg" alt="user">
                                        <div class="status bg-success"></div>
                                    </div>
                                    <div>
                                        <span>Jane Cooper</span>
                                        <p>Hey, What's up?</p>
                                    </div>
                                </div>
                                <div>
                                    <p>1:10 PM</p>
                                </div>
                            </li>
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/avtar/16.jpg" alt="user">
                                        <div class="status bg-success"></div>
                                    </div>
                                    <div>
                                        <span>Ronald Richards</span>
                                        <p>I'm ready</p>
                                    </div>
                                </div>
                                <div>
                                    <p>13:10 PM</p>
                                </div>
                            </li>
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/avtar/4.jpg" alt="user">
                                        <div class="status bg-warning"></div>
                                    </div>
                                    <div>
                                        <span>Darlene Robertson</span>
                                        <p>Hey, How are you?</p>
                                    </div>
                                </div>
                                <div>
                                    <p>1:30 PM</p>
                                </div>
                            </li>
                            <li class="common-space">
                                <div class="chat-time">
                                    <div class="active-profile">
                                        <img class="img-fluid rounded-circle" src="../assets/images/blog/comment.jpg" alt="user">
                                        <div class="status bg-warning"></div>
                                    </div>
                                    <div>
                                        <span>Darrell Steward </span>
                                        <p>What's going on?</p>
                                    </div>
                                </div>
                                <div>
                                    <p>2:10 PM</p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-xl-8 col-md-7 box-col-7">
            <div class="card right-sidebar-chat">
                <div class="right-sidebar-title">
                <div class="common-space">
                    <div class="chat-time">
                        <div class="active-profile">
                            <img class="img-fluid rounded-circle" src="../assets/images/blog/comment.jpg" alt="user">
                            <div class="status bg-success"></div>
                        </div>
                        <div>
                            <span class="f-w-500">Darrell Steward</span>
                            <p>Online</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="contact-edit chat-alert"><i class="icon-info-alt"></i></div>
                        <div class="contact-edit chat-alert">
                            <svg class="dropdown-toggle" role="menu" data-bs-toggle="dropdown" aria-expanded="false">
                            <use href="../assets/svg/icon-sprite.svg#menubar"></use>
                            </svg>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#!">View details</a><a class="dropdown-item" href="#!">
                            Send messages</a><a class="dropdown-item" href="#!">
                            Add to favorites</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="right-sidebar-Chats">
                <div class="msger">
                    <div class="msger-chat">
                        <div class="msg left-msg">
                            <div class="msg-img"></div>
                            <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Theresa Webb</div>
                                <div class="msg-info-time">01:14 PM</div>
                            </div>
                            <div class="msg-text">Hey, I'm looking to redesign my website. Can you help me? &#x1F604;</div>
                            </div>
                        </div>
                        <div class="msg right-msg">
                            <div class="msg-img"></div>
                            <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Darrell Steward</div>
                                <div class="msg-info-time">12:14 PM</div>
                            </div>
                            <div class="msg-text"> Absolutely! I'd be happy to assist you.</div>
                            </div>
                        </div>
                        <div class="msg right-msg">
                            <div class="msg-img"></div>
                            <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Darrell Steward</div>
                                <div class="msg-info-time">12:14 PM</div>
                            </div>
                            <div class="msg-text">What kind of design aesthetic are you aiming for?</div>
                            </div>
                        </div>
                        <div class="msg left-msg">
                            <div class="msg-img"></div>
                            <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Theresa Webb</div>
                                <div class="msg-info-time">01:14 PM</div>
                            </div>
                            <div class="msg-text">I want a clean and modern look with a focus on user experience.</div>
                            </div>
                        </div>
                        <div class="msg right-msg">
                            <div class="msg-img"></div>
                            <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Darrell Steward</div>
                                <div class="msg-info-time">12:14 PM</div>
                            </div>
                            <div class="msg-text">Great!  Do you have any specific color schemes in mind?</div>
                            </div>
                        </div>
                        <div class="msg left-msg">
                            <div class="msg-img"></div>
                            <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Theresa Webb</div>
                                <div class="msg-info-time">01:14 PM</div>
                            </div>
                            <div class="msg-text">I'm thinking of using a combination of blues and grays.</div>
                            </div>
                        </div>
                        <div class="msg right-msg">
                            <div class="msg-img"></div>
                            <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Darrell Steward</div>
                                <div class="msg-info-time">12:14 PM</div>
                            </div>
                            <div class="msg-text">Excellent choice! Those colors can definitely create a professional.</div>
                            </div>
                        </div>
                    </div>
                    <form class="msger-inputarea">
                        <div class="dropdown-form dropdown-toggle" role="main" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-plus"></i>
                            <div class="chat-icon dropdown-menu dropdown-menu-start">
                            <div class="dropdown-item mb-2">
                                <svg>
                                    <use href="../assets/svg/icon-sprite.svg#camera"></use>
                                </svg>
                            </div>
                            <div class="dropdown-item">
                                <svg>
                                    <use href="../assets/svg/icon-sprite.svg#attchment"></use>
                                </svg>
                            </div>
                            </div>
                        </div>
                        <input class="msger-input two uk-textarea" type="text" placeholder="Type Message here..">
                        <div class="open-emoji">
                            <div class="second-btn uk-button"></div>
                        </div>
                        <button class="msger-send-btn" type="submit"><i class="fa fa-location-arrow"></i></button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<?php include 'include/footer.php'; ?>