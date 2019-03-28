<div class="footer">
    <div class="container">
        <div class="footer-full-area">
                    <div class="col-md-4">
            <div class="footer-logo">
                <img src="<?=base_url()?>assets/images/matesglobal_logo.png" alt="">
                <p>
                    Access to the worlds workforce in the palm of your hand! 
                </p>
                <div class="footer-social">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter-square"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="site-map">
                <h3>SITEMAP</h3>
                <ul class="footer-first-list">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li><a href="<?=base_url()?>/about">About</a></li>
                    <li>Employers
                        <ul class="footer-second-list">
                            <li><a href="<?=base_url()?>our_specialisations">Our Specialisation</a></li>
                            <li><a href="<?=base_url()?>submit_job_vacancy">Submit Job Vacancy</a></li>
                        </ul>
                    </li>
                    <li>Our Services
                        <ul class="footer-second-list">
                            <li><a href="<?=base_url()?>construction_skilled_workers">Construction Skilled Workers</a></li>
                            <li><a href="<?=base_url()?>civil_skilled_workers">Civil/Infrastructure skilled workers</a></li>
                            <li><a href="<?=base_url()?>building_skilled_workers">Ship and Submarine building skilled workers</a></li>
                            <li><a href="<?=base_url()?>powerplant_skilled_workers">Powerplant Skilled Workers</a></li>
                            <li><a href="<?=base_url()?>mining_skilled_workers">Mining Skilled Workers</a></li>
                        </ul>
                    </li>
                    <li>
                        Global Networkers
                        <ul class="footer-second-list">
                            <li><a href="<?=base_url()?>candidate_search">Candidate Search</a></li>
                            <li><a href="<?=base_url()?>corporate_migration">Corporate Migration</a></li>
                        </ul>
                    </li>
                    <li>
                        Global Partnership
                        <ul class="footer-second-list">
                            <li><a href="global_partnership_opportunities">Global Partnership opportunities</a></li>
                            <li><a href="<?=base_url()?>global_offices">Global Offices</a></li>
                            <li><a href="<?=base_url()?>local_offices">Local Offices</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=base_url()?>contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="footer-contact">
                <h3>CONTACT INFO</h3>
                <p>
                Level 1 Suite 11 35-39<br>
                Auburm Road Auburn<br>
                Sydney, New South Wales<br> 
                Zip: 2144<br>
                Tel: 02 87333549<br>
                Fax: 02 94236947<br>
                Email: info@asc.net.au
                </p>
            </div>
        </div>
        </div>
    </div>
</div>
 <div class="bottom-footer">
     <p style="color: #fff;line-height: 40px;text-align: center;">
         Copyright <?=date("Y");?> &copy; MatesGlobal.
     </p>
 </div>  
   

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
    
    $('.carousel').carousel({
      interval: 2000;
    });

    
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata('error') != '') { ?>
<script type="text/javascript">
    sweetAlert("Error!!",
    "<?php echo $this->session->flashdata('error');?>",
    "error");
</script>
<?php } ?>
<?php if ($this->session->flashdata('success') != '') { ?>
<script type="text/javascript">
    sweetAlert("Success!!",
    "<?php echo $this->session->flashdata('success');?>",
    "success");
</script>
<?php } ?>
</body>
</html>