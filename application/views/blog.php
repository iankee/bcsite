  <!-- Page title -->
        <nav id="page-title" >
        
            <h1>Blog News Page</h1>
        
        </nav>
        <!-- /Page title -->
        
        
        
        <!-- Main Content -->
        <div id="main">
        
         <?php
       
               $base = base_url();
               if(count($content))
                    {
                       
                       foreach ($content as $arr) 
                        {
                            
                              $arrasu=explode(",",$arr['content_tag']);
                     echo "     <div class=post>
            
                <div class=title>

                    <a href=".$base."blog/post/$arr[bc_content_id]><h2>$arr[bc_content_tittle]</h2></a>
                </div>
                
                <ul class=post-details>
                    <li class=author><a href=>Admin</a></li>
                    <li class=date>$arr[bc_content_date]</li>
                  
                    <li class=tag>";

                    foreach ($arrasu as $arrs) {
                      echo "<a href=".$base."blog/tag/".$arr['bc_tag_id']."> $arrs</a> .";
                    }
                    
              echo"      
                </ul>
                <div class=post-content></br>
               <p> $arr[bc_content_text] </p>
                    
                                        <a href=".$base."blog/post/$arr[bc_content_id]>Read more</a>
                </div>
            </div>  ";
                       }
                       
                    }
echo $links

               ?>
            
            <!-- News Post -->
           
            <!-- /News Post -->
            
            
            
         
            <!-- Pagination -->
            
            <!-- /Pagination -->
            
            
            
            
            
        <!-- Main Content -->
        </div>
            
            
            
          
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- Sidebar -->
        <div id="sidebar">

     
            
            <!-- Search -->
            <h5>Search</h5>
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
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot. </p>
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
            
            
            
            

            <!-- Twitter Feed -->
            <div class="widget">
                <h5>Latest Tweets</h5>
                <div class="twitter-post">
                
                    <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>
                    
                </div>
            </div>
            <!-- /Twitter Feed -->

            

        </div>
        <!-- /Sidebar -->