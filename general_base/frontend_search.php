<?php require '../inc/config.php'; require '../inc/frontend_config.php'; ?>
<?php require '../inc/views/template_head_start.php'; ?>
<?php require '../inc/views/template_head_end.php'; ?>
<?php require '../inc/views/base_header_dashboard_frontend.php'; ?>

<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("ummah") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>


<!-- Hero Content -->
<div class="bg-primary-dark">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Search</h1>
            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Search by name,type or anthing related to organization</h2>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Hero Content -->

<!-- Search Section -->
<div class="bg-white">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form action="frontend_search.php" method="GET">
                    <div class="input-group input-group-lg">
                        <input class="form-control" type="text" placeholder="Search everything.." name="query">
                        <div class="input-group-btn">
                            <button name="btn-search" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Search Section -->

<style>
    .nav-tabs>li,
    .nav-pills>li {
        float: none;
        display: inline-block;
        *display: inline;
        /* for IE7*/
        *zoom: 1;
        /* for IE7*/
    }
</style>
<!-- Page Content -->

 <?php

    if(isset($_GET['btn-search']))
		{      
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 1;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM org_profile
            WHERE (`org_fullname` LIKE '%".$query."%') OR
            (`org_username` LIKE '%".$query."%')  
            ") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
   ?>
<div class="content">
    <div class="block">
        <ul class="nav nav-tabs" data-toggle="tabs" style=" text-align:center;">
            <li class="active">
                <a href="#search-organization">Organization</a>
            </li>
            <li>
                <a href="#search-projects">Projects</a>
            </li>

        </ul>
        <div class="block-content tab-content bg-dark">
            <!-- organization -->
            <div class="tab-pane fade fade-up in active" id="search-organization">
                <div class="border-b push-30">
                    <h2 class="push-10">6 <span class="h5 font-w400 text-muted">Organization Found</span></h2>
                </div>
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th><i class=" text-gray"></i> Organization Name</th>
                            <th class="text-center hidden-xs" style="width: 15%;"><i class="fa fa-heart text-grey"></i> Love by</th>

                            <th class="text-right" style="width: 15%; min-width: 110px;"><i class="fa fa-trophy text-gray"></i> Donation received</th>
                        </tr>
                    </thead>
                    <?php
                         if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                $orgid = $results["org_proid"];
                $orgname = $results["org_fullname"];
                $orgnick = $results["org_username"];
                $orgdesc = $results["org_description"];
             
               // echo '<tr><td><a href="/uf/uf/profiler/profiles.php?first='.$firstname.'">'.$firstname.'</a><br /></td></tr>';
                
                
               // echo "<p><h3>".$results['userName']."</h3>".$results['userEmail']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            
             
 ?>
                    <tbody>
                        <tr>
                            <td>
                                <h3 class="h5 font-w600 push-10">
                                   <?php echo '<a class="link-effect" href="/uf/uf/org_base/base_pages_profile_org.php?Uasd4453279M896bhNJndasdsM8222najGyhkbnA0092jNMqweuiHqweqweashhdj='.$orgid.'">'.$orgname.'</a>'; ?>
                                    
                                </h3>
                                <div class="push-10">
                                    <?php // check balik verification, jumlah follower dan jumlah dana yang dikumpulkan ?>
                                    <span class="label label-success"><i class="fa fa-check"></i> Verified</span>
                                </div>
                                <div class="font-s13 text-muted hidden-xs">
                                    <?php echo $orgdesc ?>
                                </div>
                            </td>
                            <td class="h3 text-center hidden-xs">15</td>

                            <td class="h3 text-primary text-right">$ 7,850</td>
                        </tr>
                                <?php }
       }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
        }
?>
                    </tbody>
                </table>
                
                <!-- pagenition 
                <div class="border-t">
                    <ul class="pagination">
                        <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><span>...</span></li>
                        <li><a href="javascript:void(0)">10</a></li>
                        <li><a href="javascript:void(0)">Next</a></li>
                    </ul>
                </div>
            </div>
            <!-- END Projects 

            <!-- Projects
            <div class="tab-pane fade fade-up in active" id="search-projects">
                <div class="border-b push-30">
                    <h2 class="push-10">1 <span class="h5 font-w400 text-muted">Project Found</span></h2>
                </div>
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th><i class="fa fa-suitcase text-gray"></i> Project Name</th>
                            <th class="text-center hidden-xs" style="width: 15%;"><i class="fa fa-user text-gray"></i> Participants</th>
                            <th class="text-center hidden-xs hidden-sm" style="width: 15%;"><i class="fa fa-bar-chart text-gray"></i> Received Funds</th>
                            <th class="text-right" style="width: 15%; min-width: 110px;"><i class="fa fa-trophy text-gray"></i> Funds req</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3 class="h5 font-w600 push-10">
                                    <a class="link-effect" href="javascript:void(0)">Sports Day Project</a>
                                </h3>
                                <div class="push-10">
                                    <span class="label label-success"><i class="fa fa-check"></i> Completed</span>
                                </div>
                                <div class="font-s13 text-muted hidden-xs">
                                  <?php //$one->get_text('small'); ?>
                                </div>
                            </td>
                            <td class="h3 text-center hidden-xs">15</td>
                            <td class="h3 text-center text-warning hidden-xs hidden-sm">$520</td>
                            <td class="h3 text-primary text-right">$ 7,850</td>
                        </tr>

                    </tbody>
                </table>
                <div class="border-t">
                    <ul class="pagination">
                        <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><span>...</span></li>
                        <li><a href="javascript:void(0)">10</a></li>
                        <li><a href="javascript:void(0)">Next</a></li>
                    </ul>
                </div>
            </div>
            <!-- END Projects -->

           <!-- Grid Content -->
<section class="content content-boxed">
    <!-- Section Content -->
    <div class="push-50-t push-50">
        <div class="row">
            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(21, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">10 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on July 16, 2015
                        </div>
                        <h4 class="push-10">Top 10 Destinations</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(22, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">15 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on July 13, 2015
                        </div>
                        <h4 class="push-10">Follow Your Dreams</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(23, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">12 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on July 6, 2015
                        </div>
                        <h4 class="push-10">Travel &amp; Work</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->
        </div>
        <div class="row">
            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(24, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">9 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on June 21, 2015
                        </div>
                        <h4 class="push-10">Sleep Better</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(4, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">5 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on June 16, 2015
                        </div>
                        <h4 class="push-10">Black &amp; White</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(6, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">3 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on June 1, 2015
                        </div>
                        <h4 class="push-10">Exploring the Alps</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->
        </div>
        <div class="row">
            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(7, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">9 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on May 19, 2015
                        </div>
                        <h4 class="push-10">Explore the World</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(8, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">14 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on May 10, 2015
                        </div>
                        <h4 class="push-10">Meet Paris</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="col-md-4 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-link-hover2" href="frontend_blog_story.php">
                    <?php $one->get_photo(9, false, 'img-responsive'); ?>
                    <div class="block-content">
                        <div class="font-s12 push">
                            <em class="pull-right">20 min</em>
                            <span class="text-primary"><?php $one->get_name(); ?></span> on May 2, 2015
                        </div>
                        <h4 class="push-10">The Secret Treasure</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                    </div>
                </a>
            </div>
            <!-- END Story -->
        </div>

        <!-- Pagination -->
        <nav class="text-center">
            <ul class="pagination">
                <li class="active">
                    <a href="javascript:void(0)">1</a>
                </li>
                <li>
                    <a href="javascript:void(0)">2</a>
                </li>
                <li>
                    <a href="javascript:void(0)">3</a>
                </li>
                <li>
                    <a href="javascript:void(0)">4</a>
                </li>
                <li>
                    <a href="javascript:void(0)">5</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
                </li>
            </ul>
        </nav>
        <!-- END Pagination -->
    </div>
    <!-- END Section Content -->
</section>
<!-- END Grid Content -->
        </div>
            
    </div>
</div>
<!-- END Page Content -->

<?php require '../inc/views/frontend_footer.php'; ?>
<?php require '../inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    jQuery(function() {
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>

<?php require '../inc/views/template_footer_end.php'; ?>