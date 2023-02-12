<x-app-layout>
<style>
    .form-group {
     border: 1px solid #ced4da;
     padding: 5px;
     border-radius: 6px;
     width: 100%;
   }
   .form-group:focus {
     color: #212529;
       background-color: #fff;
       border-color: #86b7fe;
       outline: 0;
       box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
   }
   .form-group input {
     display: inline-block;
     width: auto;
     border: none;
   }
   .form-group input:focus {
     box-shadow: none;
   }
   </style>
       <div class="container">
           <section class="ftco-section">
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-md-12">
                           <div class="wrapper">
                               <div class="row no-gutters">
                                   <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                       <div class="contact-wrap w-100 p-md-5 p-4">
                                           <h1 class="mb-4">Create A Job Post</h1>
                                           <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                               <form action="">
                                                   <div class="form-floating mb-3">
                                                       <input name="jobTitle" type="text" class="form-control" id="floatingTitle" placeholder="">
                                                       <label for="floatingTitle">Tile</label>
                                                   </div>
                                                   <div class="form-floating mb-3">
                                                       <textarea name="jobDesciption" class="form-control" rows="4" id="floatingDescr"></textarea>
                                                       <label for="floatingDescr">Description</label>
                                                   </div>
                                                   <div class="form-floating mb-3">
                                                       <input name="jobSalary" type="number" class="form-control" id="floatingSalary" placeholder="">
                                                       <label for="floatingSalary">Salary</label>
                                                   </div>
                                                   <div class="form-floating">
                                                       <input name="jobPosition"  type="text" class="form-control" id="floatingPosition" placeholder="">
                                                       <label for="floatingPosition">Position</label>
                                                   </div>
                                                   <div style="margin: 1em 0em 1em 0em;">
                                                       <div class="input-group mb-3">
                                                           <span class="input-group-text text-light-emphasis">Mobile</span>
                                                           <span class="input-group-text">+389</span>
                                                           <input name="jobPhoneNr" type="text" class="form-control">
                                                         </div>
                                                   </div>
                                                   <div class="form-floating mb-3" style="margin-top: 5px;">
                                                       <input name="jobAddress" type="text" class="form-control" id="floatingAddress" placeholder="">
                                                       <label for="floatingAddress">Address</label>
                                                   </div>
                                                   <div class="input-group mb-3">
                                                       <label class="input-group-text text-light-emphasis" for="inputGroupSelect01">Work type</label>
                                                       <select name="jobWorkType" class="form-select" id="inputGroupSelect01">
                                                         <option selected>On-site</option>
                                                         <option value="1">Remote</option>
                                                         <option value="2">Hybrid</option>
                                                       </select>
                                                   </div>
                                                   <div class="form-floating mb-3">
                                                       <input name="jobRole" type="text" class="form-control" id="floatingRole" placeholder="">
                                                       <label for="floatingRole">Role</label>
                                                   </div>
                                                   <button class="btn text-white" style="background-color: #00B074;" type="submit">Create</button>
                                               </form>
                                           </form>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                       <div class="info-wrap w-100 p-md-5 p-4" style="background-color: #00B074;">
                                           <h2 class="text-white">JobFinderIOSS</h2>
                                           <p class="mb-4 m-0 text-white" style="font-size: 1.2em;">We're the recruitment agency that gets the job DONE!</p>
                                           <p class="mb-3 text-white" style="font-size: 1.12em;">Start your journey on finding great canditates from here.</p>

                                           <div class="dbox w-100 d-flex align-items-start">
                                       <div class="icon d-flex align-items-center justify-content-center" style="margin-right: 1.1em;">
                                           <div class="container">
                                               <span class="fa fa-map-marker"></span>
                                           </div>
                                       </div>
                                       <div class="text pl-3">
                                       <p class="text-white"><span>Address: </span> Skopje, North Macedonia</p>
                                     </div>
                                 </div>
                                   <div class="dbox w-100 d-flex align-items-center">
                                       <div class="icon d-flex align-items-center justify-content-center" style="margin-right: 1.1em;">
                                           <div class="container">
                                           <span class="fa fa-phone"></span>
                                           </div>
                                       </div>
                                       <div class="text pl-3">
                                       <p class="text-white"><span>Phone: </span>+389 77 111 222</p>
                                     </div>
                                 </div>
                                   <div class="dbox w-100 d-flex align-items-center">
                                       <div class="icon d-flex align-items-center justify-content-center" style="margin-right: 1.1em;">
                                           <div class="container">
                                           <span class="fa fa-paper-plane"></span>
                                           </div>
                                       </div>
                                       <div class="text pl-3">
                                       <p class="text-white"><span>Email: </span>jobfinderIOSS@gmail.com</p>
                                     </div>
                                 </div>
                             </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
       </div>
</x-app-layout>
