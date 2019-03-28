
<div class="banner">
    <div class="head-text">
        <h2 style="color:#FF9800">Submit your resume - Register</h2>
    </div>
    <div class="shade"></div>
</div>


<div class="container">
        <div class="row">
<!--            <?php $this->load->view("side_menu");?>-->
            <div class="">
                <div class="area" style="padding:30px">
             
        
               <p>
                   You can register your details and create job alerts that match your areas of interest. Improve your scope of employment better with our expert resume makers and benefit with the tips and solutions to enhance your ability to market yourself in job market.
               </p>
                <p><b>Register now for free and find your perfect job!</b></p>
                 <h3>
                    Submit Resume
                 </h3>
                 <div class="line"></div>
              
              <form method="post" action="<?=base_url()?>home/" enctype="multipart/form-data" >
                  <div class="form-group">
                        <label>Your Name*:</label>
                        <input type="text" name="name" class="form-control"  placeholder="Your name">
                  </div>
                  
                    <div class="form-group">
                        <label>Your Email Address*: </label>
                        <input type="email" name="email" class="form-control"  placeholder="Email address">
                    </div>
                    
                    <div class="form-group">
                        <label>Phone Number*: </label>
                        <input type="number" name="phone" class="form-control"  placeholder="Phone">
                    </div>
                    
                    <div class="form-group">
                        <label>Job Title*: </label>
                        <input type="text" name="title" class="form-control"  placeholder="Job title">
                    </div>
                    
                  <div class="form-group">
                        <label>Resume*:</label>
                        <input type="file" name="resume" class="form-control"  placeholder="Job title">
                    </div>
                    
                    <div class="form-group">
                        <label>Cover Letter: </label>
                        <textarea class="form-control" name="cover_letter" placeholder="" rows="6">
                            
                        </textarea>
                    </div>
                    
                    <input type="submit" name="submit" value="Submit Resume" class="btn btn-primary btn-lg mates-btn">
              </form>
                </div>
            </div>
        </div>
</div>


