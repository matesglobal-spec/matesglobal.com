
<div class="banner">
    <div class="head-text">
        <h2 style="color:#FF9800">Job Search Advisor</h2>
    </div>
    <div class="shade"></div>
</div>


<div class="container">
        <div class="row">
            <?php $this->load->view("side_menu");?>
            <div class="col-md-8">
                <div class="area" style="padding:30px">
             
        
               <p>
                  Don’t think you are alone in the search of your dream career job. You can take advantage of our expert team and educationalist who offer you free resume making tips and advice on interview, we make you prepare for all types of jobs and careers from professional to non-professional. All you need to do is post your resume and our customer support service team will get back to you with all the advices you are looking for the right job
               </p>

                 <h3>
                    FREE CV REVIEW
                 </h3>
                 <div class="line"></div>
                 <p>
                     Tailoring Resume to the suitable employer is quiet time consuming and at the same time one has to have the experience of making the right Resume for different companies. Less than 2 minutes will be spent by the HR or the employer in reviewing any resume and it should speak out bundles of your expertise and talent, to impress at the first instance is a big task in itself. We offer our services with Free CV Review instantly. All you have to do is tell us your ambitions, career goals, skills you have and the rest we will do on your behalf. Please fill in the details or alternatively upload your current CV.
                 </p>
              
              <p><b>FREE CV REVIEW</b></p>
              
              <div class="cv-review-image">
                  <img src="<?=base_url()?>assets/images/1.png" alt=""> 
              </div>
              
              <h3>Job Search Advisor</h3>
              <div class="line"></div>
              
              <form method="post" action="" enctype="multipart/form-data" >
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
                    
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="need_job_advice" value="1"> Need Job Advice? 
                        </label>
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


