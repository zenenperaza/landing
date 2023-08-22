<?php
    include('./inclusiones/head.php');
?>
        <style>
            .left .post-thumbnail-entry {
                display: flex;
                flex-direction: row-reverse;
            }
            .left .post-thumbnail-content {
                padding: 0px!important;
            }
            .team-image img {
                max-width: 100%;
                height: 235px;
                margin-bottom: 20px;
            }
            .align-self-center.text-align-last-center {
                text-align-last: center;
            }
            .post-thumbnail-list.left {
                display: flex;
                flex-direction: column;
            }
            .left img {
                margin-left: 10px;
            }
        </style>
<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <?php
            include('./inclusiones/header.php');
        ?>

        <section id="page-content" >
            <div class="container">
                <div class="container-fullscreen">
                    <div class="text-middle">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class=" m-t-40 p-t-40">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero pariatur rem tempora quisquam maxime voluptatibus velit quasi fugit odit inventore. Deleniti soluta laudantium voluptates exercitationem atque tenetur minima tempora voluptatibus.</p>
                                    
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero pariatur rem tempora quisquam maxime voluptatibus velit quasi fugit odit inventore. Deleniti soluta laudantium voluptates exercitationem atque tenetur minima tempora voluptatibus.</p>
                               
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero pariatur rem tempora quisquam maxime voluptatibus velit quasi fugit odit inventore. Deleniti soluta laudantium voluptates exercitationem atque tenetur minima tempora voluptatibus.</p>
                               
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero pariatur rem tempora quisquam maxime voluptatibus velit quasi fugit odit inventore. Deleniti soluta laudantium voluptates exercitationem atque tenetur minima tempora voluptatibus.</p>
                               
                                </div>
                            </div>
                            <div class="col-lg-5 offset-1">

                                <div id="book" class="card text-dark">
                                    <div class="card-body">
                                        <form method="post" action="#">
                                            <h3 class="m-b-20">FORMULARIO PARA TU WEB</h3>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>NAME/SURNAME</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>E-MAIL</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>FROMULARIO</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>PARA FORM</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <div class="form-group">
                                                        <label>Date &amp; Time</label>
            
                                                            <div id="datetimepicker1" class="input-group date">
                                                                <input type="text" class="form-control">
                                                                <span class="input-group-text">
                                                                    <span class="fa fa-calendar"></span>
                                                                </span>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <div class="form-group">
                                                        <label>Persons</label>
                                                        <input class="form-control" type="number" min="1" max="10" value="" name="children"
                                                            placeholder="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <button class="btn btn-dark m-t-20">comprar ahora</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-content" >
            <div class="container">
                <div class="row">
                    <dvi class="col-2"></dvi>
                    <div class="col-lg-6 ">                       
                        <p class="">This is a simple hero unit, a simple call-to-action-style component for calling extra attention to featured content.</p>
                    </div>
                    <div class="col-lg-4 align-self-center text-align-last-center"> <a class="btn btn-primary ">Comprar!</a> </div>
                </div>
            </div>
        </section>

        <section id="page-content" >


            <div class="container">
                <div class="row justify-content-center ">
                    
                            <!-- Sidebar-->
                            <div class=" col-lg-4">
                                <!--Tabs with Posts-->
                                <div class="widget ">
                                    <div class="post-thumbnail-list left">
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/5.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">A true story, that never been told!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/6.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Beautiful nature, and rare feathers!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/7.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Lorem ipsum dolor sit amet</a>
                                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End: Tabs with Posts-->
                                
                            </div>
                            <!-- end: Sidebar-->                    <!-- Sidebar-->
                            <div class=" col-lg-4">
                            <div class="team-image">
                                <img src="images/team/9.jpg">
                            </div>
                            
                            </div>
                            <!-- end: Sidebar-->                    <!-- Sidebar-->
                            <div class=" col-lg-4">
                                <!--Tabs with Posts-->
                                <div class="widget ">
                                    <div class="post-thumbnail-list">
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/5.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">A true story, that never been told!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/6.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Beautiful nature, and rare feathers!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/7.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Lorem ipsum dolor sit amet</a>
                                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End: Tabs with Posts-->
                                
                                <!--end: widget newsletter-->
                            </div>
                            <!-- end: Sidebar-->
                </div>
            </div>

        </section>



<?php
    include('./inclusiones/footer.php')
?>