<x-app-layout>
<style>
    label.input-group-text {
        margin: 0 !important;
    }
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
       <div class="container" style="margin-top: 1%">
           <section class="ftco-section">
               <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                   <div class="row justify-content-center">
                       <div class="col-md-12">
                           <div class="wrapper">
                               <div class="row no-gutters">
                                   <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch ">
                                       <div class="contact-wrap w-100 p-md-5 p-4 mb-5">
                                           <h1 class="mb-4">Create A Job Post</h1>
                                               <form method="post" action="/createJob">
                                                @csrf
                                                <div class="input-group d-flex mb-3 align-items-stretch">
                                                    <label class="input-group-text text-light-emphasis shadow-sm" for="inputGroupSelect01">Category</label>
                                                    <select name="jobCategory" class="form-select shadow-sm" id="inputGroupSelect01" required>
                                                        <option selected disabled>Pick a Category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                   <div class="form-floating mb-3">
                                                       <input name="jobTitle" type="text" class="form-control shadow-sm" id="floatingTitle" placeholder="" required>
                                                       <label for="floatingTitle" class="control-label">Title</label>
                                                   </div>
                                                   <div class="form-floating mb-3">
                                                       <textarea name="jobDesciption" class="form-control shadow-sm" rows="4" id="floatingDescr" required></textarea>
                                                       <label for="floatingDescr" class="control-label">Description</label>
                                                   </div>
                                                   <div class="form-floating mb-3">
                                                       <input name="jobSalary" type="number" class="form-control shadow-sm" id="floatingSalary" placeholder="" required>
                                                       <label for="floatingSalary" class="control-label">Salary</label>
                                                   </div>
                                                   <div class="form-floating">
                                                       <input name="jobPosition"  type="text" class="form-control shadow-sm" id="floatingPosition" placeholder="" required>
                                                       <label for="floatingPosition" class="control-label">Position</label>
                                                   </div>
                                                   <div style="margin: 1em 0em 1em 0em;">
                                                       <div class="input-group d-flex mb-3">
                                                           <div class="col-3 d-flex mx-0">
                                                               <span class="input-group-text text-light-emphasis control-label">Mobile</span>
                                                               <span class="input-group-text">+389</span>
                                                           </div>
                                                           <div class="col-9">
                                                               <input name="jobPhoneNr" type="text" class="form-control d-flex shadow-sm" required>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="input-group d-flex mb-3">
                                                    <label class="input-group-text text-light-emphasis control-label" for="inputGroupSelect02">Work type</label>
                                                    <select name="jobWorkType" class="form-select" id="inputGroupSelect02" required>
                                                      <option selected value="On-site">On-site</option>
                                                      <option value="Remote">Remote</option>
                                                      <option value="Hybrid">Hybrid</option>
                                                    </select>
                                                </div>
                                                   <div class="input-group d-flex mb-3">
                                                       <label class="input-group-text text-light-emphasis control-label" for="inputGroupSelect03">City</label>
                                                       <select name="jobCity" class="form-select" id="inputGroupSelect03" required>
                                                         <option selected disabled>Pick a City</option>
                                                         <option value="Skopje">Skopje</option>
                                                         <option value="Ohrid">Ohrid</option>
                                                         <option value="Tetovo">Tetovo</option>
                                                         <option value="Gostivar">Gostivar</option>
                                                         <option value="Bitola">Bitola</option>
                                                         <option value="Prilep">Prilep</option>
                                                         <option value="Veles">Veles</option>
                                                         <option value="Debar">Debar</option>
                                                         <option value="Delcevo">Delcevo</option>
                                                         <option value="Struga">Struga</option>
                                                         <option value="Kratovo">Kratovo</option>
                                                         <option value="Kriva Palanka">Kriva Palanka</option>
                                                         <option value="Kumanovo">Kumanovo</option>
                                                         <option value="Resen">Resen</option>
                                                         <option value="Makedonski Brod">Makedonski Brod</option>
                                                         <option value="Novo Selo">Novo Selo</option>
                                                         <option value="Kavadarci">Kavadarci</option>
                                                         <option value="Mavrovo">Mavrovo</option>
                                                         <option value="Centar Zupa">Centar Zupa</option>
                                                         <option value="Vevcani">Vevcani</option>
                                                         <option value="Debarca">Debarca</option>
                                                         <option value="Saraj">Saraj</option>
                                                         <option value="Sopiste">Sopiste</option>
                                                         <option value="Studenicani">Studenicani</option>
                                                       </select>
                                                   </div>
                                                   <button class="btn text-white" style="background-color: #00B074;" type="submit">Create</button>
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
