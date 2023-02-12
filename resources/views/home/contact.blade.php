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
       <div class="container justify-content-center bg-white" style="height: 100%;">
           <section class="ftco-section d-flex justify-content-center" style="height: 100%;">
               <div class="container" style="margin-top: 3em; margin-bottom: 2em;">        
                   <div class="row d-flex justify-content-center">
                       <div class="col-md-12">
                           <div class="wrapper">
                               <div class="row flex-row-reverse no-gutters">
                                   <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                       <div class="contact-wrap w-100 p-md-5 p-4">
                                           <h1 class="mb-4">Create A Job Post</h1>
                                           <form method="POST" id="contactForm" name="contactForm" class="contactForm" action="">
                                                   <div class="form-floating mb-3">
                                                       <input name="contactName" type="text" class="form-control" id="contactNameid" placeholder="">
                                                       <label for="contactNameid">Name</label>
                                                   </div>
                                                   <div class="form-floating" style="margin-bottom: 1.1em;">
                                                       <input name="contactEmail"  type="email" class="form-control" id="contactEmailid" placeholder="">
                                                       <label for="contactEmailid">Email</label>
                                                   </div>
                                                   <div class="form-floating mb-3">
                                                       <textarea name="contactFeedback" class="form-control" rows="4" id="contactFeedbackid"></textarea>
                                                       <label for="contactFeedbackid">Your feedback</label>
                                                   </div>
                                                   <button class="btn text-white" style="background-color: #00B074;" type="submit">Create</button>
                                           </form>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                       <div class="info-wrap w-100 p-md-5 p-4" style="background-color: #00B074;">
                                           <h2 class="text-white">JobFinderIOSS</h2>
                                           <h2 class="text-white">Contact us</h2>
                                           <p class="mb-4 m-0 text-white" style="font-size: 1.2em;">If you have any questions or to say something please feel free to contact us. <br> We appreciate your thoughts.</p>
                                           <div class="d-flex justify-content-center">
                                               <img src="{{url('images/email.png')}}" alt="email logo" style="max-height: 10em">
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