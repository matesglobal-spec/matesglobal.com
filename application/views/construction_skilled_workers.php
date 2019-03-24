
<div class="banner">
    <div class="head-text">
        <h2 style="color:#FF9800">Construction Skilled Workers</h2>
    </div>
    <div class="shade"></div>
</div>


<div class="container">
        <div class="row">
            <?php $this->load->view("side_menu");?>
            <div class="col-md-8">
                <div class="area" style="padding:30px">
                     <h2>Construction skilled workers</h2>
                  <ul class="circle-list">
                      <li>Construction project manager</li>
                      <li> Landscape architect</li>
                      <li>Electrical engineer</li>
                      <li> Draft person</li>
                      <li>Electrician (general)</li>
                      <li>Electrician (special class)</li>
                      <li> Welder (first class)</li>
                      <li>Fitter (General)</li>
                      <li>Carpenter and Joiner</li>
                      <li>Painting trades workers</li>
                      <li>Fibrous plasterer</li>
                      <li>Solid plasterer</li>
                      <li> Plumber (general)</li>
                  </ul>
    
                   <br>
                   <h4 class="subtitle">Submit Your Job</h4>
                   <form>
                          <div class="form-group">
                                 <label>Company name:*:</label>
                                <input type="text" name="company_name" class="form-control"  placeholder="Company name">
                          </div>
                          <div class="form-group">
                                 <label>Your email address*: </label>
                                <input type="email" name="email" class="form-control"  placeholder="Email address">
                          </div>
                          <div class="form-group">
                                 <label>Phone Number:*: </label>
                                <input type="text" name="phone" class="form-control"  placeholder="Phone">
                          </div>
                          <h3>Job Details:</h3>
                          <label>Type of employment:*:</label>
                          <div class="form-group">
                               <select class="form-control" name="type_of_employement">
                                      <option>Full time</option>
                                      <option>Part time</option>
                                      <option>Casual</option>
                                      <option>On call</option>
                              </select>
                          </div>

                          <div class="form-group">
                                 <label>Job title description*:</label>
                                <input type="text" name="job_title" class="form-control"  placeholder="Job title">
                          </div>

                          <div class="form-group">
                                 <label>No of employees*:</label>
                                <input type="text" name="no_of_employee" class="form-control"  placeholder="No of employee">
                          </div>

                          <div class="form-group">
                                 <label>Hours required per week*:</label>
                                <input type="text" name="hours_per_week" class="form-control"  placeholder="Hours required per week">
                          </div>
                          <div class="form-group">
                                 <label>Commencement date*:</label>
                                <input type="text" name="Commencement_date" class="form-control"  placeholder="Commencement date">
                          </div>
                          <div class="form-group">
                                 <label>Message</label>
                                 <textarea class="form-control" name="message" placeholder="Message"></textarea>
                          </div>
                          <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-lg mates-btn">
                     </form> 
                </div>
            </div>
        </div>
</div>


