<?php include('metatags.php');?>

<?php include('header.php');?>
<?php include('pageheader.php'); ?>




<style>
.accordion {
  background-color: #710000;
  color: #FFF;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #002147;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
<section class="w3l-content-with-photo-4">
    <div id="content-with-photo4-block" class="pt-5"> 
        <div class="container py-md-5">
            <div class="cwp4-two row">

<h2>Important Weblinks</h2>

<button class="accordion">N C T E</button>
<div class="panel">
  
  <h3><a href="http://www.ncte.gov.in" target="_blank">Click Here</a></h3>
						
</div>

<button class="accordion">D S E R T</button>
<div class="panel">
 <h3> <a href="http://www.dsert.kar.nic.in"target="_blank">Click Here</a></h3>
</div>

<button class="accordion">K U D</button>
<div class="panel">
 <h3> <a href="http://www.kud.ac.in "target="_blank">Click Here</a></h3>
</div>

<button class="accordion">EDU SCHOOL</button>
<div class="panel">
 <h3> <a href="http://www.schooleducation.kar.nic.in/cac/cell.html "target="_blank">Click Here</a></h3>
</div>

<button class="accordion">U G C</button>
<div class="panel">
  <h3><a href="http://www.ugc.ac.in "target="_blank">Click Here</a></h3>
</div>

<button class="accordion">N A A C</button>
<div class="panel">
<h3>  <a href="http://www.naac.gov.in"target="_blank">Click Here</a></h3>
</div>

<button class="accordion">D C E</button>
<div class="panel">
 <h3> <a href="http://www.dce.kar.nic.in "target="_blank">Click Here</a></h3>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>




				
				
				 
               
            </div>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->

<!-- grids block 5 -->
<?php include('footer.php');?>

