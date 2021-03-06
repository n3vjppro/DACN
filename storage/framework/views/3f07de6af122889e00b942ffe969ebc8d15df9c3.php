<?php $__env->startSection('content'); ?>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="ProjectManagement" class="tip-bottom">Project Management</a> <a href="#" class="current">Insert Project</a> </div>
  <h1>Insert Project</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Information</h5>
        </div>
        <div class="widget-content nopadding">

          <form action="/AddProject" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
       
            <div class="control-group">
              <label class="control-label">Project ID:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="idProject" name="idProject" required="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Project Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="projectName" name="projectName" required="" />
              </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls" >
                <select name= "status" value="status">
                  <option value="0">New</option>
                  <option value="1">Assigned</option>
                  <option value="2">Feedback</option>
                  <option value="3">In progress</option>
                  <option value="4">Resolved</option>
                </select>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Technical Skill :</label>
              <div class="controls">

                <select name= "techSkill" value="techSkill">
                  <option value="PHP">PHP</option>
                  <option value="Java">Java</option>
                  <option value=".Net">.Net</option>
                  <option value="Ruby">Ruby</option>
                  <option value="Android">Android</option>
                  <option value="IOS">IOS</option>
                  <option value="C#">C#</option>
                  <option value="C++">C++</option>
                  <option value="Assembly">Assembly</option>
                </select>
         
              </div>

            </div>


            <div class="control-group">
              <label class="control-label">Date Of Begin :</label>
              <div class="controls">
                <input type="text"  data-date-format="yyyy-mm-dd" placeholder ="2017-02-01" class="datepicker span11" name="dateOfBegin">
                <span class="help-block">Date with Formate of  (yyyy-mm-dd)</span> </div>
            </div>

            <div class="control-group">
              <label class="control-label">Date Of End</label>
              <div class="controls">
                <input type="text"  data-date-format="yyyy-mm-dd" placeholder="2017-02-01" class="datepicker span11" name="dateOfEnd">
                <span class="help-block">Date with Formate of  (yyyy-mm-dd</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Customer :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="customer_code" name="customer_code" required="" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn-success">Submit</button>
              <button type="reset" class="btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
</div></div>
<script src="js/matrix.form_common.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>