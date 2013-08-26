<nav id="page-title" >
        
            <h1>Our news page</h1>
        
        </nav>
        <!-- /Page title -->
        
        
        
        <!-- Main Content -->
        <div id="main">
        
        
        
            <!-- News Post -->
            <div class="post">
            <div class=title>
                   <h2><?php echo $content['0']['bc_content_tittle'];?></h2>
                </div>
                
                <ul class=post-details>
                    <li class=author><a href=>Admin</a></li>
                    <li class=date>,<?php echo $content['0']['bc_content_date']; ?></li>
                    <li class=tag><a href=>Design</a> · <a href=>Development</a> · <a href=>Web</a></li>
                    
                </ul>
                <div class=post-content>
                  <p> <br> <?php echo $content['0']['bc_content_text']; ?></p>
                </div>
                
            </div>
            <!-- /News Post -->
            
            
            
            
            <!-- Comments -->
            <div id="comments">

                <h5>Comments</h5>

                <ol class="comments-list">
                    <li class="comment">
                        <div>
                            <img src="images/user-icon.png" alt="" class="avatar">
                            <div class="comment-meta">
                                <h6 class="author"><a href="#">John Doe</a> <span class="date">November 13, 2012</span> <a href="#" class="reply">Reply</a></h6>
                                
                            </div>
                            <div class="comment-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum, nisi id vulputate ullamcorper, tellus libero venenatis  elsesver nequeasadsa in egestas enim lorem ut felis. Suspendisse potenti. Donec nec sapien mauris, vitae aliquam quam. Donec aliquam tortor felis. Sed ac sapien mauris, non aliquet metus.</p>
                            </div>
                        </div>

                        <ul class="children">
                            <li class="comment">
                                <div>
                                    <img src="images/user-icon.png" alt="" class="avatar">
                                    <div class="comment-meta">
                                        <h6 class="author"><a href="#">John Doe</a> <span class="date">November 13, 2012</span> <a href="#" class="reply">Reply</a></h6>
                                        
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum, nisi id vulputate ullamcorper, tellus libero venenatis  elsesver nequeasadsa in egestas enim lorem ut felis. Suspendisse potenti. Donec nec sapien mauris, vitae aliquam quam. Donec aliquam tortor felis. Sed ac sapien mauris, non aliquet metus.</p>
                                    </div>
                                </div>

                                

                            </li>
                        </ul>
                    </li>
                    <li class="comment">
                        <div>
                            <img src="images/user-icon.png" alt="" class="avatar">
                            <div class="comment-meta">
                                <h6 class="author"><a href="#">John Doe</a> <span class="date">November 13, 2012</span> <a href="#" class="reply">Reply</a></h6>                               
                                
                            </div>
                            <div class="comment-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum, nisi id vulputate ullamcorper, tellus libero venenatis  elsesver nequeasadsa in egestas enim lorem ut felis. Suspendisse potenti. Donec nec sapien mauris, vitae aliquam quam. Donec aliquam tortor felis. Sed ac sapien mauris, non aliquet metus.</p>
                            </div>
                        </div>
                    </li>
                </ol>
                
                <!-- Comments Form -->
                <h5>Add a Comment</h5>

                <form method="post" id="comments-form">
                    <input type="text" onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" value="Name" >
                    <input type="text" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" >
                    <input type="text" onfocus="if(this.value == 'Website') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Website'; }" value="Website" class="last" >
                    <textarea cols="88" rows="12" onfocus="if(this.value == 'Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Message'; }" value="Message">Message</textarea>
                </form>
                <a href="#" class="btn-image">Submit </a>
                <!-- /Comments Form -->

            </div>
            <!-- /Comments -->
            
            
            
            
            
        <!-- Main Content -->
        </div>
            
            
            
          
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- Sidebar -->
        <div id="sidebar">
        
            
            <!-- Search -->
             <h5>Search</h5>
             <?php $base = base_url(); ?>
            <form action="<?php echo "$base"; ?>blog/cari" method="POST">
            <input type="text" id="post-s" onfocus="if(this.value == 'Search in blog') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search in blog'; }" value="Search in blog" class="search" name="carisaya" >
            <input type="submit" value="cari" style="display: none" />
            </form>
            <!-- /Search -->
            
            
            <!-- Blog Categories -->
            <div class="widget">
                <h5>Blog Categories</h5>
                <ul class="categories">
                    <?php if(count($tag))
                    {
                       
                       foreach ($tag as $arrs) 
                        {
                            echo "<li><a href=".$base."blog/tag/$arrs[bc_tag_id]>$arrs[bc_tag_name]</a></li>";
                }
            }
                    ?>
                     </ul>
            </div>
            <!-- /Blog Categories -->
            
            
            

            <!-- Text Widget -->
            <div class="widget">
                <h5>Text Widget</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui orci, dapibus non luctus, ultrices vel nunc. Donec lacinia mattis erat amet.</p>
            </div>
            <!-- /Text Widget -->
            
            

            

            <!-- Accordion -->
            <div class="widget">
                <h5>Accordion widget</h5>
                
                <section class="ac-container">
                <div>
                    <input id="ac-1" name="accordion-1" type="radio" checked />
                    <label for="ac-1">About us</label>
                    <article class="ac-height">
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot.</p>
                    </article>
                </div>
                <div>
                    <input id="ac-2" name="accordion-1" type="radio" />
                    <label for="ac-2">How we work</label>
                    <article class="ac-height">
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot.</p>
                    </article>
                </div>
                <div>
                    <input id="ac-3" name="accordion-1" type="radio" />
                    <label for="ac-3">References</label>
                    <article class="ac-height">
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot.</p>
                    </article>
                </div>
                <div>
                    <input id="ac-4" name="accordion-1" type="radio" />
                    <label for="ac-4">Contact us</label>
                    <article class="ac-height">
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot.</p>
                    </article>
                </div>
            </section>
                
                
            </div>
            <!-- Accordion -->
            
            
            
            

            <!-- Twitter Post -->
            <div class="widget">
                <h5>Latest Tweets</h5>
                <div class="twitter-post">
                
                    <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>
                    
                </div>
            </div>
            <!-- /Twitter Post -->

            

        </div>
        <!-- /Sidebar -->
            
            
            
        
        
        
        
        
        
        
        
        
        
        
    
    </div>
    <!-- /Content -->

        
        

    
        
        
</div>